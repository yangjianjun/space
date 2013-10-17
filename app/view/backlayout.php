<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config['webname']?>-后台管理系统</title>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
<link rel="stylesheet" type="text/css" href="/public/css/style_cs.css" />
<script  language="javascript" src="/public/js/jquery.js"></script>
<script language="javascript" src="/public/js/jquery.maxlength.min.js"></script>
<script  language="javascript" src="/public/js/common.js"></script>
<script  language="javascript" src="/public/js/admin/common.js"></script>
</head>
<body >
<?php echo $content ;?>
<script  >
<?php if (isset($_REQUEST['msg']) && !isset($_REQUEST['search'])){?>
friendlyShow("<?php echo base64_decode($_REQUEST['msg']);?>",2000);
<?php } ?>
</script>
</body>
</html>