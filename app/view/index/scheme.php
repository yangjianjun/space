<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>我要赞助 - 赞助宝</title>
<link href="/public/css/mycss.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="/public/js/jquery.js"></script>
<script language="javascript" src="/public/js/jquery.maxlength.min.js"></script>
<style>
	.sign_up_ul li{text-align:center;padding:14px 24px;width:110px;font-size:12px;color:#333;line-height:20px;float:left;display:inline;_padding-bottom:1px;}
	.sign_up_ul li a{font-size:14px;color:#333;line-height:24px;_float:left;display:inline;width:360px;_width:102px;}
	.sign_up_ul em{display:block;width:65px;height:65px;margin:auto;padding:1px;border:1px #717171 solid;overflow:hidden;}
	.sign_up_ul img{width:63px;height:63px;display:block;margin:0 auto 6px;}
</style>
<script language="javascript" src="/public/js/common.js"></script>
</head>
<body>
<div id="center_zhuce"  style="width:550px;" >
	<h1 class="cenh1_a">欢迎提交赞助需求</h1>
	<div class="clear" style="margin-top:10px;">&nbsp;</div>
	<div class="cenzhuce_left" style="margin-left:60px;">
		<form action="" method="post" name="regfrom" id="regfrom">
			<span class="zhuce_sp_a">公司名称：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="company_name" id="company_name" style="width:210px;" type="text"   ><span id="company_namespan"><span class="bot_ad">&nbsp;&nbsp;请输入您的公司名称</span></span><br>
		
		
		
			<span class="zhuce_sp_a">您的职位：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="job" id="job" style="width:210px;" type="text"   ><span id="jobspan"><span class="bot_ad">&nbsp;&nbsp;请输入您在公司的职位</span></span><br>

			
			<span class="zhuce_sp_a">联系地址：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="address" id="address" style="width:210px;" type="text"  ><span id="addressspan"><span class="bot_ad">&nbsp;&nbsp;请输入您常用的联系地址</span></span><br>
	
			
			<span class="zhuce_sp_a">您的姓名：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="name" id="name" style="width:210px;" type="text"   ><span id="namespan"><span class="bot_ad">&nbsp;&nbsp;请输入您的姓名</span></span><br>

			
			
			
			<span class="zhuce_sp_a">您的手机：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="mobile" id="mobile" style="width:210px;" type="text"   ><span id="mobilespan"><span class="bot_ad">&nbsp;&nbsp;请输入您的手机</span></span><br>

			
			<span class="zhuce_sp_a">您的座机：</span>	
			<input value="" class="cenzhuce_left_inp_a" name="phone" id="phone" style="width:210px;" type="text"   ><span id="phonespan"><span class="bot_ad">&nbsp;&nbsp;请输入您的座机</span></span><br>

			
			<span class="zhuce_sp_a">赞助描述：</span>	
			<textarea class="cenzhuce_left_inp_a" name="memo" id="memo"  style="width:206px;height:80px;"></textarea><span id="memospan"><span class="bot_ad">&nbsp;&nbsp;请输入赞助描述</span></span><br>

			<div class="clear">&nbsp;</div>
			<a href="javascript:void(0);" class="text_ab" id="register" style="margin-left:117px;">立即提交</a> 
		</form>					
	</div>
</div>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$(function(){
	var form_info = [
		{"name":"company_name", "mod":"match", "act":"blur", "arg":"com", "show_id":"company_namespan","show_error":"请输入您的公司名称", "must":true},
		{"name":"address", "mod":"match", "act":"blur", "arg":"com", "show_id":"addressspan","show_error":"请输入您常用的联系地址", "must":true},
		{"name":"name", "mod":"match", "act":"blur", "arg":"tname", "show_id":"namespan","show_error":"请输入您的姓名", "must":true},

		{"name":"memo", "mod":"match", "act":"blur", "arg":"noempty", "show_id":"memospan","show_error":"请输入赞助描述", "must":true},
		{"name":"mobile", "mod":"match", "act":"blur", "arg":"phone", "show_id":"mobilespan","show_error":"请输入正确的手机号", "must":true},
	]
	$("#register").pe_submit(form_info, 'regfrom');
})
</script>
</body>
</html>