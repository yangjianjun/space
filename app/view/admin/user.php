

<div id="main" class="main" >
	<div class="content" >
		<div class="title">会员列表</div>		
		<form method='post' action="/admin/user">
			<input type="hidden" id="param" area_id="<?php echo isset($_REQUEST['area_id'])?$_REQUEST['area_id']:'';?>" school_id="<?php echo isset($_REQUEST['school_id'])?$_REQUEST['school_id']:'';?>" />
			<div class="rSearch">
				<div class="fLeft">会员名:<span id="key"><input type="text" name="realname" value="<?php echo isset($_REQUEST['realname'])?$_REQUEST['realname']:'';?>" class="medium" ></span></div>
				<div class="fLeft">所在地:<span>
				<select name="area_id" style="width:120px">
				<option value="0">请选择</option>
				<?php 
				foreach ($this->areas as $area) {
					$selected = (isset($_REQUEST['area_id']) && $_REQUEST['area_id'] == $area['area_id']? 'selected':'' );
					echo '<option value="'.$area['area_id'].'" '.$selected.'  >'.$area['name'].'</option>';
				}
				?>
                </select>
				</span></div>
				<div class="fLeft">大学:<span>
				<select name="school_id" style="width:120px">
					<option value="0">请选择</option>
                </select>
				</span></div>
				
				<div class="fLeft">合作资源:<span>
				<?php 
				echo Common::getSelect("resource",Model_User::$resource,array('id'=>isset($_REQUEST['resource'])? $_REQUEST['resource']:'')) ;
				?>
				</span></div>
				<div class="fLeft">用户状态:<span>
				<?php 
				echo Common::getSelect("status",Model_User::$status,array('id'=>isset($_REQUEST['status'])? $_REQUEST['status']:'')) ;
				?>
				</span></div>
				<div class="fLeft">大使状态：<span>
				<?php 
				echo Common::getSelect("ambassador",Model_User::$ambassador,array('id'=>isset($_REQUEST['ambassador'])? $_REQUEST['ambassador']:'')) ;
				?>
				</span></div>
				<div class="hMargin fLeft" ><input type="submit" id="" name="search" value="" onclick="" class="search imgButton"></div>
			</div>

		</form>

		<div class="list" >
		
		
			<table id="checkList" class="list" cellpadding=0 cellspacing=0 >
			<tr><td height="5" colspan="13" class="topTd" ></td></tr>
			<tr class="row" >
<!--			<th width="8"><input type="checkbox" id="check" onclick="CheckAll('checkList')"></th><th width="5%" nowrap><a href="javascript:void(0);">编号</a></th>-->
				<th nowrap><a href="javascript:void(0);" >用户</a></th>
				<th nowrap><a href="javascript:void(0);" >城市</a></th>
				<th nowrap><a href="javascript:void(0);" >学校</a></th>
				<th nowrap><a href="javascript:void(0);" >院系</a></th>
				<th nowrap><a href="javascript:void(0);" >合作资源</a></th>
				<th nowrap><a href="javascript:void(0);" >电话</a></th>
				<th nowrap><a href="javascript:void(0);" >qq</a></th>
				<th nowrap><a href="javascript:void(0);" >状态</a></th>
				<th nowrap><a href="javascript:void(0);" >大使</a></th>
				<th nowrap><a href="javascript:void(0);" >时间</a></th>
				<th style="text-align:center;">操作</th>
			</tr>
			<?php 
			foreach ($this->list as $k=>$v):
			?>
			<tr class="row" onmouseover="over(event)" onmouseout="out(event)" >
<!--		<td><input type="checkbox" name="key"	value="<?php echo $v['id']; ?>"></td><td><?php echo $v['id']; ?></td>-->
			<td><a href="/admin/adminLoginFront?email=<?php echo $v['email']; ?>" target="blank"><?php echo !empty($v['realname'])?$v['realname']:substr($v['email'], 0,stripos($v['email'], '@')); ?></a></td>
			<td><?php echo !empty($v['area_id']) ? Model_Area::getCityArr($v['area_id']):''; ?></td>
			<td><?php echo !empty($v['school_id']) ? Model_School::getSchoolArr($v['school_id']):''; ?></td>
			<td><?php echo $v['college']; ?></td>
			<td><?php echo $v['resource']; ?>&nbsp;</td>
			<td><?php echo $v['mobile']; ?></td>
			<td><?php echo $v['qq']; ?></td>
			<td><?php echo Model_User::$status[$v['status']]; ?></td>
			<td><?php echo Model_User::$ambassador[$v['ambassador']]; ?></td>
			<td><?php echo substr($v['created'], 0,10); ?></td>
			
			<td align="center" nowrap>
				<a href="/admin/useredit?id=<?php echo $v['id']; ?>">编辑</a>&nbsp;&nbsp;<a href="/admin/userdel?id=<?php echo $v['id']; ?>">删除</a></td>
			</tr>
			<?php 
			endforeach;
			?>
			</table>
		</div>
		<div class="page"><?php echo $this->page ;?></div>

	</div>

</div>