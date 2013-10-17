<!--bottom-->		
<div id="bottom"  style="clear:both;margin-top:50px;">
<div class="bottom">
			<span style="float:left;">Copyright @ 2012 <?php echo $this->config['company'];?> All rights reserved. <?php echo $this->config['webRecord'];?></span>
			
			<span >
				<a href="/help/links">友情链接</a>
				<a href="/help/service">服务条款</a>
			    <a href="/help/contant" >联系我们</a>
			</span>
</div>
</div>
<script>
<?php if (isset($_REQUEST['msg'])){?>
friendlyShow("<?php echo base64_decode($_REQUEST['msg']);?>",2000);
<?php } ?>
</script>