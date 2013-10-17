<form action="" method="post" id="regcomfrom" name="regcomfrom">
<div id="center_zhuce">
		<h1 class="cenh1_a">欢迎加入<?php echo $this->config['webname'];?></h1>
		<div class="">&nbsp;</div>
		<div class="cenzhuce_left tianxie">
			
			<h2>基本信息</h2>
			<div class="line">&nbsp;</div>
			<div id="twonew">
			
			<span class="zhuce_sp_a">学生证号：</span><br />
			<input name="student_id" id="student_id" value="<?php echo isset($this->user['student_id']) ?$this->user['student_id']: "" ;?>" class="cenzhuce_left_inp_a"  type="text"><span id="stunospan"></span><br />	
			<span class="bot_ad">请输入你的学生证号。</span><br /><br />
			
			<span class="zhuce_sp_a">通信地址：</span><br />
			 <input name="postaladdr" id="postaladdr " value="<?php echo isset($this->user['postaladdr']) ?$this->user['postaladdr']: "" ;?>" class="cenzhuce_left_inp_a" type="text"><span id="postaladdrspan"></span><br />	
			<span class="bot_ad">请输入你的通信地址。</span><br /><br />

			 
			<span class="zhuce_sp_a">所在校区:</span><br />
			<input name="school_district" id="school_district" value="<?php echo isset($this->user['school_district']) ?$this->user['school_district']: "" ;?>" class="cenzhuce_left_inp_a"  type="text"><span id="selfuniverspan"></span><br />	
			<span class="bot_ad">请输入你所在校区。</span><br />
			
			
			<span class="zhuce_sp_a">校区人数:</span><br />
			<input name="school_district_num" id="school_district_num" value="<?php echo isset($this->user['school_district_num']) ?$this->user['school_district_num']: "" ;?>" class="cenzhuce_left_inp_b"  type="text"><span id="selfunivernumsspan"></span><br />	
			<span class="bot_ad">请输入你所在校区人数(数字)。</span><br />
			</div>
			<br />

		
			<span class="zhuce_sp_a">个人照片</span><br />
			<input value="请上传" id="flieb" onclick="var w1=window.open('/user/studentPhoto?id=<?php echo isset($this->user['id']) ?$this->user['id']: "0" ;?>&type=user','newwindow','height=200,width=400,top=400,left=300,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no,z-look=yes');w1.focus();" type="button">
			<input class="cenzhuce_left_inp_a" id="user_photo" name="user_photo" readonly="readonly" value="<?php echo isset($this->user['user_photo']) ?$this->user['user_photo']: "" ;?>" type="text"><span id="user_photospan"></span><br />
			<span class="bot_ad" style="display:block;clear:left;">请上传一张个人证明照片。</span>
			
		
			<span class="zhuce_sp_a">学生证照片</span><br />
			<input value="请上传" id="flieb" onclick="var w1=window.open('/user/studentPhoto?id=<?php echo isset($this->user['id']) ?$this->user['id']: "0" ;?>&type=student','newwindow','height=200,width=400,top=400,left=300,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no,z-look=yes');w1.focus();" type="button">
			<input class="cenzhuce_left_inp_a" id="student_photo" name="student_photo" readonly="readonly" value="<?php echo isset($this->user['student_photo']) ?$this->user['student_photo']: "" ;?>" type="text"><span id="student_photospan"></span><br />
			<span class="bot_ad" style="display:block;clear:left;">请上传一张个人证明照片。</span>
			<br /><br />
	
			<span class="zhuce_sp_a">目前担任职务:</span><br />
			<input name="current_position" id="current_position" class="cenzhuce_left_inp_a" value="<?php echo isset($this->user['current_position']) ?$this->user['current_position']: "" ;?>" type="text"><br />
			<span class="bot_ad">如果没有职务请填"无"。</span>
			<br /><br />
			
			<h2>账户信息</h2>
			<div class="line">&nbsp;</div>
			<span class="zhuce_sp_a">支付宝帐号</span><br />
			<input class="cenzhuce_left_inp_a" id="zhifubao" name="alipay" value="<?php echo isset($this->user['alipay']) ?$this->user['alipay']: "" ;?>" type="text"><span id="zhifubaospan"></span><br />
			<span class="bot_ad">支付宝帐号是我们发放赞助资金的唯一方式，非常重要。</span><br />
			
			<span class="zhuce_sp_a">银行卡：</span><br />
			 <input name="bank_card" id="bank_card" value="<?php echo isset($this->user['bank_card']) ?$this->user['bank_card']: "" ;?>" class="cenzhuce_left_inp_a" type="text"><br />	
			<span class="bot_ad">请输入你的银行卡卡号，以便于将活动赞助款汇给你。</span><br /><br />
			 
			<span class="zhuce_sp_a">开户行（具体支行）：</span><br />
			<input name="open_bank" id="open_bank " value="<?php echo isset($this->user['open_bank']) ?$this->user['open_bank']: "" ;?>" class="cenzhuce_left_inp_a" type="text"><br />	
			<span class="bot_ad">请输入你的开户行（具体支行），以便于将活动赞助款汇给你。</span><br /><br />
		
			<a href="javascript:void(0);" class="text_ab" onclick="$('#regcomfrom').trigger('submit');" >下一步</a>

								
		</div>
		<div class="cenzhuce_right zhuce">
			<div class="look_this">
				<div class="look_this_text">	
					请你准确、完整地填写本页信息选项，这些信息是我们确定你真实身份，并确认后续赞助签约，赞助资金发放事宜的重要依据。<br />感谢你的理解与配合！
				</div>
			</div>
		</div>
	</div>
</form>