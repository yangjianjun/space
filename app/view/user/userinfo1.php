<form action="" method="post" id="regcomfrom" name="regcomfrom">
<div id="center_zhuce">
	<h1 class="cenh1_a">欢迎加入<?php echo $this->config['webname'];?></h1>
	<div class=" ">&nbsp;</div>
	<div class="cenzhuce_left tianxie">
		
		<h2>基本信息</h2>
		<div class="line">&nbsp;</div>
		
		<span class="zhuce_sp_a">姓名:</span><br/>
		<input type="text" name="realname" id="realname" class="cenzhuce_left_inp_b" value="<?php echo isset($this->user['realname']) ?$this->user['realname']: "" ;?>" /><span id="realnamespan"></span><br/>
		<span class="bot_ad">请输入你的真实姓名。</span><br/>
		
	
		<span class="zhuce_sp_a">身份证号码</span><br/>
		<input type="text" class="cenzhuce_left_inp_a"  id="idcard" name="idcard" value="<?php echo isset($this->user['idcard']) ?$this->user['idcard']: "" ;?>" /><span id="idcardspan"></span><br/>
		<span class="bot_ad">请填写18位的身份证号。</span><br/>
		
		<span class="zhuce_sp_a">户籍地址:</span><br/>
		<input type="text" name="homeaddr" id="homeaddr" value="<?php echo isset($this->user['homeaddr']) ?$this->user['homeaddr']: "" ;?>" class="cenzhuce_left_inp_a" /><span id="homeaddrspan"></span><br/>
		<span class="bot_ad">请输入你的户籍地址。</span><br/>
			
		<br/>
		<h2>学校信息</h2>
		<div class="line">&nbsp;</div>
		<input type="hidden" id="param" area_id="<?php echo isset($this->user['area_id'])?$this->user['area_id']:'';?>" school_id="<?php echo isset($this->user['school_id'])?$this->user['school_id']:'';?>" />
		<span class="zhuce_sp_a">所在城市:</span><br/>
		<select name="area_id" style="width:160px">
		<option value="">请选择</option>
		<?php 
		foreach ($this->areas as $area) {
			$selected = (isset($this->user['area_id']) && $this->user['area_id'] == $area['area_id']? 'selected':'' );
			echo '<option value="'.$area['area_id'].'" '.$selected.'  >'.$area['name'].'</option>';
		}
		?>
        </select>
        <span id="area_idspan"></span>
        <br/>
        <span class="bot_ad">请选择你所在城市。</span>
		<br/>
        
		<span class="zhuce_sp_a">所在的大学:</span><br/>
		<select name="school_id" style="width:160px">
		<option value="">请选择</option>
        </select>
        <span id="school_idspan"></span>
        <br/>
		<span class="bot_ad">请选择你所在大学。</span>
		<br/>
			
		<span class="zhuce_sp_a">院系/部门:</span><br/>
        <div id="showacademy">
			<input type="text" name="college" id="college" value="<?php echo isset($this->user['college']) ?$this->user['college']: "" ;?>" class="cenzhuce_left_inp_b" />
			<span id="academyspan"></span>
        </div>
		<span class="bot_ad">填写你所在的院系/部门。</span><br/>
			
		<span class="zhuce_sp_a"> 院系人数:</span><br/>
		<input type="text" name="college_num" id="college_num" value="<?php echo isset($this->user['college_num']) ?$this->user['college_num']: "" ;?>" class="cenzhuce_left_inp_b" />
		<span id="academynumsspan"></span><br/>	
		<span class="bot_ad">请输入你所在院系人数（数字）。</span><br/>
		 
		 
		<span class="zhuce_sp_a">学历水平</span><br/>
		<?php 
		echo Common::getSelect("education_class",Model_User::$education_class,array(
			'id'	=>(isset($this->user['education_class'])? $this->user['education_class']:''),
			'class' =>'cenzhuce_left_inp_a',
			'msg'   =>'请选择类别',
			'style' =>'width:160px;',
		)) ;
		?>
		<?php 
		echo Common::getSelect("education_year",Model_User::$education_year,array(
			'id'	=>(isset($this->user['education_year'])? $this->user['education_year']:''),
			'class' =>'cenzhuce_left_inp_a',
			'msg'   =>'请选择学制',
			'style' =>'width:160px;',
		)) ;
		?>
		<?php 
		echo Common::getSelect("education_now",Model_User::$education_now,array(
			'id'	=>(isset($this->user['education_now'])? $this->user['education_now']:''),
			'class' =>'cenzhuce_left_inp_a',
			'msg'   =>'请选择年级',
			'style' =>'width:160px;',
		)) ;
		?>
		<span id="educationspan"></span><br/>
		<span class="bot_ad">请选择你的学历水平。</span><br/>
		
		
		<span class="zhuce_sp_a">所属机构:</span><br/>
		<?php 
		echo Common::getSelect("team",Model_User::$team,array(
			'id'	=>(isset($this->user['team'])? $this->user['team']:''),
			'class' =>'cenzhuce_left_inp_a',
			'msg'   =>'请选择所属机构',
		)) ;
		?>
		<span id="teamspan"></span><br />
		<span class="bot_ad">请选择所属机构。</span>
		<br/>
		
		<span class="zhuce_sp_a">政治面貌:</span><br/>
		<?php 
		echo Common::getSelect("political_affiliation",Model_User::$political_affiliation,array(
			'id'	=>(isset($this->user['political_affiliation'])? $this->user['political_affiliation']:''),
			'class' =>'cenzhuce_left_inp_a',
			'msg'   =>'请选择政治面貌',
		)) ;
		?>
		<span id="plspan"></span><br/>
		<span class="bot_ad">请选择政治面貌。</span><br/>
		
		
		<h2>联系方式</h2>
		<div class="line">&nbsp;</div>
		<span class="zhuce_sp_a">手机</span><br/>
		<input type="text" class="cenzhuce_left_inp_a" id="mobile" name="mobile"  value="<?php echo isset($this->user['mobile']) ?$this->user['mobile']: "" ;?>" /><span id="phonespan"></span><br/>
		<span class="bot_ad">请输入你的手机号码。</span><br/>
		
		<span class="zhuce_sp_a">QQ</span><br/>
		<input type="text" class="cenzhuce_left_inp_a"  id="qq" name="qq" value="<?php echo isset($this->user['qq']) ?$this->user['qq']: "" ;?>" /><span id="qqspan"></span><br/>
		<span class="bot_ad">请输入你的QQ号码。</span><br/>
		<input type="hidden" id="equalToEmpty" value="" />
		<a href="javascript:void(0);" class="text_ab"  >下一步</a>
	</div>
	<div class="cenzhuce_right zhuce">
		<div class="look_this">
			<div class="look_this_text">	
				请你准确、完整的填写本页各项信息，所有选项均为必填。<br/>请理解，完整的个人信息是我们确认你的真实性，并判定你所提交赞助申请有效性的重要依据。
			</div>
		</div>
	</div>
</div>
</form>
<div class="clear">&nbsp;</div>
<script type="text/javascript" src="/public/js/formcheck.js"></script>
<script type="text/javascript">
$(function(){
	var form_info = [
		{"name":"realname", "mod":"match", "act":"blur", "arg":"tname", "show_id":"realnamespan","show_error":"请输入你的真实姓名", "must":true},
		{"name":"idcard",   "mod":"match", "act":"blur", "arg":"idcard", "show_id":"idcardspan","show_error":"请填写正确的身份证号", "must":true},
		{"name":"homeaddr", "mod":"match", "act":"blur", "arg":"noempty", "show_id":"homeaddrspan","show_error":"请输入你的户籍地址", "must":true},

		{"name":"area_id",  "mod":"notequal", "act":"blur", "arg":$("#equalToEmpty").val(), "show_id":"area_idspan","show_error":"请选择你所在城市", "must":true},
		
		{"name":"college",     "mod":"match", "act":"blur", "arg":"tname", "show_id":"academyspan","show_error":"填写你所在的院系/部门", "must":true},
		{"name":"college_num", "mod":"match", "act":"blur", "arg":"tname", "show_id":"academynumsspan","show_error":"请输入你所在院系人数（数字）", "must":true},

//		{"name":"education_class",  "mod":"notequal", "arg":$("#equalToEmpty").val(), "show_id":"educationspan","show_error":"请选择你的学历水平", "must":true},
//		{"name":"education_year",   "mod":"notequal", "arg":$("#equalToEmpty").val(), "show_id":"educationspan","show_error":"请选择你的学历水平", "must":true},
//		{"name":"education_now",    "mod":"notequal", "arg":$("#equalToEmpty").val(), "show_id":"educationspan","show_error":"请选择你的学历水平", "must":true},


		{"name":"team",    				"mod":"notequal", "act":"blur", "arg":$("#equalToEmpty").val(), "show_id":"teamspan","show_error":"请选择所属机构", "must":true},

		{"name":"political_affiliation","mod":"notequal", "act":"blur", "arg":$("#equalToEmpty").val(), "show_id":"plspan","show_error":"请选择政治面貌", "must":true},

		{"name":"mobile",   "mod":"match", "act":"blur", "arg":"phone", "show_id":"phonespan","show_error":"请输入你的手机号码", "must":true},
		{"name":"qq",   "mod":"match", "act":"blur",     "arg":"qq", "show_id":"qqspan","show_error":"请输入你的QQ号码", "must":true},

		
	]
	$(".text_ab").pe_submit(form_info, 'regcomfrom');


	$(".text_ab").click(function(){
		var v1 = $("select[name='education_class']").val();
		var v2 = $("select[name='education_year']").val();
		var v3 = $("select[name='education_now']").val();
		if(v1 != "" && v2!="" && v3 != ""){
			$("#educationspan").html('&nbsp;&nbsp;<img src="/public/images/tishi_yes.gif" />');
		}else {
			$("#educationspan").html('<span class="tis_a">请选择</span>');
		}
	});
	$("select[name='education_class']").change(function(){
		var v1 = $("select[name='education_class']").val();
		var v2 = $("select[name='education_year']").val();
		var v3 = $("select[name='education_now']").val();
		if(v1 != "" && v2!="" && v3 != ""){
			$("#educationspan").html('&nbsp;&nbsp;<img src="/public/images/tishi_yes.gif" />');
		}else {
			$("#educationspan").html('<span class="tis_a">请选择</span>');
		}
		
	});
	$("select[name='education_year']").change(function(){
		var v1 = $("select[name='education_class']").val();
		var v2 = $("select[name='education_year']").val();
		var v3 = $("select[name='education_now']").val();
		if(v1 != "" && v2!="" && v3 != ""){
			$("#educationspan").html('&nbsp;&nbsp;<img src="/public/images/tishi_yes.gif" />');
		}else {
			$("#educationspan").html('<span class="tis_a">请选择</span>');
		}
		
	});
	$("select[name='education_now']").change(function(){
		var v1 = $("select[name='education_class']").val();
		var v2 = $("select[name='education_year']").val();
		var v3 = $("select[name='education_now']").val();
		if(v1 != "" && v2!="" && v3 != ""){
			$("#educationspan").html('&nbsp;&nbsp;<img src="/public/images/tishi_yes.gif" />');
		}else {
			$("#educationspan").html('<span class="tis_a">请选择</span>');
		}
		
	});
})
</script>

