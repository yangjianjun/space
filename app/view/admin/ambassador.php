<link rel="stylesheet" href="/public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/public/kindeditor/lang/zh_CN.js"></script>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			resizeType : 1,
			allowPreviewEmoticons : false,
			//allowImageUpload : false,
//			items : [
//			    'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', '|',
//			    'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
//				'removeformat', '|',
//				'insertunorderedlist', '|','map', 'table', 'image', 'link','media','hr','pagebreak','source','clearhtml']

		});
	});
</script>
<div id="main" class="main" >
	<div class="content" >
		<div class="title">校园大使</div>		
		<form method="post">
			<textarea rows="60" cols="150" id="content" name="content" ><?php  echo isset($this->list['content']) ? htmlspecialchars($this->list['content']): "" ;?> </textarea>
			<input type="submit" class="small submit"  onclick=" $('#content').html(editor.html());  ;$('#fm').trigger('submit');" value="保 存">
		</form>
	</div>
</div>