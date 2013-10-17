<div class="login_top"><img src="/public/images/login.jpg" /></div>
<div class="tCenter hMargin">
	<form method='post' name="login" id="form1" >
		<table cellpadding=5 cellspacing=1 id="tbl_login" >
			<tr><td colspan="2" class="title"><?=$this->config['webname']?> -- 后台管理系统</td></tr>
			<tr><td class="blank_line" colspan="2"><div id="result" class="result none"></div></td></tr>
			<tr><td class="tleft">用户名：</td><td class="tright"><input type="text" id="account" class="log_ipt1" name="account" /></td></tr>
			<tr><td class="tleft">密　码：</td><td class="tright"><input type="password" class="log_ipt1" name="password" /></td></tr>
			<tr><td class="tleft">验证码：</td><td class="tright"><input type="text" style="width:100px;" name="verify" onKeyDown="keydown(event)" />
			<div style="width:80px;float:right;">
			<img src="/index/code" name="rand" id="rand" style="cursor:pointer;" onclick="javascript:show(document.getElementById('rand'))" style="margin-left:4px;cursor:default;height: 26px;width: 60px"/> 
			</div>
			</td></tr>
			　
			
			<tr><td class="blank_line" colspan="2"><input type="hidden" name="ajax" value="1"></td></tr>
			<tr><td></td><td><a href="javascript:void(0);" onclick="document.getElementById('form1').submit();"  class="btn_sub_login"></a></td></tr>
		</table>
	</form>
</div>
<script language="JavaScript">
<!--
	//
	function keydown(e){
		var e = e || event;
		if (e.keyCode==13){
			document.getElementById('form1').submit();
		}
	}
	document.getElementById("account").focus();
//-->
</script>