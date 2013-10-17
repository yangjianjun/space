<script type="text/javascript" src="/public/js/ui.core.js"></script>
<script type="text/javascript" src="/public/js/ui.datepicker.js"></script>
<style type="text/css">
.dl_b dd img{vertical-align:middle;}
.campus_a{width:924px;height:180px;background:url(/public/images/campus_a.jpg) 0 0 no-repeat;overflow:hidden;}
.campus_aa{width:298px;height:38px;margin:130px 0 0 276px;}
.campus_aa a{text-decoration:underline;color:#9f3023;font-size:14px;float:left;display:inline;margin:14px 14px 0 0;}
.campus_aa input{width:224px;height:35px;border:none;background:none;background:url(/public/images/campus_b.jpg) 0 0 no-repeat;cursor:pointer;}
</style>
<style>
.kd{ width:620px; float:left}
.text_1214{float:right;border:none;width:65px;font-size:14px;height:24px;text-align:center;line-height:24px;color:#fff;cursor:pointer;background:url(/public/images/gerenzhuye_33.jpg) 0 0 no-repeat;font-weight:bold; display:block}
.zzyy{ width:924px; height:auto; margin:0 auto;}
.hg{ width:924px; height:auto; float:left; overflow:auto}
.grzc_1{ width:924px; height:65px;float:left; background:url(/public/images/gerenzhuye_35.jpg) center center repeat-x; margin-bottom:15px}
.grzc_1z{ width:5px; height:65px;float:left; background:url(/public/images/gerenzhuye_34.jpg) left center no-repeat}
.grzc_1y{ width:5px; height:65px;float:right; background:url(/public/images/gerenzhuye_36.jpg) right center no-repeat}
.grzc_1c{ width:874px; height:auto; float:left; padding:10px 20px}
.grzc_1c a{ color:#1561AC; text-decoration:underline}.grzc_1c a:hover{ color:#1561AC; text-decoration:underline}
.zz{ width:149px; float:left}
.yy{ width:620px; float:left; padding-left:46px}
.yy1{ width:620px; float:left; border-bottom:solid 1px #ccc; height:28px; font-weight:bold; color:#231815; padding-top:5px}
.yy2{ width:560px; float:left; padding-left:25px}
.yy2a{ width:550px; float:left; height:auto; border-bottom:dashed 1px #ccc; font-size:14px; padding-right:10px; padding-top:5px}
.yy2b{ width:620px; float:left; height:auto;}
.xiu_infor h3,.fanga_infor h3{cursor:pointer}
a.a_lm:link{color:#339933;font-size:12px;font-family:"宋体";text-decoration:underline}a.a_lm:visited{color:#339933;font-size:12px;font-family:"宋体";text-decoration:underline}a.a_lm:hover{color:#339933;font-size:12px; font-family:"宋体";text-decoration:underline}
a.b_lm:link {color:#999;font-size:12px; font-family:"宋体"; text-decoration:underline}a.b_lm:visited {color:#999;font-size:12px; font-family:"宋体"; text-decoration:underline}a.b_lm:hover{color:#999;font-size:12px; font-family:"宋体"; text-decoration:underline}
a.c_lm:link{color:#333; font-size:16px; line-height:38px}a.c_lm:visited {color:#333; font-size:16px; line-height:38px}a.c_lm:hover {color:#339933; font-size:16px; line-height:38px}
a.d_lm:link{color:#333;; font-size:16px; line-height:38px}a.d_lm:visited {color:#333; font-size:16px; line-height:38px}a.d_lm:hover {ccolor:#333; font-size:16px; line-height:38px}
a.e_lm:link {color:#333;font-weight:bold;font-size:14px;padding-right:10px; display:inline; float:right; padding-bottom:10px}a.e_lm:visited {color:#333;font-weight:bold;font-size:14px;padding-right:10px; display:inline; float:right; padding-bottom:10px}a.e_lm:hover {ccolor:#333;font-weight:bold;font-size:14px;padding-right:10px; display:inline; float:right; padding-bottom:10px}
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
		<h2 class="geren_h2_a">欢迎回来，<?php  echo $this->user['realname'] ;?></h2>

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
	<div class="yy">
    <div class="yy1">参与的活动</div>
    <p style="width:620px; font-size:12px; line-height:36px">这里显示所有参与过的活动，你可能是活动的上传者，或者执行者。</p> 
	   	<div class="yy2">
	   		<?php 
            if ($this->plans):
            foreach ($this->plans as $k=>$v) :
            ?>
			<div class="yy2a">
		    <span style="float:right">
				<a class="a_lm" href="/user/uploadPlan1?pid=<?=$v['id']?>"> 修改方案</a>　
			    <a class="b_lm" href="/user/delPlan?pid=<?=$v['id']?>" onClick="return confirm('是否息删除此活动方案?此操作不可恢复！')" >删除方案</a>
		    </span>
		    <?=Common::utf8Substr($v['title'], 0, 20)?>
		    <span style="color:#339933; font-size:12px;"><?=Model_Plan::$pstatus[$v['pstatus']]?></span>
			</div>
			<?php 
            endforeach;
            endif;?>
		</div>
	<br/>
	 
                
	</div>
			
			
		
	<div class="clear">&nbsp;</div>
	</div>
</div>
<div class="clear">&nbsp;</div>