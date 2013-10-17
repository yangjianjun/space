<script >
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
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}
//-->
</script>
<div id="center" style="width:1080px;">
		<?php 
        if ($this->list):
        foreach ($this->list as $k=>$v) :
        ?>
	    <img  style="width:240px;border:1px solid #cbcdcc;padding:10px;min-height:280px;" class="lazy" src="/public/images/grey.gif" data-original="<?php echo '/upload/images/'.UP::getThumb($v['img_name']); ?>"  alt="">
	    <?php 
        endforeach;
        endif;?>
</div>
<script src="/public/js/jquery.1.9.1.js" charset="utf-8"></script>
<script src="/public/js/jquery.lazyload.js?v=1.8.5" charset="utf-8"></script>
<script src="/public/js/jquery.scrollstop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function() {
          $("img.lazy").lazyload({
              event: "scrollstop"
          });

          
      });
</script>
