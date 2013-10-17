<?php
class Model_Event extends Model
{
	public $tbName	='event';
	
	
	public static $event_type= array(
		'1'=>'校内路演',
	    '2'=>'会议培训',
		'3'=>'讲座 ',
		'4'=>'品牌发布会 ',
		'5'=>'文化演艺  ',
		'6'=>'体育赛事',
		'7'=>'其他',
	);
	
	//get where 
	public function getWhere($where=" 1 "){
		if (isset($_GET['event_type']) && !empty($_GET['event_type'])){
			$where.= " and event_type= " .$_GET['event_type'];
		}
		if (isset($_GET['event_name']) && !empty($_GET['event_name']) &&  $_GET['event_name'] != '场地名称关键词'){
			$where.= " and event_name like '" .$_GET['event_name']."%' ";
		}
		return $where ;
	}
	
	public static function getBread($id=null){
		if (empty($id)){
			return false;
		}
		$obj   = new self();
		$event = $obj->fetchRow("id=$id");
		if(empty($event)){
			return false;
		}
		$url   = "/event/list" ;
		$html  = '<a href="'.$url.'" target="blank">活动 </a> &gt;';
		
		$url  .= '?event_type='.$event['event_type'] ;
		$html .= '<a href="'.$url.'" target="blank">'.self::$event_type[$event['event_type']].' </a> &gt;';
		
		$html .= $event['event_name'];
		
		
		return $html ;
	}
}