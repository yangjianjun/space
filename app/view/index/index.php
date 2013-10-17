<!--center-->
<div id="shou">
	<div class="clear">&nbsp;</div>
	<div class="new_sh_top">
			<a href="/user/uploadPlanWarn" class="guanli_ac">&nbsp;</a>
	</div>

	<div class="new_sh_cent_a" >
		<!-- 搜索 -->
		<h3 class="shou_h3a">方案搜索</h3>
		<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>
	   	<style>
				input.search{background-image:url(/public/images/btn_search.jpg)}
				input.imgButton {
				    background-repeat: no-repeat;
				    border: 0 none;
				    cursor: pointer;
				    height: 26px;
				    margin: 0;
				    width: 74px;
				}
				#search_scheme {
					border-collapse:collapse;border-spacing:0;
					
				}
				#search_scheme tr {
					margin-top:5px;
				}
				#search_scheme tr th{
					width:80px;
					font-size:12px;
					font-weight:normal;
					color:#999;
				}
				#search_scheme tr td{
					padding:3px 0px;
					color:#666;
				}
				#search_scheme tr td select{
					width:200px;
				}
        </style>
        <form action="/scheme/index" method="post" >
		<table id="search_scheme" style="margin-bottom:13px;">
			<tr>
				<th>所在城市:</th>
				<td>
					<select name="area_id" >
						<option value="0">请选择</option>
						<?php 
						foreach ($this->areas as $area) {
							echo '<option value="'.$area['area_id'].'">'.$area['name'].'</option>';
						}
						?>
			        </select>
		        </td>
			</tr>
			<tr>
				<th>所在大学:</th>
				<td>
					<select name="school_id" >
						<option value="0">请选择</option>
					</select>
		        </td>
			</tr>
			<tr>
				<th>上传时间:</th>
				<td>
					<select name="created" >
						<option value="">请选择</option>
						<option value="3">3天内</option>	
						<option value="7">7天内</option>	
						<option value="15">15天内</option>
						<option value="30">30天内</option>	
						<option value="60">60天内</option>	
						<option value="90">90天内</option>	
						<option value="1000">大于90天</option>	
					</select>
		        </td>
			</tr>
			<tr>
				<th>关键字:</th>
				<td>
					<input name="title" type="text" id="scheme_title" style="width:198px;"  />
		        </td>
		        <td colspan="4">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="" name="search" value="" onclick="" class="search imgButton" type="submit">
		        </td>
			</tr>
			
		
		</table>
		</form>
		<h3 class="shou_h3a">数据分析</h3>
		<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>
		<div class="shuju_a">
		<div style="filter:alpha(opacity=10);-moz-opacity:0.1;opacity:0.1;background:#fff;position:absolute;width:512px;height:153px;">&nbsp;</div>
			<a href="#" >
			<script>
				AC_FL_RunContent(
							'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,45,2',
							'width', '224',
							'height', '115',
							'scale', 'noscale',
							'salign', 'TL',
							'bgcolor', '#ffffff',
							'wmode', 'opaque',
							'movie', 'charts',
							'src', '/public/flash/charts',
							'FlashVars', 'library_path=/public/flash/&xml_source=/index/samplehuan', 
							'id', 'my_chart',
							'name', 'my_chart',
							'menu', 'true',
							'allowFullScreen', 'true',
							'allowScriptAccess','sameDomain',
							'quality', 'high',
							'align', 'middle',
							'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
							'play', 'true',
							'devicefont', 'false'
							); 
				</script>
			</a>
			<?php echo date("Y-m-d") ;?>为止方案通过审核比例
		</div>
		<div class="shuju_b">
			<script>
					AC_FL_RunContent(
								'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,45,2',
								'width', '224',
								'height', '115',
								'scale', 'noscale',
								'salign', 'TL',
								'bgcolor', '#ffffff',
								'wmode', 'opaque',
								'movie', 'charts',
								'src', '/public/flash/charts',
								'FlashVars', 'library_path=/public/flash/&xml_source=/index/samplehuan2', 
								'id', 'my_chart',
								'name', 'my_chart',
								'menu', 'true',
								'allowFullScreen', 'true',
								'allowScriptAccess','sameDomain',
								'quality', 'high',
								'align', 'middle',
								'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
								'play', 'true',
								'devicefont', 'false'
								); 
				</script>
			<?php echo date("Y-m-d") ;?>为止活动取得赞助比例
		</div>
	</div>
	<!-- 动态获取新方案 scheme-manager.jsp -->
	<div class="new_sh_cent_b">
		<h3 class="shou_h3a">最新上传方案</h3>
		<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>
		<ul class="shou_ula">
			<?php 
            if ($this->plans):
            foreach ($this->plans as $k=>$v) :
            ?>
			<li><span>&#183; </span>
				<a href="/scheme/detail?id=<?=$v['id']?>" target="_back"><?=Common::utf8Substr($v['title'], 0, 12)?></a>
				<a href="javascript:void(0);" class="sho_ula_a"><?=$v['created']?></a>
			</li>
			<?php 
            endforeach;
            endif;?>
		</ul>
		
	</div>
	
	<div class="clear" style="height:10px;">&nbsp;</div>
		<a href="/index/applyas?url=<?=base64_encode('/index/applyas')?>" style="display:block;width:942px;margin:auto"><img src="/public/images/sign_up.jpg" alt="报名校园大使" title="报名校园大使"/></a>	
	<div class="clear">&nbsp;</div>
							
	<h3 class="shou_h3a" style="margin-top:10px;">优秀校园大使</h3>
	<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>		
		<ul class="sign_up_ul">

		<li>
				<img src="/public/images/1375608409734.gif" />
				李晋非<br/>
				
				复旦大学
		</li>
		
		<li>
				<img src="/public/images/1375401434640.gif" />
				王宇<br/>
				
				清华大学
		</li>
		
		<li>
				<img src="/public/images/1375339093265.gif" />
				董露<br/>
				
				人民大学
		</li>
		
		<li>
				<img src="/public/images/1375320380031.gif" />
				邵云艳<br/>
				
				武汉大学
		</li>
		
		<li>
				<img src="/public/images/1355821781781.gif" />
				马婷婷<br/>
				
				上海财经大学
		</li>
		
		<li>
				<img src="/public/images/1375111655140.gif" />
				潘陆<br/>
				
				中国科技大学
		</li>
						
		</ul>	
	<div class="clear">&nbsp;</div>
	<div class="new_sh_cent_c">
		<h3 class="shou_h3a">流程说明</h3>
		<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>
			<div class="dianl_left" style="margin:0px;">
				<em class="dianl_em1">&nbsp;</em>
				<a href="/help"><span><h2>注册账号</h2>成为注册用户就能申请赞助！</span></a>
			</div>
			<div class="dianl_left">
				<em class="dianl_em2">&nbsp;</em>
				<a href="/help"><span><h2>上传方案</h2>上传活动方案的主要信息！</span></a>
			</div>
			<div class="dianl_left">
				<em class="dianl_em3">&nbsp;</em>
				<a href="/help"><span><h2>通过审核</h2>我们对上传的方案认真审核！</span></a>
			</div>
					<div class="clear" style="height:14px;">&nbsp;</div>
			<div class="dianl_left" style="margin:0px;">
				<em class="dianl_em4">&nbsp;</em>
				<a href="/help"><span><h2>获得赞助</h2>赞助绝大多数通过审核的方案！</span></a>
			</div>
			<div class="dianl_left">
				<em class="dianl_em5">&nbsp;</em>
				<a href="/help"><span><h2>举办活动</h2>保证获得赞助的活动顺利举办！</span></a>
			</div>
			<div class="dianl_left">
				<em class="dianl_em6">&nbsp;</em>
				<a href="/help"><span><h2>活动总结</h2>请将活动执行总结提交给我们！</span></a>
			</div>
	</div>
	<div class="clear">&nbsp;</div>
	<div class="new_sh_cent_d">
		<h3 class="shou_h3a">专家顾问</h3>
		<div class="line_line">&nbsp;</div>
		<div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_1.gif" /></a>
			<span>
				<h3>Wiston Jing</h3>
				<p>可口可乐（中国）市场部果汁饮<br/>料高级品牌经理。...</p>
			</span>
		</div>
		<div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_2.gif" /></a>
			<span>
				<h3>Barry Chen</h3>
				<p>耐克体育（中国）有限公司市场<br/>部经理。...</p>
			</span>
		</div>
		<div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_3.gif" /></a>
			<span>
				<h3>Jason Mao</h3>
				<p>联合利华（中国）有限公司市场<br/>品牌建设部经理。...</p>
			
			</span>
		</div>
				<div class="clear">&nbsp;</div>
                
		<div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_4.gif" /></a>
			<span>
			<h3>Roland Li</h3>
			<p>奥美广告大中华区客户业务部业<br/>务经理，...</p>
			</span>
		</div>
		
        <div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_5.gif" /></a>
			<span style="float:left;width:205px;padding-left:10px;">
				<h3>Leon Shuai</h3>
				<p>瑞欧广告中国线下活动组美术创<br/> 意执行总监。...</p>
			</span>
		</div>
		
        <div class="jiaoshou">
			<a href="/help/expert"><img src="/public/images/jiaoshou_6.gif" /></a>
			<span>
				<h3>Alex Liu</h3>
				<p>赞助宝创始人，场地通创始人，上<br/>
				  海市场人俱乐部理事，...</p>
			</span>
		</div>
	</div>
	<div class="clear" style="height:12px;">&nbsp;</div>
	<div class="new_sh_cent_e">
		<h3 class="shou_h3a">品牌支持</h3>
		<div class="line_line" style="margin-bottom:13px;">&nbsp;</div>
		<div class="weiyuanhui">
			<span> &#183; 三星（中国）投资有限公司&nbsp; </span>&nbsp;
			<span> &#183; 可口可乐(中国)饮料有限公司&nbsp; </span>&nbsp;
			<span> &#183; 中粮集团有限公司&nbsp; </span>&nbsp;
			<span> &#183; 联合利华(中国)有限公司&nbsp; </span>&nbsp;
			<span> &#183; 耐克体育(中国)有限公司 </span>
		</div>
	</div>
</div>