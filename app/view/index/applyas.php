<style type="text/css">
	.cenh1_a{font-size:18px;}
	#tishi{height:auto;padding:20px 40px 0px 20px;border:1px #d6d6d6 solid;color:#000}
	p.xie_p_a{line-height:24px;font-size:14px;color:#000}
	.tishi_sure{width:172px;margin:24px auto 0;font-size:12px;line-height:24px;color:#000}
	.shengmingbut_a{cursor:pointer;width:147px;height:38px;display:block;border:none;background:none;background:url(/public/images/geren_b.gif) 0 0 no-repeat;font-size:18px;font-weight:bold;margin:auto;color:#fff;}
	.shengming_a{height:25px;margin:48px 0 12px 6px;background:url(/public/images/shengming_a.gif) 0 0 no-repeat;line-height:25px;float:right;display:inline;padding-left:24px;font-size:14px;color:#e50000;}
	.shengming_a a{color:#4bab1a}
</style>
<!--center-->
<div id="center">
		<form method="post" id="applyas">
		<div id="tishi">
			<h1 class="cenh1_a">声    明</h1><br/>
			<p class="xie_p_a">
<?=$this->config['webname'] ?>诚邀热衷于策划、执行、参与各类高校校园活动的在校大学生加入校园大使队伍。校园大使将作为<?=$this->config['webname'] ?>专业化的兼职队伍，配合<?=$this->config['webname'] ?>参与校园活动的策划、执行、督导等各项与校园活动相关的任务，并依据所分配任务的执行情况，将给予丰厚的劳动报酬和专业的技能认证。<br/>
您在接受<?=$this->config['webname'] ?>邀请前，应当仔细阅读本声明。当您点击确认后，则被视作已无条件接受本声明所涉全部内容。<br/>
1、<?=$this->config['webname'] ?>校园大使申请人须确保填写信息均真实可信。如发现虚假信息，一经查实，将取消参选资格，不另行通知。<br/>
2、<?=$this->config['webname'] ?>注册用户自愿接受<?=$this->config['webname'] ?>邀请，申请加入<?=$this->config['webname'] ?>校园大使。<br/>
3、<?=$this->config['webname'] ?>校园大使申请人同意<?=$this->config['webname'] ?>将申请信息收录到<?=$this->config['webname'] ?>人才信息库中，列为储备人才。<br/>
4、申请人入选<?=$this->config['webname'] ?>校园大使后须履行以下义务：<br/>
（1）、参与<?=$this->config['webname'] ?>校园大使专业培训并接受考核；<br/>
（2）、诚实守信，积极配合执行人员完成工作；<br/>
（3）、按时保质完成<?=$this->config['webname'] ?>所分派任务；<br/>
（4）、遵守<?=$this->config['webname'] ?>校园大使管理规范；<br/>
5、申请人入选<?=$this->config['webname'] ?>校园大使后享有以下权利：<br/>
（1）、根据活动完成情况及配合程度，每场次获得相应报酬；<br/>
（2）、活动累计一定场次后可获得<?=$this->config['webname'] ?>实习证明；<br/>
（3）、优秀校园大使可参与<?=$this->config['webname'] ?>校园大使定期培训；<br/>
（4）、有机会获得由高校创意总部、<?=$this->config['webname'] ?>联合颁发的证书；<br/>
6、凡参选<?=$this->config['webname'] ?>校园大使的<?=$this->config['webname'] ?>注册用户 ，即视同遵守<?=$this->config['webname'] ?>《服务条款》及<?=$this->config['webname'] ?>校园大使招募活动之各项规定。<br/>
7、<?=$this->config['webname'] ?>拥有对本声明的解释、修改及更新权。
			</p>
			<div class="tishi_sure">
				<input name="isreads" checked="checked" type="checkbox" value="" style="margin-top:-2px;"/>&nbsp;我已阅读并同意以上条款<br/><br/>
					<input type="button" onclick="checkValue()" value="申请校园大使" class="shengmingbut_a" />
			</div>
			<div class="clear">&nbsp;</div>
			<div class="shengming_a">注：如果你已经是<?=$this->config['webname'] ?>的注册用户，请在<a href="/user/login">登录</a>后申请</div>
			<div class="clear">&nbsp;</div>
		</div>
		</form>
	</div>		
<script language="javascript" type="text/javascript">
function checkValue(){
     var curkong=document.getElementsByName("isreads");
	 for (i=0; i<curkong.length; i++){
     	if (curkong[i].type=="checkbox" && curkong[i].checked){    
     		document.getElementById("applyas").submit();
   		}else{
		}
     }
}
</script>
<div class="clear">&nbsp;</div>
<!--bottom-->