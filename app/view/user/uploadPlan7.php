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
			items : [
			    'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', '|',
			    'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|',
				'insertunorderedlist', '|','map', 'table', 'image', 'link','media','hr','pagebreak','source','clearhtml']
		});
	});
</script>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 12px;
	color: #666666;
}
-->
</style>
<form action="" method="post" name="fm" id="fm">
	<div id="center_zhuce">		
		<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a"><img src="/public/images/jdt_7.jpg" /></div>	
		<div class="cenzhuce_left tianxie" style="width:600px;">				
		<p><span style="line-height:36px; font-size:14px">请填写或粘贴你的活动策划案。<br/>
	      如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填。</span>
        <textarea rows="30" cols="80" id="content" name="content" ><?php  echo isset($this->plan['content']) ? htmlspecialchars($this->plan['content']): "" ;?> </textarea>
        <span id="schemeinfot"></span>		
        <span style="line-height:36px; font-size:12px">你想获得的赞助金额：</span>
	    <input  type="text" id="wantsmoney"  name="wantsmoney" value="<?= isset($this->plan['wantsmoney']) ? $this->plan['wantsmoney'] : "5000" ;?>" onkeyup="this.value=this.value.replace(/\D/g,'')" />
		    &nbsp; <span style="line-height:36px; font-size:12px">元</span> &nbsp;		     <span class="STYLE1">（只能输入数字）</span> </p>
		
		<p><br/>
        <a href="javascript:void(0);" class="text_ab" style="margin-left:20px;width:164px;" onclick=" $('#content').html(editor.html());$('#fm').trigger('submit');">保存确定 </a> 
        </p>
		</div>
		
		<div class="cenzhuce_right zhuce">
		<div class="look_this">
			<div class="look_this_text">请仔细填写方案内容，你的方案信息越详细，就越容易获得赞助。</div>
		</div>
	    </div>
</div>
</form>
<div class="clear">&nbsp;</div>