<link href="/public/css/s_07.css" rel="stylesheet" type="text/css" />
<style type="text/css">
table{width:635px;overflow:hidden;}
</style>
<script type="text/javascript">
//图片按比例缩放
var flag = false;
function DrawImage(ImgD, iwidth, iheight) {
//参数(图片,允许的宽度,允许的高度)
var image = new Image();
image.src = ImgD.src;
if (image.width > 0 && image.height > 0) {
flag = true;
if (image.width / image.height >= iwidth / iheight) {
if (image.width > iwidth) {
ImgD.width = iwidth;
ImgD.height = (image.height * iwidth) / image.width;
} else {
ImgD.width = image.width;
ImgD.height = image.height;
}
ImgD.alt = image.width + "×" + image.height;
}
else {
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
<div id="zuixin"></div>
	<div id="s_shenqing">
    <div class="s_title">最新注册用户</div>
	<div class="s_main">
		<?php 
		if ($this->list1):
		foreach ($this->list1 as $k=>$v) :?>	
		<div class="s_content">
		    <div class="s_left"><?=$k?></div>			
			   <ul class="ul_as1">
			   	   <?php foreach ($v as $kk=>$vv) :?>	
				   <li>
			         <span>
			         <img src="<?= !empty($vv['user_photo'])?'/upload/images/'.Up::getThumb($vv['user_photo']):'/public/images/default.gif'?>" onload="javascript:DrawImage(this,138,138)"  />
			         </span>
			         <p><?php echo !empty($vv['school_id']) ? Model_School::getSchoolArr($vv['school_id']):''; ?></p>
			         <p><?php echo $vv['college']; ?>
			         
			        	<?php echo !empty($vv['team']) ? Model_User::$team[$vv['team']]:''; ?>
			        	 
					</p>
			       </li>
			       <?php 
			       endforeach;?>				   
		   	  </ul>			
		</div>	
		<?php 
		endforeach;
		endif;
		?>		
	</div>
	<div class="s_title">最新上传方案</div>
	<div class="s_main">
		<?php 
		if ($this->list2):
		foreach ($this->list2 as $k=>$v) :?>	
		<div class="s_content">
		    <div class="s_left"><?=$k?></div>			
			   <ul class="ul_as2">
			   	   <?php foreach ($v as $kk=>$vv) :?>	
			   	   
			   	   <li><a href="/scheme/detail?id=<?=$vv['id']?>"> <?=Common::utf8Substr($vv['title'], 0, 18)?> </a>
				   		<span>
						  
						  现场人数:<?=Model_Plan::$spotpeople[$vv['spotpeople']]?>人<br/>
						  
						  活动品牌:<?=Model_Plan::$actionbrand[$vv['actionbrand']]?></span>
						  <b>
						 
				        	<?=Model_Plan::$actionseason[($vv['actionseason'])?$vv['actionseason']:'']?>
				        	 
						 </b>
						  <p>
						  	    	
							 发起人:   <?=$vv['realname']?>  <?=$vv['school']?>
								
						  
						  </p>
						  <em><?=Model_Plan::$adtype[($vv['actionseason'])?$vv['actionseason']:'']?></em>
				   </li>
			       <?php 
			       endforeach;?>				   
		   	  </ul>			
		</div>	
		<?php 
		endforeach;
		endif;
		?>	
</div>
</div>