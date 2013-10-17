

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>图片上传成功</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<script language="javascript" type="text/javascript">
function start(){
	var flag = '<?=$_GET['type'] == 'student' ? 1:""; ?>';
	if(flag){
		var photo 		= "student_photo";
		var photospan 	= "student_photospan";
	}else {
		var photo 		= "user_photo";
		var photospan 	= "user_photospan";
	}
	window.opener.document.getElementById(photo).value="<?php echo $_GET['f'];?>";
	window.opener.document.getElementById(photospan).innerHTML="<span class=\"tis_b\">&nbsp;</span>";
	
}


</script>

<body onLoad="start()" style="margin: 0px;" >
  <table width="100%" style="background:url(img/bod_back.gif) 100% 100%; font-size:12px; margin: 0px;">
    <tr>
      <td align="center">
        <p>&nbsp;</p>
        <table width="100%"   align="center" bordercolor="#999999">
		<tr>
            <td  height="40"align="center" ><span class="STYLE7">上传成功</span></td>
          </tr>
          <tr>
            <td  height="40"align="center"><span class="style6"><a href="#" onClick="window.close()">关闭</a></span></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>