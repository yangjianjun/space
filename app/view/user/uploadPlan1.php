<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<script type="text/javascript"  src="/public/js//htmlEncode.js"></script>
  <link type="text/css" href="/public/css/cssdate.css" rel="stylesheet" />
  <script>
  $(function() {
	
	$('#datepicker2').datepicker({
		numberOfMonths: 2,
		dateFormat:"yy-mm-dd",
		showButtonPanel: true,
		minDate: 0,
		maxDate: 300
	});
	
	$('#datepicker3').datepicker({
		numberOfMonths: 2,
		dateFormat:"yy-mm-dd",
		showButtonPanel: true,
		minDate: 0,
		maxDate: 300
	});
	
	
	$("#datepicker2").datepicker();
	$("#format").change(function() { $('#datepicker2').datepicker('option', {dateFormat: $(this).val()}); });
});


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
  function fmalert(t){
  document.getElementById(t+"t").className="tis_a";
  document.getElementById(t+"t").innerHTML="请完整填写此项。";
  }
  function checkfm(){
  if(document.getElementById("title").value.Trim()==""){
  fmalert("title");
  return;
  }
  if(document.getElementById("trait").value.Trim()==""){
  fmalert("trait");
  return;
  }
    if(document.getElementById("datepicker2").value.Trim()==""){
  fmalert("datepicker2");
  return;
  }
    if(document.getElementById("datepicker3").value.Trim()==""){
  fmalert("datepicker3");
  return;
  }
  document.fm.submit();
  }
  </script>

<form action="" method="post" name="fm" id="fm">
	<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a"><img src="/public/images/jdt_1.jpg" /></div>		
		<div class="cenzhuce_left tianxie" style="width:600px;">
			<span class="zhuce_sp_a">　　　活动名称:&nbsp;</span>
			<input  name="title" class="cenzhuce_left_inp_a" id="title" onblur="checkthis('title')" value="<?php echo  isset($this->plan['title']) ? $this->plan['title']: "" ;?>"  type="text">
			<span id="titlet"></span><br>
			<span class="bot_ad">　　　　　　　　　　本次活动的名称。</span><br><br>
			
			
			<span class="zhuce_sp_a">　　　活动季节:&nbsp;</span>
		    <select name="actionseason" class="cenzhuce_left_inp_a" id="type" style="width:130px;" onblur="checkthis2('type')">
	      		  <option value="1" <?= (isset($this->plan['actionseason']) && $this->plan['actionseason'] == 1) ? "selected" : "" ;?> >开学季</option>
	       	      <option value="2" <?= (isset($this->plan['actionseason']) && $this->plan['actionseason'] == 2) ? "selected" : "" ;?>>毕业季</option>            
	      	      <option value="3" <?= (isset($this->plan['actionseason']) && $this->plan['actionseason'] == 3) ? "selected" : "" ;?>>节日季</option>            
	      	      <option value="4" <?= (isset($this->plan['actionseason']) && $this->plan['actionseason'] == 4) ? "selected" : "" ;?>>一般时期</option>            
			</select>
			<span id="typet">&nbsp;</span><br>
			<span class="bot_ad">　　　　　　　　　　本次活动的季节。</span><br><br>
			
			<span class="zhuce_sp_a">　　活动关键字:&nbsp;</span>
			<input name="trait" type="text" class="cenzhuce_left_inp_a" id="trait" value="<?php echo  isset($this->plan['trait']) ? $this->plan['trait']: "" ;?>"   onblur="checkthis('trait')"/>
			<span id="traitt" >&nbsp;</span>
			<span id="tipsspan">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　本次活动的特征描述，如“体育”“音乐”等，多个关键字以“，”隔开。</span><br/><br/>
			<span class="zhuce_sp_a">　活动开始时间:&nbsp;</span>
			<input name="time_start" type="text" class="cenzhuce_left_inp_a" id="datepicker2" value="<?php echo  isset($this->plan['time_start']) ? $this->plan['time_start']: "" ;?>" readonly="readonly" style="cursor:auto" onblur="checkthis('datepicker2')"/>
			<span id="datepicker2t">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　本次活动举行的开始日期。</span><br/><br/>
			<span class="zhuce_sp_a">　活动结束时间:&nbsp;</span>
			<input name="time_end" type="text" class="cenzhuce_left_inp_a" id="datepicker3" value="<?php echo  isset($this->plan['time_end']) ? $this->plan['time_end']: "" ;?>" readonly="readonly"  style="cursor:auto" onblur="checkthis('datepicker3')"/>
			<span id="datepicker3t">&nbsp;</span><br/>
			<span class="bot_ad">　　　　　　　　　　本次活动举行的结束日期。</span><br/><br/>
			

			<a href="javascript:void(0);" class="text_ab" style="margin-left:20px;width:164px;" onclick="checkfm()">保存并下一步 》</a> 
	
		</div>
		<div class="cenzhuce_right zhuce">
			<div class="look_this">
				<div class="look_this_text">	
					请真实的填写活动信息。如果<?php echo $this->config['webname'];?>在任何时间发现你虚报了信息，都有权利收回赞助，并追究你的责任。				</div>
			</div>
		</div>
		</div>
<div class="clear">&nbsp;</div>

</form>