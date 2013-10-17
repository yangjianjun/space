<div id="center" style="margin-top:62px;">
	<div class="center">
		<div class="center_text">
			<form action="/user/login" method="post" name="loginfrom" id="loginfrom">
			<div class="text_a">
				<h3>您好，欢迎来到赞助宝</h3>
				
				<span>您的Email地址:</span><br/>
				<input type="text"  name="email" id="email" />
				<p id="emailp">&nbsp;</p>
				<span>登录密码:</span><br/>
				<input type="password" name="password" id="password" style="width:175px"  onKeyDown="keydown(event)"   />　
				<a href="/user/fotgetpassword" class="text_aa">忘记密码了？</a>
				<p id="pwdp"><?php echo $this->msg ?$this->msg :'&nbsp;';?></p>
				<a href="javascript:void(0);" id="login" class="text_ab" >登 录</a> 
			</div>
			<div class="text_b">
				<h3><a href="/user/register" style="color:#4C4C4C;font-size:16px;">快速创建一个<font color="#f32800">赞助宝帐号</font>&gt;&gt;</a></h3>
				<a href="javascript:void(0);" style="color:#707070">为什么选择我们？</a><a  target="_back" href="/help/service" style="color:#0066cc;" class="text_b_aa">服务条款</a>
			</div>
			<input type="hidden" name="url" value="<?php echo isset($_GET['url'] )? $_GET['url'] :'';?>" />
			</form>
		</div>
	</div>
</div>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$("#email").focus();
$(function(){
	var form_info = [
		{"name":"email", "mod":"match", "act":"blur", "arg":"email", "show_id":"emailp","show_error":"﹡请输入正确的邮箱地址", "must":true},
		{"name":"password", "mod":"str", "act":"blur", "arg":"1|32", "show_id":"pwdp","show_error":"﹡请输入你的密码", "must":true},
	]
	$("#login").pe_submit(form_info, 'loginfrom');

})

function keydown(e){
	var e = e || event;
	if (e.keyCode==13){
		document.getElementById('loginfrom').submit();
	}
}
</script>