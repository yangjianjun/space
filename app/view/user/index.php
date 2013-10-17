<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<style type="text/css">
.dl_b dd img{vertical-align:middle;}
.campus_a{width:924px;height:180px;background:url(/public/images/campus_a.jpg) 0 0 no-repeat;overflow:hidden;}
.campus_aa{width:298px;height:38px;margin:130px 0 0 276px;}
.campus_aa a{text-decoration:underline;color:#9f3023;font-size:14px;float:left;display:inline;margin:14px 14px 0 0;}
.campus_aa input{width:224px;height:35px;border:none;background:none;background:url(/public/images/campus_b.jpg) 0 0 no-repeat;cursor:pointer;}
</style>

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
<!--center-->

<div id="geren_wei">
	<h2 class="geren_h2_a">欢迎回来，<?=isset($this->user['realname'])? $this->user['realname']:$this->user['email'] ?></h2>
	
	
	<div class="geren_top_back_a" style="width:924px;margin-top:12px;">
		<div class="geren_top_back_b">
			<div class="geren_top_back_c">
				<h2 class="geren_h2_b">你已可以上传活动方案，但你的个人信息还不完整，会影响方案通过审核，建议现在就 <a href="/user/userinfo1" >完善个人信息</a>。</h2>
			</div>
		</div>
	</div>
	
	
</div>

<div id="geren_cent">
		<?php 
		include_once 'profile.php';
		?>
			
		<div class="geren_cent_right">
			<h2>基本信息</h2>
			<div class="line">&nbsp;</div>
			<dl class="dl_a">
				<dd>姓名:</dd>
				<dd>身份证号:</dd>
				<dd>校园大使:</dd>
				<dd>学生证照片:</dd>
				
			</dl>
			<dl class="dl_b">
			<dd><?=$this->user['realname']?>&nbsp;</dd>
			<dd><?=$this->user['idcard']?>&nbsp;</dd>
			<dd><?=Model_User::$ambassador[$this->user['ambassador']]?>&nbsp;</dd>
			<dd><?=!empty($this->user['student_photo'])?'<img src="/upload/images'.Up::getThumb($this->user['student_photo']).'" />':""; ?>&nbsp;</dd>
			</dl>
			<div class="clear">&nbsp;</div>
			<h2 style="margin-top:30px;">学校信息</h2>
			<div class="line">&nbsp;</div>
			<dl class="dl_a">
				<dd>学校:</dd>
				<dd>身份:</dd>
				<dd>院系:</dd>
				<dd>所属机构:</dd>
				<dd>政治面貌:</dd>
				<dd>担任职务:</dd>
			</dl>
			<dl class="dl_b">
				<dd><?=!empty($this->user['school_id'])?Model_School::getSchoolArr($this->user['school_id']):''?>&nbsp;</dd>
				<dd><?=!empty($this->user['education_class'])?Model_User::$education_class[$this->user['education_class']]:''?>&nbsp;
					<?=!empty($this->user['education_year'])?Model_User::$education_year[$this->user['education_year']]:''?>&nbsp;
					<?=!empty($this->user['education_now'])?Model_User::$education_now[$this->user['education_now']]:''?>&nbsp;</dd>
				<dd><?=$this->user['college']?></dd>
				<dd><?=!empty($this->user['team'])?Model_User::$team[$this->user['team']]:''?></dd>
				<dd><?=!empty($this->user['political_affiliation'])?Model_User::$political_affiliation[$this->user['political_affiliation']]:''?>&nbsp;</dd>
				<dd><?=$this->user['current_position']?>&nbsp;</dd>
				
			</dl>
			<div class="clear">&nbsp;</div>
			<h2 style="margin-top:30px;">联系方式</h2>
			<div class="line">&nbsp;</div>
			<dl class="dl_a">
				<dd>手机:</dd>
				<dd>QQ:</dd>
			</dl>
			<dl class="dl_b">
				<dd><?=$this->user['mobile']?>&nbsp;</dd>
				<dd><?=$this->user['qq']?>&nbsp;</dd>
			</dl>
			<div class="clear">&nbsp;</div>
				

			<h2 style="margin-top:30px;">账户信息</h2>
			<div class="line">&nbsp;</div>
			<dl class="dl_a">
				<dd>支付宝账号:</dd>
			</dl>
			<dl class="dl_b">
				<dd><?=$this->user['alipay']?>&nbsp;</dd>
			</dl>
			<div class="clear">&nbsp;</div>
		</div>
</div>
<div class="clear">&nbsp;</div>
