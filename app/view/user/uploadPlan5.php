<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<script type="text/javascript"  src="/public/js/htmlEncode.js"></script>
<link type="text/css" href="/public/css/cssdate.css" rel="stylesheet" />
	<form action="" method="post" name="fm" id="fm">
	<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a_b"><img src="/public/images/jdt_5.jpg" /></div>
		<div class="cenzhuce_left tianxie" style="width:600px;">

		<span class="zhuce_sp_a">　　　　　　　活动场次:&nbsp;</span>
		  <select name="scene" class="cenzhuce_left_inp_a" id="scene"  style="width:130px;" >  
		  
			  <option value="1" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 1) ? "selected" : "" ;?> >1场</option>
			
			  <option value="2" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 2) ? "selected" : "" ;?> >2场</option>
			
			  <option value="3" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 3) ? "selected" : "" ;?> >3场</option>
			
			  <option value="4" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 4) ? "selected" : "" ;?> >4场</option>
			
			  <option value="5" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 5) ? "selected" : "" ;?> >5场</option>
			
			  <option value="6" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 6) ? "selected" : "" ;?> >6场</option>
					
			  <option value="7" <?=(isset($this->plan['scene']) && $this->plan['scene'] == 7) ? "selected" : "" ;?> >7场及以上</option>
			   

			</select>
			<span id="scenet"></span><br/>
			<span class="bot_ad">　　　　　　　　　　　　　　　如一场活动包括3场初赛、2场复赛和1场决赛，则该活动共计场次6场。</span><br/>
			<br/>
			
			<span class="zhuce_sp_a">所有场次累计参与总人数:&nbsp;</span>
		    <select name="playernum" class="cenzhuce_left_inp_a" id="playernum"  style="width:130px;" >              
		  
		      <option value="0" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 0 ) ? "selected" : "" ;?> >100人以下</option>            
			  
		      <option value="1" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 1 ) ? "selected" : "" ;?> >100-300人</option>            
			  
		      <option value="2" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 2 ) ? "selected" : "" ;?> >300-500人</option>            
			  
		      <option value="3" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 3 ) ? "selected" : "" ;?> >500-800人</option>            
			  
		      <option value="4" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 4 ) ? "selected" : "" ;?> >800-1000人</option>            
			  
		      <option value="5" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 5 ) ? "selected" : "" ;?> >1000-1500人</option>            
			  
		      <option value="6" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 6 ) ? "selected" : "" ;?> >1500-2000人</option>            
			  
		      <option value="7" <?=(isset($this->plan['playernum']) && $this->plan['playernum'] == 7 ) ? "selected" : "" ;?> >2000人以上</option>            
				  	
			</select>
			<span id="playernumt">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　　　　　　各个场次累计参加的人数之和。包括选手、嘉宾和观众等所有到达现场者。</span><br/>
			<br/>
			<span class="zhuce_sp_a">　　　参与人群男女比例:&nbsp;</span>
			 <select name="manwo" class="cenzhuce_left_inp_a" id="manwo"  style="width:130px;" >                        
		  
			      <option value="0" <?=(isset($this->plan['manwo']) && $this->plan['manwo'] == 0 ) ? "selected" : "" ;?> >男生多于女生</option>            
					
			      <option value="1" <?=(isset($this->plan['manwo']) && $this->plan['manwo'] == 1 ) ? "selected" : "" ;?> >女生多于男生</option>            
					
			      <option value="2" <?=(isset($this->plan['manwo']) && $this->plan['manwo'] == 2 ) ? "selected" : "" ;?> >比例大致相同</option>            
						
			</select>
			<span id="manwot" >&nbsp;</span>
			<span id="tipsspan">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　　　　　　参加活动者，包括选手、嘉宾和观众等的男女总比例。</span><br/>
			<br/>
			<span class="zhuce_sp_a">　主要参与人群学历水平:&nbsp;</span>
			<select name="edu" class="cenzhuce_left_inp_a" id="edu"  style="width:130px;" >                        
		  
			      <option value="0" <?=(isset($this->plan['edu']) && $this->plan['edu'] == 0 ) ? "selected" : "" ;?> >大专</option>            
					
			      <option value="1" <?=(isset($this->plan['edu']) && $this->plan['edu'] == 1 ) ? "selected" : "" ;?> >本科</option>            
					
			      <option value="2" <?=(isset($this->plan['edu']) && $this->plan['edu'] == 2 ) ? "selected" : "" ;?> >教师</option>            
						
			</select>
			<span id="edut">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　　　　　　参加活动者，包括选手、嘉宾和观众等平均学历水平。</span><br/>
			<br/>
			
			<span class="zhuce_sp_a">　　　　　重要活动嘉宾:&nbsp;</span>
			<input name="leading" type="text"  class="cenzhuce_left_inp_a" id="leading" value="<?= isset($this->plan['leading']) ? $this->plan['leading'] : "" ;?>" />
			<span id="leadingt">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　　　　　　活动有哪些领导或名人参与？名称之间请用“；”隔开。如没有请填写“无”。</span><br/>
			<br/>
			<br/>


			<input type="button" class="text_ab" id="text_ab" style="margin-left:20px;width:164px;" value="保存并下一步 》" >

	
	</div>

	<div class="cenzhuce_right zhuce">
		<div class="look_this">
			<div class="look_this_text">	
				请仔细填写方案内容，你的方案信息越详细，就越容易获得赞助。				</div>
		</div>
	</div>
	</div>
</form>
<div class="clear">&nbsp;</div>	
<script type="text/javascript">
$(function(){
	$("#text_ab").click(function(){
		if(!$.trim($("#leading").val())){
			$("#leadingt" ).html('<span class="tis_a">请完整填写此项。</span>');
			return false ;
		} 
		$("#fm").trigger("submit");
	});
})
</script>