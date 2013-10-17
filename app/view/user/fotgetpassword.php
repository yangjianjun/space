<script src="/public/js/jquery.mailAutoComplete-3.1.js" type="text/javascript"></script>
<div id="center_zhuce" style="height:470px;">
<h1 class="cenh1_a">找回密码，我们将把密码发送至您的邮箱：</h1>
<div class="cenzhuce_left" style="margin-top:20px;">
<form action="/user/sendEmail" method="post" id="zhaohuifrom" name="zhaohuifrom">
	<span class="zhuce_sp_a">你的Email地址:</span>
	<input type="text" value="" class="cenzhuce_left_inp_a" name="email" id="email"   onblur="getSession();"/><span id="emailspan" ></span><br/>
	<span class="bot_ad">　　　　　　　　　请输入您个人常用的Email地址，接收到确认邮件之后才能完成注册。</span><br/><br/>
	<span class="zhuce_sp_a">　 &nbsp;&nbsp;输入验证码:</span>
	<input type="text" value="" class="cenzhuce_left_inp_c" name="checknum"  id="checknum"/>
	<img src="/index/code"  onclick="javascript:this.src='/index/code?tm='+Math.random();" name="rand" id="rand" class="cenzhuce_left_inp_c" style="margin-left:4px;cursor:default;height: 26px;width: 60px"/> <span id="checknumspan"></span><br/>
	<span class="bot_ad"><a href="javascript:show(document.getElementById('rand'));" class="text_aa">看不清，换一张</a></span>
	<div class="clear" style="height:12px;">&nbsp;</div>
	<input type="hidden" name="url" value="/user/fotgetpasswordsuccess" />
	<a href="javascript:void(0);" class="text_ab_a" id="zhaohui" >立即找回</a> 
	</form>						
	</div>
	<div class="cenzhuce_right zhuce">
		<div class="look_this">
			<div class="look_this_text">	
				如果该电子邮箱地址不正确，或者你已经忘记注册时填写的邮箱地址，那我们无法帮你找回密码，建议创建一个新账户。
			</div>
		</div>
	</div>
</div>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$(function(){
	var reg_checkemail = function () {
		return	{'url':"/user/checkuser?flag=1&email="+$("input[type='text'][name='email']").val(),
				'data':{'email':$(":input[name='email]']").val()}}
	}
	var reg_checkverify = function () {
		return	{'url':"/user/checkverify?verify="+$("input[type='text'][name='checknum']").val(),
				'data':{'verify':$(":input[name='checknum]']").val()}}
	}
	var form_info = [
		{"name":"email", "mod":"match", "act":"blur", "arg":"email", "show_id":"emailspan","show_error":"请填写正确的邮件地址", "must":true},
		{"name":"email", "mod":"ajax", "act":"blur", "arg":reg_checkemail, "show_id":"emailspan","show_error":"sorry,没有找到相对应的账号！", "must":true},
		{"name":"checknum", "mod":"match", "act":"blur", "arg":"tname", "show_id":"checknumspan","show_error":"请填写验证码", "must":true},
		{"name":"checknum", "mod":"ajax", "act":"blur", "arg":reg_checkverify, "show_id":"checknumspan","show_error":"输入的验证码不正确", "must":true}
	]
	$("#zhaohui").pe_submit(form_info, 'zhaohuifrom');
})
</script>