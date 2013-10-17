<?php
class Controller_Help extends Controller
{
	public function Action_index()
	{
		$this->setTitle("帮助中心 -".$this->config['webname']);
	}
	public function Action_aboutus()
	{
		//seo
		$this->setTitle("关于我们-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}

	public function Action_contant()
	{
		//seo
		$this->setTitle("联系我们-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	

	
	
	public function Action_expert()
	{
		//seo
		$this->setTitle("专家顾问-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}

	public function Action_team()
	{
		//seo
		$this->setTitle("运营团队-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	
	public function Action_union_college()
	{
		//seo
		$this->setTitle("联盟高校-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}

	public function Action_support()
	{
		//seo
		$this->setTitle("研究支持-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
	public function Action_service()
	{
		//seo
		$this->setTitle("服务条款-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
		public function Action_links()
	{
		//seo
		$this->setTitle("友情链接-".$this->config['webname']);
		$this->setKeywords($_SESSION['config']['webname']);
		$this->setDescription($_SESSION['config']['webname']);
	}
}