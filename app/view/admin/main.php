<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>『另客网』</title>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
</head>

<body>
<div class="main" >
	<div class="content">
		<table id="checkList" class="list" cellpadding=0 cellspacing=0 >
			<tr><td height="3" colspan="2" class="topTd" ></td></tr>
			<tr class="row" ><th colspan="2" class="space">系统信息</th></tr>
		
			<?php foreach ($this->info as $key=>$v) :?>
			<tr class="row" ><td width="15%"><?php echo $key;?></td><td><?php echo $v;?></td></tr>
			<?php endforeach;?>
			
			<tr><td height="3" colspan="2" class="bottomTd"></td></tr>
		</table>
	</div>
</div>