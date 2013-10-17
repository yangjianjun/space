<div id="center_zhuce">
	<h1 class="cenh1_a">欢迎加入<?php  echo $this->config['webname'] ;?></h1>
	<div class="centop_b_c">&nbsp;</div>
	<div class="cenzhuce_left tianxie">
		<h2>激活提示</h2>
		<div class="line">&nbsp;</div>
		<?php 
		if ($this->msg == 1):
		?>
		<span>
			<br />
			<p> 该用户已被激活，不需要再激活！</p>
		</span>
		<?php 
		elseif ($this->msg == 2):
		?>
		<br />
		<p>你的账号已经激活，欢迎你！以后你可以用该账号登陆到<?php  echo $this->config['webname'] ;?>。</p>
		<br/>
		<p>现在请填写你的个人信息，个人信息是必填的。</p>
		<br/>
		<p><?php  echo $this->config['webname'] ;?>采用实名信息，请你如实填写。</p>
		<br/>
		<p>
		<input type="button" value="点击这里填写" class="text_ab" onclick="window.location.href='/user/userinfo1'" />
		</p>
		<?php 
		elseif ($this->msg == 2):
		?>
		<span>
			<br />
			<p> 该用户激活失败，请联系管理员！</p>
		</span>
		<?php 
		endif;
		?>
		
		
	</div>
	<div class="img_c">&nbsp;</div>
	<div class="clear">&nbsp;</div>
	<div class="img_b">&nbsp;</div>
	<div class="clear">&nbsp;</div>
	<div class="clear">&nbsp;</div>
	<br/>
</div>
<div class="clear">&nbsp;</div>
