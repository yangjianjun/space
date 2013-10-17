<?php
class Model_Config extends Model
{
	public $tbName	='config';

	public static $status= array(
		'1'=>'校园大使',
	);
	//get where 
	public function getWhere($where=" 1 "){
		if (isset($_GET['case_name']) && !empty($_GET['case_name']) &&  $_GET['case_name'] != '场地名称关键词'){
			$where.= " and case_name like '" .$_GET['case_name']."%' ";
		}
		return $where ;
	}
	
}