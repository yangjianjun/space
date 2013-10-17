<!--center-->
<style>
#center table {
	margin:0;
	padding:0;
}
#center table th{
	width:200px;
	text-align:left;
	padding-bottom:10px;
}
#center table td{
	color:#999;
	padding:3px 0;
	font-size:14px;
	
}

</style>
<div id="center">
<table>
<!--循环体-->
<tr>
	<th>活动名称</th>
	<th>活动类型</th>
	<th>活动关键字</th>
	<th>活动开始时间</th>
	<th>活动结束时间</th>
	<th>上传时间</th>
</tr>
	<?php 
	if ($this->list):
	foreach ($this->list as $k=>$v) :
	?>
	<tr>
		<td><a href="/scheme/detail?id=<?=$v['id']?>" ><?=Common::utf8Substr($v['title'], 0, 12)?></a></td>
		<td><?=Model_Plan::$adtype[$v['adtype']]?></td>
		<td><?=$v['trait']?></td>
		<td><?=$v['time_start']?></td>
		<td><?=$v['time_end']?></td>
		<td><?=substr($v['created'], 0,10)?></td>
	</tr>
	<?php 
	endforeach;
	endif;?>
</table>
<?php echo $this->page ;?>
</div>	
<!--bottom-->