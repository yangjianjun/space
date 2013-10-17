

<div id="main" class="main" >
	<div class="content" >
		<div class="title">方案列表</div>		
		<form method='post' action="/admin/plan">
			<input type="hidden" id="param" area_id="<?php echo isset($_REQUEST['area_id'])?$_REQUEST['area_id']:'';?>" school_id="<?php echo isset($_REQUEST['school_id'])?$_REQUEST['school_id']:'';?>" />
			<div class="rSearch">
				<div class="fLeft">活动名查询：<span id="key"><input type="text" name="title" value="<?php echo isset($_REQUEST['title'])?$_REQUEST['title']:'';?>" class="medium" ></span></div>
				<div class="fLeft">所在地：<span>
				<select name="area_id" style="width:150px">
				<option value="0">请选择</option>
				<?php 
				foreach ($this->areas as $area) {
					$selected = (isset($_REQUEST['area_id']) && $_REQUEST['area_id'] == $area['area_id']? 'selected':'' );
					echo '<option value="'.$area['area_id'].'" '.$selected.'  >'.$area['name'].'</option>';
				}
				?>
                </select>
				</span></div>
				<div class="fLeft">所在大学：<span>
				<select name="school_id" style="width:150px">
					<option value="0">请选择</option>
                </select>
				</span></div>
				<div class="fLeft">活动类型：<span>
				<?php 
				echo Common::getSelect("adtype",Model_Plan::$adtype,array('id'=>isset($_REQUEST['adtype'])? $_REQUEST['adtype']:'')) ;
				?>
				</span></div>
				<div class="fLeft">活动状态：<span>
				<?php 
				echo Common::getSelect("pstatus",Model_Plan::$pstatus,array('id'=>isset($_REQUEST['pstatus'])? $_REQUEST['pstatus']:'')) ;
				?>
				</span></div>
				<div class="hMargin fLeft" ><input type="submit" id="" name="search" value="" onclick="" class="search imgButton"></div>
			</div>

		</form>

		<div class="list" >
		
		
			<table id="checkList" class="list" cellpadding=0 cellspacing=0 >
			<tr><td height="5" colspan="12" class="topTd" ></td></tr>
			<tr class="row" >
<!--			<th width="8"><input type="checkbox" id="check" onclick="CheckAll('checkList')"></th><th width="5%" nowrap><a href="javascript:void(0);">编号</a></th>-->
				<th width="30"><a href="javascript:void(0);">编号</a></th>
				<th width="200" nowrap><a href="javascript:void(0);" >活动名称</a></th>
				<th nowrap><a href="javascript:void(0);" >活动季节</a></th>
				<th width="200" nowrap><a href="javascript:void(0);" >活动关键字</a></th>
				<th nowrap><a href="javascript:void(0);" >活动开始时间</a></th>
				<th nowrap><a href="javascript:void(0);" >活动结束时间</a></th>
				<th nowrap><a href="javascript:void(0);" >活动类型</a></th>
				<th nowrap><a href="javascript:void(0);" >赞助金额</a></th>
				<th nowrap><a href="javascript:void(0);" >申请人</a></th>
				<th nowrap><a href="javascript:void(0);" >时间</a></th>
				<th style="text-align:center;">操作</th>
			</tr>
			<?php 
			foreach ($this->list as $k=>$v):
			?>
			<tr class="row" onmouseover="over(event)" onmouseout="out(event)" >
<!--		<td><input type="checkbox" name="key"	value="<?php echo $v['id']; ?>"></td><td><?php echo $v['id']; ?></td>-->
			<td><?php echo $v['id']; ?></td>
			<td><?php echo $v['title']; ?></td>
			<td><?php echo Model_Plan::$actionseason[$v['actionseason']]; ?></td>
			<td><?php echo $v['trait']; ?></td>
			<td><?php echo $v['time_start']; ?></td>
			<td><?php echo $v['time_end']; ?></td>
	
	
			<td><?php echo Model_Plan::$adtype[$v['adtype']]; ?></td>
			<td><?php echo $v['wantsmoney']; ?></td>
			<td><?php echo $v['realname']; ?></td>
			<td><?php echo $v['created']; ?></td>
			
			<td align="center" nowrap>
				<a href="/admin/planedit?id=<?php echo $v['id']; ?>">编辑</a>&nbsp;&nbsp;<a href="/admin/plandel?id=<?php echo $v['id']; ?>">删除</a>&nbsp;&nbsp;</td>
			</tr>
			<?php 
			endforeach;
			?>
			</table>
		</div>
		<div class="page"><?php echo $this->page ;?></div>

	</div>

</div>