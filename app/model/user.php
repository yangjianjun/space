<?php
class Model_User extends Model
{
	public $tbName	='users';
	public static $education_class= array(
		1=>'大专 ',
	    2=>'本科 ',
	    3=>'研究生',
	    4=>'博士'
	);
	public static $education_year= array(
		1=>'两年制 ',
	    2=>'三年制 ',
	    3=>'四年制',
	);
	public static $education_now= array(
		1=>'1年级 ',
	    2=>'2年级 ',
	    3=>'3年级',
	    4=>'4年级',
	);
	public static $political_affiliation= array(
		1=>'党员',
	    2=>'团员',
	    3=>'群众',
	);
	public static $team= array(
		1=>'团委',
	    2=>'学生会',
	    3=>'社团',
	);
	public static $status= array(
	    0=>'未验证',
		1=>'已验证',
	    2=>'已删除',
	);
	
	public static $ambassador= array(
	    0=>'未申请',
		1=>'审核中',
	    2=>'已通过',
	    3=>'已取消',
	);
	public static $resource= array(
		
		1=>'路演场地',
	    2=>'大礼堂',
	    3=>'报告厅',
	    4=>'教室',
	    5=>'体育馆',
	    6=>'运动场',
	    
	    7=>'运动场广告',
	    8=>'食堂广告',
	    9=>'宿舍广告',
	    10=>'校园刊物',
	    11=>'横幅',
	    12=>'广播',
	    
	    13=>'校内设摊',
	    14=>'组织演出',
	    15=>'体育比赛',
	    16=>'办讲座',
	    17=>'海报',
	    18=>'派发',
	);
	
	//get where 
	public function getWhere($where=" 1 "){
		if ( isset($_REQUEST['realname']) && !empty($_REQUEST['realname']) ) {
			$where 				  .= " and realname like '%".$_REQUEST['realname']."%'";
		}
		if ( isset($_REQUEST['ambassador']) && $_REQUEST['ambassador'] !== ""  ) {
			$where 				  .= " and ambassador = '".$_REQUEST['ambassador']."'";
		}
		if ( isset($_REQUEST['status']) && $_REQUEST['status'] !== ""  ) {
			$where 				  .= " and status = '".$_REQUEST['status']."'";
		}
		if ( isset($_REQUEST['area_id']) &&  !empty($_REQUEST['area_id'])  ) {
			$where 				  .= " and area_id = '".$_REQUEST['area_id']."'";
		}
		if ( isset($_REQUEST['school_id']) &&  !empty($_REQUEST['school_id']) ) {
			$where 				  .= " and school_id = '".$_REQUEST['school_id']."'";
		}
		
		if ( isset($_REQUEST['resource']) &&  !empty($_REQUEST['resource'])  ) {
			$where 				  .= " and resource like '%".$_REQUEST['resource']."%'";
		}
		return $where ;
	}
}