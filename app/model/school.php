<?php
class Model_School extends Model
{
	public $tbName	='school';
	public static $data = array();
	
	//所有城市名，或所有城市 
	public static function getSchoolArr($id=null){
		if (!empty(self::$data)){
			if (isset(self::$data[$id])){
				return self::$data[$id] ;
			}
			return self::$data ;
		}
		
		$obj = new self();
		$objArr =  $obj->fetchAll();
	
		if (empty($objArr)){
			return false ;
		}
		//转化成一维数组
		$data = array();
		foreach ($objArr as $k=>$v) {
			$data[$v['school_id']] = $v['school_name'];
		}
		if (isset($data[$id])){
			return $data[$id] ;
		}
		return $data ;
	}
}