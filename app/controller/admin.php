<?php
class Controller_Admin extends Controller
{
	//初始化
	public function init(){
		$this->setLayout("backlayout");
		if ($this->action != 'login' && !$this->isPost() && !isset($_SESSION['admin'])){
			Common::formRequest("/admin/login");
		}
	}
	
	//主frameset
	public function Action_index(){
		$this->disableLayout();
	}
	public function Action_top(){
		$this->disableLayout();
	}
	public function Action_menu(){
		$this->disableLayout();
	}
	public function Action_drag(){
		$this->disableLayout();
		exit("************");
	}
	public function Action_main(){
		$this->disableLayout();
		$info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
            );
        $this->view->info= $info;
	}
	public function Action_footer(){
		$this->disableLayout();
	}
	
	//具体后台应用
	public function Action_login(){
		if (isset($_REQUEST['account'])){
			//验证码
			if ($this->session("verify") != $_REQUEST['verify'] ){
				return false ;
			}
			
			$admin = new Model_Admin() ;
			$data  = $this->getPost();
			$where = "nickname = '".$data['account']."' and password= '".$data['password']."' ";
			$res = $admin->fetchRow($where);
			if (!empty($res)){
				//登陆成功
				$_SESSION['admin'] = $res ;
				Common::formRequest("/admin/index",array("msg"=>base64_encode("后台登陆成功")));
			}
		}
	}
	public function Action_logout(){
		if (isset($_SESSION["admin"])){
			unset($_SESSION["admin"]);
		}
		Common::formRequest("/admin/login",array('msg'=>base64_encode('用户退出成功')));
	}
	public function Action_profile(){
		$admin = new Model_Admin();
		if (isset($_REQUEST['nickname'])){
			$data = $this->getPost();
			if (empty($data['nickname']) || empty($data['password'])){
				Common::formRequest("/admin/profile",array("msg"=>base64_encode("管理员或密码不能为空！")));
			}else {
				//开始修改
				$new = array();
				$new['nickname']= $data['nickname'];
				$new['password']= $data['password'];
				if (!empty($data['password']) && $data['password'] == $data['password1']){
					$admin->update($new,"id=".$_SESSION['admin']['id']);
					$res = $admin->fetchRow("id=".$_SESSION['admin']['id']);
					$this->session("admin",$res);
					Common::formRequest("/admin/profile",array('msg'=>base64_encode('修改成功')));
				}
			}
		}
		$res = $admin->fetchRow("id=".$_SESSION['admin']['id']);
		$this->view->user = $res;
	}
  
	
	/*-----------------数据库(备份/还原)------------------------------*/
	public function Action_db(){ 
		//遍历文件夹下的备份文件
		$dir = dir(BAC_PATH.'/db/');
		//列出 images 目录中的文件
		$select = "<select name='sqlfilename'><option>请选择</option>";
		$this->view->hasSqlfilename = 0 ;
		while (($file = $dir->read()) !== false){
			if ($file != '.' && $file !='..'){
				$this->view->hasSqlfilename = 1;
				$select.="<option value='".$file."'>".$file."</option>";
			}
		}
		$select .= "</select> ";
		$dir->close();
		$this->view->select = $select;
	}
	public function Action_restore(){
		//还原
		if (isset($_REQUEST['db'])){
			$sqlfilename = $this->getParam("sqlfilename");
			if (empty($sqlfilename)){
				return  FALSE;
			}
			set_time_limit(0);
			$obj = new Model_Admin();
			$obj->restore(BAC_PATH.'db/'.$sqlfilename);
		}
		exit();
	}
	
	public function Action_backup(){ 
		//备份
		if (isset($_REQUEST['db'])){
			/* 备份数据库 */
			// 注意：我们一下的数据库操作采用了phplib的DB类
			
			// 定义要保存的数据表、前缀、保存到何处
			$obj = new Model_Admin();
			$tablesArr = $obj->db->query("show table status from ".$this->config['db'][0]['dbname'].";");
			$tables = array();
			$nobackup = isset($this->config['nobackup'])?$this->config['nobackup']:array();
			foreach ($tablesArr as $k=>$v) {
				if (!in_array($v['Name'], $nobackup)){
					$tables[]=$v['Name'];
				}
			}
			
			$prefix = 'us_'; // 要保存的.sql文件的前缀
			$saveto = isset($_REQUEST['backupplace']) && !empty($_REQUEST['backupplace']) ?$_REQUEST['backupplace']:'server'; // 要保存到什么地方，是本地还是服务器上，默认是服务器
			$back_mode = 'all'; // 要保存的方式，是全部备份还是只保存数据库结构
			
			// 定义数据保存的文件名
			$local_filename = $prefix.date('YmdHis').'.sql"';
			$filename = BAC_PATH."db/" . date('YmdHis') . ".sql";    // 保存在服务器上的文件名
		
			// 获取数据库结构和数据内容
			$sqldump="";
			foreach($tables as $table) {
				if ($back_mode == 'all') { $sqldump .= $obj->data2sql($table); }
				if ($back_mode == 'table') { $sqldump .= $obj->table2sql($table); }
			}
			// 如果数据内容不是空就开始保存
			if(trim($sqldump)) {				
				// 保存到本地
				if($saveto == "local") 
				{
				   ob_end_clean();
				   header('Content-Encoding: none');
				   header('Content-Type: '.(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'application/octetstream' : 'application/octet-stream'));
				   header('Content-Disposition: '.(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'inline; ' : 'attachment; ').'filename="'.$local_filename);
				   header('Content-Length: '.strlen($sqldump));
				   header('Pragma: no-cache');
				   header('Expires: 0');
				   echo $sqldump;
				} 
				// 保存到本地结束
				
				// 保存在服务器
				if($saveto == "server") {
				   if(!empty($filename)) {
					   	if (file_put_contents($filename, $sqldump)){
					
					   		Common::formRequest("/admin/db",array("msg"=>base64_encode("数据成功备份至服务器 ")));
					   	}else {
					   	
					   		Common::formRequest("/admin/db",array("msg"=>base64_encode("数据文件无法保存到服务器，请检查目录属性你是否有写的权限。")));
					   	}
					}
			
				}else{
//					Common::formRequest("/admin/db",array("msg"=>base64_encode("数据表没有任何内容")));
				}
			}
		}
		exit();	
	}
	
	
	/*-----------------用户管理------------------------------*/
	public function Action_user(){
		$obj   = new Model_User();
		$where =$obj->getWhere();
        //创建分页对象
		$p = new Page($obj->count($where), $this->config['page']['psize'],$this->getParam("p"));
        $this->view->page = $p->show("/admin/".$this->action);
        
        //搜索条件
      
		
        $limit= $p->firstRow . ',' . $p->listRows;
        
        $list = $obj->fetchAll($where,null,null,$limit);
        
        
        foreach ($list as $i=>$j) {
	        if (!empty($j['resource'])){
				$resource =  explode(',', $j['resource']);
				$list[$i]['resource']= "";
				foreach ($resource as $k=>$v) {
					if ($k == 9){
						$list[$i]['resource'].="<br />";
					}
					$list[$i]['resource'].=Model_User::$resource[$v]." ";
					
				}
			}
        }
		
        $this->view->list = $list;

        //所有城市
		$areas = new Model_Area();
		$this->view->areas = $areas->fetchAll("parentid=0",null,"vieworder asc ");
	}

	public function Action_adminLoginFront(){
		//根据用户邮箱
		$email = $this->getParam("email");
		if (empty($email)){
			return false;
		}
		$obj = new Model_User();
		$row = $obj->fetchRow("email='$email'");
		if (!empty($row)){
			$_SESSION['user'] = $row ;
			Common::redirect("/user/index");
		}
		die();
		
	}
	public function Action_useredit(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_User();
		$where = "id = $id" ;
		if ($this->isPost() && !isset($_REQUEST['msg'])){
			$data = $this->getPost();
			if ($obj->update($data,$where)){
				Common::formRequest("/admin/".$this->action."?id=".$id,array('msg'=>base64_encode('修改成功')));
			}
		}
		
        $this->view->list = $obj->fetchRow($where);
	}
	public function Action_userdel(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_User();
		$where = "id = $id" ;
		if ($obj->delete($where)){
			Common::formRequest("/admin/user",array('msg'=>base64_encode('删除成功')));
		}
	}
	
	
	
	/*-----------------方案管理------------------------------*/
	public function Action_plan(){
		//列表显示所有的方案
		
		
		
		$obj 	= new Model_Plan();
		$where 	= $obj->getWhere();
		
        //创建分页对象
        $countsql = "select count(*) as count  from plan p LEFT JOIN users u on p.user_id =u.id  where ".$where ;
		$p = new Page($obj->db->countsql($countsql), $this->config['page']['psize'],$this->getParam("p"));
        $this->view->page = $p->show("/admin/".$this->action);
        
        $sql = "select p.*,u.area_id,u.school_id,u.realname from plan p 
				LEFT JOIN users u on p.user_id =u.id  where " .$where;
       	$sql.= " limit ".(($this->getParam("p")?$this->getParam("p"):1)-1)*$this->config['page']['psize'].','.$this->config['page']['psize'] ;
		$this->view->list = $obj->db->query($sql);
        
        
        //所有城市
		$areas = new Model_Area();
		$this->view->areas = $areas->fetchAll("parentid=0",null,"vieworder asc ");
        
	}
	
	public function Action_planedit(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_Plan();
		$where = "id = $id" ;
		if ($this->isPost() && !isset($_REQUEST['msg'])){
			$data = $this->getPost();
			if ($obj->update($data,$where)){
				Common::formRequest("/admin/".$this->action."?id=".$id,array('msg'=>base64_encode('修改成功')));
			}
		}
        $list= $obj->fetchRow($where);
		if (!empty($list) && !empty($list['material_show'])){
			$material_show = explode(',', $list['material_show']);
			$list['material_show']= "";
			foreach ($material_show as $k=>$v) {
				$list['material_show'].=Model_Plan::$material_show[$v]." ";
			}
		}
		if (!empty($list) && !empty($list['media_show'])){
			$media_show = explode(',', $list['media_show']);
			$list['media_show']= "";
			foreach ($media_show as $k=>$v) {
				$list['media_show'].=Model_Plan::$media_show[$v]." ";
			}
		}
	     
        
        
		$this->view->list =$list ;
		
	}
	
	
	public function Action_plandel(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_Plan();
		$where = "id = $id" ;
		if ($obj->delete($where)){
			Common::formRequest("/admin/plan",array('msg'=>base64_encode('删除成功')));
		}
	}
	
	
	/*-----------------赞助留言------------------------------*/
	public function Action_scheme(){
		$obj   = new Model_Scheme();
		$where =$obj->getWhere();
        //创建分页对象
		$p = new Page($obj->count($where), $this->config['page']['psize'],$this->getParam("p"));
        $this->view->page = $p->show("/admin/".$this->action);
        
        $limit= $p->firstRow . ',' . $p->listRows;
        $list = $obj->fetchAll($where,null,null,$limit);
        
		
        $this->view->list = $list;

	}
	public function Action_schemeedit(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_Scheme();
		$where = "id = $id" ;

		
        $this->view->list = $obj->fetchRow($where);
	}
	public function Action_schemedel(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_Scheme();
		$where = "id = $id" ;
		if ($obj->delete($where)){
			Common::formRequest("/admin/scheme",array('msg'=>base64_encode('删除成功')));
		}
	}
	
	

	/*----------------------校园大使-------------------------*/
	public function Action_ambassador(){
		$obj   	= new Model_Config();
		$list 	= $obj->fetchRow("id=1");
        $this->view->list = $list;
		if ($this->isPost()){
			$data = $this->getPost();
			if (empty($list)){
				$data['id'] =1 ;
				if ($obj->insert($data)){
					Common::formRequest("/admin/".$this->action,array('msg'=>base64_encode('增加成功')));
				}
			}else {
				if ($obj->update($data,"id=1")){
					Common::formRequest("/admin/".$this->action,array('msg'=>base64_encode('修改成功')));
				}
			}
		}
	}
	
	/******************************精彩******************************/
	public function Action_jingcaishunjian(){
		$imgObj = new Model_Img();
		if (!empty($_POST['add'])){
			if ($_FILES['img1']['error']==0 ){
				$up= new Up($_FILES['img1'],UPL_PATH."images/");
			  	//如果上传图片成功
			  	if ($up->f_sys['error'] == 0 ){
			  		//生成缩略图
			  		$imgFullName  = UPL_PATH."images/".$up->f_name ;
			  		$thumbFullName= UPL_PATH."images/".$up->f_prename."_thumb.".$up->fileext($imgFullName);
			  		$up->img2thumb($imgFullName, $thumbFullName,240,0,0);
			  		//删除原图
			  		if (file_exists($thumbFullName)){
			  			if (file_exists($imgFullName)){
			  				unlink($imgFullName);
			  			}
			  		}
			  		//保存图片名到数据库
			  		if ($imgObj->insert(array(
			  			'from_id'  =>1,
			  			'img_name' =>$up->f_name,
			  		))){
			  			Common::formRequest("/admin/".$this->action,array('msg'=>base64_encode('新增成功')));
			  		}
			  	}
			}
		}
		
		
        //创建分页对象
		$p = new Page($imgObj->count(), $this->config['page']['psize'],$this->getParam("p"));
        $this->view->page = $p->show("/admin/".$this->action);
        
        //搜索条件
      
		
        $limit= $p->firstRow . ',' . $p->listRows;
        
        $list = $imgObj->fetchAll("from_id=1",null,null,$limit);
		$this->view->list 	= $list;
	}
	
	public function Action_jingcaishunjiandel(){
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		$obj = new Model_Img();
		if (Model_Img::deleteImg($id)){
			Common::formRequest("/admin/jingcaishunjian",array('msg'=>base64_encode('删除成功')));
		}
	}
	
}