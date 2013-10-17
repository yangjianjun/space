<script type="text/javascript">
	function ul_fangan_a(sbb){
		var va = document.getElementById('ul_fangan').getElementsByTagName('a');
		for (var i=0;i<va.length;i++)
		{
			va[i].style.cssText="";
		}
			va[sbb].style.cssText="background-color:#f4f4f4"
	}
</script>
<div id="center"  style="height:440px;">
	<div id="tishi">
		<h2 class="h2_yes">密码已通过邮件发送至您的邮箱，请登录<a href="http://mail.<?php echo substr($this->email, stripos($this->email, '@')+1) ?>">mail.<?php echo substr($this->email, stripos($this->email, '@')+1) ?></a>查看。</h2>
		
		<div class="img_c">&nbsp;</div>
					<div class="clear">&nbsp;</div>
		<div class="img_b">&nbsp;</div>
					<div class="clear">&nbsp;</div>
		<h3>下面有一些建议</h3>
		<span>如果长时间没收到邮件的话，请查看您的邮箱，是否被当做垃圾邮件处理了<br/>或者点击<a href="javascript:window.history.back()"> 返回</a> 重新发送一封</span>
		
	</div>
</div>
	