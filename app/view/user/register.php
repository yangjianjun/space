<script src="/public/js/jquery.mailAutoComplete-3.1.js" type="text/javascript"></script>
<!--center-->
<div id="center_zhuce" style="overflow:visible">
	<h1 class="cenh1_a">欢迎加入<?php  echo $this->config['webname'] ;?></h1>
	<div class="centop_b">&nbsp;</div>
	<div class="cenzhuce_left">
		<form action="" method="post" name="regfrom" id="regfrom">
			<span class="zhuce_sp_a">您的Email地址：</span>	
			<input type="text" value="" class="cenzhuce_left_inp_a" name="email" id="email" style="width:210px;" /><span id="emailspan" ></span><br/>
			　　　　　　　&nbsp;<span class="bot_ad">请输入您个人常用的Email地址，接收到确认邮件之后才能完成注册。</span><br/><br/>
			&nbsp;&nbsp;<span class="zhuce_sp_a">设定一个密码：</span>
			<input type="password" value="" class="cenzhuce_left_inp_b" name="password" id="password" /><span id="pwdspan"></span><br/>
			　　　　　　　&nbsp;<span class="bot_ad">请使用英文字母（区分大小写）、符号或数字</span><br/><br/>
			　　<span class="zhuce_sp_a"> &nbsp;重复密码：</span>
			<input type="password" value="" class="cenzhuce_left_inp_b"  name="pwd2" id="pwd2" /><span id="pwd2span"></span><br/>
			　　　　　　　&nbsp;<span class="bot_ad">请使用英文字母（区分大小写）、符号或数字</span><br/><br/>
			　<span class="zhuce_sp_a"> &nbsp;输入验证码：</span>
			
			<input type="text" value="" class="cenzhuce_left_inp_c" name="checknum" id="checknum"/>
			<img src="/index/code" name="rand" id="rand" class="cenzhuce_left_inp_c" style="margin-left:4px;cursor:default;height: 26px;width: 60px"/> <span id="checknumspan"></span><br/>
			　　　　　　　&nbsp;<span class="bot_ad"><a href="javascript:show(document.getElementById('rand'))" class="text_aa">看不清楚，换一张</a></span><br/><br/>
			　　　　　　　&nbsp;<span class="fuwu"><input type="checkbox" name="checkbox" id="checkbox" style="margin-top:-2px;*margin:0px;" checked="checked" value="1"/> 我已经认真阅读并同意活动赞助的《<a href="/help/service" target="_back">服务条款</a>》</span><span id="checkboxspan"></span>
			<div class="clear">&nbsp;</div>
			<a href="javascript:void(0);" class="text_ab" id="register"  style="margin-left:117px;">立即注册</a> 
		</form>					
	</div>
		<div class="cenzhuce_right zhuce">
		<div class="look_this">
			<div class="look_this_text">	
				建议你用个人常用的Email邮箱注册，该邮箱是我们与您就赞助申请进行确认的重要途径。同时，请记住你的账户密码，以保证您能正常使用我们提供的服务。			</div>
		</div>
	</div>
</div>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$(function(){
	var reg_checkemail = function () {
		return	{'url':"/user/checkuser?email="+$("input[type='text'][name='email']").val(),
				'data':{'email':$(":input[name='email]']").val()}}
	}
	var reg_checkverify = function () {
		return	{'url':"/user/checkverify?verify="+$("input[type='text'][name='checknum']").val(),
				'data':{'verify':$(":input[name='checknum]']").val()}}
	}
	var reg_checkbox = function () {
		return	{'url':"/user/checkbox?chk="+$("#checkbox:checked").val(),
				'data':{'verify':$(":input[name='checknum]']").val()}}
	}
	var form_info = [
		{"name":"email", "mod":"match", "act":"blur", "arg":"email", "show_id":"emailspan","show_error":"请填写正确的邮件地址", "must":true},
		{"name":"email", "mod":"ajax", "act":"blur", "arg":reg_checkemail, "show_id":"emailspan","show_error":"该邮箱已被注册", "must":true},
		{"name":"password", "mod":"str", "act":"blur", "arg":"4|32", "show_id":"pwdspan","show_error":"密码长度不足4个字符", "must":true},
		{"name":"pwd2", "mod":"str", "act":"blur", "arg":"4|32", "show_id":"pwd2span","show_error":"密码长度不足4个字符", "must":true},
		{"name":"password", "mod":"equal", "act":"blur", "arg":$(":input[name='pwd2']"), "show_id":"pwd2span","show_error":"两次密码不一致", "must":true},
		{"name":"checknum", "mod":"match", "act":"blur", "arg":"tname", "show_id":"checknumspan","show_error":"请填写验证码", "must":true},
		{"name":"checknum", "mod":"ajax", "act":"blur", "arg":reg_checkverify, "show_id":"checknumspan","show_error":"输入的验证码不正确", "must":true},
		{"name":"checkbox", "mod":"ajax", "act":"blur", "arg":reg_checkbox, "show_id":"checkboxspan","show_error":"必须接受服务条款", "must":true}
	]
	$("#register").pe_submit(form_info, 'regfrom');
})
</script>