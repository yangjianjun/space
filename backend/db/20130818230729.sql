DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `nickname` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL default '1' COMMENT '1:有效,-1:已删',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员表';

INSERT INTO admin VALUES('1','admin','999999','2013-07-25 17:36:46','0');

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(10) unsigned NOT NULL,
  `content` text COMMENT '内容',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO config VALUES('1','<p>\r\n	<div class=\"campus_tit\" align=\"center\">\r\n		<h1>\r\n			<strong>什么是校园大使？</strong> \r\n		</h1>\r\n	</div>\r\n	<h4>\r\n		校园大使是赞助宝专业化的校园活动执行管理队伍，配合赞助宝参与校园活动的策划、执行、督导等各项与校园活动相关的任务。\r\n	</h4>\r\n	<div class=\"campus_tit\">\r\n		<h2>\r\n			<span style=\"font-size:18px;\">校园大使要做什么？</span> \r\n		</h2>\r\n	</div>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">1活动举办期间，校园大使对学校举办的活动进行监督和指导。</span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">2非活动期内，配合赞助宝的要求进行信息收集或宣传工作。</span><span id=\"hidden_div\"></span><span style=\"font-family:NSimSun;\"><u><br />\r\n</u></span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\"><br />\r\n</span>\r\n	</p>\r\n	<h2>\r\n		<span style=\"font-size:18px;\">校园大使能得到什么？</span> <br />\r\n	</h2>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">1你将学习到更多的知识技能，实际经验，工作方法。</span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">2你将接触到各行业优秀的营销人才，技术人才，管理人才。</span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">3你将了解到企业运作流程，企业文化，工作环境 。</span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\">4每次完成工作都可获得一笔酬劳。</span> \r\n	</p>\r\n	<p>\r\n		<span style=\"font-family:NSimSun;\"><br />\r\n</span>\r\n	</p>\r\n	<h2>\r\n		<div class=\"campus_tit\">\r\n			<span style=\"font-size:18px;\">什么人可以申请校园大使？</span> \r\n		</div>\r\n	</h2>\r\n<span id=\"hidden_div\"> \r\n	<p>\r\n		范围：全国各大高校<br />\r\n要求：<br />\r\n1.在校大学生<br />\r\n2.认真的办事风格，坚决的服务纪律性，积极的心态； <br />\r\n3.为人诚信，吃苦耐劳、责任心；<br />\r\n4.较强的沟通能力和协调能力，有很好的团队协作意识； <br />\r\n5.具备持续不断的学习能力，有积极的学习心态； <br />\r\n6.面对压力与不确定因素，具备良好的心理承受与忍耐能力； <br />\r\n7.良好的书面及口头表达能力，具备亲和力及培训能力；\r\n	</p>\r\n</span> \r\n</p>');

DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `from_id` int(10) unsigned default NULL COMMENT '来源id',
  `img_name` varchar(255) default NULL COMMENT '图片名',
  `created` timestamp NULL default CURRENT_TIMESTAMP COMMENT '生成时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO imgs VALUES('2','1','1376834637654.jpg','2013-08-18 22:03:58');

DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned default NULL,
  `pstatus` tinyint(1) unsigned default '0' COMMENT '状态：0审核中，1已通过，2已停用',
  `title` varchar(32) default NULL COMMENT '活动名称',
  `actionseason` tinyint(1) unsigned default '0' COMMENT '活动季节:1开学季1毕业季3节日季4一般时期',
  `trait` varchar(255) default NULL COMMENT '　活动关键字',
  `time_start` date default NULL COMMENT '活动开始时间',
  `time_end` date default NULL COMMENT '活动结束时间',
  `adtype` tinyint(2) unsigned default '0' COMMENT '活动类型	  1达人选拔2歌手大赛3舞蹈大赛4器乐大赛5运动会6趣味运动会7极限运动会8足球赛9篮球赛10排球赛11羽毛球赛12乒乓球赛13公开级14宿舍级15演讲比赛16辩论赛17名人讲座18品牌宣讲19公益日主题类20自发公益活动21征文22书画美术23平面设计24视频创作25摄影比赛26开发竞赛27美食厨艺28支教29市集30职场模拟\r\n',
  `spotpeople` tinyint(1) unsigned default '0' COMMENT '现场人数0:100人以下1:100-300人2:300-500人3:500-800人4:800-1000人5:1000-1500人6:1500-2000人7:2000人以上',
  `actionbrand` tinyint(1) unsigned default '0' COMMENT '活动品牌0校级品牌1院级品牌2其它品牌',
  `actionlevel` tinyint(1) unsigned default '0' COMMENT '活动级别0校级1院级2其它',
  `material_show` varchar(255) default '' COMMENT '物料宣传 1:海报（活动主题） 2:横幅  3:宣传单页  4:X展架（活动主题）  5:明信片  6:喷绘（活动现场背景）  7:海报（赞助商）  8:X展架（赞助商）  9:喷绘（互动签名）  10:X展架（互动活动说明）  11:喷绘（互动活动）  12:互动道具  13:赞助商VCR  14:LOGO充气棒  15:迎新手册  16:景点门票  17:调查问卷 18:活动宣传展板  19:赞助商宣传展板',
  `media_show` varchar(255) default NULL COMMENT '媒体宣传',
  `scene` tinyint(1) unsigned default '0' COMMENT '活动场次 1:1场2:2场3:3场4:4场5:5场6:6场7:7场及以上',
  `playernum` tinyint(1) unsigned default NULL COMMENT '所有场次累计参与总人数:0:100人以下1:100-300人2:300-500人3:500-800人4:800-1000人5:1000-1500人6:1500-2000人7:2000人以上',
  `manwo` tinyint(1) unsigned default NULL COMMENT '参与人群男女比例:0:男生多于女生1:女生多于男生2:比例大致相同',
  `edu` tinyint(1) unsigned default NULL COMMENT '主要参与人群学历水平:0大专1本科2教师',
  `leading` varchar(255) default NULL COMMENT '重要活动嘉宾:活动有哪些领导或者名人参与？多个嘉宾之间请用“;”隔开。',
  `plname` varchar(255) default NULL COMMENT '场地名',
  `area` varchar(32) default NULL COMMENT '面积',
  `seatnum` varchar(32) default NULL COMMENT '座位数量',
  `charact` tinyint(1) default NULL COMMENT '性质0大礼堂1报告厅2体育馆3校园广场4大舞台',
  `location` tinyint(1) default NULL COMMENT '场地位置0独立的1行政楼内2教学楼内3图书馆内',
  `lengths` varchar(32) default NULL COMMENT '舞台长度',
  `widths` varchar(32) default NULL COMMENT '舞台宽度',
  `heights` varchar(32) default NULL COMMENT '舞台高度',
  `soundns` varchar(32) default NULL COMMENT '音箱数量',
  `mikens` varchar(32) default NULL COMMENT '麦克风数量',
  `projectorns` varchar(32) default NULL COMMENT '投影仪数量',
  `propagens` varchar(32) default NULL COMMENT '投影幕布数量',
  `dengns` varchar(32) default NULL COMMENT '灯光数量',
  `nuanqins` varchar(32) default NULL COMMENT '暖气数量',
  `content` varchar(5000) default NULL COMMENT '活动策划案',
  `wantsmoney` int(10) unsigned default NULL COMMENT '你想获得的赞助金额',
  `created` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO plan VALUES('1','2','0','活动名称测试活动名称测试活动名称测试活动名称测试活动名称测试','2','活动关键字测试活动关键字测试活动关键字测试活动关键字测试活动','2013-08-19','2013-08-20','4','0','0','0','1,19','1,8','1','0','0','0','重要活动嘉宾测试重要活动嘉宾测试重要活动嘉宾测试重要活动嘉宾',' 活动场地测试 活动场地测试 活动场地测试 活动场地测试 活','0','0','2','3','0','0','0','0','0','0','0','0','0','<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">请填写或粘贴你的活动策划案。</span><br />\r\n<span style=\"font-family:微软雅黑;font-size:14px;line-height:36px;background-color:#FFFFFF;\">如果还没有策划案，你也可以上传该活动往年的活动策划案，或暂时不填</span></span></span></span></span></span></span></span>','2000','2013-08-18 15:15:56');
INSERT INTO plan VALUES('2','4','1','新生杯篮球赛','1','篮球赛；体育','2013-09-19','2013-09-30','9','2','0','0','1,2,3','1,2,3,5,8','3','1','0','1','无','东华大学风雨篮球场','1000','0','4','0','0','0','0','0','0','0','0','0','0','','10000','2013-08-18 16:24:34');
INSERT INTO plan VALUES('3','7','0','2013年新生节系列活动','1','全体学生，盛会','2013-09-15','2013-09-25','13','7','0','0','1,2,3,4,5,6,7,8,9,10,11,12,13,14,16,17,18,19','1,2,3,4,5,7','1','7','1','1','校领导','校体育馆','1','500','3','0','1','1','1','1','1','1','1','1','1','<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<span style=\"font-size:42.0pt;font-family:华文行楷;\"><img src=\"file://C:\\Users\\janny\\AppData\\Local\\Temp\\msohtml1\\01\\clip_image002.gif\" alt=\"LOGO副本\" height=\"88\" width=\"88\" /></span><b><span style=\"font-size:26.0pt;font-family:宋体;\">上海中医药大学</span></b><b><span style=\"font-size:26.0pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:26.0pt;font-family:宋体;\">2013 </span></b><b><span style=\"font-size:26.0pt;font-family:宋体;\">年 新 生 节 系 列 活 动</span></b><b><span style=\"font-size:26.0pt;font-family:宋体;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:26.0pt;\"><span>              </span></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;font-family:宋体;\">合</span></b><b><span style=\"font-size:42.0pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;\"> </span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;font-family:宋体;\">作</span></b><b><span style=\"font-size:42.0pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;\"> </span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;font-family:宋体;\">方</span></b><b><span style=\"font-size:42.0pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;\"> </span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:center;\" align=\"center\">\r\n	<b><span style=\"font-size:42.0pt;font-family:宋体;\">案</span></b><b><span style=\"font-size:42.0pt;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span> </span>\r\n</p>\r\n<p class=\"MsoPlainText\">\r\n	<span style=\"line-height:150%;font-family:Calibri;\"> </span>\r\n</p>\r\n<p class=\"MsoPlainText\" style=\"text-align:center;\" align=\"center\">\r\n	<span style=\"font-size:15.0pt;line-height:150%;font-family:楷体_GB2312;\">2013</span><span style=\"font-size:15.0pt;line-height:150%;font-family:楷体_GB2312;\">年<span>8</span>月<span></span></span>\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span> </span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:left;\" align=\"left\">\r\n	<b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">一</span></b><b><span style=\"font-size:14.0pt;line-height:150%;\">.<span>  </span></span></b><b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">主办单位：</span></b><b><span style=\"font-size:14.0pt;line-height:150%;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:31.5pt;\">\r\n	<span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">共青团上海中医药大学委员会</span><span style=\"font-size:14.0pt;line-height:150%;\"></span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:31.5pt;\">\r\n	<span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">上海中医药大学学生会</span><span style=\"font-size:14.0pt;line-height:150%;\"></span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:31.5pt;text-indent:-31.5pt;\">\r\n	<b><span style=\"font-size:14.0pt;line-height:150%;\"><span>5）</span></span></b><b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;background:#D9D9D9;\">活动主题：</span></b><b><span style=\"font-size:14.0pt;line-height:150%;\"> </span></b><b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">薪火相传，寻梦无限（待定）</span></b><b><span style=\"font-size:14.0pt;line-height:150%;background:#D9D9D9;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:31.5pt;text-indent:-31.5pt;\">\r\n	<b><span style=\"font-size:14.0pt;line-height:150%;\"><span>6）</span></span></b><b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">活动背景：</span></b><b><span style=\"font-size:14.0pt;line-height:150%;\"></span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:31.5pt;\">\r\n	<span style=\"font-size:14.0pt;line-height:200%;\">2013</span><span style=\"font-size:14.0pt;line-height:200%;font-family:宋体;\">新学期的开始，</span><span style=\"font-size:14.0pt;line-height:200%;font-family:宋体;\">在这新的时刻，我们又迎来了一批中医希望，他们满载梦想，站在新的起点，展望美好的未来，他们来自五湖四海，为一个共同的目标来到了这里，校园里的学哥学姐们带着制热的诚心盼望着他们的到来，以一场以旧迎新的晚会来迎接他们。</span><span style=\"font-size:14.0pt;line-height:200%;font-family:宋体;\"></span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:31.5pt;\">\r\n	<span style=\"font-size:14.0pt;line-height:200%;font-family:宋体;\"> </span>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:31.5pt;text-indent:-31.5pt;\">\r\n	<b><span style=\"font-size:14.0pt;line-height:150%;\"><span>7）</span></span></b><b><span style=\"font-size:14.0pt;line-height:150%;font-family:宋体;\">活动目的</span></b><b><span style=\"font-size:14.0pt;line-height:150%;\">:</span></b>\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:28.0pt;\">\r\n	<span style=\"font-size:14.0pt;font-family:宋体;\">年复一年，新生节系列活动已然成为我校的传统，并期待着的活动，每一年我们带着满分诚意迎接着一个又一个满腔热情的莘莘学子，一个个中医的新生力量。为了促进彼此间的友谊与协作，展现自己魅力，张扬自己的个性，新生节文艺晚会由此诞生。</sp','17500','2013-08-18 21:15:37');

DROP TABLE IF EXISTS `scheme`;
CREATE TABLE `scheme` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '公司名称',
  `company_name` varchar(255) default NULL COMMENT '公司名称',
  `job` varchar(255) default NULL COMMENT '职位',
  `address` varchar(255) default NULL COMMENT '联系地址',
  `name` varchar(255) default NULL COMMENT '姓名',
  `phone` varchar(255) default NULL COMMENT '座机',
  `mobile` varchar(255) default NULL COMMENT '手机',
  `memo` varchar(5000) default NULL COMMENT '赞助描述',
  `cretaed` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO scheme VALUES('2','阿里吧吧旗下支付宝有限公司','经理','上海闵区欣中路538号5号楼1401室','毛泽东','021-45543332','13681642316','赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述赞助描述','2013-08-18 15:47:35');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `email` varchar(255) default NULL COMMENT '邮箱',
  `password` varchar(32) default NULL,
  `realname` varchar(255) default NULL,
  `idcard` varchar(32) default NULL COMMENT '身份证',
  `homeaddr` varchar(100) default NULL COMMENT '户口地址',
  `area_id` int(11) default NULL COMMENT '城市id',
  `school_id` int(11) unsigned default NULL COMMENT '学校id',
  `college` varchar(32) default NULL COMMENT '部门/院系',
  `college_num` int(11) default NULL COMMENT '部门/院系人数',
  `education_class` tinyint(1) unsigned default '0' COMMENT '1大专2本科3研究生4博士',
  `education_year` tinyint(1) unsigned default '0' COMMENT '1两年制2三年制3四年制',
  `education_now` tinyint(1) unsigned default '0' COMMENT '1年级2年级3年级4年级',
  `team` tinyint(3) unsigned default '0' COMMENT '所属机构 1团委2学生会3社团',
  `political_affiliation` tinyint(4) unsigned default '0' COMMENT '政治面貌: 1党员2团员3群众',
  `mobile` varchar(13) default NULL COMMENT '联系电话',
  `qq` varchar(32) default NULL,
  `student_id` varchar(32) default NULL COMMENT '学生证号',
  `postaladdr` varchar(100) default NULL COMMENT '通信地址',
  `school_district` varchar(32) default NULL COMMENT '所在校区',
  `school_district_num` varchar(32) default NULL COMMENT '校区人数',
  `user_photo` varchar(32) default NULL,
  `student_photo` varchar(32) default NULL COMMENT '学生证照片',
  `current_position` varchar(32) default NULL COMMENT '目前担任职务',
  `alipay` varchar(32) default NULL COMMENT '支付宝帐号',
  `bank_card` varchar(32) default NULL COMMENT '银行卡',
  `open_bank` varchar(32) default NULL COMMENT '开户行（具体支行）',
  `campus_ambassador` varchar(5000) default NULL COMMENT '校园大使',
  `case` varchar(5000) default NULL COMMENT '曾经参与或举办过的',
  `resource` varchar(255) default NULL COMMENT '场地租借：1路演场地2大礼堂3报告厅4教室5体育馆6运动场\r\n校园媒体：7运动场广告8食堂广告9宿舍广告10校园刊物11横幅12广播\r\n活动执行：13校内设摊14组织演出15体育比赛16办讲座17海报18派发',
  `ambassador` tinyint(1) unsigned default '0' COMMENT '校园大使  0未申请，申请1 ，通过 2',
  `status` tinyint(1) unsigned NOT NULL default '0' COMMENT '用户状态：0未验证邮箱，1已验证邮箱，2已删除',
  `created` timestamp NULL default CURRENT_TIMESTAMP COMMENT '生成时间',
  `updated` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` USING BTREE (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES('7','547587785@qq.com','Jannyhzj','何之劼','310106199402160048','上海市浦东新区华佗路280弄15幢18号','310000','2015','医学技术学院','4000','1','3','2','2','2','13482271025','547587785','2012421004','上海市浦东新区华佗路280弄15幢18号','浦东张江高科','12000','1376833322650.jpg','','','','6222021001114605576','上海莘庄分行','','','1,2,4,7,8,9,10,11,12,13,14,15,16,17,18','0','1','2013-08-18 20:48:55','1376833478');
INSERT INTO users VALUES('2','yangjianjun20@163.com','000000','杨建军','430581198410243550','湖南邵阳市武刚邓元在黄木井村5组13号','520000','21006','经管系','2000','1','2','3','3','2','13681642316','43344556','5656565','','','','1376809984942.jpg','1376809993535.jpg','','','','','校园大使请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的','校园大使请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的介绍一下你自己。请客观的','1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18','0','1','2013-08-18 15:11:26','1376831578');
INSERT INTO users VALUES('4','413221111@qq.com','123456','杨小立','342601198405190614','上海松江大学城','310000','2008','纺织学院','1000','2','3','1','1','2','18817326422','4132290','20000060','松江大学城东华大学','松江校区','10000','1376814448338.jpg','1376814461774.jpg','学生会主席','','','','','','1,2,3,4,7,8,16,17,18','2','1','2013-08-18 16:19:54','1376830856');
INSERT INTO users VALUES('6','987411776@qq.com','123456','','','','','','','','0','0','0','0','0','','','','','','','','','','','','','','','','0','0','2013-08-18 16:40:10','');
INSERT INTO users VALUES('8','599232775@qq.com','dkw199333','','','','','','','','0','0','0','0','0','','','','','','','','','','','','','','','','0','1','2013-08-18 22:20:22','');
INSERT INTO users VALUES('9','847361963@qq.com','a28810223','钟凯伦','310228199402080025','上海市临港大道1550号','310000','2012','经管','800','2','3','2','2','1','13795241601','847361963','201210710104','上海浦东新区临港大道1550','浦东新区','','','','','','','','','','','0','1','2013-08-18 22:29:38','1376836432');

