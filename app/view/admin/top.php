<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config['webname']?></title>
<link rel='stylesheet' type='text/css' href='/public/css/style.css' />
<base target="main" />
<script type="text/javascript" src="/public/js/jquery.js"></script>
<script language="javascript">
	$(function(){
		$(".topmenu a").click(function(){
			$(this).css("color","#CC0000");
			$(this).parents("li").siblings("li").find("a").css("color","#333333");
		});
		//
		$(".topmenu a").eq(0).trigger("click");
		//
		$("#btn_logout").click(function(){
			if (confirm("确定要退出后台？")) {
				window.parent.location.href =  "/admin/logout";
			}
		});
	})
</script>
</head>
<body>
<!-- 头部区域 -->
<div id="header" class="header">
<div class="headTitle" style="margin:8pt 10pt"><a target="_blank" href="/"><?=$this->config['webname']?> </a></div>
	<div class="nav">
		管理员 <?php echo isset($_SESSION['admin']['nickname'])?$_SESSION['admin']['nickname']:'';?><a href="/admin/profile/"><img SRC="/public/Images/03.jpg" WIDTH="16" HEIGHT="16" BORDER="0" ALT="" align="absmiddle" /> 修改资料</a>  <a id="btn_logout" target="_top"><img SRC="/public/images/01.jpg" WIDTH="16" HEIGHT="16" BORDER="0" ALT="" align="absmiddle" /> 退 出</a>
	</div>
</div>

</body>
</html>