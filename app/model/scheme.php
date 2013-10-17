<?php
class Model_Scheme extends Model
{

	public $tbName	='scheme';
	
	//get where 
	public function getWhere($where=" 1 "){
		if ( isset($_REQUEST['company_name']) && !empty($_REQUEST['company_name']) ) {
			$where 				  .= " and company_name like '%".$_REQUEST['company_name']."%'";
		}
	
		return $where ;
	}
}