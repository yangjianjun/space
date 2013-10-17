<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>

<title>上传图片</title>
<script>
function checkFile(){
	var url=document.form1.files.value;
	var b=false;
	var s=["jpg","gif","bmp","jpeg","JPG","GIF","BMP","JPEG"];
	var sTemp="";
	for (var i=0;i<s.length ;i++ ){
			sTemp=url.substr(url.length-s[i].length-1);
			sTemp=sTemp.toLowerCase();
			
			s[i]="."+s[i];
			if (s[i]==sTemp){
				b=true;
				
				break;
			}
		}
		
		if(b==false){
		alert("无效的文件。");
		
		}
	return b;
}
</script>


</head>
<body>
<form name="form1" method="post" action=""  ENCTYPE="multipart/form-data" onSubmit="return checkFile()">
  <div style="padding:10px;color:#666;font-size:12px;">
  	<span style="font-size: 16px;font-weight: bold;">添加<?=$_GET['type'] == 'user' ? '个人':'学生证'; ?>照片</span>  <br><br>
    <input name="files" type="file" id="files" contenteditable="false" style="margin:auto; width: 340px"><br/>
    <span style="display:block;margin:12px auto;">最大200K,支持[jpg,gif,bmp,jpeg]格式</span>
    <input name="Submit" type="submit" class="btn" style="border:none;background:url(/public/images/reload.gif);height: 38px;width: 164px;font-size: 16px;color: #fff;font-family: 微软雅黑,幼圆;" value=" 确 定 " />
 	<input type="hidden" name="type" value="<?=$_GET['tppe']?>" />
  </div>
</form>
</body>
</html>
