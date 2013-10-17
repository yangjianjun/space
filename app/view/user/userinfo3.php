<form action="" method="post" id="regcomfrom" name="regcomfrom">
<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎加入<?php echo $this->config['webname'];?></h1>
		<div class="">&nbsp;</div>
		<div class="cenzhuce_left tianxie">
			<div id="twonew">
				<h2>校园大使</h2>
				<div class="line">&nbsp;</div>
	            <textarea name="campus_ambassador" id="campus_ambassador" cols="60" rows="10" ><?php echo isset($this->user['campus_ambassador']) ?$this->user['campus_ambassador']: "" ;?></textarea>
				<span id="introducesspan"></span><br />	
				<span class="bot_ad">请客观的介绍一下你自己。</span><br />
				<br />
				
				 <h2>曾经参与或举办过的活动</h2>
				 <div class="line"></div>
	             <textarea name="case" id="case" cols="60" rows="10" ><?php echo isset($this->user['case']) ?$this->user['case']: "" ;?></textarea>
				 <span id="ocontspan"></span><br />	
				 <span class="bot_ad">请详细介绍一下你参与或举办过的活动的主办方，活动名称 ，担任职务 ，负责内容  
				 </span><br /><br />
				
				 <br />
				 
				 
				 <h2>合作资源</h2>
				 <div class="line"></div>
				 <table>
					 <tr>
						 <th>场地租借：</th>
						 <td title="校园设摊场地租赁"><input type="checkbox" name="resource[]" value="1" <?php echo isset($this->user['resource']) && in_array('1', $this->user['resource'])?'checked':''; ?> />&nbsp;路演场地&nbsp;</td>
						 <td title="校园大礼堂租赁"><input type="checkbox" name="resource[]" value="2" <?php echo isset($this->user['resource']) && in_array('2', $this->user['resource'])?'checked':''; ?>/>&nbsp;大礼堂&nbsp;</td>
						 <td title="校园报告厅租赁"><input type="checkbox" name="resource[]" value="3" <?php echo isset($this->user['resource']) && in_array('3', $this->user['resource'])?'checked':''; ?> />&nbsp;报告厅&nbsp;</td>
						 <td title="校园教室租赁"><input type="checkbox" name="resource[]" value="4" <?php echo isset($this->user['resource']) && in_array('4', $this->user['resource'])?'checked':''; ?> />&nbsp;教室&nbsp;</td>
						 <td title="校园体育馆租赁"><input type="checkbox" name="resource[]" value="5" <?php echo isset($this->user['resource']) && in_array('5', $this->user['resource'])?'checked':''; ?> />&nbsp;体育馆&nbsp;</td>
						 <td title="校园户外运动场租赁"><input type="checkbox" name="resource[]" value="6" <?php echo isset($this->user['resource']) && in_array('6', $this->user['resource'])?'checked':''; ?> />&nbsp;运动场&nbsp;</td>
					 </tr>
					 <tr>
						 <th>校园媒体：</th>
						 <td title="运动场广告是指以运动场围网为载体，发布大面积喷绘广告。"><input type="checkbox" name="resource[]" value="7"  <?php echo isset($this->user['resource']) && in_array('7', $this->user['resource'])?'checked':''; ?> />&nbsp;运动场广告&nbsp;</td>
						 <td title="食堂广告包括食堂框架平面广告、食堂餐桌桌贴广告等跟食堂属性相关的媒体"><input type="checkbox" name="resource[]" value="8"  <?php echo isset($this->user['resource']) && in_array('8', $this->user['resource'])?'checked':''; ?> />&nbsp;食堂广告&nbsp;</td>
						 <td title="宿舍广告是指以寝室楼为发布阵地的平面广告"><input type="checkbox" name="resource[]" value="9"  <?php echo isset($this->user['resource']) && in_array('9', $this->user['resource'])?'checked':''; ?> />&nbsp;宿舍广告&nbsp;</td>
						 <td title="校园刊物发布"><input type="checkbox" name="resource[]" value="10" <?php echo isset($this->user['resource']) && in_array('10', $this->user['resource'])?'checked':''; ?>  />&nbsp;校园刊物&nbsp;</td>
						 <td title="校园横幅发布"><input type="checkbox" name="resource[]" value="11" <?php echo isset($this->user['resource']) && in_array('11', $this->user['resource'])?'checked':''; ?> />&nbsp;横幅&nbsp;</td>
						 <td title="校园广播台宣传"><input type="checkbox" name="resource[]" value="12" <?php echo isset($this->user['resource']) && in_array('12', $this->user['resource'])?'checked':''; ?> />&nbsp;广播&nbsp;</td>
					 </tr>
					 <tr>
						 <th>活动执行：</th>
						 <td title="在校内食堂门口、商业街、大活广场等地设摊进行商业活动的"><input type="checkbox" name="resource[]" value="13" <?php echo isset($this->user['resource']) && in_array('13', $this->user['resource'])?'checked':''; ?> />&nbsp;校内设摊&nbsp;</td>
						 <td title="组织校园各类演艺资源，协调学校各个部门，执行品牌赞助的商业演出"><input type="checkbox" name="resource[]" value="14" <?php echo isset($this->user['resource']) && in_array('14', $this->user['resource'])?'checked':''; ?> />&nbsp;组织演出&nbsp;</td>
						 <td title="协调比赛场地，组织比赛队伍和比赛流程，执行品牌赞助的商业体育竞赛"><input type="checkbox" name="resource[]" value="15" <?php echo isset($this->user['resource']) && in_array('15', $this->user['resource'])?'checked':''; ?> />&nbsp;体育比赛&nbsp;</td>
						 <td title="在校园内执行一场有商家赞助的讲座"><input type="checkbox" name="resource[]" value="16" <?php echo isset($this->user['resource']) && in_array('16', $this->user['resource'])?'checked':''; ?> />&nbsp;办讲座&nbsp;</td>
						 <td title="为商家在学校内大面积张贴海报"><input type="checkbox" name="resource[]" value="17" <?php echo isset($this->user['resource']) && in_array('17', $this->user['resource'])?'checked':''; ?> />&nbsp;海报&nbsp;</td>
						 <td title="在学校食堂门口和寝室楼内替企业大面积散布各类宣传单页或者产品小样"><input type="checkbox" name="resource[]" value="18" <?php echo isset($this->user['resource']) && in_array('18', $this->user['resource'])?'checked':''; ?> />&nbsp;派发&nbsp;</td>
					 </tr>
				 
				 </table>
	             
				 <span id="ocontspan"></span><br />	
				 <span class="bot_ad">注意：“合作资源”是指你有能力提供的学校资源，这些资源可为你带来潜在的商业机会，请如实填选！</span>
				 
				 
				 <br /><br />
				
				 <br />
				 
				 
				 <a href="javascript:void(0);" class="text_ab" onclick="$('#regcomfrom').trigger('submit');">保存并完成</a><a href="javascript:void(0);" class="text_ab" onclick="location.href='/user/index';" style="margin-left: 10px;">以后再填写</a>&nbsp;			
			</div>
		</div>
		<div class="cenzhuce_right zhuce">
			<div class="look_this">
				<div class="look_this_text">	
请准确、完整地填写本页信息，这些信息可以让我们对你本人有更多的了解，也是决定你是否能成为校园大使的重要依据。
				</div>
			</div>
		</div>
</div>
</form>