<?php
class Controller_Scheme extends Controller
{
	public function Action_index()
	{
		//seo
		$this->setTitle("搜索方案  -".$this->config['webname']);
		$this->setKeywords($this->config['webname']);
		$this->setDescription($this->config['webname']);
		
		
		//得到所有方案
		$obj 		= new Model_Plan();
		   //创建分页对象
		$where = $obj->getWhere();
		
		$sql = "select p.*,u.area_id,u.school_id,u.realname from plan p 
				LEFT JOIN users u on p.user_id =u.id  where " .$where;
        
        $list = $obj->db->query($sql);
		$this->view->list = $list ;
	}
	public function Action_detail()
	{
		$this->setLayout("detaillayout");
		$obj 		= new Model_Plan();
		$id = $this->getParam("id");
		if (empty($id)){
			return false ;
		}
		
		$sql = 'select p.*,u.area_id,u.school_id,u.realname,u.area_id,u.school_id from plan p 
				LEFT JOIN users u on p.user_id =u.id where p.id='.$id;

	
		$plan  = $obj->db->getOneResult($sql);
		$this->view->plan = $plan ;
		//seo
		$this->setTitle($plan['title']." -".$this->config['webname']);
		$this->setKeywords($this->config['webname']);
		$this->setDescription($this->config['webname']);
	}

}