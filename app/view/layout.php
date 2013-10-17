<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $this->t;?></title>
<meta name="keywords" content="<?php echo $this->k;?>" />
<meta name="description" content="<?php echo $this->d;?>" />
<link href="/public/css/mycss.css" rel="stylesheet" type="text/css" />
<script language="javascript">AC_FL_RunContent = 0;</script>
<script language="javascript"> DetectFlashVer = 0; </script>
<script language="javascript" src="/public/js/jquery.js"></script>
<script src="/public/js/AC_RunActiveContent.js" language="javascript">&nbsp;</script>
<style type="text/css">
	.sign_up_ul li{text-align:center;padding:14px 24px;width:110px;font-size:12px;color:#333;line-height:20px;float:left;display:inline;_padding-bottom:1px;}
	.sign_up_ul li a{font-size:14px;color:#333;line-height:24px;_float:left;display:inline;width:360px;_width:102px;}
	.sign_up_ul em{display:block;width:65px;height:65px;margin:auto;padding:1px;border:1px #717171 solid;overflow:hidden;}
	.sign_up_ul img{width:63px;height:63px;display:block;margin:0 auto 6px;}
</style>
<script language="javascript" src="/public/js/jquery.maxlength.min.js"></script>
<script language="javascript" src="/public/js/common.js"></script>
</head>
<body>
<?php 
include_once VIE_PATH.'/header_index.php';
?>
<?php echo $this->content ;?>
<?php 
include_once VIE_PATH.'/footer_index.php';
?>
</body>
</html>