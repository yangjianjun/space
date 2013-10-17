<?php
class Model_Img extends Model
{
	public $tbName	='imgs';

	
	//封装delete
	public static function deleteImg($id=null){
		if (empty($id)){
			return false ;
		}
		$where 	= "id = '$id'" ;
		$obj 	= new self();
		$img 	= $obj->fetchRow($where);
		//delete from web
		$imgfile= UPL_PATH."images/".$img['img_name'];
		if (file_exists($imgfile)){
			unlink($imgfile);
		}
		$thumb = UP::getThumb($imgfile);
		if (file_exists($thumb)){
			unlink($thumb);
		}
		//delete from db 
		return $obj->delete($where);
		
	}
	
}