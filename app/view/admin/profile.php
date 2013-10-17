<div id="main" class="main" >
	<div class="content">
		<div id="result" class="result none"></div>
		<div class="title">修改资料</div>
		<div class="fLeft" style="width:90%;float:left">
			<form method='post' id="form" action="">
				<table cellpadding=3 cellspacing=3>
					<tr class="row" ><td class="tRight">管理员：</td><td><input type="text" class="medium bLeftRequire"        name="nickname" value="<?php echo  isset($this->user['nickname'])?$this->user['nickname']:"";?>"><label class="formremind" id="user_tname_show"></label></td></tr>
					<tr class="row" ><td class="tRight">新密码：</td><td><input type="password" class="medium bLeftRequire"    name="password"><label class="formremind" id="user_pw_show">密码由6-16个字符组成!</label></td></tr>
					<tr class="row" ><td class="tRight">确认新密码：</td><td><input type="password" class="medium bLeftRequire" name="password1"><label class="formremind" id="user_pw1_show"></label></td></tr>
					<tr>
						<td></td>
						<td class="center">
							<input type="hidden" name="id" value="" />
							<input type="button" value="保 存" class="submit small"  />
							<input type="reset" class="small submit hMargin" value="清 空" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="/public/js/admin/formcheck.js"></script>
<script type="text/javascript">
$(function(){
var form_info = [
	{"name":"password", "mod":"str", "act":"blur", "arg":"6|12", "show_id":"user_pw_show","show_error":"密码为6-12位字符", "must":true},
	{"name":"password1", "mod":"str", "act":"blur", "arg":"6|12", "show_id":"user_pw1_show","show_error":"确认密码为6-12位字符", "must":true},
	{"name":"password", "mod":"equal", "act":"blur", "arg":$(":input[name='password1']"), "show_id":"user_pw1_show","show_error":"两次密码不一致", "must":true},
	{"name":"nickname", "mod":"match", "act":"blur", "arg":"tname", "show_id":"user_tname_show","show_error":"管理员不能为空，为2-10个字", "must":true}
]
$(":button").pe_submit(form_info, 'form');
})
</script>