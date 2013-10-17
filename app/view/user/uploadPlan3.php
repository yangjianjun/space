<script type="text/javascript"  src="/public/js/htmlEncode.js"></script>
<form action="" method="post" name="fm" id="fm">
	<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎上传活动方案</h1>
		<div class="centop_a_b"><img src="/public/images/jdt_3.jpg" /></div>
		<div class="cenzhuce_left tianxie" style="width:600px;">
		<span style="font-size:16px;color:#d83b38">请选择并完整填写本次活动可进行的物料宣传</span><br/><br/>
		<div class="line">&nbsp;</div><br/>
		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">					
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(1,$this->plan['material_show']) ? "checked":"") ?>   value="1" style="margin-top:-2px;*margin:0px;"    /> 

			海报（活动主题）</span>
			<span class="bot_ad">　 活动主题海报 </span>
			<br/>
		</div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(2,$this->plan['material_show']) ? "checked":"") ?>   value="2" style="margin-top:-2px;*margin:0px;"    /> 
							
			横幅</span>
			<span class="bot_ad">　 横幅 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(3,$this->plan['material_show']) ? "checked":"") ?>   value="3" style="margin-top:-2px;*margin:0px;"    /> 
						
			宣传单页</span>
			<span class="bot_ad">　 宣传单页 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(4,$this->plan['material_show']) ? "checked":"") ?>   value="4" style="margin-top:-2px;*margin:0px;"    /> 
						
			X展架（活动主题）</span>
			<span class="bot_ad">　 活动主题X展架 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(5,$this->plan['material_show']) ? "checked":"") ?>   value="5" style="margin-top:-2px;*margin:0px;"    /> 
						
			明信片</span>
			<span class="bot_ad">　 企业明信片 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(6,$this->plan['material_show']) ? "checked":"") ?>   value="6" style="margin-top:-2px;*margin:0px;"    /> 
						
			喷绘（活动现场背景）</span>
			<span class="bot_ad">　 背景喷绘 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(7,$this->plan['material_show']) ? "checked":"") ?>   value="7" style="margin-top:-2px;*margin:0px;"    /> 
						
			海报（赞助商）</span>
			<span class="bot_ad">　 赞助商海报 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(8,$this->plan['material_show']) ? "checked":"") ?>   value="8" style="margin-top:-2px;*margin:0px;"    /> 
						
			X展架（赞助商）</span>
			<span class="bot_ad">　 赞助商X展架 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(9,$this->plan['material_show']) ? "checked":"") ?>   value="9" style="margin-top:-2px;*margin:0px;"    /> 
						
			喷绘（互动签名）</span>
			<span class="bot_ad">　 宣传喷绘，用于户外宣传 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(10,$this->plan['material_show']) ? "checked":"") ?>   value="10" style="margin-top:-2px;*margin:0px;"    /> 
						
			X展架（互动活动说明）</span>
			<span class="bot_ad">　 互动活动X展架，用于特殊互动环节 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(11,$this->plan['material_show']) ? "checked":"") ?>   value="11" style="margin-top:-2px;*margin:0px;"    /> 
						
			喷绘（互动活动）</span>
			<span class="bot_ad">　 互动活动喷绘，用于签名，照相等用途 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(12,$this->plan['material_show']) ? "checked":"") ?>   value="12" style="margin-top:-2px;*margin:0px;"    /> 
						
			互动道具</span>
			<span class="bot_ad">　 互动道具，用户互动环节 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(13,$this->plan['material_show']) ? "checked":"") ?>   value="13" style="margin-top:-2px;*margin:0px;"    /> 
						
			赞助商VCR</span>
			<span class="bot_ad">　 赞助商VCR,用于活动现场播放 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(14,$this->plan['material_show']) ? "checked":"") ?>   value="14" style="margin-top:-2px;*margin:0px;"    /> 
						
			LOGO充气棒</span>
			<span class="bot_ad">　 LOGO充气棒 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(15,$this->plan['material_show']) ? "checked":"") ?>   value="15" style="margin-top:-2px;*margin:0px;"    /> 
						
			迎新手册</span>
			<span class="bot_ad">　 新生入校领取的指导手册 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(16,$this->plan['material_show']) ? "checked":"") ?>   value="16" style="margin-top:-2px;*margin:0px;"    /> 
						
			景点门票</span>
			<span class="bot_ad">　 赞助商景点门票  </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(17,$this->plan['material_show']) ? "checked":"") ?>   value="17" style="margin-top:-2px;*margin:0px;"    /> 
						
			调查问卷</span>
			<span class="bot_ad">　 大学生市场调研问卷 </span>
			<br/>
		</div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(18,$this->plan['material_show']) ? "checked":"") ?>   value="18" style="margin-top:-2px;*margin:0px;"    /> 
						
			活动宣传展板</span>
			<span class="bot_ad">　 活动宣传展板 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div style="height:26px;overflow:hidden;">			
		<span class="fuwu ac">
			
			<input type="checkbox" name="material_show[]"  <?=(isset($this->plan['material_show']) && in_array(19,$this->plan['material_show']) ? "checked":"") ?>   value="19" style="margin-top:-2px;*margin:0px;"    /> 
						
			赞助商宣传展板</span>
			<span class="bot_ad">　 赞助商宣传展板 </span>
			<br/>
		  </div>
			  		

		  
		<div class="clear">&nbsp;</div>

		<div class="line">&nbsp;</div><br/>
		<div class="su">
		<a href="javascript:void(0);" class="text_ab" style="margin-left:20px;width:164px;" onclick="$('#fm').trigger('submit');">保存并下一步 》</a> 
		</div>

			
			<br/>
	
		</div>

		<div class="cenzhuce_right zhuce">
			<div class="look_this">
				<div class="look_this_text">	
					这些选项不是必填的，请根据实际情况进行填写，活动资料越丰富越容易获得赞助。				</div>
			</div>
		</div>
	  </div>

	</form>
	<div class="clear">&nbsp;</div>