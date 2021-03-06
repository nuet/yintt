<?php

/*
		SoftName : JingPai2010 Version 2012
		Author   : lzhhand
		Copyright: Powered by www.jingpai2010.com
*/

DB_D("DROP TABLE IF EXISTS `lzh_member_limitlog`;");
DB_C("CREATE TABLE `lzh_member_limitlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `credit_limit` float(15,2) NOT NULL,
  `borrow_vouch_limit` float(15,2) NOT NULL,
  `invest_vouch_limit` float(15,2) NOT NULL,
  `info` varchar(50) NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `add_ip` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`type`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8");
DB_I("replace  into `lzh_member_limitlog` values('17','2873','7','-500.00','0.00','0.00','31号标还款完成','1347040295','222.244.2.131');");
DB_I("replace  into `lzh_member_limitlog` values('18','2862','7','-10000.00','0.00','0.00','13号标还款完成','1347066047','112.233.59.202');");
DB_I("replace  into `lzh_member_limitlog` values('19','2873','7','-500.00','0.00','0.00','30号标还款完成','1347072634','112.233.59.202');");
DB_I("replace  into `lzh_member_limitlog` values('20','2873','1','-6300.00','0.00','0.00','43号标初审通过','1347073897','112.233.59.202');");
DB_I("replace  into `lzh_member_limitlog` values('21','2872','1','-21000.00','0.00','0.00','49号标初审通过','1347241894','112.233.57.157');");
DB_I("replace  into `lzh_member_limitlog` values('22','2872','7','-21000.00','0.00','0.00','49号标还款完成','1347242607','112.233.57.157');");
DB_I("replace  into `lzh_member_limitlog` values('23','2876','11','5000.00','0.00','0.00','VIP审核通过','1347267819','112.233.57.157');");
DB_I("replace  into `lzh_member_limitlog` values('24','1178','11','5000.00','0.00','0.00','VIP审核通过','1347329167','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('25','2436','11','5000.00','0.00','0.00','VIP审核通过','1347329849','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('26','2934','11','5000.00','0.00','0.00','VIP审核通过','1347329970','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('27','2203','11','5000.00','0.00','0.00','VIP审核通过','1347330176','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('28','1147','11','5000.00','0.00','0.00','VIP审核通过','1347330305','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('29','1219','11','5000.00','0.00','0.00','VIP审核通过','1347330540','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('30','1329','11','5000.00','0.00','0.00','VIP审核通过','1347330656','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('31','1481','11','5000.00','0.00','0.00','VIP审核通过','1347330786','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('32','2936','11','5000.00','0.00','0.00','VIP审核通过','1347330866','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('33','1076','11','5000.00','0.00','0.00','VIP审核通过','1347331172','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('34','2938','11','5000.00','0.00','0.00','VIP审核通过','1347331253','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('35','793','11','5000.00','0.00','0.00','VIP审核通过','1347331318','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('36','2874','1','-13000.00','0.00','0.00','72号标初审通过','1347333245','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('37','218','11','5000.00','0.00','0.00','VIP审核通过','1347335998','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('38','2874','7','13000.00','0.00','0.00','72号标还款完成','1347336192','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('39','2874','1','-10000.00','0.00','0.00','74号标初审通过','1347336655','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('40','355','11','5000.00','0.00','0.00','VIP审核通过','1347342263','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('41','2885','11','5000.00','0.00','0.00','VIP审核通过','1347342347','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('42','2941','11','5000.00','0.00','0.00','VIP审核通过','1347346126','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('43','2941','11','5000.00','0.00','0.00','VIP审核通过','1347346292','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('44','2929','11','5000.00','0.00','0.00','VIP审核通过','1347347303','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('45','2528','11','5000.00','0.00','0.00','VIP审核通过','1347347437','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('46','2928','11','5000.00','0.00','0.00','VIP审核通过','1347347451','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('47','1105','11','5000.00','0.00','0.00','VIP审核通过','1347347500','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('48','2770','11','5000.00','0.00','0.00','VIP审核通过','1347347507','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('49','1802','11','5000.00','0.00','0.00','VIP审核通过','1347347515','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('50','1515','11','5000.00','0.00','0.00','VIP审核通过','1347347597','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('51','2935','11','5000.00','0.00','0.00','VIP审核通过','1347347604','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('52','1045','11','5000.00','0.00','0.00','VIP审核通过','1347347612','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('53','2941','1','-500.00','0.00','0.00','83号标初审通过','1347355851','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('54','2941','7','500.00','0.00','0.00','83号标还款完成','1347358146','112.233.59.211');");
DB_I("replace  into `lzh_member_limitlog` values('55','1044','11','5000.00','0.00','0.00','VIP审核通过','1347419227','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('56','2680','11','5000.00','0.00','0.00','VIP审核通过','1347419237','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('57','1550','11','5000.00','0.00','0.00','VIP审核通过','1347419250','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('58','1004','11','5000.00','0.00','0.00','VIP审核通过','1347419258','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('59','2673','11','5000.00','0.00','0.00','VIP审核通过','1347419276','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('60','2941','1','-22000.00','0.00','0.00','103号标初审通过','1347438454','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('61','2874','1','-10000.00','0.00','0.00','104号标初审通过','1347438620','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('62','2817','1','-25400.00','0.00','0.00','105号标初审通过','1347439136','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('63','2871','1','-20000.00','0.00','0.00','107号标初审通过','1347440199','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('64','2870','1','-18000.00','0.00','0.00','108号标初审通过','1347444454','112.251.31.209');");
DB_I("replace  into `lzh_member_limitlog` values('65','2437','11','5000.00','0.00','0.00','VIP审核通过','1347503295','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('66','2947','11','5000.00','0.00','0.00','VIP审核通过','1347504326','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('67','1508','11','5000.00','0.00','0.00','VIP审核通过','1347504334','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('68','1431','11','5000.00','0.00','0.00','VIP审核通过','1347504342','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('69','1545','11','5000.00','0.00','0.00','VIP审核通过','1347505262','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('70','1532','11','5000.00','0.00','0.00','VIP审核通过','1347505271','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('71','1608','11','5000.00','0.00','0.00','VIP审核通过','1347505278','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('72','1674','11','5000.00','0.00','0.00','VIP审核通过','1347505283','113.122.200.134');");
DB_I("replace  into `lzh_member_limitlog` values('73','2939','11','5000.00','0.00','0.00','VIP审核通过','1347506369','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('74','2940','11','5000.00','0.00','0.00','VIP审核通过','1347506378','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('75','692','11','5000.00','0.00','0.00','VIP审核通过','1347506386','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('76','2688','11','5000.00','0.00','0.00','VIP审核通过','1347506395','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('77','1365','11','5000.00','0.00','0.00','VIP审核通过','1347506408','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('78','1682','11','5000.00','0.00','0.00','VIP审核通过','1347506436','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('79','2903','11','5000.00','0.00','0.00','VIP审核通过','1347506445','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('80','2835','11','5000.00','0.00','0.00','VIP审核通过','1347506452','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('81','2908','11','5000.00','0.00','0.00','VIP审核通过','1347506459','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('82','2770','1','-500.00','0.00','0.00','109号标初审通过','1347506948','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('83','2771','7','500.00','0.00','0.00','99号标还款完成','1347525366','112.233.62.77');");
DB_I("replace  into `lzh_member_limitlog` values('84','2818','11','5000.00','0.00','0.00','VIP审核通过','1347527437','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('85','2931','1','-21300.00','0.00','0.00','114号标初审通过','1347546759','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('86','2818','11','5000.00','0.00','0.00','VIP审核通过','1347547526','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('87','2818','1','-6000.00','0.00','0.00','115号标初审通过','1347548181','119.176.165.43');");
DB_I("replace  into `lzh_member_limitlog` values('88','1154','11','5000.00','0.00','0.00','VIP审核通过','1347582493','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('89','857','11','5000.00','0.00','0.00','VIP审核通过','1347582696','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('90','2838','11','5000.00','0.00','0.00','VIP审核通过','1347583759','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('91','413','11','5000.00','0.00','0.00','VIP审核通过','1347583811','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('92','2956','11','5000.00','0.00','0.00','VIP审核通过','1347583821','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('93','792','1','-4500.00','0.00','0.00','116号标初审通过','1347584011','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('94','2956','1','-5000.00','0.00','0.00','119号标初审通过','1347584065','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('95','2874','7','10000.00','0.00','0.00','74号标还款完成','1347584101','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('96','857','1','-7000.00','0.00','0.00','121号标初审通过','1347584509','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('97','1154','1','-7700.00','0.00','0.00','120号标初审通过','1347584525','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('98','1321','11','5000.00','0.00','0.00','VIP审核通过','1347584603','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('99','2838','11','5000.00','0.00','0.00','VIP审核通过','1347584696','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('100','2955','11','5000.00','0.00','0.00','VIP审核通过','1347584715','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('101','2925','11','5000.00','0.00','0.00','VIP审核通过','1347584756','113.122.198.89');");
DB_I("replace  into `lzh_member_limitlog` values('102','2838','1','-7000.00','0.00','0.00','122号标初审通过','1347585566','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('103','1948','11','5000.00','0.00','0.00','VIP审核通过','1347591758','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('104','2406','11','5000.00','0.00','0.00','VIP审核通过','1347591782','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('105','1004','11','5000.00','0.00','0.00','VIP审核通过','1347591793','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('106','1300','11','5000.00','0.00','0.00','VIP审核通过','1347591814','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('107','2957','11','5000.00','0.00','0.00','VIP审核通过','1347591907','112.233.54.243');");
DB_I("replace  into `lzh_member_limitlog` values('108','2959','11','5000.00','0.00','0.00','VIP审核通过','1347680120','112.233.54.201');");
DB_I("replace  into `lzh_member_limitlog` values('109','2960','11','5000.00','0.00','0.00','VIP审核通过','1347680145','112.233.54.201');");
DB_I("replace  into `lzh_member_limitlog` values('110','835','11','5000.00','0.00','0.00','VIP审核通过','1347699929','112.233.54.201');");
DB_I("replace  into `lzh_member_limitlog` values('111','835','1','-10000.00','0.00','0.00','132号标初审通过','1347710218','113.122.199.188');");
DB_I("replace  into `lzh_member_limitlog` values('112','836','11','5000.00','0.00','0.00','VIP审核通过','1347711735','60.213.87.66');");
DB_I("replace  into `lzh_member_limitlog` values('113','835','7','10000.00','0.00','0.00','132号标还款完成','1347712575','113.122.199.188');");
DB_I("replace  into `lzh_member_limitlog` values('114','835','2','0.00','-15000.00','0.00','133号标初审通过','1347713905','60.213.87.66');");
DB_I("replace  into `lzh_member_limitlog` values('115','835','8','0.00','15000.00','0.00','133号标还款完成','1347714215','60.213.87.66');");
DB_I("replace  into `lzh_member_limitlog` values('116','1428','11','5000.00','0.00','0.00','VIP审核通过','1347758309','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('117','2945','11','5000.00','0.00','0.00','VIP审核通过','1347758373','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('118','2962','11','5000.00','0.00','0.00','VIP审核通过','1347758456','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('119','2136','11','5000.00','0.00','0.00','VIP审核通过','1347758699','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('120','1498','11','5000.00','0.00','0.00','VIP审核通过','1347758773','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('121','2967','11','5000.00','0.00','0.00','VIP审核通过','1347765050','113.122.196.72');");
DB_I("replace  into `lzh_member_limitlog` values('122','2968','11','5000.00','0.00','0.00','VIP审核通过','1347767151','112.233.57.185');");
DB_I("replace  into `lzh_member_limitlog` values('123','2968','1','-1800.00','0.00','0.00','135号标初审通过','1347768696','112.233.57.185');");
DB_I("replace  into `lzh_member_limitlog` values('124','1839','11','5000.00','0.00','0.00','VIP审核通过','1347811653','127.0.0.1');");
DB_I("replace  into `lzh_member_limitlog` values('125','2968','1','-1000.00','0.00','0.00','138号标初审通过','1348246785','127.0.0.1');");
DB_I("replace  into `lzh_member_limitlog` values('126','2971','11','5000.00','0.00','0.00','VIP审核通过','1348323800','59.175.0.184');");
DB_I("replace  into `lzh_member_limitlog` values('127','2970','11','5000.00','0.00','0.00','VIP审核通过','1348324298','59.175.0.184');");
DB_I("replace  into `lzh_member_limitlog` values('128','2971','1','-1000.00','0.00','0.00','139号标初审通过','1348366162','111.173.199.33');");
DB_I("replace  into `lzh_member_limitlog` values('129','2971','11','5000.00','0.00','0.00','VIP审核通过','1348388422','123.93.2.98');");
DB_I("replace  into `lzh_member_limitlog` values('130','2971','7','1000.00','0.00','0.00','139号标还款完成','1348388644','123.93.2.98');");
DB_I("replace  into `lzh_member_limitlog` values('131','2971','1','-1000.00','0.00','0.00','140号标初审通过','1348388686','123.93.2.98');");
DB_I("replace  into `lzh_member_limitlog` values('132','2971','1','-1111.00','0.00','0.00','141号标初审通过','1348591047','110.194.24.205');");
DB_I("replace  into `lzh_member_limitlog` values('133','2971','1','-2000.00','0.00','0.00','142号标初审通过','1348729538','58.48.83.67');");
DB_I("replace  into `lzh_member_limitlog` values('134','2971','1','-5000.00','0.00','0.00','147号标初审通过','1348739428','58.48.83.67');");
DB_I("replace  into `lzh_member_limitlog` values('135','2975','1','-5000000.00','0.00','0.00','148号标初审通过','1348839146','221.235.71.40');");
DB_I("replace  into `lzh_member_limitlog` values('136','2975','1','-20000.00','0.00','0.00','151号标初审通过','1350268644','59.173.197.215');");
DB_I("replace  into `lzh_member_limitlog` values('137','2974','1','-1000.00','0.00','0.00','154号标初审通过','1351610333','211.90.10.158');");
DB_I("replace  into `lzh_member_limitlog` values('138','2974','12','1000.00','0.00','0.00','号标流标','1351610417','211.90.10.158');");
DB_I("replace  into `lzh_member_limitlog` values('139','2974','1','-100.00','0.00','0.00','155号标初审通过','1351610488','211.90.10.158');");
DB_I("replace  into `lzh_member_limitlog` values('140','2974','12','100.00','0.00','0.00','号标流标','1351738080','110.232.50.204');");
DB_I("replace  into `lzh_member_limitlog` values('141','2974','1','-100.00','0.00','0.00','156号标初审通过','1351738182','110.232.50.204');");
DB_I("replace  into `lzh_member_limitlog` values('142','2974','7','100.00','0.00','0.00','156号标还款完成','1352130163','60.2.159.148');");
DB_I("replace  into `lzh_member_limitlog` values('143','2974','2','0.00','-1000.00','0.00','161号标初审通过','1352650857','124.164.232.20');");
DB_I("replace  into `lzh_member_limitlog` values('144','2974','12','1000.00','0.00','0.00','号标流标','1352865871','106.3.178.100');");
DB_I("replace  into `lzh_member_limitlog` values('145','2974','1','-1000.00','0.00','0.00','162号标初审通过','1355989212','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('146','2971','1','-1000.00','0.00','0.00','163号标初审通过','1355989678','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('147','2971','7','1000.00','0.00','0.00','163号标还款完成','1355990105','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('148','2971','1','-1000.00','0.00','0.00','164号标初审通过','1355990152','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('149','2974','12','1000.00','0.00','0.00','号标流标','1355991116','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('150','2974','1','-1000.00','0.00','0.00','165号标初审通过','1355991204','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('151','2974','12','1000.00','0.00','0.00','号标流标','1355994419','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('152','2974','1','-1000.00','0.00','0.00','166号标初审通过','1355994505','218.26.233.226');");
DB_I("replace  into `lzh_member_limitlog` values('153','2974','12','1000.00','0.00','0.00','号标流标','1356145345','125.39.18.184');");
DB_I("replace  into `lzh_member_limitlog` values('154','2974','12','1000.00','0.00','0.00','号标流标','1356145366','125.39.18.184');");
DB_I("replace  into `lzh_member_limitlog` values('155','3027','1','-3000.00','0.00','0.00','167号标初审通过','1356590326','116.208.86.178');");
DB_I("replace  into `lzh_member_limitlog` values('156','3032','1','-10000.00','0.00','0.00','168号标初审通过','1356959356','124.90.141.6');");
DB_I("replace  into `lzh_member_limitlog` values('157','3033','1','-2000.00','0.00','0.00','169号标初审通过','1357956551','127.0.0.6');");
DB_I("replace  into `lzh_member_limitlog` values('158','3019','1','-1000.00','0.00','0.00','172号标初审通过','1361063517','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('159','3019','12','1000.00','0.00','0.00','号标流标','1361094889','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('160','3019','1','-1000.00','0.00','0.00','173号标初审通过','1361095077','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('161','3019','12','1000.00','0.00','0.00','号标流标','1361096869','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('162','3019','2','0.00','-1000.00','0.00','174号标初审通过','1361097006','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('163','3019','12','1000.00','0.00','0.00','号标流标','1361102823','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('164','3019','1','-1000.00','0.00','0.00','176号标初审通过','1361105015','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('165','3019','12','1000.00','0.00','0.00','号标流标','1361106091','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('166','3019','12','1000.00','0.00','0.00','号标流标','1361106647','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('167','3019','12','1000.00','0.00','0.00','号标流标','1361107006','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('168','3032','12','10000.00','0.00','0.00','号标流标','1361107224','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('169','3032','12','1000.00','0.00','0.00','号标流标','1361111086','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('170','3032','1','-1200.00','0.00','0.00','180号标初审通过','1361111210','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('171','3019','1','-4000.00','0.00','0.00','181号标初审通过','1361117779','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('172','3019','12','4000.00','0.00','0.00','号标流标','1361148171','127.0.0.6');");
DB_I("replace  into `lzh_member_limitlog` values('173','3019','1','-10000.00','0.00','0.00','182号标初审通过','1361148234','127.0.0.6');");
DB_I("replace  into `lzh_member_limitlog` values('174','3019','12','10000.00','0.00','0.00','号标流标','1361148284','127.0.0.6');");
DB_I("replace  into `lzh_member_limitlog` values('175','3019','1','-2000.00','0.00','0.00','183号标初审通过','1361151524','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('176','3019','12','2000.00','0.00','0.00','号标流标','1361151636','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('177','3019','1','-2000.00','0.00','0.00','184号标初审通过','1361151672','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('178','3019','12','2000.00','0.00','0.00','号标流标','1361151946','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('179','3019','1','-30000.00','0.00','0.00','185号标初审通过','1361151990','127.0.0.10');");
DB_I("replace  into `lzh_member_limitlog` values('180','3019','12','30000.00','0.00','0.00','号标流标','1361158694','127.0.0.10');");

?>