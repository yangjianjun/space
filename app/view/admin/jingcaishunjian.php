<div id="main" class="main" >
	<div class="content" >
		<div class="title">精彩图片列表</div>		
		<form method='post' action="/admin/jingcaishunjian" enctype="multipart/form-data">
			<div class="rSearch">
				<div class="fLeft">上传图片:<span id="key"><input type="file" name="img1"  /></span></div>
				<input type="submit" class="add imgButton" onclick="" value="sub" name="add" id="">
			
			</div>

		</form>

		<div class="list" >
		
		
			<table id="checkList" class="list" cellpadding=0 cellspacing=0 >
			<tr><td height="5" colspan="10" class="topTd" ></td></tr>
			<tr class="row" >
<!--			<th width="8"><input type="checkbox" id="check" onclick="CheckAll('checkList')"></th><th width="5%" nowrap><a href="javascript:void(0);">编号</a></th>-->
				<th width="30"><a href="javascript:void(0);">编号</a></th>
				<th nowrap><a href="javascript:void(0);" >显示</a></th>
				<th nowrap><a href="javascript:void(0);" >时间</a></th>
				<th style="text-align:center;">操作</th>
			</tr>
			<?php 
			foreach ($this->list as $k=>$v):
			?>
			<tr class="row" onmouseover="over(event)" onmouseout="out(event)" >
<!--		<td><input type="checkbox" name="key"	value="<?php echo $v['id']; ?>"></td><td><?php echo $v['id']; ?></td>-->
			<td><?php echo $v['id']; ?></td>
			<td><img  width="20" src="<?php echo '/upload/images/'.Up::getThumb($v['img_name']); ?>" /></td>
			<td><?php echo $v['created']; ?></td>
			<td align="center" nowrap>
				<a href="/admin/jingcaishunjiandel?id=<?php echo $v['id']; ?>">删除</a>&nbsp;&nbsp;</td>
			</tr>
			<?php 
			endforeach;
			?>
			</table>
		</div>
		<div class="page"><?php echo $this->page ;?></div>

	</div>

</div>