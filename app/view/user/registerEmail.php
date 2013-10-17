<div id="center_zhuce_daijihuo">
	<h1 class="cenh1_a">欢迎加入<?php  echo $this->config['webname'] ;?></h1>
	<div class="centop_b_b">&nbsp;</div>
	
	<p class="daijih_p_a"><?php  echo $this->config['webname'] ;?>已给您发送了一封激活邮件，<br>请登录<a href="http://mail.<?php echo substr($this->email, stripos($this->email,'@')+1) ?>" class="daijihuo_aa">mail.<?php echo substr($this->email, stripos($this->email, '@')+1) ?></a>收取信件进行激活!</p>
	<span>　　如果长时间没有收到该邮件，请<a href="javascript:void(0)" onclick="sendcode()" class="daijihuo_aa">点击这里</a>重新获取一封激活邮件！<font color="red" size="3"><?php  if($this->msg){echo $this->msg ;}?></font>
	</span>
	<div class="img_c" id="div1">&nbsp;</div>
	<div class="clear">&nbsp;</div>
	<div class="img_b" id="div3">&nbsp;</div>
	<div class="clear">&nbsp;</div>
	<br>
	<div class="clear">&nbsp;</div>
	<div id="div2" style="display: none;margin-left:24px;">
	<div class="line" style="width:460px;">&nbsp;</div>
	<span class="zhuce_sp_a" style="margin:5px 0 2px 0">输入验证码</span><br>
        <div class="clear"></div>
        <form action="/user/sendEmail" method="post" id="sendform" name="sendform">
        	<input name="email" type="hidden" value="<?php echo $this->email ;?>" />
			<input value="" name="checknum" id="checknum" class="cenzhuce_left_inp_c" type="text">
			<img src="/index/code" name="rand" id="rand" class="cenzhuce_left_inp_c" style="margin-left:4px;cursor:default;height:26px;margin:0px;width: 60px" onclick="javascript:show(document.getElementById('rand'))"><span id="checknumspan" style="line-height:26px;margin:0px;">&nbsp;</span>
			<div class="clear">&nbsp;</div>
			<span class="bot_ad">看不清？</span><a href="javascript:show(document.getElementById('rand'))" class="text_aa">换一副</a><br>
			<a href="javascript:void(0);" class="text_ab" style="margin:0px;" id="dosubmit" >提交</a>
			<div class="img_c" id="div1">&nbsp;</div>
			<div class="clear">&nbsp;</div>
			<div class="img_b" id="div3">&nbsp;</div>
			<div class="clear">&nbsp;</div>
			<input type="hidden" name="url" value="/user/registerEmail" />
		</form> 
	</div>
</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
function sendcode() {
	if(document.getElementById("div1").style.display==""){
		document.getElementById("div1").style.display="none"
		document.getElementById("div2").style.display=""
		document.getElementById("div3").style.display="none"
	}else{
		document.getElementById("div1").style.display=""
		document.getElementById("div2").style.display="none"
		document.getElementById("div3").style.display=""
	}	
}
$(function(){
	var reg_checkverify = function () {
		return	{'url':"/user/checkverify?verify="+$("input[type='text'][name='checknum']").val(),
				'data':{'verify':$(":input[name='checknum]']").val()}}
	}
	var form_info = [
		{"name":"checknum", "mod":"match", "act":"blur", "arg":"tname", "show_id":"checknumspan","show_error":"请填写验证码", "must":true},
		{"name":"checknum", "mod":"ajax", "act":"blur", "arg":reg_checkverify, "show_id":"checknumspan","show_error":"输入的验证码不正确", "must":true}
	]
	$("#dosubmit").pe_submit(form_info, 'sendform');
})
</script>