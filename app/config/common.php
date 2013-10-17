<?php
//网站基本seo
return array(
	'mail'		=>"kefu@zanzhubao.com",
	'qq'		=>"4132290",
	/*客服电话*/
	'phone'    	=>'021-67625322',
	/*传真*/
	'fax'    	=>'021-67625322',
	/*邮编*/
	'zip'		=>'201620',
	'mobile'    =>'150 000 83530',
	'address'   =>'上海市松江大学城弘翔路556弄',
	'company'   =>'上海观圣文化传播有限公司',

    'webRecord' =>'沪ICP备09077244号-4',

	'webname'   =>'赞助宝',
	'domain'    =>'www.zanzhubao.com',



    //首页画图设置 :方案通过审核比例
    'approved'   =>'55',
    //首页画图设置:方案取得赞助比例 
	'getSponsor' =>'89',



	'email'     =>array(
					'smtp_host' => "smtp.qq.com",
					'smtp_user' => "zanzhubao_kefu@qq.com ",
					'smtp_pass' => "zanzhubao",
					'from'      => "zanzhubao_kefu@qq.com ",
					'fromName'  => "赞助宝",


					'subject'	=>'',
					'content'	=>'',

					'sTestEmail'   =>'验证邮箱 赞助宝',
					'cTestEmail'   =>'<p>亲爱的赞助宝用户，您好：</p>
									<p>欢迎加入赞助宝！请您在收到此邮件的24小时内激活您的关联邮箱，完善网站资料信息，提升账户安全等级。</p>
									<p>使用此链接验证您的账号：</p>
									<p>%s</p>
									<p>赞助宝尊重您的个人隐私，祝您使用愉快！</p>
									<p>赞助宝用户中心（'.(isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'').'） </p>',



					'sFotgetpwd'   =>'找回密码 赞助宝',
					'cFotgetpwd'   =>'<p>尊敬的用户，您在赞助宝上注册账号所对应的密码是：%s 请妥善保管。</p>',
	),


	//不需要备份的表
	'nobackup'  => array(
		'areas',
		'school',
		'college'
	)
);