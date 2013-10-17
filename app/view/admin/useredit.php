<div id="main" class="main" >
	<div class="content">
		<div class="title">编辑会员[ <a href="/admin/user">返回列表</a> ]</div>
		<form method='post' id="form1" action="" >
			<table cellpadding=3 cellspacing=3>
				<tr>
					<td class="tRight" >email</td>
					<td class="tLeft"><?php echo isset($this->list['email'])?$this->list['email']:'';?></td>
				</tr>
				<tr>
					<td class="tRight" >用户注册状态</td>
					<td class="tLeft">
					<?php 
					echo Common::getSelect("status",Model_User::$status,array('id'=>isset($this->list['status'])? $this->list['status']:'')) ;
					?>
					</td>
				</tr>
				<tr>
				<td class="tRight" >校园大使状态</td>
					<td class="tLeft">
					<?php 
					echo Common::getSelect("ambassador",Model_User::$ambassador,array('id'=>isset($this->list['ambassador'])? $this->list['ambassador']:'')) ;
					?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td class="center">
					<input type="submit" value="保 存" class="small submit" />
					<input type="reset" class="submit small" value="清 空" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>