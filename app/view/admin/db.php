<div id="main" class="main" >
	<div class="content">
		<div class="title">数据库(备份/还原)</div>
		<form method='post' id="form1" action="">
		<table>
			<tr>
				<td colspan="2"><font style="color:blue;">数据库备份</font><select style="width:165px;" name="backupplace" >
					<option value="0">诜选择</option>
					<option value="server">存放服务器</option>
					<option value="local">下载到本地</option>
				</select>
				</td>
			    <td><input type="button" name="backup" value="备份" class="small submit" /><font id="error" style="color:red;"></font></td>
			</tr>
			<tr>
				<td colspan="2"><font style="color:blue;">数据库还原</font><?php echo $this->hasSqlfilename==1 ? $this->select :'';?></td>
			    <td><input type="button" name="restore" value="还原" class="small submit" /></td>
			</tr>
		</table>
		<input type="hidden" name="db" value="db" />
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$("input[type='button'][name='backup']").click(function(){
		$("#form1").attr("action","/admin/backup");
		if($("select[name='backupplace']").val() ==0){
			$("#error").html("请选择存放位置!");
			return false;
		}
		$("#form1").trigger("submit");
	});
	$("input[type='button'][name='restore']").click(function(){
		$("#form1").attr("action","/admin/restore");
		$("#form1").trigger("submit");
	});
});
</script>
