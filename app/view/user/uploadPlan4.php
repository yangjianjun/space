<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<script type="text/javascript"  src="/public/js/htmlEncode.js"></script>
<link type="text/css" href="/public/css/cssdate.css" rel="stylesheet" />
<form action="" method="post" name="fm" id="fm">
<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a_b"><img src="/public/images/jdt_4.jpg" /></div>
		<div class="cenzhuce_left tianxie" style="width:600px;">
<br/>
<span style="font-size:16px;color:#d83b38">请选择并完整填写本次活动可进行的媒体宣传</span><br/><br/>
<div class="line">&nbsp;</div><br/>
			
<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(1,$this->plan['media_show']) ? "checked":"") ?>  value="1" style="margin-top:-2px;*margin:0px;"    /> 校园网宣传</span><span class="bot_ad">　你是否能在 校园网 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(2,$this->plan['media_show']) ? "checked":"") ?>  value="2" style="margin-top:-2px;*margin:0px;"    /> 校园论坛宣传</span><span class="bot_ad">　你是否能在 校园论坛 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(3,$this->plan['media_show']) ? "checked":"") ?>  value="3" style="margin-top:-2px;*margin:0px;"    /> 校报宣传</span><span class="bot_ad">　你是否能在 校报 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(4,$this->plan['media_show']) ? "checked":"") ?>  value="4" style="margin-top:-2px;*margin:0px;"    /> 学生/社团杂志刊物宣传</span><span class="bot_ad">　你是否能在 学生/社团杂志刊物 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(5,$this->plan['media_show']) ? "checked":"") ?>  value="5" style="margin-top:-2px;*margin:0px;"    /> 校园广播电台宣传</span><span class="bot_ad">　你是否能在 校园广播电台 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(6,$this->plan['media_show']) ? "checked":"") ?>  value="6" style="margin-top:-2px;*margin:0px;"    /> 校园电视台宣传</span><span class="bot_ad">　你是否能在 校园电视台 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(7,$this->plan['media_show']) ? "checked":"") ?>  value="7" style="margin-top:-2px;*margin:0px;"    /> 其他校园媒体宣传</span><span class="bot_ad">　你是否能在 其他校园媒体 对本活动宣传？如果有请选择。</span><br/>
</div>	
<div class="clear">&nbsp;</div>
<br/>

<div class="line">&nbsp;</div><br/>

<div style="height:26px;overflow:hidden;">
<span class="fuwu ac"><input type="checkbox" name="media_show[]"  <?=(isset($this->plan['media_show']) && in_array(8,$this->plan['media_show']) ? "checked":"") ?>  value="8" style="margin-top:-2px;*margin:3px;"   /> 社会媒体宣传</span><span class="bot_ad">　本次活动是否能在社会媒体上进行推广？如果有请选择该项并进行说明。</span><br/>
</div>	
	


			
			
<br/>
<input type="submit" class="text_ab" style="margin-left:20px;width:164px;" value="保存并下一步 》" >
	
</div>

<div class="cenzhuce_right zhuce">
	<div class="look_this">
		<div class="look_this_text">	
			这些选项不是必填的，请根据实际情况进行填写，活动资料越丰富越容易获得赞助。				</div>
	</div>
</div>
</div>
</form>
<div class="clear">&nbsp;</div>