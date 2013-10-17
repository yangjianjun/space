<!--menu-->
<style>
#user_xiala_span  {
	paddding:0;
	margin:0;
	width:100px;
	display:block;
	float:left;
}
#user_xiala_span   #user_a{
	width:80px;
	padding-left:30px;
}
#user_xiala_span ul {
	position:absolute;
	width:109px;
	margin-top:-4px;
	padding-top:3px;
	padding-bottom:5px;
	text-align:center;
	background-color:#85cc26;
	display:none;
	clear:both;
}
#user_xiala_span ul li {
	height:21px;
}
*+html #user_xiala_span ul {
	position:absolute;
	width:109px;
	margin-top:20px;
	margin-left:-108px;
	padding-bottom:5px;
	text-align:center;
	background-color:#85cc26;
	display:none;
	clear:both;
}
*+html  #user_xiala_span ul li {
	margin:0;
	padding:0;
	height:20px;
}
*+html  #user_xiala_span ul li a{
	display:block;
	margin:0;
	padding:0;
	margin-top:-3px;
}
#user_xiala_span ul li a {	
	text-decoration:none;
}
#user_xiala_span ul li a:hover {	
	color:#f3c000;
}

</style>
<script type="text/javascript">
$(function(){
	$("#user_xiala_span").mouseover(function(){
		$(this).find("ul").show();
	}).mouseout(function(){
		$(this).find("ul").hide();
	});
});
</script>
<div id="new_menu">
	<div class="new_menu">
		<h2><a href="/index.html"><img src="/public/images/logo.gif" /></a></h2>
		<div style="float:right;display:inline;">
			<div class="new_menu_b">
				<?php 
				if (isset($_SESSION['user'])):
				?>
				<span id="user_xiala_span">
					<a id="user_a" href="/user/index" ><?php 
					$str = substr($_SESSION['user']['email'],0,stripos($_SESSION['user']['email'], '@'));
					$str = substr($str, 0,10); 
					$len = strlen($str) ;
					if ($len<10){
						for ($i = 0; $i < 10-$len; $i++) {
							$str.= '*';
						}
					}
					echo $str;?></a>&nbsp;
					<ul>
						<li><a href="/user/userinfo1">资料修改</a></li>
						<li><a href="/user/password">修改密码</a></li>
						<li><a href="/user/uploadPlanWarn">上传方案</a></li>
						<li><a href="/user/managePlan">管理方案</a></li>
					</ul>
				</span>
				<span class="new_menu_b_spanb">｜</span> 
				<a href="/user/logout">退出</a><span class="new_menu_b_spanb">&nbsp;｜</span>
				<?php 
				else :
				?>
				<a href="/user/login" style="margin-left:34px;">登录</a><span class="new_menu_b_span">　或　</span>
				<a href="/user/registerConsider" >注册</a><span class="new_menu_b_span">　&nbsp;｜　</span>
				<?php 
				endif;
				?>
				<a href="javascript:void(0); " onclick="window.open ('/index/scheme/', 'newwindow', 'height=400, width=600, top=120,left=350, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');" >我要赞助</a><span class="new_menu_b_spanb">&nbsp;｜</span>
				<a href="/help" >帮助</a>
			</div>
			<div class="clear">&nbsp;</div>
			<ul class="new_menu_a">
				<li><a href="/index.html" id="li_1" class="new_menu_aa" <?= $this->action== 'index'? 'style="padding:0 17px 0 16px;background:url(/public/images/new_menu_c_hov.gif) 0 -88px no-repeat;"':'' ?>>首页</a></li>
				
				<li><a href="/index/ambassador.html" id="li_6" class="new_menu_ab" <?= $this->action== 'ambassador'? 'style="padding:0 19px;background:url(/public/images/new_menu_c_hov.gif) 0 -132px no-repeat;"':'' ?> >校园大使</a></li>
	
	
				<li><a href="/index/apply.html" id="li_3" class="new_menu_ab" <?= $this->action== 'apply'? 'style="padding:0 19px;background:url(/public/images/new_menu_c_hov.gif) 0 -132px no-repeat;"':'' ?>  >最新申请</a></li>
				
				
				<li><a href="/index/jingcaishunjian.html" id="li_4" class="new_menu_ab" <?= $this->action== 'jingcaishunjian'? 'style="padding:0 19px;background:url(/public/images/new_menu_c_hov.gif) 0 -132px no-repeat;"':'' ?>  >精彩瞬间</a></li>
				<li><a href="/help/aboutus.html" id="li_5" class="new_menu_ab" <?= $this->action== 'aboutus'? 'style="padding:0 19px;background:url(/public/images/new_menu_c_hov.gif) 0 -132px no-repeat;"':'' ?>  >关于我们</a></li>
			</ul>
		</div>
	</div>
    <script type="text/javascript" src="/public/js/Tools.js"></script>
</div>