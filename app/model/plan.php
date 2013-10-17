<?php
class Model_Plan extends Model
{
	public $tbName	='plan';
	
	public static $pstatus= array(
		'审核中 ',
	    '已通过 ',
	    '已停用',
	);
	public static $actionseason= array(
		
		1=>'开学季 ',
	    2=>'毕业季 ',
	    3=>'节日季 ',
	    4=>'一般时期 ',
	);
	
	public static $adtype= array(
	    
		1=>'达人选拔 ',
	    2=>'歌手大赛 ',
	    3=>'舞蹈大赛',
	    4=>'器乐大赛',
	    
	    5=>'运动会 ',
	    6=>'趣味运动会 ',
	    7=>'极限运动会',
	    
	    8=>'足球赛',
	    9=>'篮球赛 ',
	    10=>'排球赛',
	    11=>'羽毛球赛',
	    12=>'乒乓球赛',
	    
	   	13=>'公开级',
	    14=>'宿舍级 ',
	    
	    15=>'演讲比赛',
	    16=>'辩论赛',
	    17=>'名人讲座',
	    18=>'品牌宣讲',
	    
	    19=>'公益日主题类',
	    20=>'自发公益活动',
	    21=>'征文',
	    22=>'书画美术',
	    
	    23=>'平面设计',
	    24=>'视频创作',
	    25=>'摄影比赛',
	    26=>'开发竞赛',
	    27=>'美食厨艺',
	    28=>'支教',
	    29=>'市集',
	    30=>'职场模拟',
	);
	public static $media_show= array(
		
		1=>'校园网宣传 ',
	    2=>'校园论坛宣传 ',
	    3=>'校报宣传',
	    4=>'学生/社团杂志刊物宣传',
	    
	    5=>'校园广播电台宣传',
	    6=>'校园电视台宣传 ',
	    7=>'其他校园媒体宣传',
	    
	    8=>'社会媒体宣传',
	    9=>'篮球赛 ',
	);
	public static $material_show= array(
		
		1=>'海报(活动主题)',
	    2=>'横幅 ',
	    3=>'宣传单页',
	    4=>'X展架(活动主题)',
	    5=>'明信片',
	    6=>'喷绘(活动现场背景)',
	    
	    7=>'海报(赞助商)',
	    8=>'X展架(赞助商)',
	    9=>'喷绘(互动签名)',
	    10=>'X展架(互动活动说明)',
	    11=>'喷绘(互动活动)',
	    12=>'互动道具',
	    
	   	13=>'赞助商VCR ',
	    14=>'LOGO充气棒',
	    
	    15=>'迎新手册 ',
	    16=>'景点门票 ',
	    17=>'调查问卷',
	    18=>'活动宣传展板',
	    19=>'赞助商宣传展板',
	);

	public static $spotpeople= array(
	    0=>'100人以下',
		1=>'100-300人 ',
	    2=>'300-500人',
	    3=>'500-800人',
	    4=>'800-1000人',
	    5=>'1000-1500人 ',
	    6=>'1500-2000人 ',
	    7=>'2000人以上',
	);
	
	public static $actionbrand= array(
	    0=>'校级品牌',
		1=>'院级品牌 ',
	    2=>'其它品牌',
	);
	public static $actionlevel= array(
	    0=>'校级',
		1=>'院级 ',
	    2=>'其它',
	);
	public static $scene= array(
		
		1=>'1场 ',
	    2=>'2场',
	    3=>'3场',
	    4=>'4场',
	    
	    5=>'5场',
	    6=>'6场 ',
	    7=>'7场及以上',
	);
	
	public static $playernum= array(
		0=>'100人以下',
	    1=>'100-300人',
	    2=>'300-500人',
	    3=>'500-800人',
	    
	    4=>'800-1000人',
	    5=>'1000-1500人',
	    6=>'1500-2000人',
	    7=>'2000人以上',
	);
	
	public static $manwo= array(
		0=>'男生多于女生',
	    1=>'女生多于男生',
	    2=>'比例大致相同',
	);
	public static $edu= array(
		0=>'大专',
	    1=>'本科',
	    2=>'教师',
	);

	public static $charact= array(
		0=>'大礼堂',
	    1=>'报告厅',
	    2=>'多媒体教室',
	    3=>'室内体育馆',
	    4=>'户外体育场',
	    5=>'校园广场',
	    6=>'食堂门口',
	    7=>'其他',
	);

	public static $location= array(
		0=>'独立的',
	    1=>'行政楼内',
	    2=>'教学楼内',
	    3=>'图书馆内',
	    4=>'宿舍区内',
	    5=>'其他',
	);
	//get where 
	public function getWhere($where=" 1 "){
		if (isset($_POST['area_id']) && !empty($_POST['area_id'])){
			$where.= " and area_id= " .$_POST['area_id'];
		}
		if (isset($_POST['school_id']) && !empty($_POST['school_id'])){
			$where.= " and school_id= " .$_POST['school_id'];
		}
		if (isset($_POST['pstatus']) && $_POST['pstatus'] !== ""){
			$where.= " and pstatus= " .$_POST['pstatus'];
		}
		if (isset($_POST['adtype']) && $_POST['adtype'] !== ""){
			$where.= " and adtype= " .$_POST['adtype'];
		}
		if (isset($_POST['title']) && !empty($_POST['title']) ){
			$where.= " and (title like '%" .trim($_POST['title'])."%' or  trait like '%" .trim($_POST['title'])."%'    )";
		}
		if (isset($_POST['created']) && !empty($_POST['created']) ){
			$num = intval($_POST['created']) ;
			$where.= " and p.created >=  '".date("Y-m-d H:i:s",time()-$num*24*3600)."'";
		}
		return $where ;
	}
	
	public static function getUser($id=null){
		if (empty($id)){
			return false;
		}
		$obj   = new Model_User();
		return  $obj->fetchRow("id=$id");
	}
}