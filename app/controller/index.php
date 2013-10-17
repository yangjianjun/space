<?php
class Controller_Index extends Controller
{
	public function Action_index()
	{
	
		//取最新前10的方案
		$obj = new Model_Plan();
		$plans = $obj->fetchAll(null,null,"created desc","0,10");
		
		$this->view->plans = $plans;
		
		
		
        //所有城市
		$areas = new Model_Area();
		$this->view->areas = $areas->fetchAll("parentid=0",null,"vieworder asc ");
		
		
		//seo
		$this->setTitle($_SESSION['config']['webname']."，中国领先的校园活动赞助服务平台。加入赞助宝，上传方案，找到赞助。");
		$this->setKeywords($_SESSION['config']['webname']."，校园赞助，活动赞助，活动方案，校园活动，企业赞助，校园大使");
		$this->setDescription($_SESSION['config']['webname']."是一个为大学生校园活动提供赞助支持的平台。加入赞助宝你可以：上传活动方案，让更多的企业赞助找到你；加入校园大使，成为赞助宝校园活动的核心合作伙伴；填选合作资源，让你的校园场地、媒介、活动资源得到更有效的利用。");
	}
	//要据城市得到大学 
	public function Action_school(){
		//
		$city_id 	= $this->getParam("city_id");
		if (empty($city_id) || !is_numeric($city_id)){
			return false ;
		}
		$school 	= new Model_School();
		$schoolArr 	= $school->fetchAll("area_id = $city_id");
		die(json_encode($schoolArr));
		
	}
	
	public function Action_samplehuan(){
		die( "
			<chart>
			<axis_category font='' />
			<legend font='' />
			<chart_label shadow='low' color='ffffff' alpha='95' size='10' position='inside' as_percentage='true' />
			<chart_pref select='true' />
			<chart_rect x='40' y='0' width='200' height='160' />
			<context_menu print='false' full_screen='true' save_as_jpeg='true' about='false'/>
			<chart_transition type='drop' delay='1.5' duration='1.5' order='series' />
			<chart_type>donut</chart_type>
			<legend font='微软雅黑' size='12' x='40' y='160',width='60' fill_alpha='0'/>
			 <chart_data>
			      <row>
			         <null/>
			        <string>已取得赞助</string>
			        <string>未取得赞助</string>
			      </row>
				  <row>
				  <string>research</string>
				    
			         <number  shadow='high' bevel='data' line_color='FFFFFF' line_thickness='3' line_alpha='75'>".($this->config['approved'])."</number>
					 <number  shadow='high' bevel='data' line_color='FFFFFF' line_thickness='3' line_alpha='75'>".(100-$this->config['approved'])."</number>
			      </row>
			</chart_data>
			<filter>
					<shadow id='low' distance='2' angle='45' color='0' alpha='40' blurX='5' blurY='5' />
					<shadow id='high' distance='5' angle='45' color='0' alpha='40' blurX='10' blurY='10' />
					<shadow id='soft' distance='2' angle='45' color='0' alpha='20' blurX='5' blurY='5' />
					<bevel id='data' angle='45' blurX='5' blurY='5' distance='3' highlightAlpha='15' shadowAlpha='25' type='inner' />
					<bevel id='bg' angle='45' blurX='50' blurY='50' distance='10' highlightAlpha='35' shadowColor='0000ff' shadowAlpha='25' type='full' />
					<blur id='blur1' blurX='75' blurY='75' quality='1' />   
			</filter>
			<series_color>
				
			      <color>4c95cc</color>
					<color>df1d26</color>
					<color>5bb4d2</color>
					<color>f95a22</color>
					
					<color>f87616</color>
					<color>ffb880</color>
					
				</series_color>
				<series transfer='true' />
			</chart>");
	}
	
	//
	public function Action_samplehuan2(){
		die( "
			<chart>
			<axis_category font='' />
			<legend font='' />
			<chart_label shadow='low' color='ffffff' alpha='95' size='10' position='inside' as_percentage='true' />
			<chart_pref select='true' />
			<chart_rect x='40' y='0' width='200' height='160' />
			<context_menu print='false' full_screen='true' save_as_jpeg='true' about='false'/>
			<chart_transition type='drop' delay='1.5' duration='1.5' order='series' />
			<chart_type>donut</chart_type>
			<legend font='微软雅黑' size='12' x='40' y='160',width='60' fill_alpha='0'/>
			 <chart_data>
			      <row>
			         <null/>
			        <string>已取得赞助</string>
			        <string>未取得赞助</string>
			      </row>
				  <row>
				  <string>research</string>
				    
			         <number  shadow='high' bevel='data' line_color='FFFFFF' line_thickness='3' line_alpha='75'>".($this->config['getSponsor'])."</number>
					 <number  shadow='high' bevel='data' line_color='FFFFFF' line_thickness='3' line_alpha='75'>".(100-$this->config['getSponsor'])."</number>
			      </row>
			</chart_data>
			<filter>
					<shadow id='low' distance='2' angle='45' color='0' alpha='40' blurX='5' blurY='5' />
					<shadow id='high' distance='5' angle='45' color='0' alpha='40' blurX='10' blurY='10' />
					<shadow id='soft' distance='2' angle='45' color='0' alpha='20' blurX='5' blurY='5' />
					<bevel id='data' angle='45' blurX='5' blurY='5' distance='3' highlightAlpha='15' shadowAlpha='25' type='inner' />
					<bevel id='bg' angle='45' blurX='50' blurY='50' distance='10' highlightAlpha='35' shadowColor='0000ff' shadowAlpha='25' type='full' />
					<blur id='blur1' blurX='75' blurY='75' quality='1' />   
			</filter>
			<series_color>
				
			      <color>4c95cc</color>
					<color>df1d26</color>
					<color>5bb4d2</color>
					<color>f95a22</color>
					
					<color>f87616</color>
					<color>ffb880</color>
					
				</series_color>
				<series transfer='true' />
			</chart>");
	}
	
	
	public function Action_scheme(){
		$this->disableLayout();
		if ($this->isPost()){
			$data = $this->getPost();
			$obj  = new Model_Scheme();
			if ($obj->insert($data)){
				Common::redirect("/index/schemeOk");
			}else {
				echo "<font style='color:red;'>留言失败！</font>";
			}
		}
	}
	public function Action_schemeOk(){
		$this->disableLayout();
	}
	
	
	public  function Action_code(){
		$type = isset($_GET['type'])?$_GET['type']:'gif';
		Common::buildImageVerify(4,1,$type,56,26);
   		exit();
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
		
		
		//seo
		$this->setTitle("校园大使 -".$_SESSION['config']['webname']);
		$this->setKeywords($_SESSION['config']['webname']."，校园大使，校园赞助，活动执行，校园活动");
		$this->setDescription($_SESSION['config']['webname']."-校园大使是赞助宝专业化的校园活动执行管理队伍，配合赞助宝参与校园活动的策划、执行、督导等各项与校园活动相关的任务。");
		
	}
	/**************************最新申请******************************/
	public function Action_apply(){
		//取前面有记录的三天的所有用户
		$userObj = new Model_User();
		$list1   = $userObj->fetchAll("school_id >0  and college is not null ",null,"created desc","0,100");
		//处理数据
		$reg=array();
		if (!empty($list1)){
			foreach ($list1 as $k=>$v) {
				if (count($reg)>=3){
					break;
				}
				if (isset($reg[substr($v['created'], 0,10)])  && count($reg[substr($v['created'], 0,10)])>=4){
					continue;
				}
				$reg[substr($v['created'], 0,10)][] = $v;
			}
		}
		$this->view->list1 = $reg ;
		
		//取前面有记录的三天的所有方案
		$planObj = new Model_Plan();
		$list2   = $planObj->fetchAll(null,null,"created desc","0,1000");
		//处理数据
		$plan=array();
		if (!empty($list2)){
			foreach ($list2 as $k=>$v) {
				if (count($plan)>=3){
					break;
				}
				if (isset($plan[substr($v['created'], 0,10)])  && count($plan[substr($v['created'], 0,10)])>=10){
					continue;
				}
				$userArr = Model_Plan::getUser($v['user_id']);
				$v['realname']  = !empty($userArr) ? $userArr['realname']:'';
				$v['school']    = !empty($v['school_id']) ? Model_School::getSchoolArr($v['school_id']):'';
				if (!empty($v['realname'])){
					$plan[substr($v['created'], 0,10)][] = $v;
				}
			}
		}
		$this->view->list2 = $plan ;
		
		//seo
		$this->setTitle("最新申请赞助  -".$_SESSION['config']['webname']);
		$this->setKeywords($_SESSION['config']['webname']."-专门为校园歌手比赛、新生晚会、篮球赛等活动提供资金和设备赞助。");
		$this->setDescription($_SESSION['config']['webname']."-专门为校园歌手比赛、新生晚会、篮球赛等活动提供资金和设备赞助。");
	}

	/*****************************精彩瞬间********************************/
	public function Action_jingcaishunjian(){
		$imgObj = new Model_Img();
		$list = $imgObj->fetchAll("from_id=1");
		$this->view->list 	= $list;
		
		//seo
		$this->setTitle("精彩瞬间  -".$_SESSION['config']['webname']);
		$this->setKeywords($_SESSION['config']['webname']."-专门为校园歌手比赛、新生晚会、篮球赛等活动提供资金和设备赞助。");
		$this->setDescription($_SESSION['config']['webname']."-专门为校园歌手比赛、新生晚会、篮球赛等活动提供资金和设备赞助。");
	}
	
	/*****************************申请校园大使********************************/
	public function Action_applyas(){
		if (isset($_POST['isreads'])){
			//没登陆先登陆
			if (empty($_SESSION['user'])){
				Common::redirect("/user/login",array('url'=>base64_encode('/index/applyas')));
			}
			
			$obj = new Model_User();
			$where = "id=".$_SESSION['user']['id'] ;
			$row = $obj->fetchRow($where);
			if (isset($row['ambassador']) && $row['ambassador'] !=0){
				Common::formRequest("/index/".$this->action,array('msg'=>base64_encode('你太热心了，已经申请过了！')));
			}else {
				if ($obj->update(array('ambassador'=>1),"id=".$_SESSION['user']['id'])){
					Common::formRequest("/index/".$this->action,array('msg'=>base64_encode('你的申请已提交，谢谢！')));
				}
			}
		}
	}
	
}