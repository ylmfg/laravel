/*
SQLyog Ultimate v9.62 
MySQL - 5.5.47 : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel` /*!40100 DEFAULT CHARACTER SET gbk */;

USE `laravel`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `title` varchar(60) DEFAULT NULL COMMENT '标题',
  `time` int(10) DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='分类';

/*Data for the table `category` */

insert  into `category`(`cate_id`,`title`,`time`) values (1,'冰晶画',1483601574),(2,'艺术玻璃',1483601591),(3,'壁画',1483601604),(4,'家居装饰画',1484016057);

/*Table structure for table `links` */

DROP TABLE IF EXISTS `links`;

CREATE TABLE `links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//名称',
  `link_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//标题',
  `link_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '//地址',
  `link_order` int(11) NOT NULL DEFAULT '0' COMMENT '//排序',
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `links` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2017_01_13_113419_create_links_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `production` */

DROP TABLE IF EXISTS `production`;

CREATE TABLE `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `old_price` decimal(5,2) DEFAULT NULL COMMENT '原价',
  `current_price` decimal(5,2) DEFAULT NULL COMMENT '现价',
  `cate_id` int(10) DEFAULT NULL COMMENT '分类id',
  `thumb` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `intro` text COMMENT '简介',
  `content` text COMMENT '内容',
  `uptime` int(10) DEFAULT NULL COMMENT '发布时间',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态 0未审核 1已审核',
  `keyword` varchar(60) DEFAULT NULL COMMENT '关键词',
  `publisher` varchar(255) DEFAULT NULL COMMENT '发布者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='产品表';

/*Data for the table `production` */

insert  into `production`(`id`,`title`,`old_price`,`current_price`,`cate_id`,`thumb`,`intro`,`content`,`uptime`,`status`,`keyword`,`publisher`) values (1,'冰晶画一——彰显艺术效果，先声夺人','250.00','255.00',1,'upload/20170109124654796.jpg|upload/20170109124654250.jpg','能够把撞击力沿不同角度进行分解，从而间接增加玻璃强度，延缓玻璃破碎时间。即使当玻璃破碎时，碎片也能够紧紧的黏结于膜层表面，保持原来形状，不飞溅、不变形，直至被安全的除去，从而最大限度的减少可能发生的人体伤害，特别是未成年小孩子的伤害。防范盗贼入室，保护财产安全，并减少爆炸造成的其他损失。 ','<h1 style=\"border: 0px; margin: 0px; padding: 0px; font-size: 22px; line-height: 38px; color: rgb(0, 0, 0); text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;中国最著名的十个画家村，你知道吗？</h1><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">宋庄画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">是北京市通州区的一个小镇，因于</span>1994<span style=\"border: 0px; margin: 0px; padding: 0px;\">年一批画家的迁入而声誉远播。历经十余年风风雨雨的沧桑，现如今已是响誉四方的当代艺术画家村。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543352407597.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">798</span><span style=\"border: 0px; margin: 0px; padding: 0px;\">画家村（也称大山子艺术区）：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">&nbsp;北京原</span>798<span style=\"border: 0px; margin: 0px; padding: 0px;\">工厂，改造为画家村。</span>　&nbsp;</p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543353130945.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">成都画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">位于都江堰。开始有</span>12<span style=\"border: 0px; margin: 0px; padding: 0px;\">位著名美术家在小镇上建起了一座小村庄</span>,<span style=\"border: 0px; margin: 0px; padding: 0px;\">被人们称为“画家村”。中国美术家协会理事、著名画家罗中立先生是画家村的创始人之一。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543354229488.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">成都北村画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">四川成都郊区荒凉的仓储区域</span>,<span style=\"border: 0px; margin: 0px; padding: 0px;\">有一个艺术家村落——北村艺术区</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543355226605.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">深圳大芬村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">大芬油画村是深圳布吉镇布吉村民委员会下辖的一个村民小组居民村落。据初步统计</span>,<span style=\"border: 0px; margin: 0px; padding: 0px;\">以大芬村为中心</span>,<span style=\"border: 0px; margin: 0px; padding: 0px;\">在深圳市从事油画生产的画师、画工及学员最少在</span>8000<span style=\"border: 0px; margin: 0px; padding: 0px;\">人以上</span>,<span style=\"border: 0px; margin: 0px; padding: 0px;\">而且这一数字还在不断增长。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543356128019.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">枫泾农民画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\">　　<span style=\"border: 0px; margin: 0px; padding: 0px;\">上海市金山区枫泾镇新枫路</span>39<span style=\"border: 0px; margin: 0px; padding: 0px;\">号，上海枫泾古镇发展旅游公司。</span>2006<span style=\"border: 0px; margin: 0px; padding: 0px;\">年由枫泾村建设，招画家进驻。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543357928238.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">太阳岛俄罗斯画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">哈尔滨太阳岛俄罗斯画家村成立3年多来，已有80多位俄罗斯知名画家驻村创作，在国内外声名远扬。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">上海画家村：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\">　　<span style=\"border: 0px; margin: 0px; padding: 0px;\">位于浦东大道一栋24层建筑,拥有180多个艺术家工作室,360平方的展厅,有150多位来之全国各地及海外的艺术家长年在此生活、创作、交流、交易,在国内外产生了广泛的影响。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><img src=\"/ueditor/php/upload/image/20170116/1484543358673834.png\"/></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">南汇大东方画家村：</span><span style=\"border: 0px; margin: 0px; padding: 0px; font-size: 16px;\"></span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\">　　<span style=\"border: 0px; margin: 0px; padding: 0px;\">上海新场镇已建成3万平米 “大东方”当代艺术家村，吸引了500多位画家慕名前来，目前有300多位画家已签约入住。街区规划新建了大东方当代艺术馆定期进行主题展览，同时还开辟了1000平方米的景德镇陶瓷艺术展厅进行定期展演。相对宋庄的生活配套设施，大东方有过之而无不及。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\">　　<span style=\"border: 0px; margin: 0px; padding: 0px;\">画家村是目前上海最大的当代艺术家村，大量北京798，上海M50部分资深画家，如今已陆续转战到大东方，“北漂”、“海漂”等全国各地的画家也都慕名而来。海纳百川，大东方画家村艺术群的异军突起，将引领中国当代艺术家共同开启 “新海派艺术”，重振新海派艺术的风采。同时，首创的1000平米的艺术展厅，将成为亚洲最集中的当代艺术展示基地。</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\"><span style=\"border: 0px; margin: 0px; padding: 0px;\">圆明园画家村（已经拆迁）：</span></p><p style=\"border: 0px; margin-top: 0px; margin-bottom: 0px; padding: 26px 0px 0px; word-wrap: break-word; text-align: center;\">　　<span style=\"border: 0px; margin: 0px; padding: 0px;\">沿着中关村大道向北,从北大南门绕到北大西门,再往前,经101中学左拐,到达园宾馆门口,有一条右转的小路,往里走大约五百米左右,便能看到一个村子,这,就是当年闻名遐尔的“圆明园画家村”。现在这个地方早已经荡然无存,被铲为了平地。</span></p><p><br/></p>',1484543691,0,'冰晶画','意灵玻艺术装饰工坊'),(2,'艺术玻璃一——彰显艺术效果，先声夺人','360.00',NULL,2,'upload/20170109133013985.jpg','广告灯箱市场——彰显艺术效果，先声夺人 运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波。\r\n','<h3 style=\"text-align: center;\"><span style=\"font-family: 楷体, 楷体_GB2312, SimKai;\"><span style=\"font-family: 楷体, 楷体_GB2312, SimKai; background-color: rgb(255, 192, 0);\">&nbsp; &nbsp; 广告灯箱市场——彰显艺术效果，先声夺人</span></span></h3><p><span style=\"font-family: 楷体, 楷体_GB2312, SimKai;\">运用特殊工艺处理技术制作出来的玻璃形象牌、玻璃灯箱、大型户外玻璃广告牌等也是一种全新的商业展示手段，艺术玻璃其效果也非一般广告效果可比。为企业宣传提供新的视野，也为广告公司提供新的商业机会。立体视觉的广告玻璃镜面简直让人触手可及；呼之欲出的立体逼真感，给人们带来强烈的视觉冲击，让人流连忘返、不忍离去的广告效应。据统计，全国每年广告灯箱材料消耗近200亿元的市场容量，万人迷玻璃广告牌、广告灯箱的出现将带来新一轮的冲击波</span></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src=\"/ueditor/php/upload/image/20170112/1484191854212447.jpg\" title=\"1484191854212447.jpg\"/><span style=\"font-family: 楷体, 楷体_GB2312, SimKai;\">波。</span></p>',1484290096,0,'艺术玻璃','意灵玻艺术装饰工坊'),(3,'壁画一——彰显艺术效果，先声夺人','155.00','168.00',3,'upload/20170109171105981.jpg|upload/20170109171106562.jpg','建筑装修市场 ——彰显大方时尚，富有华贵 有建筑就得有装饰，一幢建筑可以没有砖瓦，但绝少不了通透性好，既美观又实用的玻璃。商场、大型购物中心、高级写字楼、广场等，建筑物的档次越高，人们对建筑物外观质量和内在环境质量的要求也在不断提高，使装饰装修的比重，在建筑工程总造价中也不断提升，在高档建筑设施建设中，装饰装修的费用已占工程总造价的百分之四十以上。万人迷玻璃以豪华、美观、立体感强、形态各异、色彩丰富等优势，在为生活环境创造色泽斑斓的装饰效果，已经成为一种时尚的赚钱手段。','<blockquote style=\"box-sizing: border-box; padding: 10px 20px; margin: 0px 0px 10px; font-size: 14px; border-left: 5px solid rgba(128, 128, 128, 0.0745098); background: rgb(247, 247, 247); color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal;\"><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px;\"><span style=\"box-sizing: border-box; font-weight: 700;\">【编者按】</span>秘书与程序员，两个没有任何关联的职业，一位德国姑娘是如何实现跳跃的呢？这是<a href=\"https://twitter.com/denisenepraunig\" target=\"_blank\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(51, 122, 183); text-decoration: none;\">她的Twitter</a>,希望对大家有所启发。以下为译文：</p></blockquote><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">目前，我在德国SAP担任Swift/SAP UI5/JavaScript开发人员，而曾经我却是一名秘书。大家肯定会感动吃惊，我是如何实现的？为了那些即将进入软件行业的小伙伴们，我决定把转行经历分享给大家。</p><h3 style=\"box-sizing: border-box; font-family: &quot;microsoft yahei&quot;, arial; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">少年时期：秘书学徒——&gt;被编码吸引</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">和大多数青少年一样，我非常喜欢玩电脑。在word里面写我和朋友的故事，在excel中进行各种计算，在MS Paint中画画，玩游戏。我订购了一本计算机杂志，它教会了我一切有关电脑的知识。毫无疑问，我想要从事一份与电脑有关的工作，比如卖电脑，安装和配置一些东西，这些都是我梦寐以求的工作。不幸的是，我父母并不如我般兴奋，于是，我做出了妥协。我开始成为一名秘书学徒，可以成天与电脑打交道。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">因为工作关系，我接触到了网站创建方面的内容，并且利用这个机会维护了空手道俱乐部主页。在财务部门，我有机会把一些MS DOS程序转换成MS Excel。后来，因为欧元关系，这些软件就不再工作了。我不得不把无聊的任务重复一遍又一遍。如果可以自动化这些该多好？结果真的就实现了——MS VBA for Excel FTW，真是太令人兴奋了。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">工作期间，我偶然发现一系列的电脑杂志：Delphi编程。它们开始教我编程和GUI基础开发。我购买了一些这方面的书籍，正式开启了编程之路。我写了几个Delphi小程序——因为在MS Excel中做小型计算真的好无聊。6个月的系列教程结束后，我参加了一个开发者比赛：编写一个多标签编辑器。结果我赢得了比赛，前十名的奖项是一个包括所有CD-ROM的Delphi 7专业许可证，我终于可以得到一份开发工作了。可现实并没那么简单，研究招聘发现，没人要Delphi程序员。</p><h3 style=\"box-sizing: border-box; font-family: &quot;microsoft yahei&quot;, arial; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">20岁初期：秘书+一般大学入学资格</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">学徒结束以后，我继续留在公司担任秘书一职。我着迷于我们公司的网络工作，我认识一些很酷的人在家做很多计算机工作，其中一些就是IT工作。我要是有一份正规教育就能从事这方面的工作……</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">我和好友一起报了一个夜校，选择了MS Access数据库这门课——你可能已经猜到，我用MS VBA来自动化MS Access。其他人则是用框架来构建网站，我已经做过好几次。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">我心想：“等到这门课程结束，我获得了正规计算机教育，就可以获得一份新工作了”。后来，我还参加了一些专为女性开设的科技活动，比如访问大学、参加一些讲座，在这个过程中，我能够与正在学习计算机技术的女孩交谈，这些正是我想要的。</p><h3 style=\"box-sizing: border-box; font-family: &quot;microsoft yahei&quot;, arial; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">20多岁：兼职学习、获得IT工作</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">最后，我找到了一首可以兼职学习的应用科技大学（University of Applied Sciences）。它并不是100%的纯计算机科学，还包括网络和自动化工程、大量的信号传输、手机等——但也包含了编程方面的基础知识，如OOP、算法与数据结构、数据库、软件工程、模型……关键是，这些课程是可以兼职学习的。我整个星期都在工作，每周二、周五和整个周六来听课。一边担任秘书工作，一边学习技术知识是一件非常酷的想法。但因为基础薄弱和技术空白，我很难吸收所有的知识，也因此不得不投入大量的时间来填补知识空白。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">我辞掉工作并搬到了学习所在的城市。因为缺乏IT工作经验，我很难获得一份相关工作。幸运的是，我获得了奖学金——但我仍然想工作！通过同学关系，我了解了SAP，而他也是SAP内部项目的项目经理。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">我获得了一份项目助理的工作，但我仍然或多或少的是一个秘书。这是一个非常好的经验积累机会，我学会了整个的ERP和CRM流程协作、培训、创建培训材料、测试E2E流程、做了许多旅程、维护翻译并且帮忙维护各个阶段推广的工作。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">两个月以后，我问老板是否可以成为一名开发人员。他回答了是。梦想成真了，一个非常有经验的开发同事担任我的导师。这是一个非常伟大的时刻！在2010年，我真正实现成为一名开发者的目标，两年后，我又完成了硕士研究。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"><img src=\"http://img.blog.csdn.net/20170111090327403\" alt=\"图片描述\" title=\"\"/></p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><center>2012年取得硕士学位</center><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><h3 style=\"box-sizing: border-box; font-family: &quot;microsoft yahei&quot;, arial; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 24px; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">“捷径” vs. “艰辛之路”</h3><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">从秘书到软件开发工程师，我花了好几年时间。因为秘书工作让我很少有时间去学习这方面知识，所以，我不得不花3年时间去上大学，利用业余时间学习，这是非常耗时且需要付出巨大的努力。我的大部分假期都在做项目，学士学位/硕士论文和考试准备等。没有任何技术背景的我，入门是极其困难的，所以，我的学习之路是艰难的。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 20px; color: rgb(51, 51, 51); font-family: &quot;microsoft yahei&quot;, arial; text-align: justify; white-space: normal; background-color: rgb(255, 255, 255);\">现在，互联网上有大量的计算机科学和编码教程，每个人都可以成为开发者。还有大量的开发者训练营，只要8到12周即可成为一名开发者。只要你想从事这个职业，这些快速入门都是非常棒的入门方法。它们主要教你如何编写代码，而不是一些理论课程，比如软件工程、算法和数据结构、模式、数据库等计算机方面的理论知识。而大公司一般都要求接受正规教育，爬越高，要求也会越多。大学虽然不会教你如何编码，但是会传授一些永恒客观的基础知识。在整个艰难转行中，我学到了各种各样的知识，因此，我从未感到后悔。</p><p><br/></p>',1484122390,0,'壁画','意灵玻艺术装饰工坊'),(4,'冰晶画二——彰显艺术效果，先声夺人','155.00',NULL,1,'upload/20170112115812348.jpg',' 有助于修正和减少光照强区和背阳区温度的不均恒，并分散刺眼眩光，使室内人员休闲更舒适、工作更高效。更有效的延长了家具、地毯、布料和饰品的使用寿命。 ','<h3 style=\"text-align: center;\"><span style=\"font-family: 隶书, SimLi; background-color: rgb(0, 176, 240);\">冰晶画市场来袭</span></h3><h3><span style=\"font-size: 18px;\"></span></h3><p><span style=\"font-family: 隶书, SimLi;\">&nbsp; </span>&nbsp; &nbsp; &nbsp; &nbsp; <img src=\"/ueditor/php/upload/image/20170110/1484030574435825.jpg\" title=\"1484030574435825.jpg\"/>&nbsp;</p><p><br/></p><p><br/></p><h3><span style=\"font-size: 18px;\"></span><br/></h3>',1484193497,0,'冰晶画','意灵玻艺术装饰工坊'),(5,'艺术玻璃二——彰显艺术效果，先声夺人','780.00','800.00',2,'upload/20170110144522110.jpg','完美的造型，绚丽的色彩，特有的玻璃工艺，夺人眼球的声色效果，立体动感的镜面，造就了一个划时代的艺术玻璃王国。在各色灯光的映照下，魅力四射熠熠生辉，想怎么就怎么做，只有想不到，没有做不到。','<h3 style=\"margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">1</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">ENERGY-SAVING、ENVIRONMENTAL PROTECTION</span>节能环保：打造低碳生活，美化环境</span></h3><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>隔热效果相当于38厘米厚的砖墙，冬暖夏凉，四季宜人。</p></li><li><p>美化环境，应用范围极其广泛，可提高玻璃的使用价值。</p></li></ul><h3 style=\"margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">2</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">SECURITY</span>安全：可防止玻璃意外破碎时飞溅</span></h3><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>将撞击力沿不同角度进行分解，间接增加玻璃强度，延缓玻璃破碎时间</p></li><li><p>防范盗贼入室，保护财产安全，并减少爆炸造成的其他损失。</p></li></ul><h3 style=\"margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">3</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">HEALTHY</span>健康：吸收至少98%以上的紫外线</span></h3><ul style=\"list-style-type: none;\" class=\" list-paddingleft-2\"><li><p>可阻隔透过玻璃的99%的有害紫外线，保护您的皮肤免受伤害，始终保持您的室内物品色泽新鲜、光亮如新。</p></li><li><p>美国皮肤癌防治基金会推荐产品</p></li></ul><p><br/></p><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">4</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">SUNSCREEN</span>防晒：消除窗外的刺眼眩光</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>有助于修正和减少光照强区和背阳区温度的不均衡，并分散刺眼眩光，使室内人员休闲更舒适、工作更高效。</p></li><li><p>更有效的延长了家具、地毯、布料和饰品的使用寿命。</p></li></ul><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">5</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">EXPLOSION-PROOF</span>防爆：防止玻璃对家庭和人员的伤害</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>经过特殊工艺处理后，玻璃可以实现即使被打破也不会轻易掉落，可以防止玻璃对人、家具和空间的伤害</p></li><li><p>特殊工艺加工，可以做成透明的、花纹的等各种图案！</p></li></ul><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">6</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">CRACK</span>防裂：防止骤冷骤热使玻璃炸裂、损坏</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>冬天，天气忽冷忽热，容易导致玻璃装饰炸裂，影响美观和使用，经过特殊处理的万人迷玻璃可以使玻璃安全有保障。</p></li></ul><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">7</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">SHOCKPROOF</span>防震：有较好的抗地震和撞击效果</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>在面临地震或者被撞击的情况下，玻璃都会破碎，而经过特殊处理后，玻璃就会产生独有的抗震功能，防止突如其来的事故造成意外伤害。</p></li></ul><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">8</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">FIRE PREVENTION</span>防火：独有防火材料，防止火灾侵袭</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>独有的物理和化学处理方法，使玻璃能在高温下不炸裂，从而有效阻止火焰和烟雾的蔓延，有利于第一时间发现火情，进行救灾。</p></li></ul><h3 style=\"white-space: normal; margin: 0px; padding: 0px; border: none; font-size: 24px; font-weight: normal; background-image: url(&quot;images/yshbg.gif&quot;); background-position: 0px bottom; background-size: initial; background-repeat: repeat-x; background-attachment: initial; background-origin: initial; background-clip: initial; height: 61px; line-height: 30px;\"><strong style=\"display: inline-block; float: left; font-family: Impact, &quot;Arail bold&quot;; font-size: 60px; line-height: 60px; width: 41px;\">9</strong><span style=\"display: inline-block; float: left; font-size: 20px; font-weight: bold;\"><span style=\"margin: 0px; padding: 4px 0px 0px; border: none; color: rgb(127, 125, 124); display: block; font-family: &quot;Times New Roman&quot;, Times, serif; font-size: 13px; font-weight: normal; line-height: 18px; text-transform: uppercase;\">PRIVATE</span>私密：单向透视性，室外看不清室内</span></h3><ul class=\" list-paddingleft-2\" style=\"list-style-type: none;\"><li><p>既允许光线透入，窗外景观清晰可辨，又能遮挡他人窥视，还有良好的隔音功能，利于工作和睡眠。</p></li></ul><p><a href=\"http://www.515ps.com/about-138.html\" style=\"text-decoration: none; color: rgb(0, 0, 0); width: 500px; height: 460px; display: block;\"><br/></a></p><p><br/></p><p><br/></p>',1484119663,0,'艺术玻璃','意灵玻艺术装饰工坊'),(6,'冰晶画三','500.00',NULL,1,'upload/20170112092326157.jpg','冰晶画三特有的除霾画','<h3 style=\"text-align: center;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"background-color: rgb(255, 192, 0);\">&nbsp;<span style=\"background-color: rgb(255, 192, 0); font-family: 楷体, 楷体_GB2312, SimKai;\">&nbsp;&nbsp; &nbsp;冰晶画三特有的除霾画</span>&nbsp;</span> &nbsp; &nbsp;&nbsp;</h3>',1484184346,0,'冰晶画三','意灵玻艺术装饰工坊'),(7,'冰晶画四','450.00',NULL,1,'upload/20170112092800793.jpg','冰晶画四无框画','<p>冰晶画四无框画</p>',1484184524,0,'冰晶画四','意灵玻艺术装饰工坊'),(8,'冰晶画五','350.00',NULL,1,'upload/20170112092927321.jpg','冰晶画五背景墙','<p>冰晶画五背景墙冰晶画五背景墙</p>',1484184589,0,'冰晶画五','意灵玻艺术装饰工坊'),(9,'冰晶画六','650.00',NULL,1,'upload/20170112093027640.jpg','冰晶画六壁画','<p>冰晶画六壁画冰晶画六壁画冰晶画六壁画冰晶画六壁画</p>',1484184660,0,'冰晶画六','意灵玻艺术装饰工坊');

/*Table structure for table `system` */

DROP TABLE IF EXISTS `system`;

CREATE TABLE `system` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='系统配置';

/*Data for the table `system` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','admin@admin.com','admin',NULL,NULL,NULL),(2,'tang','tang@sina.com','tang',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;