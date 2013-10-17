

<div id="main" class="main" >
	<div class="content" >
		<div class="title">赞助列表</div>		
		<form method='post' action="/admin/scheme">
			<div class="rSearch">
				<div class="fLeft">公司名称:<span id="key"><input type="text" name="company_name" value="<?php echo isset($_REQUEST['company_name'])?$_REQUEST['company_name']:'';?>" class="medium" ></span></div>
				<div class="hMargin fLeft" ><input type="submit" id="" name="search" value="" onclick="" class="search imgButton"></div>
			</div>
		</form>

		<div class="list" >
		
		
			<table id="checkList" class="list" cellpadding=0 cellspacing=0 >
			<tr><td height="5" colspan="10" class="topTd" ></td></tr>
			<tr class="row" >
<!--			<th width="8"><input type="checkbox" id="check" onclick="CheckAll('checkList')"></th><th width="5%" nowrap><a href="javascript:void(0);">编号</a></th>-->
				<th width="30"><a href="javascript:void(0);">编号</a></th>
				<th nowrap><a href="javascript:void(0);" >公司名称</a></th>
				<th nowrap><a href="javascript:void(0);" >职位</a></th>
				<th nowrap><a href="javascript:void(0);" >联系地址</a></th>
				<th nowrap><a href="javascript:void(0);" >姓名</a></th>
				<th nowrap><a href="javascript:void(0);" >座机</a></th>
				<th nowrap><a href="javascript:void(0);" >手机</a></th>
				<th nowrap><a href="javascript:void(0);" >赞助描述</a></th>
				<th nowrap><a href="javascript:void(0);" >时间</a></th>
				<th style="text-align:center;">操作</th>
			</tr>
			<?php 
			foreach ($this->list as $k=>$v):
			?>
			<tr class="row" onmouseover="over(event)" onmouseout="out(event)" >
<!--		<td><input type="checkbox" name="key"	value="<?php echo $v['id']; ?>"></td><td><?php echo $v['id']; ?></td>-->
			<td><?php echo $v['id']; ?></td>
			<td><?php echo $v['company_name']; ?></td>
			<td><?php echo $v['job']; ?></td>
			<td><?php echo $v['address']; ?></td>
			<td><?php echo $v['name']; ?></td>
			<td><?php echo $v['phone']; ?></td>
			<td><?php echo $v['mobile']; ?></td>
			<td><div style="width:350px;"><?php echo $v['memo']; ?></div></td>
			<td><?php echo $v['cretaed']; ?></td>
			<td align="center" nowrap>
				<a href="/admin/schemedel?id=<?php echo $v['id']; ?>">删除</a></td>
			</tr>
			<?php 
			endforeach;
			?>
			</table>
		</div>
		<div class="page"><?php echo $this->page ;?></div>

	</div>

</div>