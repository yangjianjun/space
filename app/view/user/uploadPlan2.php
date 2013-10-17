<div id="center_zhuce" style="overflow-y:visible; height:500px">
	<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a_b"><img src="/public/images/jdt_2.jpg"></div>
		<div class="cenzhuce_left tianxie" style="width:600px;">
		<br />
		
		<form action="" method="post" id="upform">
			<span class="zhuce_sp_a">活动类型 : </span>

			<select id="adtype" name="adtype" onblur="checkthis2('adtype')">
			
	     		 <option value="1" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 1) ? "selected" : "" ;?> >达人选拔</option>
					
	     		 <option value="2" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 2) ? "selected" : "" ;?> >歌手大赛</option>
					
	     		 <option value="3" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 3) ? "selected" : "" ;?> >舞蹈大赛</option>
					
	     		 <option value="4" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 4) ? "selected" : "" ;?> >器乐大赛</option>
					
	     		 <option value="5" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 5) ? "selected" : "" ;?> >运动会</option>
					
	     		 <option value="6" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 6) ? "selected" : "" ;?> >趣味运动会</option>
					
	     		 <option value="7" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 7) ? "selected" : "" ;?> >极限运动会</option>
					
	     		 <option value="8" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 8) ? "selected" : "" ;?> >足球赛</option>
					
	     		 <option value="9" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 9) ? "selected" : "" ;?> >篮球赛</option>
					
	     		 <option value="10" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 10) ? "selected" : "" ;?> >排球赛</option>
					
	     		 <option value="11" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 11) ? "selected" : "" ;?> >羽毛球赛</option>
					
	     		 <option value="12" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 12) ? "selected" : "" ;?> >乒乓球赛</option>
					
	     		 <option value="13" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 13) ? "selected" : "" ;?> >公开级</option>
					
	     		 <option value="14" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 14) ? "selected" : "" ;?> >宿舍级</option>
					
	     		 <option value="15" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 15) ? "selected" : "" ;?> >演讲比赛</option>
					
	     		 <option value="16" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 16) ? "selected" : "" ;?> >辩论赛</option>
					
	     		 <option value="17" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 17) ? "selected" : "" ;?> >名人讲座</option>
					
	     		 <option value="18" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 18) ? "selected" : "" ;?> >品牌宣讲</option>
					
	     		 <option value="19" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 19) ? "selected" : "" ;?> >公益日主题类</option>
					
	     		 <option value="20" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 20) ? "selected" : "" ;?> >自发公益活动</option>
					
	     		 <option value="21" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 21) ? "selected" : "" ;?> >征文</option>
					
	     		 <option value="22" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 22) ? "selected" : "" ;?> >书画美术</option>
					
	     		 <option value="23" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 23) ? "selected" : "" ;?> >平面设计</option>
					
	     		 <option value="24" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 24) ? "selected" : "" ;?> >视频创作</option>
					
	     		 <option value="25" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 25) ? "selected" : "" ;?> >摄影比赛</option>
					
	     		 <option value="26" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 26) ? "selected" : "" ;?> >开发竞赛</option>
					
	     		 <option value="27" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 27) ? "selected" : "" ;?> >美食厨艺</option>
					
	     		 <option value="28" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 28) ? "selected" : "" ;?> >支教</option>
					
	     		 <option value="29" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 29) ? "selected" : "" ;?> >市集</option>
					
	     		 <option value="30" <?=(isset($this->plan['adtype']) && $this->plan['adtype'] == 30) ? "selected" : "" ;?> >职场模拟</option>
					
			</select>
			<span id="adtypet">&nbsp;</span>
			
			<br /><br />
			<span class="zhuce_sp_a">现场人数:  </span>
			<select id="spotpeople" name="spotpeople" onblur="checkthis2('spotpeople')">
			
				 <option value="0" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 0) ? "selected" : "" ;?> >100人以下</option>
					
				 <option value="1" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 1) ? "selected" : "" ;?> >100-300人</option>
				
				 <option value="2" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 2) ? "selected" : "" ;?> >300-500人</option>
				
				 <option value="3" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 3) ? "selected" : "" ;?> >500-800人</option>
				
				 <option value="4" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 4) ? "selected" : "" ;?> >800-1000人</option>
				
				 <option value="5" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 5) ? "selected" : "" ;?> >1000-1500人</option>
				
				 <option value="6" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 6) ? "selected" : "" ;?> >1500-2000人</option>
				
				 <option value="7" <?=(isset($this->plan['spotpeople']) && $this->plan['spotpeople'] == 7) ? "selected" : "" ;?> >2000人以上</option>
			</select>
  			<span id="spotpeoplet" style="margin-left:21px;">&nbsp;</span>
			
			<br /><br />
			<span class="zhuce_sp_a">活动品牌:  </span>
			<select id="actionbrand" name="actionbrand" onblur="checkthis2('actionbrand')">
			
				<option value="0"  <?=(isset($this->plan['actionbrand']) && $this->plan['actionbrand'] == 0) ? "selected" : "" ;?> >校级品牌</option>
					
				<option value="1" <?=(isset($this->plan['actionbrand']) && $this->plan['actionbrand'] == 1) ? "selected" : "" ;?>>院级品牌</option>
					
				<option value="2" <?=(isset($this->plan['actionbrand']) && $this->plan['actionbrand'] == 2) ? "selected" : "" ;?>>其它品牌</option>		            
			</select>
			<span id="actionbrandt" style="margin-left:6px;*margin-left:11px">&nbsp;</span>
			
			<br /><br />
			<span class="zhuce_sp_a">活动级别:  </span> 
			<select id="actionlevel" name="actionlevel" onblur="checkthis2('actionlevel')">
			
				 <option value="0" <?=(isset($this->plan['actionlevel']) && $this->plan['actionlevel'] == 0) ? "selected" : "" ;?> >校级</option>
					
				 <option value="1" <?=(isset($this->plan['actionlevel']) && $this->plan['actionlevel'] == 1) ? "selected" : "" ;?> >院级</option>
					
				 <option value="2" <?=(isset($this->plan['actionlevel']) && $this->plan['actionlevel'] == 2) ? "selected" : "" ;?> >其它</option>
										       
			</select>
			<span class="tis_a a" id="actionlevelt" style="margin-left:4px;*margin-left:14px">&nbsp;</span>
			
			<br />
			<br />
			<a href="javascript:void(0);" class="text_ab" style="margin-left:20px;width:164px;" onclick="$('#upform').trigger('submit');">保存并下一步 》</a> 
		</form>
	</div>
</div>