<script type="text/javascript">
var t=10 //设定跳转的时间
setInterval("testTime()",1000); //启动1秒定时 
function testTime() { 
	if(t == 0){ location = "/user/index";} //#设定跳转的链接地址
	if(t<0){ t=10 }
		document.getElementById("view").innerHTML = t+"  秒后自动跳转到<a href=\"/user/index\">个人管理页</a>，您也可以<a href=\"/user/index\">点击这里</a>直接前往"; // 显示倒计时 
		t--; // 计数器递减 
} 
</script>
<!--center-->
<div id="center_zhuce_daijihuo">
	<h1 class="cenh1_a">修改我的信息</h1><br/>
	<p class="daijih_p_a">你的个人信息已修改成功，现在可以开始上传您的赞助方案。</p><br/>
	　　<span id="view" >10 秒后自动跳转到<a href="/user/index">个人管理页</a>，您也可以<a href="/user/index">点击这里</a>直接前往</span><br/>
				<div class="img_c">&nbsp;</div>
					<div class="clear">&nbsp;</div>
		<div class="img_b">&nbsp;</div>
					<div class="clear">&nbsp;</div>
				<div class="clear">&nbsp;</div>
	<br/>
</div>
<div class="clear">&nbsp;</div>