<div id="main" class="main" >
	<div class="content">
		<div class="title">编辑方案[ <a href="/admin/plan">返回列表</a> ]</div>
		<form method='post' id="form1" action="" >
			<style>
				table {
					width:350px;
					float:left;
				}
				table  tr td.tRight{
					
					width:80px;
				}
				table  tr td.left{
					
					width:300px;
				}
			</style>
			<table>
				<tr>
					<td class="tRight" >标题</td>
					<td class="tLeft"><?=($this->list['title'])?$this->list['title']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >活动季节</td>
					<td class="tLeft"><?=Model_Plan::$adtype[($this->list['actionseason'])?$this->list['actionseason']:'']?></td>
				</tr>
				<tr>
					<td class="tRight" >活动关键字</td>
					<td class="tLeft"><?=($this->list['trait'])?$this->list['trait']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >活动开始时间</td>
					<td class="tLeft"><?=($this->list['time_start'])?$this->list['time_start']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >活动结束时间</td>
					<td class="tLeft"><?=($this->list['time_end'])?$this->list['time_end']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >活动类型</td>
					<td class="tLeft"><?=Model_Plan::$adtype[($this->list['adtype'])?$this->list['adtype']:'']?></td>
				</tr>
				
				
				<tr>
					<td class="tRight" >现场人数</td>
					<td class="tLeft"><?=Model_Plan::$spotpeople[$this->list['spotpeople']]?></td>
				</tr>
				<tr>
					<td class="tRight" >活动品牌</td>
					<td class="tLeft"><?=Model_Plan::$actionbrand[$this->list['actionbrand']]?></td>
				</tr>
				<tr>
					<td class="tRight" >活动级别</td>
					<td class="tLeft"><?=Model_Plan::$actionlevel[$this->list['actionlevel']]?></td>
				</tr>
				
				<tr>
					<td class="tRight" >物料宣传</td>
					<td class="tLeft"><?=($this->list['material_show'])?$this->list['material_show']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >媒体宣传</td>
					<td class="tLeft"><?=($this->list['media_show'])?$this->list['media_show']:''?></td>
				</tr>
				
				
				<tr>
					<td class="tRight" >活动场次</td>
					<td class="tLeft"><?=Model_Plan::$scene[($this->list['scene'])?$this->list['scene']:'']?></td>
				</tr>
				<tr>
					<td class="tRight" >所有场次累计参与总人数</td>
					<td class="tLeft"><?=Model_Plan::$playernum[$this->list['playernum']]?></td>
				</tr>
				<tr>
					<td class="tRight" >参与人群男女比例</td>
					<td class="tLeft"><?=Model_Plan::$manwo[$this->list['manwo']]?></td>
				</tr>
				<tr>
					<td class="tRight" >主要参与人群学历水平</td>
					<td class="tLeft"><?=Model_Plan::$edu[$this->list['edu']]?></td>
				</tr>
				<tr>
					<td class="tRight" >重要活动嘉宾</td>
					<td class="tLeft"><?=($this->list['leading'])?$this->list['leading']:''?></td>
				</tr>
			</table>
			
			
			<table>
				<tr>
					<td class="tRight" >场地名</td>
					<td class="tLeft"><?=($this->list['plname'])?$this->list['plname']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >面积</td>
					<td class="tLeft"><?=($this->list['area'])?$this->list['area']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >座位数量</td>
					<td class="tLeft"><?=($this->list['seatnum'])?$this->list['seatnum']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >性质</td>
					<td class="tLeft"><?=Model_Plan::$charact[$this->list['charact']]?></td>
				</tr>
				<tr>
					<td class="tRight" >场地位置</td>
					<td class="tLeft"><?=Model_Plan::$location[$this->list['location']]?></td>
				</tr>
			
				<tr>
					<td class="tRight" >舞台长度</td>
					<td class="tLeft"><?=($this->list['lengths'])?$this->list['lengths']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >舞台宽度</td>
					<td class="tLeft"><?=($this->list['widths'])?$this->list['widths']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >舞台高度</td>
					<td class="tLeft"><?=($this->list['heights'])?$this->list['heights']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >音箱数量</td>
					<td class="tLeft"><?=($this->list['soundns'])?$this->list['soundns']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >麦克风数量</td>
					<td class="tLeft"><?=($this->list['mikens'])?$this->list['mikens']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >投影仪数量</td>
					<td class="tLeft"><?=($this->list['projectorns'])?$this->list['projectorns']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >投影幕布数量</td>
					<td class="tLeft"><?=($this->list['propagens'])?$this->list['propagens']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >灯光数量</td>
					<td class="tLeft"><?=($this->list['dengns'])?$this->list['dengns']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >暖气数量</td>
					<td class="tLeft"><?=($this->list['nuanqins'])?$this->list['nuanqins']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >你想获得的赞助金额</td>
					<td class="tLeft"><?=($this->list['wantsmoney'])?$this->list['wantsmoney']:''?></td>
				</tr>
				<tr>
					<td class="tRight" >方案状态</td>
					<td class="tLeft">
					<?php 
					echo Common::getSelect("pstatus",Model_Plan::$pstatus,array('id'=>isset($this->list['pstatus'])? $this->list['pstatus']:'')) ;
					?>
					</td>
				</tr>
				<tr>
				<tr>
					<td></td>
					<td class="center">
					<input type="submit" value="保 存" class="small submit" />
					<input type="reset" class="submit small" value="清 空" />
					</td>
				</tr>
			</table>
			
			<table>
				<tr>
					<td class="tRight" >活动策划案</td>
					<td class="tLeft"><div style="width:300px;"><?=($this->list['content'])?$this->list['content']:''?></div></td>
				</tr>
			</table>
		</form>
	</div>
</div>