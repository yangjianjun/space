<?php
class Controller_User extends Controller
{
	//初始化
	public function init(){
		//需求登陆的action
		$needLoginAction= array(
			'index',
			'userinfo1',
			'userinfo2',
			'userinfo3',
			'userinfoOk',
		
			'uploadPlanWarn',
			'uploadPlan1',
			'uploadPlan2',
			'uploadPlan3',
			'uploadPlan4',
			'uploadPlan5',
			'uploadPlan6',
			'uploadPlan7',
			'uploadPlanOk',
		
			'password',
			'managePlan',
		);
		if ($this->action != 'login' && 
		    !$this->isPost() && 
		    !isset($_SESSION['user']) &&
			in_array($this->action, $needLoginAction)){
			$url = base64_encode("/user/".$this->action);
			Common::redirect("/user/login?url=".$url);
		}
		
		if (in_array($this->action, $needLoginAction)){
			$this->setLayout("userlayout");
		}
	}
	public function Action_index(){
		$user 			= new Model_User();
		$usersession 	= $this->session("user");
		$where = "id=".$usersession['id'] ;
		
		
		$userinfo 		 = $user->fetchRow($where) ;
		$this->view->user= $userinfo;
		
		
		$this->setTitle("用户中心");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	/***********************用户资料修改**************************/
	public function Action_userinfo1(){
		
		
		$user 			= new Model_User();
		$usersession 	= $this->session("user");
		$where = "id=".$usersession['id'] ;
		if($this->isPost()){
			$data 		= $this->getPost();
			if (isset($_SESSION['userinfo'])){
				unset($_SESSION['userinfo']);
			}
			$_SESSION['userinfo'] = $data ;
			Common::redirect("/user/userinfo2");
		}
		$userinfo 		 = $user->fetchRow($where) ;
		$this->view->user= $userinfo;
		
		//所有城市
		$areas = new Model_Area();
		$this->view->areas = $areas->fetchAll("parentid=0",null,"vieworder asc ");
		
		//seo
		$this->setTitle("用户资料修改");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}

	public function Action_userinfo2(){
		
		
		$user 			= new Model_User();
		$usersession 	= $this->session("user");
		$where = "id=".$usersession['id'] ;
		if($this->isPost()){
			$data 		= $this->getPost();
			if (isset($_SESSION['userinfo'])){
				$_SESSION['userinfo'] = $_SESSION['userinfo'] +$data ;
			}
			Common::redirect("/user/userinfo3");
		}
		
		$userinfo 		 = $user->fetchRow($where) ;
		$this->view->user= $userinfo;
		
		//seo
		$this->setTitle("用户资料修改");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function Action_userinfo3(){
		
		
		$user 			= new Model_User();
		$usersession 	= $this->session("user");
		$where = "id=".$usersession['id'] ;
		if($this->isPost()){
			$data 		= $this->getPost();
			if (isset($_SESSION['userinfo'])){
				if (!empty($data['resource'])){
					$data['resource']  = implode(',', $data['resource']);
				}
				$_SESSION['userinfo'] = $_SESSION['userinfo'] +$data ;
				$_SESSION['userinfo']['updated'] = time();
			}
			
			if ($user->update($_SESSION['userinfo'],$where)){
				Common::redirect("/user/userinfoOk");
			}
		}
		$userinfo 		 = $user->fetchRow($where) ;
		if (!empty($userinfo['resource'])){
			$userinfo['resource'] =  explode(',', $userinfo['resource']);
		}
		$this->view->user= $userinfo;
		//seo
		$this->setTitle("用户资料修改");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	
	public function Action_userinfoOk(){
		
		//seo
		$this->setTitle("用户资料修改");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function Action_studentPhoto(){
		$this->disableLayout();
		if ($this->isPost()){
			$id = $this->getParam("id");
			$type = $this->getParam('type');
			if(empty($id)){
				return false;
			}
			if ($_FILES['files']['error']==0 ){
			  	$up= new up($_FILES['files'],UPL_PATH."images/");
			  	//如果上传图片成功
			  	if ($up->f_sys['error'] == 0 ){
			  		//生成缩略图
			  		$imgFullName  = UPL_PATH."images/".$up->f_name ;
			  		$thumbFullName= UPL_PATH."images/".$up->f_prename."_thumb.".$up->fileext($imgFullName);
			  		$up->img2thumb($imgFullName, $thumbFullName,147,0,0);
			  		//删除原图
			  		if (file_exists($thumbFullName)){
			  			if (file_exists($imgFullName)){
			  				unlink($imgFullName);
			  			}
			  		}
			  		
			  		
			  		//保存图片名到数据库
			  		$obj = new Model_User();
			  		$fieldName = $type == 'student' ?'student_photo':'user_photo';
			  		if ($obj->update(array($fieldName=>$up->f_name),"id=$id")){
			  			Common::redirect("/user/studentPhotoSuccess?f=$up->f_name&type=$type");
			  		}
			  	}
			}
		}
	}
	
	public function Action_studentPhotoSuccess(){
	
	}
	
	
	
	
	/***********************管理方案*********************************/
	public function Action_managePlan(){
		$this->setTitle("管理方案");
		
		$obj  	= new Model_User();
		$where 	= "id=".$_SESSION['user']['id'] ;
		$user 	= $obj->fetchRow($where) ;
		$this->view->user= $user;
		
		
		$planObj= new Model_Plan();
		$plans  = $planObj->fetchAll("user_id=".$_SESSION['user']['id']);
		$this->view->plans= $plans;
		
		if ($this->isPost()){
			$password 	= $this->getParam('password');
			$_data 		= array('password'=>$password);
			if($obj->update($_data,$where)){
				Common::redirect("/user/userinfoOk");
			}
		}
		
	}
	
	
	/***********************删除方案*********************************/
	public function Action_delPlan(){
		$pid   	= $this->getParam("pid");		
		$Obj		= new Model_Plan();
		$where  = "id = {$pid} and user_id=".$_SESSION['user']['id'];
		if ($Obj->delete($where)){
			Common::redirect("/user/managePlan");
		}
	}
	
	/***********************上传方案**************************/
	public function Action_uploadPlanWarn(){
		$this->setTitle("上传方案");
	}
	public function Action_uploadPlan1(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan2(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan3(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan4(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan5(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan6(){
		$this->uploadPlan();
	}
	public function Action_uploadPlan7(){
		$this->uploadPlan();
	}
	public function uploadPlan($pid=null){
		$this->setTitle("上传方案");
		$pid 		=$this->getParam("pid");
		$obj 		= new Model_Plan();
		$where = " id =".$pid ;
		if($this->isPost()){
			//得到数据
			$data 		= $this->getPost();
			//如果是第一步
			$step = substr($this->action, -1) ;
			if ($step == 1){
				if (isset($_SESSION['plan'])){
					unset($_SESSION['plan']);
				}
				$_SESSION['plan'] = $data ;
				
			}else{
				if (!empty($data)){
					foreach ($data as $k=>$v) {
						if (isset($_SESSION['plan'][$k])){
							unset($_SESSION['plan'][$k]);
						}
					}
				}
				if (!empty($data['material_show'])){
					$data['material_show'] = implode(',', $data['material_show']);
				}
				if (!empty($data['media_show'])){
					$data['media_show'] = implode(',', $data['media_show']);
				}
				$_SESSION['plan'] += $data ;
				$_SESSION['plan']['user_id'] = $_SESSION['user']['id'];
				if ($step == 7){
					//新增或者修改
					if (empty($pid)){ //insert
						$flag = $obj->insert($_SESSION['plan']);
					}else {
						$flag = $obj->update($_SESSION['plan'],$where);
					}
					if ($flag){
						Common::redirect("/user/uploadPlanOk");
					}else {
						echo "完善信息失败，请联系管理员！" ;
					}
				}
			}
			if ($step == 7){
				$url = "/user/uploadPlanOk";
			}else {
				if (empty($pid)){
					$url = "/user/uploadPlan".($step+1);
				}else {
					$url = "/user/uploadPlan".($step+1)."?pid=".$pid;
				}
			}
			Common::redirect($url);
		}
		if (empty($pid)){
			return false ;
		}
		$plan 		 = $obj->fetchRow($where) ;
		if (!empty($plan) && !empty($plan['material_show'])){
			$plan['material_show'] = explode(',', $plan['material_show']);
		}
		if (!empty($plan) && !empty($plan['media_show'])){
			$plan['media_show'] = explode(',', $plan['media_show']);
		}
		$this->view->plan= $plan;
	}
	public function Action_uploadPlanOk(){
		$this->setTitle("上传方案");
	}
	
	
	
	
	
	
	/***********************用户密码修改*********************************/
	public function Action_password(){
		$this->setTitle("密码修改");
		
		$obj  	= new Model_User();
		$where 	= "id=".$_SESSION['user']['id'] ;
		$user 	= $obj->fetchRow($where) ;
		
		if ($this->isPost()){
			$password 	= $this->getParam('password');
			$_data 		= array('password'=>$password);
			$_data['updated']=time();
			if($obj->update($_data,$where)){
				Common::redirect("/user/userinfoOk");
			}
		}
		$this->view->user= $user;
	}
	
	

	
	
	
	
	
	/***********************用户登陆，注册，找回密码*********************************/
	public function Action_login(){
		if ($this->isPost()){
			$data = $this->getPost();
			$user = new Model_User();
			$userinfo = $user->fetchRow("email='".trim($data['email'])."' and password='".trim($data['password'])."' and status > 0");
			if ($userinfo){
				$this->session("user",$userinfo);
				//goto page
				$url = $this->getParam("url");
				if (!empty($url)){
					$url = base64_decode($url);
					Common::redirect($url);
				}
				Common::formRequest("/user/index");
			}else {
				$this->view->msg = "﹡您输入的Email地址错误或密码错误";
			}
		}
		//seo
		$this->setTitle("用户登陆"." -".$_SESSION['config']['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	public function Action_logout(){
		if (isset($_SESSION["user"])){
			unset($_SESSION["user"]);
		}
		Common::formRequest("http://".$_SERVER["HTTP_HOST"],array('msg'=>base64_encode('用户退出成功')));
	}
	
	
	public function Action_registerConsider(){	
		//seo
		$this->setTitle("用户注册");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	
	public function Action_register(){
		if ($this->isPost()){
			$data = $this->getPost();
			unset($data['pwd2']);
			unset($data['checknum']);
			unset($data['checkbox']);
			$obj = new Model_User();
			if ($obj->insert($data)){
				$data['url'] = '/user/registerEmail';
				Common::formRequest("/user/sendEmail",$data);
			}
		}
		//seo
		$this->setTitle("用户注册");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function sendEmail($data=array()){
		$obj  = new Email($data['email']);
		$config = Frame::getInstance()->config;
		switch ($data['url']) {
			case '/user/registerEmail':
				$url  = "http://".$_SERVER['HTTP_HOST']."/user/registerComplete?";
				$url .= "e=".base64_encode($data['email']);
				$url .= "&t=".base64_encode(time());
				$content = sprintf($config['email']['cTestEmail'],$url);
				$obj->setConfig('content', $content);
				$obj->setConfig('subject', $config['email']['sTestEmail']);
			
				break;
			case '/user/fotgetpasswordsuccess':
				//取password
				$userObj = new Model_User();
				$userArr = $userObj->fetchRow("email='".$data['email']."'");
				if (empty($userArr)){
					return false ;
				}
				$password = $userArr['password'];
				$content  = sprintf($config['email']['cFotgetpwd'],$password);
				$obj->setConfig('content', $content);
				$obj->setConfig('subject', $config['email']['sFotgetpwd']);
				break;
		}
		return $obj->send();
	}
	public function Action_sendEmail(){
		if ($this->isPost()){
			$data  = $this->getPost();
			$email = $data['email'];
			$url   = $data['url'];
			if ($this->sendEmail($data)){
				Common::redirect($url,array('email'=>$email,'msg'=>1));
			}else {
				Common::redirect($url,array('email'=>$email,'msg'=>0));
			}
		}
		die();
	}
	
	public function Action_registerEmail(){
		$data = $this->getParam();
		if(isset($data['msg']) && $data['msg']==1){
			$this->view->msg = "邮件已发送成功!";
		}else {
			$this->view->msg = "邮件发送失败，请联系管理员!";
		}
		$this->view->email = $data['email'];
		//seo
		$this->setTitle("用户注册 ");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function Action_registerComplete(){
		$data = $this->getParam();
		if (!empty($data['e'])){
			$email = base64_decode($data['e']);
			$obj = new Model_User();
			//如果已被激活
			$where = "email = '$email' " ;
			$row = $obj->fetchRow($where);
			if ($row['status']){
				$this->view->msg = 1;
			}else {
				if ($obj->update(array("status"=>1),$where)){
					$this->session('user',$row);
					$this->view->msg = 2;
				}else {
					$this->view->msg = 3;
				}
			}
		}
		
		//seo
		$this->setTitle("用户注册 ");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	

	public function Action_fotgetpassword(){
		//seo
		$this->setTitle("找回密码");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function Action_fotgetpasswordsuccess(){
		$data = $this->getParam();
		if(isset($data['msg']) && $data['msg']==1){
			$this->view->msg = "邮件已发送成功!";
		}else {
			$this->view->msg = "邮件发送失败，请联系管理员!";
		}
		$this->view->email = $data['email'];
		//seo
		$this->setTitle("找回密码 ");
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	
	public function Action_getverify(){
		die(json_encode(array("verify"=>$this->session("verify"))));
	}
	
	public function Action_checkverify(){
		$verify = $this->getParam("verify");
		$return = array('result'=>0);
		if ($this->session("verify") == $verify){
			$return['result'] = 1 ;
		}
		die(json_encode($return));
	}
	public function Action_checkbox(){
		$chk = $this->getParam("chk");
		$return = array('result'=>0);
		if (1 == $chk){
			$return['result'] = 1 ;
		}
		die(json_encode($return));
	}
	
	
	public function Action_checkuser(){
		$email = $this->getParam("email");
		$user = new Model_User();
		$res = $user->fetchRow("email = '$email'");
		$return = array('result'=>0);
		if (empty($res)){
			$return['result'] = 1 ;
		}
		
		//fotget password ，if user is exist
		$flag = $this->getParam("flag");
		if (!empty($flag) && $flag == 1){
			if ($return['result'] == 1){
				$return['result'] = 0 ;
			}else {
				$return['result'] = 1 ;
			}
		}
		die(json_encode($return));
	}
}