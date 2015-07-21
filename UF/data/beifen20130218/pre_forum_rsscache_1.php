<?php

/*
		SoftName : JingPai2010 Version 2012
		Author   : lzhhand
		Copyright: Powered by www.jingpai2010.com
*/

DB_D("DROP TABLE IF EXISTS `pre_forum_rsscache`;");
DB_C("CREATE TABLE `pre_forum_rsscache` (
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `forum` char(50) NOT NULL DEFAULT '',
  `author` char(15) NOT NULL DEFAULT '',
  `subject` char(80) NOT NULL DEFAULT '',
  `description` char(255) NOT NULL DEFAULT '',
  `guidetype` char(10) NOT NULL DEFAULT '',
  UNIQUE KEY `tid` (`tid`),
  KEY `fid` (`fid`,`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','2','47','1349960943','网站公告','admin','网站会不会被黑掉？','九洲贷使用的主机是“万网”的“云主机”。“万网”就是“阿里巴巴”和“淘宝网”的下属子公司。“云主机”是“万网”级别最高的主机，安全性最高，详情到“万网”网站了解。云主机每天自动备份本网站的数据，同时本公司程序员24小时全天监控本网站，同时三小时备份 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','2','32','1349763026','网站公告','admin','面临金九银十考验 银行收紧房贷将进入持久战','　　此次严控房贷绝非短期的权宜之计，而将进入一场“持久战”，记者昨日从沪上多家商业银行了解到这一最新的政策“吹风”。由于上海楼市在“金九银十”即将到来之际又隐约出现了可能量升价涨的“苗头”，相关部门近日连续明确强调坚决抑制投机炒作行为。而房贷政策作为 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','2','29','1349762361','网站公告','admin','国外小额贷款发展的成功经验','小额贷款的理念与实践模式小额贷款是一种以低收入阶层为服务对象的小额度、持续性、制度化的信贷服务方式。它主要是向农、牧、渔、各种微型的非农经济体以及小商小贩等发放短期无抵押的小额贷款,而且贷款的发放往往还伴随着一系列的综合技术服务,旨在通过金融服 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','36','38','1349764520','客服服务与建议区','admin','狂飙的借贷利率 最高年息14.4%','　　“刚刚从一家信用社弄到50万元的贷款，月息竟然达到1分，相当于年利率12%了。”在河南省信阳市从事服装批发生意的周彬透露，今年以来，信用社的贷款利息一直在攀升，贷款也越来越难办。\r\n　　对周彬来说，这50万元贷款确实来之不易，两个多月前就开始申请，几乎每周 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','36','27','1349762212','客服服务与建议区','admin','民间借贷相比银行贷款有哪些优势？','与银行贷款相比，民间借贷具有以下优势：       一是手续简便。民间融资不像银行贷款需要提供营业执照、代码证书、会计报表、购销合同、负责人身份证件、验资报告等一大堆材料，也不用经过签订合同、办理公证等程序，一般只需考察房产证明及还贷能力等并签订合同 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','36','6','1349754511','客服服务与建议区','admin','贷款全款还是持币观望 手握30万如何买房','贷款购房？全款购房？持币观望？究竟要何去何从呢？\r\n\r\n　　第一招：慎重思考 明确购房计划\r\n\r\n　　一系列的货币紧缩政策和楼市调控政策，使得房贷利率不断走高的同时，首付成数也一直在提高，记得2007年救市之初，首付基本可以忽略不计，到目前首套房三、四成首付也很常见 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','37','2','1349172078','逾期催收区','九洲贷发言人','玩转信用卡有绝招','简介\r\n\r\n一年之计在于春。如果你曾经无数次地下定决心要从下一刻开始理财，却始终没有付诸行动，那么，在迎来春天的这个时刻，不妨再次做一个容易执行的理财规划。对于还没拥有信用卡的都市人来说，不妨考虑申请一张信用卡，或用来购物，或用来周转资金，或用来理财。 \r\n步 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','37','1','1349171908','逾期催收区','九洲贷发言人','教你玩转信用卡','简介人生有三重境界，信用卡的使用也有三重境界。刷点积分，换点小礼品，“薅”点银行的“羊毛”，小到公仔玩具，抱枕、油和米，大到iPad、iPhone的，此为入门级别。还有一类人，他们已经不感兴趣这些“小恩小惠”，而是仔细钻研，深谙用卡之道，此为带点危险系数、红黑 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','20','1349761398','新闻资讯','admin','电子平台给力民间借贷','“虽然如今货币政策有放松的趋势，但市场融资需求量依然很大，借款方和出资方信息不对称的问题仍存在。民间借贷机构要想做大做强，拥有强大的信息资源整合能力成为关键。”成都市快贷投资管理有限公司（以下简称快贷投资）是今年新成立的一家专业从事民间借贷中 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','19','1349761292','新闻资讯','472986645','金融混业监管亟待跟进','　　据了解，央行已经把“扩大商业银行设立基金公司试点”的报告上报国务院，银行系基金公司扩容将指日可待。业内人士表示，扩大商业银行投资设立基金管理公司，将进一步推动金融混业经营。\r\n　　\r\n　　不过值得注意的是，虽然从国际经验看，混业经营是趋势，但目前监管还 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','18','1349761254','新闻资讯','admin','民间借贷规范化、阳光化','　　今年的两会上，民间金融的合法性问题成为政协委员及人大代表热议的话题。\r\n　　就在委员及代表纷纷为民间金融的合法性呼吁的同时，浙江一企业负责人因为替人担保500万元无法偿还而跳楼自杀。 \r\n　　尽管浙江的官员认为，老板“跑路”及自杀是个别现象，但是民间金融面 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','11','1349755498','新闻资讯','admin','银行个人贷款利率上浮 国有银行上浮10%至15%','　　据《北京晨报》报道“现在银行贷款基本没有不上浮的。”一位国有银行贷款工作人员说。2日，记者走访北京多家银行信贷部门了解到，除了部分银行首套房贷仍有相应优惠外，个人消费类贷款利率普遍上浮。\r\n\r\n　　以装修贷款为例，中行、工行、建行等国有银行利率普遍上浮1 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','7','1349754869','新闻资讯','admin','资金面吃紧 北京个人贷款利率普遍上浮10%以上','　　针对有媒体报道的部分银行提高个人贷款利率，记者昨天了解到，目前北京地区个人抵押贷款利率普遍在基准利率上浮10%-30%，这一价格执行已久，近期未现涨价。\r\n\r\n　　不过，银行人士也表示，由于年末行情，银行再现信贷紧张信号，不排除涨价可能。\r\n\r\n　　个人贷款未明显 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','5','1349754106','新闻资讯','admin','欧债任然是焦点，非美承担重压','　　受全球经济复苏放缓打压及欧债担忧，股市大幅回落，提振避险货币美元强劲走高。目前市场焦点已经转向欧元区财长会议和默克尔出访希腊，希腊、西班牙将继续是关注的中心。\r\n　　\r\n　　早些时候世界银行发布报告，下调了其对东亚和太平洋地区的经济发展预期，并称中国经 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','38','3','1349311686','新闻资讯','九洲贷发言人','民间借贷利息的约定不能随心所欲约定得过高,否则不受法....','1991年8月13日最高人民法院在《关于人民法院审理借贷案件的若干意见》(以下简称《意见》)中规定,人民法院在审理民间借贷案件中,应按照公平、合理的原则,保护债权人、债务人的合法权益,限制高利率。同时,该《意见》在第六条中规定,民间借贷的利率可以适当的高于银 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','39','41','1349764719','活动专区','admin','房贷调查：政策没有变化 银行执行略现松动迹象','　　楼市新政出台以来，各项调控措施中力度最大的非信贷政策莫属。6月10日，《扬子楼市》推出了专题《二套房房贷新政“百科全书”》，为购房者提供全面的二套房新政指导。\r\n　　但是近期楼市出现了微妙的变化。7月初关于三套房贷松动的传闻出现，接着又是政府官员出面辟 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','39','34','1349763522','活动专区','admin','放开“民间信贷”之问题','近一两年来，不断有很大的声音在呼唤放开“民间信贷”，从高利贷有益论、到温州民间借贷问题的讨论、再到对吴英“非法集资罪”的质疑，其实质都是关于“民间信贷”是否应该放开的问题。和任何问题一样，有人看到了成功后的收益，有人看到了失败后的恶果。这些 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','39','13','1349756005','活动专区','admin','贷款买房置业理财有窍 公积金贷款是首选','　　公积金贷款是首选\r\n\r\n\r\n　　现在贷款基本上分为三种——公积金贷款，商业贷款，组合型贷款。 一旦政策发生变化，最好的办法就是尽量使用公积金贷款。除了节省利息之外，公积金贷款还可以起到减轻还款负担的作用，现在大部分单位都为员工缴纳公积金，除了从工资中扣除 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','42','39','1349764576','新手讨论区','admin','20亿张银行卡换芯 成本或达千亿','　　昨日针对有媒体报道“央行和银行业协会计划将20多亿张银行卡转换为IC卡，以遏制银行卡犯罪”，一监管层人士表示，尚未获知上述消息。\r\n　　“国内银行卡欺诈等问题主要来自银行卡管理，而不是磁条卡的设备安全问题。”他指出，打击银行卡犯罪光靠技术，是解决不了问 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','42','10','1349755358','新手讨论区','admin','贷款真的不需要担保吗','　　我们急需用钱的时候，一些贷款无需担保、快速贷款、低利息贷款等等广告悄悄的飞进您的手机信箱，这个时候您会感觉碰到及时雨似的，与对方取得联系，要求贷款。其实这里边也是暗藏玄机，贷款真的不需要担保吗？\r\n\r\n　　福州的小颜就收到了这样的短信，急着用钱的他也没 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','42','4','1349753578','新手讨论区','admin','如何识别投融资骗子公司','如何识别投融资骗子公司\r\n\r\n一、工商登记查询\r\n\r\n    如果与你联系的“投资公司”在中国大陆没有取得工商注册登记，那么，99%的可能是：它是骗子公司;如果“投资公司”是某外国公司驻中国某城市代表处，则也需要取得外国企业常驻代表机构的注册登记;应当至公司经营所在地工 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','43','26','1349762143','平台投资经验分享区','472986645','什么是提前还贷 提前还贷申请怎么写？','　　提前还贷的条件复杂并不是最主要的，重要的是提前还贷未必真的划算，是否合适提前还贷要按具体情况进行分析。由于每位客户的贷款利率、限期以及还款方式都有所不同，因此贷款人有必要在认真分析合同的前提下，仔细计算还贷成本，权衡之后再做决定。\r\n\r\n       据了解 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','43','14','1349760582','平台投资经验分享区','admin','个人创业贷款的好方法','　　　　您想拥有便捷顺畅的融资渠道成为一个成功的创业者吗？但是个体工商户融资难，总是困扰着个体创业者，并挫伤着个人创业的热情。但您是否想过，掌握好科学选择贷款的好方法，也许成功离您并不遥远，成为中国的比尔·盖茨就不是天方夜谭。\r\n　　　　\r\n　　　　个人创 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','43','8','1349755030','平台投资经验分享区','admin','房价高，贷款买房怎么样？','　　现在的房价是越来越高了，买房的人伤不起啊，有木有？这个时候分期付款，贷款买房成为很多人的选择。这样的买房方式到底好不好呢？\r\n\r\n　　A 银行选择 贷比三家\r\n\r\n　　尽管各家银行对房贷首付比例的要求相差无几，但在首套房贷利率规定上却有所不同。这就意味着，选择 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','44','33','1349763423','黄牛党专区','admin','民间借贷的经济理性与法治理性','据新华社报道，央行有关负责人近日表示，民间借贷是正规金融有益和必要的补充，在一定程度上解决了部分社会融资需求，特别是缓解了一些中小企业和\\\\\"三农\\\\\"的资金困难。民间借贷的利率可以适当高于银行的利率，各地人民法院可根据本地区的实际情况具体掌握，但最 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','44','17','1349760994','黄牛党专区','admin','建议尽快出台《放贷人条例》提高民间借贷利率上限','　　全国人大代表、浙江省高院院长齐奇表示，近年来浙江民间借贷十分活跃，建议尽快制定相关法律法规，从立法层面适当提高民间借贷利率的上限标准，并通过立法确认企业间资金调剂行为的合法性。　　“现在亟须制定法律法规，让民间借贷阳光化。”齐奇说，目前民间借贷利 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','45','40','1349764631','抵押标信息公布区','admin','银行业集体上调网银转账费 网站未公示惹争议','　　银行服务费征收在“ATM机事件”后，日前又传出了农业银行(2.71,-0.01,-0.37%)前期网站没有公示，上调了10倍于原价的网银转账费。昨天，一位业内人士向本报传来了2006年各家银行柜台转账收费表，通过于目前的服务价格比对询问后发现，不少银行均大幅上涨了相关费用。 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','45','30','1349762605','抵押标信息公布区','admin','多方发力切实支持民间投资发展','“新36条”实施细则纷纷落地之后，近期相关部委抓紧推进后续工作，各部门相关负责人分别详细解读了民间投资实施细则，进一步激发了民间投资进入相关行业的热情。       奖励小贷公司有助于吸引更多民间资本       由于植根于社会基层，直接服务于农村、广大中小 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','45','16','1349760856','抵押标信息公布区','admin','超级网银呼之欲出 第三方支付未被排除在外','　　备受关注的央行第二代支付系统(俗称“超级网银”)将于本月30日上线。届时，首批通过测试的银行即可实现自身网银与央行系统的互联，而在同批通过测试的各家银行之间，可实现跨行支付实时到账、一站式管理所有账户等功能。另外，与此前一度被视为支付宝等第三方支付组 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','46','28','1349762257','投资理财交流区','472986645','中小企业五招敲开银行贷款大门','　　不少中小企业主可能会觉得，从银行获得融资难度不小。一方面，企业急着用钱却又缺钱，而另一方面，银行还要对企业经营情况做各种评估考核，几轮下来，不是没法通过，就是错过了最佳赚钱时机。不过，也有很多已经从银行获得贷款的企业颇有感触，在他们看来，找银行申 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','46','12','1349755778','投资理财交流区','admin','拒绝做房奴聪明还贷款 理财专家三招教你巧还贷','　　　　“七折房贷”已在本市实施，部分借款人已开始享受到实惠。然而部分借款人由于这样或那样的原因，享受不了七折优惠。 \r\n　　\r\n　　　　理财专家建议，“会借钱、还要会还钱”才能算得上会理财。在房贷还款上，借款人如果能够掌握好一些小技巧，可以省下不少银子。  ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','46','9','1349755283','投资理财交流区','admin','贷款后容易“闯入”的五大还款误区','　　　　误区一：商业贷款转变公积金贷款。 \r\n　　　　房地产金融市场环境从紧后公积金贷款的优势日渐突出，尤其是其流程缩短见契税票放款更是成为借款人贷款买房使用的第一“武器”。对于已经使用商业贷款且现在还款压力较大的借款人来说，见公积金贷款的优势如此之多便 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','45','1349872775','信用卡专区','九洲贷发言人','要申请信用卡请到以下网站','卡宝宝http://www.cardbaobao.com/\r\n\r\n我爱卡http://xyk.51credit.com\r\n\r\n卡神http://www.cqxyk.com/','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','25','1349761952','信用卡专区','admin','民间借贷的优势','民间借贷是一种自发性现象。首先是比较容易，只要你有人担保，或者有一定的资产、社会地位，人家都会给你贷款，不像银行那么复杂；并且民间借贷资金可以很快得到周转，银行借款需要一定的周期与时间，对于很多缺乏短期资金的企业来说，当然热衷于民间借贷。它能 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','24','1349761824','信用卡专区','472986645','你的信用卡被“截留”了吗','本网讯：王先生是辽宁辽中人，在辽西一带工作。2011年6月中旬的一天，他在一个单身QQ群里看到一条信息，写着只要在辽西工作，参加社保，并有银行信用卡的人，就可申办新的信用卡。王先生当即通过QQ联系对方。\r\n        次日，果然有两家银行的客服人员找到王先生 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','23','1349761602','信用卡专区','472986645','信用卡代还款需谨慎','　　本网讯：信用卡代还款的操作简单来讲就是中介机构先把即将到期的透支额度还款，然后再通过刷卡消费的形式，将不久前的还款金额全部刷出。其实就是先还再刷出来。有的客户也许会有疑问，还进信用卡里的钱能第一时间刷出来吗？答案是可以的；根据目前各大银行的信用卡 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','21','1349761470','信用卡专区','472986645','多银行推无抵押担保贷款','　　近日，珠海华润银行推出面向小微企业的无抵押贷款，现金流和资金链状况的好坏，成为小微企业能否从该行获得贷款的决定因素。\r\n　　\r\n　　“只要有好的生意，就具备了贷款的先决条件。”珠海华润银行中小企业部总经理武照宇说到。不同于传统的抵押贷款，无抵押贷款是一 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','47','15','1349760798','信用卡专区','admin','风险大引监管部门警惕 信用卡市场六大乱象','信用卡让人爱，也让人恨。　　薄薄卡片POS机一刷，即实现轻松购物；手头一时紧张，信用卡分期付款进行周转；急需现金，信用卡可以实现临时取现……但转瞬间到了还款日，卡主几欲愁断肠，信用卡购物太过轻松，缺乏自制力的人往往会在无意间大幅透支。“我拿什么来还？” ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','48','31','1349762857','休闲娱乐','admin','民间贷款','是指公民之间、公民与法人之间、公民与其它组织之间借贷。只要双方当事人意见表示真实即可认定有效，因借贷产生的抵押相应有效，但利率不得超过人民银行规定的相关利率。民间贷款是一种直接融资渠道，银行借贷则是一种间接融资渠道。民间贷款是民间资本的一种投资 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','48','22','1349761530','休闲娱乐','admin','资金“旱情”略有缓解 银行经营性贷款利率下调','　　经过两次存款准备金率下调后，信贷紧张状况已有所缓解，市场融资成本开始走低，首套房贷利率下降后，个人经营性贷款利率也跟着下调，去年一路走高的民间借贷利率也开始回落。在榕部分担保中介开展的短期拆借业务，去年月利率最高可达6%，眼下个别回落至4%左右。\r\n　 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','50','42','1349768814','淘宝乐园','admin','银行收费清查 公众呼吁尽快公布结果','　　银行收费整治迎来“组合拳”。在有关部门发布通知要求商业银行清理服务项目收费不到一个星期，10日，银监会对外表示，由银监会、国家发改委联合修订的《商业银行服务价格管理办法(征求意见稿)》已下发到各商业银行和地方价格主管部门征求意见。\r\n　　接受记者采访的 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','50','35','1349763609','淘宝乐园','admin','民间借贷的下一站','曾刚：从小额贷款公司原先设计的模式来讲，他不吸收存款也不发债券，主要靠股东自己的钱来投资，从某种意义上讲只是给了他一个贷款权而已，虽然这个部分涉及到一点点银行的业务，但不算是银行的类型，不涉及到银行的外部性问题，就不像银行一样需要审慎性监管，所以 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','51','43','1349769018','网贷协会','admin','超级网银手续繁琐首日遇冷','　　新浪财经讯 被称之为“超级网银”的网银互联清算平台在4地上线。记者了解到，通过此项业务，将使跨行转账可以实现实时到账。不过，有业务体验者表示，目前其办理手续还略显繁琐，需要在转账双方银行均办理手续。\r\n　　一些用户昨日试用超级网银的感受是：签约过程曲 ...','');");
DB_I("replace  into `pre_forum_rsscache` values('1357702164','51','36','1349763996','网贷协会','admin','怎么投标赚钱多','下面是小弟几个月来对网贷投资的一点心得，望与诸位探讨：\r\n      1、如何利率收益最大化\r\n      可能很多投资人有这样的疑问：立刻投资可以提高资金使用效率，但可能没有投到高利率的标；等一段时间可能标到好利率，但是需要空几天不能得到利息。如何更好选择呢？\r\n ...','');");

?>