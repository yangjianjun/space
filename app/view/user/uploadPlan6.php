<style>
.place_z{ width:150px; float:left; text-align:right; padding-right:10px}
.place_y{ width:440px; float:left}
.dei{width:164px; height:auto; float:left;margin-right:30px; display:inline}
</style>
<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<script type="text/javascript"  src="/public/js/htmlEncode.js"></script>
<link type="text/css" href="/public/css/cssdate.css" rel="stylesheet" />
 <script>
	  function checkthis(t){
	  
	  var obj=document.getElementById(t);
	  if(obj.value.Trim()==""){
	  document.getElementById(t+"t").className="";
	  document.getElementById(t+"t").innerHTML="&nbsp;";
	  return
	  }else{
	  document.getElementById(t+"t").className="tis_a a";
	  document.getElementById(t+"t").innerHTML="&nbsp;";
	  }
	  
	  }
	  function checkthis2(t){
	
	  var obj=document.getElementById(t); 
	  document.getElementById(t+"t").className="tis_a a";
	  document.getElementById(t+"t").innerHTML="&nbsp;"
	  
	  }
	   </script>
	   <script>
	  function fmalert(t){
	  document.getElementById(t+"t").className="tis_a";
	  document.getElementById(t+"t").innerHTML="请完整填写此项。";
	  }

	  function fmalert2(t){
		  document.getElementById(t+"t").className="tis_a";
		  document.getElementById(t+"t").innerHTML="请填写数字。";
		  }
	  function checkfm(){
	  if(document.getElementById("plname").value.Trim()==""){
	  fmalert("plname");
	  return;
	  }
	  if(document.getElementById("area").value.Trim()==""){
	  fmalert("area");
	  return;
	  }

	  if(isNaN(document.getElementById("area").value.Trim())){
		  fmalert2("area");
		  return;
		  }

	  if(document.getElementById("seatnum").value.Trim()==""){
		  fmalert("seatnum");
		  return;
		  }
		  if(isNaN(document.getElementById("seatnum").value.Trim())){
			  fmalert2("seatnum");
			  return;
			  }	
	if(document.getElementById("lengths").value.Trim()==""){
				  fmalert("lengths");
				  return;
				  }

	if(isNaN(document.getElementById("lengths").value.Trim())){
					  fmalert2("lengths");
					  return;
					  }

	  	
	    if(document.getElementById("widths").value.Trim()==""){
						  fmalert("widths");
						  return;
						  }

	 if(isNaN(document.getElementById("widths").value.Trim())){
							  fmalert2("widths");
							  return;
							  }	
	    if(document.getElementById("heights").value.Trim()==""){
								  fmalert("heights");
								  return;
								  }

	 if(isNaN(document.getElementById("heights").value.Trim())){
									  fmalert2("heights");
									  return;
									  }	 
	   if(document.getElementById("soundns").value.Trim()==""){
										  fmalert("soundns");
										  return;
										  }

	if(isNaN(document.getElementById("soundns").value.Trim())){
											  fmalert2("soundns");
											  return;
											  }
	if(document.getElementById("mikens").value.Trim()==""){
												  fmalert("mikens");
												  return;
												  }

	if(isNaN(document.getElementById("mikens").value.Trim())){
													  fmalert2("mikens");
													  return;
													  }	
	    if(document.getElementById("projectorns").value.Trim()==""){
														  fmalert("projectorns");
														  return;
														  }

	if(isNaN(document.getElementById("projectorns").value.Trim())){
															  fmalert2("projectorns");
															  return;
															  }
	  
    if(document.getElementById("propagens").value.Trim()==""){
		  fmalert("propagens");
		  return;
		  }

if(isNaN(document.getElementById("propagens").value.Trim())){
			  fmalert2("propagens");
			  return;
			  }


if(document.getElementById("dengns").value.Trim()==""){
	  fmalert("dengns");
	  return;
	  }

if(isNaN(document.getElementById("dengns").value.Trim())){
		  fmalert2("dengns");
		  return;
		  }


if(document.getElementById("nuanqins").value.Trim()==""){
	  fmalert("nuanqins");
	  return;
	  }

if(isNaN(document.getElementById("nuanqins").value.Trim())){
		  fmalert2("nuanqins");
		  return;
		  }
	  document.uploadForm.submit();
	  }
	  </script>
<div id="center_zhuce">
	<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a_b"><img src="/public/images/jdt_6.jpg" /></div>
		<div class="cenzhuce_left tianxie" style="width:600px;">	
		<span style="font-size:16px;color:#d83b38">请填写真实的场地信息</span><br/><br/>
		<div class="line">&nbsp;</div><br/>
		<form action="" method="post" name="uploadForm" id="uploadForm">
			 <div class="place_z">
			     <span class="zhuce_sp_a">活动场地名：</span><br/><br/><br/>
				 <span class="zhuce_sp_a">面积：</span><br/><br/><br/><br/>
				 <span class="zhuce_sp_a">座位数量</span><br/><br/><br/>
				 <span class="zhuce_sp_a">性质</span><br/><br/><br/>
				 <span class="zhuce_sp_a">位置</span><br/><br/><br/>
				 <span class="zhuce_sp_a">舞台长 </span><br/><br/><br/><br/>
				 <span class="zhuce_sp_a">舞台宽 </span><br/><br/><br/>
				 <span class="zhuce_sp_a">舞台高</span><br/><br/><br/><br/>
				 <span class="zhuce_sp_a">音箱数量</span><br/><br/><br/>
				 <span class="zhuce_sp_a">麦克风数量</span><br/><br/><br/><br/>
				 <span class="zhuce_sp_a">投影仪数量</span><br/><br/><br/>
				 <span class="zhuce_sp_a">投影幕布数量</span><br/><br/><br/>
				 <span class="zhuce_sp_a">灯光数量</span><br/><br/><br/><br/>
				 <span class="zhuce_sp_a">暖气数量</span><br/>
			 </div>
			 <div class="place_y">
			   <input type="text"   id="plname" class="cenzhuce_left_inp_a" name="plname" value="<?= isset($this->plan['plname']) ? $this->plan['plname'] : "" ;?>" onblur="checkthis('plname')"/>
			   	<span id="plnamet" ></span><br/>
			 <span class="bot_ad">请正确填写活动所安排场地的名称。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="area" name="area" value="<?= isset($this->plan['area']) ? $this->plan['area'] : "0" ;?>" onblur="checkthis('area')"/>
			   			   <span id="areat" ></span><br/>
			   <span class="bot_ad">场地面积，如没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="seatnum" name="seatnum" value="<?= isset($this->plan['seatnum']) ? $this->plan['seatnum'] : "0" ;?>" onblur="checkthis('seatnum')" />
			   			   <span id="seatnumt" ></span><br/>
			   <span class="bot_ad">座位数量，如没有就写0，不确定写1。</span>
			   <br/><br/>
			   
			 			 <select name="charact" id="charact" class="cenzhuce_left_inp_a" onblur="checkthis('charact')">
			 			   <option value="0"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 0) ? "selected" : "" ;?> >大礼堂</option>
			 			   <option value="1"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 1) ? "selected" : "" ;?> >报告厅</option>
			 			   <option value="2"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 2) ? "selected" : "" ;?> >多媒体教室</option>
			 			   <option value="3"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 3) ? "selected" : "" ;?> >室内体育馆</option>
			 			   <option value="4"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 4) ? "selected" : "" ;?> >户外体育场</option>
						   <option value="5"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 5) ? "selected" : "" ;?> >校园广场</option>
						   <option value="6"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 6) ? "selected" : "" ;?> >食堂门口</option>
						   <option value="7"  <?=(isset($this->plan['charact']) && $this->plan['charact'] == 7) ? "selected" : "" ;?> >其他</option>
			 			 </select>
			 	<span id="charactt" ></span><br/>
			   <span class="bot_ad">场地性质。</span>
			 			 <br/>
			   <br/>
			   <select name="location" id="location" class="cenzhuce_left_inp_a" onblur="checkthis('location')">
			 			   <option value="0" <?=(isset($this->plan['location']) && $this->plan['location'] == 0) ? "selected" : "" ;?> >独立的</option>
			 			   <option value="1" <?=(isset($this->plan['location']) && $this->plan['location'] == 1) ? "selected" : "" ;?> >行政楼内</option>
			 			   <option value="2" <?=(isset($this->plan['location']) && $this->plan['location'] == 2) ? "selected" : "" ;?> >教学楼内</option>
			 			   <option value="3" <?=(isset($this->plan['location']) && $this->plan['location'] == 3) ? "selected" : "" ;?> >图书馆内</option>
						   <option value="4" <?=(isset($this->plan['location']) && $this->plan['location'] == 4) ? "selected" : "" ;?> >宿舍区内</option>
						   <option value="5" <?=(isset($this->plan['location']) && $this->plan['location'] == 5) ? "selected" : "" ;?> >其他</option>
			 	</select>
			 	<span id="locationt" ></span><br/>
			   <span class="bot_ad">场地位置。</span>
			 	
			 	<br/> <br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="lengths" name="lengths" value="<?= isset($this->plan['lengths']) ? $this->plan['lengths'] : "0" ;?>" onblur="checkthis('lengths')"/>
			   <span id="lengthst" ></span><br/>
			   <span class="bot_ad">舞台长度，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="widths" name="widths" value="<?= isset($this->plan['widths']) ? $this->plan['widths'] : "0" ;?>" onblur="checkthis('widths')"/>
			   			   <span id="widthst" ></span><br/>
			   <span class="bot_ad">舞台宽度，如果没有就写0,不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="heights" name="heights" value="<?= isset($this->plan['heights']) ? $this->plan['heights'] : "0" ;?>" onblur="checkthis('heights')"/>
			   			   <span id="heightst" ></span><br/>
			   <span class="bot_ad">舞台高度，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="soundns" name="soundns" value="<?= isset($this->plan['soundns']) ? $this->plan['soundns'] : "0" ;?>" onblur="checkthis('soundns')"/>
			   			   <span id="soundnst" ></span><br/>
			   <span class="bot_ad">音箱数量，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="mikens" name="mikens" value="<?= isset($this->plan['mikens']) ? $this->plan['mikens'] : "0" ;?>" onblur="checkthis('mikens')"/>
			   			   <span id="mikenst" ></span><br/>
			   <span class="bot_ad">麦克风数量，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="projectorns" name="projectorns" value="<?= isset($this->plan['projectorns']) ? $this->plan['projectorns'] : "0" ;?>" onblur="checkthis('projectorns')"/>
			   			   <span id="projectornst" ></span><br/>
			   <span class="bot_ad">投影仪数量，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="propagens" name="propagens" value="<?= isset($this->plan['propagens']) ? $this->plan['propagens'] : "0" ;?>" onblur="checkthis('propagens')"/>
			   			   <span id="propagenst" ></span><br/>
			   <span class="bot_ad">投影幕布数量，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="dengns" name="dengns" value="<?= isset($this->plan['dengns']) ? $this->plan['dengns'] : "0" ;?>" onblur="checkthis('dengns')"/>
			   			   <span id="dengnst" ></span><br/>
			   <span class="bot_ad">灯光数量，如果没有就写0，不确定写1。</span>
			   <br/><br/>
			   <input type="text"   class="cenzhuce_left_inp_a" id="nuanqins" name="nuanqins" value="<?= isset($this->plan['nuanqins']) ? $this->plan['nuanqins'] : "0" ;?>" onblur="checkthis('nuanqins')"/>
			   			   <span id="nuanqinst" ></span><br/>
			   <span class="bot_ad">空调暖气数量，如果没有就写0，不确定写1。</span>
			 </div>		<br/>	 
			 
			 
			<div class="dei">
				<input type="button" class="text_ab" id="text_ab" style="margin-left:20px;width:164px;"  onclick="checkfm()" value="保存并下一步 》" >
			</div>
		  </form>
			
  </div>
</div>

<div class="clear">&nbsp;</div>