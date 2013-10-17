<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<link type="text/css" href="/public/css/cssdate.css" rel="stylesheet" />
<script type="text/javascript">
		//图片按比例缩放
		var flag = false;
		function DrawImage(ImgD, iwidth, iheight) {
				//参数(图片,允许的宽度,允许的高度)
				//alert("width"+iwidth+"---height:"+iheight);
				//alert("width"+ImgD.width+"---height:"+ImgD.height);
				var image = new Image();
					image.src = ImgD.src;
				if (image.width > 0 && image.height > 0) {
						flag = true;
						//alert("width"+image.width+"---height:"+image.height);//147  98
						if (image.width / image.height >= iwidth / iheight) {
								if (image.width > iwidth) {
										ImgD.width = iwidth;
										ImgD.height = (image.height * iwidth) / image.width;
									} else {
										ImgD.width = image.width;
										//修改高度
										ImgD.height = iheight;
									}
							ImgD.alt = image.width + "×" + image.height;
						}else {
								if (image.height > iheight) {
									ImgD.height = iheight;
									ImgD.width = (image.width * iheight) / image.height;
								} else {
										ImgD.width = image.width;
										ImgD.height = image.height;
								}
								ImgD.alt = image.width + "×" + image.height;
							}
				}
		}
</script>
<!-- javascript -->

<!--center-->
<form action="" method="post" id="regcomfrom" name="regcomfrom">
<div id="geren_wei">
	<h2 class="geren_h2_a">欢迎回来，<?=$this->user['realname']?></h2>
</div>
<div id="geren_cent">
	<?php 
	include_once 'profile.php';
	?>
	<div class="geren_cent_right">
			<h2 style="font-size:16px;font-weight:bold">账户信息 </h2>
			<div class="line">&nbsp;</div>
			<div class="xgmm"><br/>
				<span class="zhuce_sp_a">您的Email地址:&nbsp;</span>
				<input value="<?=$this->user['password']?>" id="oldPwd" name="oldPwd" class="cenzhuce_left_inp_a" style="border:none" type="hidden">
				<input value="<?=$this->user['email']?>" class="cenzhuce_left_inp_a" style="border:none" type="text"><br><br><br>
				<span class="zhuce_sp_a">　　输入旧密码:&nbsp;</span>
				<input type="password" name="oldPwdInput" id="oldPwdInput" class="cenzhuce_left_inp_a" /><span id="userPassspan"></span><br/>
				<span class="bot_ad">　　　　　　　　　　请使用英文字母（区分大小写）、符号或数字</span><br/><br/>
				<span class="zhuce_sp_a">　　设定新密码:&nbsp;</span>
				<input type="password" name="password" id="password" class="cenzhuce_left_inp_a" /><span id="newuserPassspan"></span><br/>
				<span class="bot_ad">　　　　　　　　　　请使用英文字母（区分大小写）、符号或数字</span><br/><br/>
				<span class="zhuce_sp_a">　　重复新密码:&nbsp;</span>
				<input type="password" name="password2" id="password2" class="cenzhuce_left_inp_a" /><span id="newuserPassspan2"></span><br/>
				<span class="bot_ad">　　　　　　　　　　请使用英文字母（区分大小写）、符号或数字。</span><br/><br/>
				<span class="zhuce_sp_a">　　输入验证码:</span>
				<input type="text" value="" class="cenzhuce_left_inp_c"  style="margin-left:4px;cursor:default;" name="checknum" id="checknum" />
				<img src="/index/code" name="rand" id="rand" class="cenzhuce_left_inp_c" style="margin-left:4px;cursor:default;height: 26px;width: 60px" onClick="javascript:show(document.getElementById('rand'))"/> <span id="checknumspan"></span><br/>
				<span class="bot_ad">　　　　　　　　　　看不清？</span><a href="javascript:show(document.getElementById('rand'))" class="text_aa">换一副</a>
				<a href="javascript:void(0)" class="text_ab_a" >修改</a> 
			</div>
			<div class="clear">&nbsp;</div>
		</div>
</div>
</form>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$(function(){
	var reg_checkverify = function () {
		return	{'url':"/user/checkverify?verify="+$("input[type='text'][name='checknum']").val(),
				'data':{'verify':$(":input[name='checknum]']").val()}}
	}
	var form_info = [
		{"name":"oldPwdInput","mod":"equal", "act":"blur", "arg":$("#oldPwd"), "show_id":"userPassspan","show_error":"旧密码不正确，不能修改!", "must":true},
		{"name":"password", "mod":"str", "act":"blur", "arg":"4|18", "show_id":"newuserPassspan","show_error":"密码长度为4-18个字符", "must":true},
		{"name":"password2","mod":"equal", "act":"blur", "arg":$(":input[name='password']"), "show_id":"newuserPassspan2","show_error":"两次密码不一致", "must":true},
		{"name":"checknum", "mod":"match", "act":"blur", "arg":"tname", "show_id":"checknumspan","show_error":"请填写验证码", "must":true},
		{"name":"checknum", "mod":"ajax", "act":"blur", "arg":reg_checkverify, "show_id":"checknumspan","show_error":"输入的验证码不正确", "must":true},
	]
	$(".text_ab_a").pe_submit(form_info, 'regcomfrom');
})
</script>