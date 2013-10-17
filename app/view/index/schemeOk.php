<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>我要赞助 - 赞助宝</title>
<meta name="keywords" content="赞助宝" />
<meta name="description" content="赞助宝" />
<link href="/public/css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.sign_up_ul li{text-align:center;padding:14px 24px;width:110px;font-size:12px;color:#333;line-height:20px;float:left;display:inline;_padding-bottom:1px;}
	.sign_up_ul li a{font-size:14px;color:#333;line-height:24px;_float:left;display:inline;width:360px;_width:102px;}
	.sign_up_ul em{display:block;width:65px;height:65px;margin:auto;padding:1px;border:1px #717171 solid;overflow:hidden;}
	.sign_up_ul img{width:63px;height:63px;display:block;margin:0 auto 6px;}
</style>
<style>
#sesond_menu{
	margin: auto;
    width: 960px;
}
</style>
</head>
<body>
<script type="text/javascript">
var t=10 //设定跳转的时间
setInterval("testTime()",1000); //启动1秒定时 
function testTime() { 
	if(t == 0){ window.close();} //#设定跳转的链接地址
	if(t<0){ t=10 }
		document.getElementById("view").innerHTML = t+"  秒后自动关闭"; // 显示倒计时 
		t--; // 计数器递减 
} 
</script>
<!--center-->
<div id="center_zhuce_daijihuo"  style="width:550px;" >
	<p class="daijih_p_a">您已留言成功，我们会尽快和您联系。</p><br/>
	　　<span id="view" >10 秒后自动关闭</span>
		<div class="img_c">&nbsp;</div>
		<div class="img_b">&nbsp;</div>
</div>
</body>
</html>