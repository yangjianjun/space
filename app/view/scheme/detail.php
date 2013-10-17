<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config['webname'] ?></title>
<link href="/public/css/mycss.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#e5e5e5">
	
	<div class="shadow_za">
		<div class="shadow_zb">
			<div class="xiangqing_top">
				<h2><?=$this->plan['title']?></h2>
				
				<p><?=$this->plan['realname']?> 于<?=$this->plan['created']?> 上传</p>
			</div>
		</div>
	<!--center-->
	<div id="center_zhuce" style="overflow:visible;margin:28px 0 28px 48px;">
		<div class="cenzhuce_left hezuo" style="margin-top:10px;">
		<h2 class="xinshou_h2a" style="margin:0px">方案基础信息</h2>
				<div class="line">&nbsp;</div>
				<div id="span_aa">
					<span>所在城市：　</span><?= !empty($this->plan['area_id']) ? Model_Area::getCityArr($this->plan['area_id']):''; ?>
					<div class="linea">&nbsp;</div>
					<span>所在学校：　</span><?= !empty($this->plan['school_id']) ? Model_School::getSchoolArr($this->plan['school_id']):'';?>
					<div class="linea">&nbsp;</div>
					<span>活动名称：　</span><?=$this->plan['title']?>
					<div class="linea">&nbsp;</div>
					<span>活动类型：　</span><?=Model_Plan::$adtype[$this->plan['adtype']]?>
					<div class="linea">&nbsp;</div>
					<span>活动关键字：　</span><?=$this->plan['trait']?>
					<div class="linea">&nbsp;</div>
					<span>活动开始时间：　</span><?=$this->plan['time_start']?>
					<div class="linea">&nbsp;</div>
					<span>活动结束时间：　</span><?=$this->plan['time_end']?>
					<div class="linea">&nbsp;</div>
					<span>活动场次：　</span>该信息已被隐藏
					<div class="linea">&nbsp;</div>
					<span>所有场次累计参与总人数：　</span>该信息已被隐藏
					<div class="linea">&nbsp;</div>
					<span>参与人群男女比例：　</span>该信息已被隐藏
					<div class="linea">&nbsp;</div>
					<span>参与人群平均学历水平：　</span>该信息已被隐藏
					<h2 class="xinshou_h2a" style="margin:10px 0 0 0">活动推广信息</h2>
					<div class="line">&nbsp;</div>
					
					<span>校园媒体推广：　</span>该信息已被隐藏   
					<div class="linea">&nbsp;</div>
					<span>社会媒体推广：　</span>该信息已被隐藏
					<div class="linea">&nbsp;</div>
				</div>
		</div>
	</div>
	<div class="clear">&nbsp;</div>
	<div class="shadow_zc">&nbsp;</div>
	<!--bottom-->
	</div>
	
</body>
</html>