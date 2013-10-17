<?php
class Model_Area extends Model
{
	public $tbName	='areas';
	public static $data = array();
	
	//所有城市名，或所有城市 
	public static function getCityArr($id=null){
		if (!empty(self::$data)){
			if (isset(self::$data[$id])){
				return self::$data[$id] ;
			}
			return self::$data ;
		}
		
		$obj = new self();
		$objArr =  $obj->fetchAll("parentid=0",null,"vieworder asc ");
	
		if (empty($objArr)){
			return false ;
		}
		//转化成一维数组
		$data = array();
		foreach ($objArr as $k=>$v) {
			$data[$v['area_id']] = $v['name'];
		}
		if (isset($data[$id])){
			return $data[$id] ;
		}
		return $data ;
	}
}