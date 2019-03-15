/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50165
Source Host           : localhost:3306
Source Database       : aicaoluo2

Target Server Type    : MYSQL
Target Server Version : 50165
File Encoding         : 65001

Date: 2018-09-16 13:35:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(50) NOT NULL COMMENT '留言名称',
  `phone` text NOT NULL COMMENT '电话',
  `diqu` text NOT NULL COMMENT '地址',
  `address` text NOT NULL COMMENT '标识',
  `content` text NOT NULL,
  `mip` varchar(255) NOT NULL COMMENT '用户ip',
  `is_read` int(11) NOT NULL COMMENT '是否阅读',
  `create_time` int(11) NOT NULL COMMENT '留言时间',
  `plan` text NOT NULL,
  `unit` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3566 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES ('3341', '芦力新', '15948454118', 'plan=TT&unit=Z1&keyword=pugongshishenmeyisi', '', '', '', '0', '1536320565', '', '');
INSERT INTO `guestbook` VALUES ('3340', '谭雪丹', '13836605208', 'plan=JZ&unit=jz&keyword=wanshangjianzhixiaoshigong', '', '', '', '0', '1536319681', '', '');
INSERT INTO `guestbook` VALUES ('3339', '谢建党', '15058442211', 'plan=TT&unit=Z1&keyword=baoanzhaopin', '', '', '', '0', '1536319444', '', '');
INSERT INTO `guestbook` VALUES ('3338', '刘婷婷', '15150725400', 'plan=TT&unit=Z1&keyword=fuzhuangchang', '', '', '', '0', '1536318667', '', '');
INSERT INTO `guestbook` VALUES ('3337', '刘金银', '18736942712', 'plan=ZP&unit=zg&keyword=xinchangzhaogong', '', '', '', '0', '1536318064', '', '');
INSERT INTO `guestbook` VALUES ('3336', '祝卫平', '18268019212', 'plan=TT&unit=Z10&keyword=shaoxingzhaopinrenyuan', '', '', '', '0', '1536317844', '', '');
INSERT INTO `guestbook` VALUES ('3334', '冯志芹', '13589633184', 'plan=ZP&unit=zg&keyword=fujinyouzhaogongdema', '', '', '', '0', '1535939255', '', '');
INSERT INTO `guestbook` VALUES ('3335', '常凌晶', '17046275733', 'plan=TT&unit=Z1&keyword=wubatongchengwang', '', '', '', '0', '1536317374', '', '');
INSERT INTO `guestbook` VALUES ('3342', '叶小兰', '18179722781', 'plan=TT&unit=Z1&keyword=wenyuanzhaopin', '', '', '', '0', '1536320756', '', '');
INSERT INTO `guestbook` VALUES ('3343', '辛彦国', '18904854233', 'plan=ZP&unit=zg&keyword=zhaogongguanggao', '', '', '', '0', '1536321292', '', '');
INSERT INTO `guestbook` VALUES ('3344', '李素华', '17516021519', 'plan=TT&unit=Z1&keyword=zhejiangzhaopinpugong', '', '', '', '0', '1536321708', '', '');
INSERT INTO `guestbook` VALUES ('3345', '许德春', '13762654911', 'plan=TT&unit=Z1&keyword=zhaopinzuixinxinxi', '', '', '', '0', '1536322070', '', '');
INSERT INTO `guestbook` VALUES ('3346', '赵云叶', '13304816636', 'plan=TT&unit=Z1&keyword=fuqigongzhaopinxinxi', '', '', '', '0', '1536322087', '', '');
INSERT INTO `guestbook` VALUES ('3347', '蔡来宝', '13617923268', 'plan=TT&unit=Z4&keyword=hangzhouqiuzhizhaopin', '', '', '', '0', '1536322667', '', '');
INSERT INTO `guestbook` VALUES ('3348', '陈萍', '18671771660', 'plan=TT&unit=Z5&keyword=gongzhaopin', '', '', '', '0', '1536322716', '', '');
INSERT INTO `guestbook` VALUES ('3349', '蔡来宝', '13617923268', 'plan=TT&unit=Z4&keyword=hangzhouqiuzhizhaopin', '', '', '', '0', '1536322883', '', '');
INSERT INTO `guestbook` VALUES ('3350', '张文龙', '15269462522', 'plan=TT&unit=Z1&keyword=dianzichang', '', '', '', '0', '1536323024', '', '');
INSERT INTO `guestbook` VALUES ('3351', '韩贵平', '15935397438', 'plan=ZP&unit=zg&keyword=zhaogongxinxi', '', '', '', '0', '1536323156', '', '');
INSERT INTO `guestbook` VALUES ('3352', '牛世博', '13953478796', 'plan=TT&unit=Z8&keyword=dezhouzhaopinpugong', '', '', '', '0', '1536365767', '', '');
INSERT INTO `guestbook` VALUES ('3353', '姚南', '15678555568', 'plan=ZP&unit=zpw&keyword=zhaozhaogongzuo', '', '', '', '0', '1536365901', '', '');
INSERT INTO `guestbook` VALUES ('3354', '杨永贵', '13310562318', 'plan=TT&unit=Z1&keyword=canjirenzhaopinxinxi', '', '', '', '0', '1536366307', '', '');
INSERT INTO `guestbook` VALUES ('3355', '邓雅琴', '15115855422', 'plan=ZP&unit=zg&keyword=zhaopinzhaogongzuo', '', '', '', '0', '1536366310', '', '');
INSERT INTO `guestbook` VALUES ('3356', '沈成焕', '15687600551', 'plan=JZ&unit=jz&keyword=zaijiashougonghuojianzhi', '', '', '', '0', '1536366859', '', '');
INSERT INTO `guestbook` VALUES ('3357', '曾桂娟', '18195325569', 'plan=ZP&unit=zpw&keyword=zhaogongxinxiwang', '', '', '', '0', '1536367931', '', '');
INSERT INTO `guestbook` VALUES ('3358', '姚慧', '18841736252', 'plan=TT&unit=Z3&keyword=yingkoupugongzhaopin', '', '', '', '0', '1536368216', '', '');
INSERT INTO `guestbook` VALUES ('3359', '文洪亮', '18728612208', 'plan=ZP&unit=zg&keyword=zhaogongzhaopinrenzaifujin', '', '', '', '0', '1536368220', '', '');
INSERT INTO `guestbook` VALUES ('3360', '马丽霞', '13333663207', 'plan=JZ&unit=jz&keyword=shougonghuozaijiajianzhi', '', '', '', '0', '1536368425', '', '');
INSERT INTO `guestbook` VALUES ('3361', '钟世会', '18452733306', 'plan=ZP&unit=dqzp&keyword=jiangyinrencaizhaopin', '', '', '', '0', '1536377130', '', '');
INSERT INTO `guestbook` VALUES ('3362', '汪一芳', '13886459621', 'plan=ZP&unit=zg&keyword=zhaopingongren', '', '', '', '0', '1536377670', '', '');
INSERT INTO `guestbook` VALUES ('3363', '王红喜', '15087000559', 'plan=TT&unit=Z4&keyword=guanlirenyuanzhaopin', '', '', '', '0', '1536378043', '', '');
INSERT INTO `guestbook` VALUES ('3364', '赵章翼', '18367899509', 'plan=TT&unit=Z2&keyword=hongqiaencaizhaopinwang', '', '', '', '0', '1536458820', '', '');
INSERT INTO `guestbook` VALUES ('3365', '柴本新', '18595251217', 'plan=TT&unit=Z1&keyword=lvhuagongrenzhaopin', '', '', '', '0', '1536463023', '', '');
INSERT INTO `guestbook` VALUES ('3366', '孙登虎', '13965274984', 'plan=TT&unit=Z1&keyword=hulizhaopinxinxi', '', '', '', '1', '1536463136', '', '');
INSERT INTO `guestbook` VALUES ('3367', '李中花', '18355142931', 'plan=ZP&unit=zg&keyword=rencaishichangzhaopin', '', '', '', '0', '1536466711', '', '');
INSERT INTO `guestbook` VALUES ('3368', '小海', '15648540095', 'plan=ZP&unit=zg&keyword=pugongzhaopin', '', '', '', '0', '1536467126', '', '');
INSERT INTO `guestbook` VALUES ('3369', '刘涛', '13472033241', 'plan=ZP&unit=zg&keyword=dianzichangzhaopin', '', '', '', '0', '1536467581', '', '');
INSERT INTO `guestbook` VALUES ('3370', '何彪', '15186438875', 'plan=ZP&unit=zg&keyword=gongsizhaopin', '', '', '', '0', '1536467664', '', '');
INSERT INTO `guestbook` VALUES ('3371', '乔乔', '17809513629', 'plan=ZP&unit=zg&keyword=gongsizhaopin', '', '', '', '0', '1536470631', '', '');
INSERT INTO `guestbook` VALUES ('3372', '游腾汉', '13799097560', 'plan=JZ&unit=jz&keyword=shougongjianzhi', '', '', '', '0', '1536473010', '', '');
INSERT INTO `guestbook` VALUES ('3373', '沈书运', '13502091785', 'plan=ZP&unit=zg&keyword=zhaogong', '', '', '', '0', '1536474270', '', '');
INSERT INTO `guestbook` VALUES ('3374', '赖言志', '18279458625', 'plan=ZP&unit=zg&keyword=gongchangzhaogong', '', '', '', '0', '1536474395', '', '');
INSERT INTO `guestbook` VALUES ('3375', '米吉提', '18890925124', 'plan=ZP&unit=zg&keyword=zhaogong', '', '', '', '0', '1536474524', '', '');
INSERT INTO `guestbook` VALUES ('3376', '陆则珠', '18750853049', 'plan=JZ&unit=jz&keyword=zaijiashougonghuojianzhi', '', '', '', '0', '1536475142', '', '');
INSERT INTO `guestbook` VALUES ('3377', '刘红霞', '15713852896', 'plan=ZP&unit=zg&keyword=rencaishichangzhaopin', '', '', '', '0', '1536476065', '', '');
INSERT INTO `guestbook` VALUES ('3378', '赵长江', '15565296193', 'plan=ZP&unit=zg&keyword=canjirenzhaogong', '', '', '', '0', '1536476433', '', '');
INSERT INTO `guestbook` VALUES ('3379', '李自告', '18387629825', 'plan=ZP&unit=zg&keyword=nalizhaogong', '', '', '', '0', '1536476678', '', '');
INSERT INTO `guestbook` VALUES ('3380', '韦海珍', '13978586970', 'plan=ZP&unit=zpw&keyword=zhaogongxinxiwang', '', '', '', '0', '1536476931', '', '');
INSERT INTO `guestbook` VALUES ('3381', '曾庆杰', '17563568291', 'plan=ZP&unit=zg&keyword=zhaogong', '', '', '', '0', '1536478162', '', '');
INSERT INTO `guestbook` VALUES ('3382', '戴正兴', '13901426354', 'plan=ZP&unit=zpw&keyword=rencaizhaopinwang', '', '', '', '0', '1536538068', '', '');
INSERT INTO `guestbook` VALUES ('3383', '李丽', '13573094888', 'plan=ZP&unit=zg&keyword=jintianzhaopinxinxi', '', '', '', '0', '1536541970', '', '');
INSERT INTO `guestbook` VALUES ('3384', '张省卫', '15136420103', 'plan=ZP&unit=zg&keyword=zhaogong', '', '', '', '0', '1536543619', '', '');
INSERT INTO `guestbook` VALUES ('3385', '魏玉成', '17316594860', 'plan=ZP&unit=zg&keyword=fujinzhaogong', '', '', '', '0', '1536546241', '', '');
INSERT INTO `guestbook` VALUES ('3386', '姬建霞', '13525023191', 'plan=ZP&unit=zg&keyword=fujinjintianzhaogong', '', '', '', '0', '1536806746', '', '');
INSERT INTO `guestbook` VALUES ('3387', '古丽', '13565121834', 'plan=ZP&unit=zpw&keyword=rencaizhaopinwang', '', '', '', '0', '1536808160', '', '');
INSERT INTO `guestbook` VALUES ('3388', '史先生', '15538629991', 'plan=ZP&unit=dqzp&keyword=henanzhaopin', '', '', '', '0', '1536809779', '', '');
INSERT INTO `guestbook` VALUES ('3389', '左迷娟', '15939309081', 'plan=ZP&unit=zg&keyword=youzhaogongdema', '', '', '', '0', '1536814387', '', '');
INSERT INTO `guestbook` VALUES ('3390', '马龙', '18989090114', 'plan=ZP&unit=zg&keyword=changzhaogong', '', '', '', '0', '1536814675', '', '');
INSERT INTO `guestbook` VALUES ('3391', '元雄霖', '13029110422', 'plan=ZP&unit=zpw&keyword=zhaopinrencaiwang', '', '', '', '0', '1536816322', '', '');
INSERT INTO `guestbook` VALUES ('3392', '李辉', '13625688806', 'plan=zhong3&unit=临时工招工&keyword=临时工招工', '', '', '', '0', '1536830859', '', '');
INSERT INTO `guestbook` VALUES ('3393', '汤可', '18952133881', 'plan=&unit=&keyword=', '', '', '', '0', '1536832087', '', '');
INSERT INTO `guestbook` VALUES ('3394', '郑雪', '15857356642', 'plan=D1&unit=zuanshihuajiagong&keyword=zuanshihuajiagong', '', '', '', '0', '1536836088', '', '');
INSERT INTO `guestbook` VALUES ('3395', '张玉红', '13991553782', 'plan=7&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536836498', '', '');
INSERT INTO `guestbook` VALUES ('3396', '张小芳', '15381198066', 'plan=zhong3&unit=nalizhaogong&keyword=nalizhaogong', '', '', '', '0', '1536838021', '', '');
INSERT INTO `guestbook` VALUES ('3397', '薄佳佳', '15893847985', 'plan=5&unit=linshigongzhaopin&keyword=linshigongzhaopin', '', '', '', '0', '1536840286', '', '');
INSERT INTO `guestbook` VALUES ('3398', '陈进勇', '13400640955', 'plan=7&unit=rencaiwangxinxi&keyword=rencaiwangxinxi', '', '', '', '0', '1536841462', '', '');
INSERT INTO `guestbook` VALUES ('3399', '李三英', '18075993629', 'plan=zhong3&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '1', '1536842370', '', '');
INSERT INTO `guestbook` VALUES ('3400', '段飞', '18558421582', 'plan=shougonghuo&unit=jiagongchang&keyword=jiagongchang', '', '', '', '0', '1536843585', '', '');
INSERT INTO `guestbook` VALUES ('3401', '陆毅', '13588376445', 'plan=2&unit=gongsizhaopin&keyword=gongsizhaopin', '', '', '', '0', '1536844106', '', '');
INSERT INTO `guestbook` VALUES ('3402', '张婷', '17678004029', 'plan=zhong3&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1536844111', '', '');
INSERT INTO `guestbook` VALUES ('3403', '陆毅', '13588376445', 'plan=2&unit=zhaopinyuangong&keyword=zhaopinyuangong', '', '', '', '0', '1536844252', '', '');
INSERT INTO `guestbook` VALUES ('3404', '余连群', '18986014819', 'plan=zhong3&unit=zhaogongzuolinshigong&keyword=zhaogongzuolinshigong', '', '', '', '0', '1536845587', '', '');
INSERT INTO `guestbook` VALUES ('3405', '魏娜娜', '15097766062', 'plan=zhong1&unit=henanwaifajiagong&keyword=henanwaifajiagong', '', '', '', '0', '1536851137', '', '');
INSERT INTO `guestbook` VALUES ('3406', '李英', '15332353040', 'plan=3&unit=shougong&keyword=shougong', '', '', '', '0', '1536852715', '', '');
INSERT INTO `guestbook` VALUES ('3407', '张尧', '18260091411', 'plan=shougong4&unit=chuanzhushougonghuo&keyword=chuanzhushougonghuo', '', '', '', '0', '1536880434', '', '');
INSERT INTO `guestbook` VALUES ('3408', '张女士', '13872087972', 'plan=ceshi2&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536882144', '', '');
INSERT INTO `guestbook` VALUES ('3409', '高村', '15835091257', 'plan=pinpaici&unit=zhaonvgong&keyword=zhaonvgong', '', '', '', '0', '1536882164', '', '');
INSERT INTO `guestbook` VALUES ('3410', '林文明', '18695752776', 'plan=4&unit=chuanzhuzishougonghuowaifa&keyword=chuanzhuzishougonghuowaifa', '', '', '', '0', '1536882307', '', '');
INSERT INTO `guestbook` VALUES ('3411', '罗列', '18070108353', 'plan=2&unit=ganjizhaopin&keyword=ganjizhaopin', '', '', '', '0', '1536882318', '', '');
INSERT INTO `guestbook` VALUES ('3412', '方锦秀', '13886547345', 'plan=D&unit=shougonghuozaijiazuo&keyword=shougonghuozaijiazuo', '', '', '', '0', '1536882881', '', '');
INSERT INTO `guestbook` VALUES ('3413', '张玉龙', '18553760288', 'plan=5&unit=jiagongshenmezhengqian&keyword=jiagongshenmezhengqian', '', '', '', '0', '1536883195', '', '');
INSERT INTO `guestbook` VALUES ('3414', '刘莹莹', '18765083810', 'plan=E&unit=chuanzhushougonghuo&keyword=chuanzhushougonghuo', '', '', '', '0', '1536883818', '', '');
INSERT INTO `guestbook` VALUES ('3415', '杨玉光', '13003899339', 'plan=zhong3&unit=nvgong&keyword=nvgong', '', '', '', '0', '1536885438', '', '');
INSERT INTO `guestbook` VALUES ('3416', '胡士琴', '15838048357', 'plan=zhong3&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1536886633', '', '');
INSERT INTO `guestbook` VALUES ('3419', '屈瑞河', '13938763880', 'plan=5&unit=zhaopinzhaopin&keyword=zhaopinzhaopin', '', '', '', '0', '1536896717', '', '');
INSERT INTO `guestbook` VALUES ('3420', '程晓荣', '15289209018', 'plan=E&unit=shougonggongyipin&keyword=shougonggongyipin', '', '', '', '0', '1536903330', '', '');
INSERT INTO `guestbook` VALUES ('3421', '冬冬', '15534813987', 'plan=2&unit=tongcheng58zhaopin&keyword=tongcheng58zhaopin', '', '', '', '0', '1536905338', '', '');
INSERT INTO `guestbook` VALUES ('3422', '张先生', '13381250038', 'plan=6&unit=daijiagong&keyword=daijiagong', '', '', '', '0', '1536906500', '', '');
INSERT INTO `guestbook` VALUES ('3423', '郑斌', '15065810716', 'plan=shougong123&unit=zhaopinwang&keyword=zhaopinwang', '', '', '', '0', '1536906732', '', '');
INSERT INTO `guestbook` VALUES ('3424', '姚玉', '13353750872', 'plan=2&unit=zhaopinzhaopin&keyword=zhaopinzhaopin', '', '', '', '0', '1536907209', '', '');
INSERT INTO `guestbook` VALUES ('3425', '黄丽兰', '13539731687', 'plan=ceshi1&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1536907633', '', '');
INSERT INTO `guestbook` VALUES ('3426', '杨霞', '13783326267', 'plan=A1&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1536907682', '', '');
INSERT INTO `guestbook` VALUES ('3427', '马睿雨', '18652496786', 'plan=B1&unit=zuanshihuahuishou&keyword=zuanshihuahuishou', '', '', '', '0', '1536907917', '', '');
INSERT INTO `guestbook` VALUES ('3428', '张瑛', '13879316844', 'plan=2&unit=zhaopinzhaopin&keyword=zhaopinzhaopin', '', '', '', '0', '1536908041', '', '');
INSERT INTO `guestbook` VALUES ('3429', '徐欣怡', '18645806900', 'plan=4&unit=shougonghuochuanzhu&keyword=shougonghuochuanzhu', '', '', '', '0', '1536909139', '', '');
INSERT INTO `guestbook` VALUES ('3430', '曹合勤', '15117196638', 'plan=5&unit=zhaopinxinxi&keyword=zhaopinxinxi', '', '', '', '0', '1536909246', '', '');
INSERT INTO `guestbook` VALUES ('3431', '曾先生', '18073346889', 'plan=shougong123&unit=zhaogongchang&keyword=zhaogongchang', '', '', '', '0', '1536909489', '', '');
INSERT INTO `guestbook` VALUES ('3432', '岳桃云', '15084790757', 'plan=shougong123&unit=xunzhaoshougonghuo&keyword=xunzhaoshougonghuo', '', '', '', '0', '1536910087', '', '');
INSERT INTO `guestbook` VALUES ('3433', '李三秀', '18824496394', 'plan=pinpaici&unit=pugongzhaogong&keyword=pugongzhaogong', '', '', '', '0', '1536910403', '', '');
INSERT INTO `guestbook` VALUES ('3434', '顾启亮', '15305391653', 'plan=7&unit=zhifuxiaojiqi&keyword=zhifuxiaojiqi', '', '', '', '0', '1536910479', '', '');
INSERT INTO `guestbook` VALUES ('3435', '叶桂芬', '13663254843', 'plan=D&unit=fuzhuangwaifajiagong&keyword=fuzhuangwaifajiagong', '', '', '', '0', '1536910499', '', '');
INSERT INTO `guestbook` VALUES ('3436', '肖宏智', '15115446936', 'plan=shougonghuo&unit=jiagongchang&keyword=jiagongchang', '', '', '', '0', '1536910953', '', '');
INSERT INTO `guestbook` VALUES ('3437', '任彩霞', '13140491586', 'plan=B1&unit=fuzhuangwaifajiagong&keyword=fuzhuangwaifajiagong', '', '', '', '0', '1536911156', '', '');
INSERT INTO `guestbook` VALUES ('3438', '田凤印', '15953407813', 'plan=zhong1&unit=shougongzhijia&keyword=shougongzhijia', '', '', '', '0', '1536911914', '', '');
INSERT INTO `guestbook` VALUES ('3439', '袁树刚', '13151223926', 'plan=7&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536911915', '', '');
INSERT INTO `guestbook` VALUES ('3440', '马孝富', '13759814276', 'plan=zhong3&unit=canjirenzhaogong&keyword=canjirenzhaogong', '', '', '', '0', '1536912011', '', '');
INSERT INTO `guestbook` VALUES ('3441', '何兆江', '18973107106', 'plan=6&unit=linghuo&keyword=linghuo', '', '', '', '0', '1536912155', '', '');
INSERT INTO `guestbook` VALUES ('3442', '高才会', '17858752748', 'plan=3&unit=58tongchengzhaogongzuo&keyword=58tongchengzhaogongzuo', '', '', '', '0', '1536912688', '', '');
INSERT INTO `guestbook` VALUES ('3443', '辛可新', '13083686802', 'plan=zhutui1&unit=honganxiuhuaxiedian&keyword=honganxiuhuaxiedian', '', '', '', '0', '1536913831', '', '');
INSERT INTO `guestbook` VALUES ('3444', '杨茂红', '15564846877', 'plan=5&unit=shougonghuojianzhi&keyword=shougonghuojianzhi', '', '', '', '0', '1536914750', '', '');
INSERT INTO `guestbook` VALUES ('3445', '樊吉斌', '18489180160', 'plan=5&unit=zaijiashougonghuojianzhi&keyword=zaijiashougonghuojianzhi', '', '', '', '0', '1536915170', '', '');
INSERT INTO `guestbook` VALUES ('3446', '张林欣', '17737282603', 'plan=4&unit=shougonghuochuanzhu&keyword=shougonghuochuanzhu', '', '', '', '0', '1536915786', '', '');
INSERT INTO `guestbook` VALUES ('3447', '苟智容', '13728342060', 'plan=zhutui1&unit=honganxiuhuaxiedian&keyword=honganxiuhuaxiedian', '', '', '', '0', '1536915928', '', '');
INSERT INTO `guestbook` VALUES ('3448', '毛祥汉', '15859925326', 'plan=1&unit=daijiagongxiangmu&keyword=daijiagongxiangmu', '', '', '', '0', '1536916160', '', '');
INSERT INTO `guestbook` VALUES ('3449', '张华', '13869712233', 'plan=B1&unit=dianzijiagongwaifa&keyword=dianzijiagongwaifa', '', '', '', '0', '1536916201', '', '');
INSERT INTO `guestbook` VALUES ('3450', '潘健霞', '15822352279', 'plan=ceshi2&unit=fuzhuangchangzhaogong&keyword=fuzhuangchangzhaogong', '', '', '', '0', '1536916212', '', '');
INSERT INTO `guestbook` VALUES ('3451', '张小峰', '15856875846', 'plan=shougong123&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536916826', '', '');
INSERT INTO `guestbook` VALUES ('3452', '周小林', '15120530722', 'plan=C1&unit=jiagong&keyword=jiagong', '', '', '', '0', '1536917099', '', '');
INSERT INTO `guestbook` VALUES ('3453', '黄丽云', '15959973181', 'plan=3&unit=zaijiashougongjiagonghuo&keyword=zaijiashougongjiagonghuo', '', '', '', '0', '1536917381', '', '');
INSERT INTO `guestbook` VALUES ('3454', '邓红杏', '15289620876', 'plan=shougong31111111111&unit=zhaoshougonghuozaijiazuo&keyword=zhaoshougonghuozaijiazuo', '', '', '', '0', '1536917455', '', '');
INSERT INTO `guestbook` VALUES ('3455', '邱贝贝', '15305286980', 'plan=C1&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536920136', '', '');
INSERT INTO `guestbook` VALUES ('3456', '夏华锋', '13297527876', 'plan=ceshi1&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1536920624', '', '');
INSERT INTO `guestbook` VALUES ('3457', '沈新', '13567253982', 'plan=5&unit=zhaopinzhaopin&keyword=zhaopinzhaopin', '', '', '', '0', '1536920626', '', '');
INSERT INTO `guestbook` VALUES ('3458', '小刘', '15898926858', 'plan=1&unit=waifajiagong&keyword=waifajiagong', '', '', '', '0', '1536920627', '', '');
INSERT INTO `guestbook` VALUES ('3459', '姚政先', '18894779488', 'plan=C1&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536920703', '', '');
INSERT INTO `guestbook` VALUES ('3460', '胡卫红', '15623113709', 'plan=shougong123&unit=benrenjizhaoyimingzhongdiangong&keyword=benrenjizhaoyimingzhongdiangong', '', '', '', '0', '1536921007', '', '');
INSERT INTO `guestbook` VALUES ('3461', '蔡燕', '18270418334', 'plan=zhutui1&unit=shougonghuojiagongshizhendema&keyword=shougonghuojiagongshizhendema', '', '', '', '0', '1536921062', '', '');
INSERT INTO `guestbook` VALUES ('3462', '吴李银', '13285561572', 'plan=ceshi2&unit=jintianzhaogongxinxi&keyword=jintianzhaogongxinxi', '', '', '', '0', '1536921140', '', '');
INSERT INTO `guestbook` VALUES ('3463', '张女', '13988818162', 'plan=7&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1536921200', '', '');
INSERT INTO `guestbook` VALUES ('3464', '计亚周', '18822225474', 'plan=shougong31111111111&unit=shougonghuojiagongnaliyou&keyword=shougonghuojiagongnaliyou', '', '', '', '0', '1536921723', '', '');
INSERT INTO `guestbook` VALUES ('3465', '耿庆芳', '18816169530', 'plan=zhutui1&unit=zaijiakaijiagongchang&keyword=zaijiakaijiagongchang', '', '', '', '0', '1536921836', '', '');
INSERT INTO `guestbook` VALUES ('3466', '杨石英', '15084734802', 'plan=C1&unit=chuanzhuzideshougonghuo&keyword=chuanzhuzideshougonghuo', '', '', '', '0', '1536921879', '', '');
INSERT INTO `guestbook` VALUES ('3467', '高艳芳', '13572737460', 'plan=zhuanqian3&unit=fujinmianfeishougonghuonahuijia&keyword=fujinmianfeishougonghuonahuijia', '', '', '', '0', '1536921945', '', '');
INSERT INTO `guestbook` VALUES ('3468', '王玲霞', '13812305393', 'plan=7&unit=shougonghuobujiaoyajin&keyword=shougonghuobujiaoyajin', '', '', '', '0', '1536921960', '', '');
INSERT INTO `guestbook` VALUES ('3469', '丁丁', '15979382053', 'plan=B1&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536922400', '', '');
INSERT INTO `guestbook` VALUES ('3470', '周丽君', '13958701185', 'plan=2&unit=rencaishichangzhaopin&keyword=rencaishichangzhaopin', '', '', '', '0', '1536922934', '', '');
INSERT INTO `guestbook` VALUES ('3471', '林女士', '17798330450', 'plan=7&unit=fuzhuangwaifajiagong&keyword=fuzhuangwaifajiagong', '', '', '', '0', '1536923669', '', '');
INSERT INTO `guestbook` VALUES ('3472', '余红艳', '15007278631', 'plan=1&unit=shougonghuo&keyword=shougonghuo', '', '', '', '0', '1536923690', '', '');
INSERT INTO `guestbook` VALUES ('3473', '吴晓玲', '18239870510', 'plan=A&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536923759', '', '');
INSERT INTO `guestbook` VALUES ('3474', '靳光营', '15294886526', 'plan=3&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536923791', '', '');
INSERT INTO `guestbook` VALUES ('3475', '崔小兵', '13783709622', 'plan=E&unit=dianzichangshougonghuowaifa&keyword=dianzichangshougonghuowaifa', '', '', '', '0', '1536924323', '', '');
INSERT INTO `guestbook` VALUES ('3476', '李萍', '18025402175', 'plan=C1&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1536924413', '', '');
INSERT INTO `guestbook` VALUES ('3477', '董女士', '15297019689', 'plan=5&unit=zhaopinxiaoshigong&keyword=zhaopinxiaoshigong', '', '', '', '0', '1536924959', '', '');
INSERT INTO `guestbook` VALUES ('3478', '孙美霞', '13353639905', 'plan=D&unit=fujinzhaogongzuo&keyword=fujinzhaogongzuo', '', '', '', '0', '1536925031', '', '');
INSERT INTO `guestbook` VALUES ('3479', '朱祥', '13709546910', 'plan=7&unit=gongchangzhaogong&keyword=gongchangzhaogong', '', '', '', '0', '1536925263', '', '');
INSERT INTO `guestbook` VALUES ('3480', '卢静', '18972483588', 'plan=shougong12311111111&unit=changzhaogong&keyword=changzhaogong', '', '', '', '0', '1536925360', '', '');
INSERT INTO `guestbook` VALUES ('3481', '赵永义', '13991527673', 'plan=shougong123&unit=pugongzhaogong&keyword=pugongzhaogong', '', '', '', '0', '1536925484', '', '');
INSERT INTO `guestbook` VALUES ('3482', '褚海敏', '15167632858', 'plan=5&unit=shougonghuo&keyword=shougonghuo', '', '', '', '0', '1536925607', '', '');
INSERT INTO `guestbook` VALUES ('3483', '周君', '15251463523', 'plan=6&unit=linghuo&keyword=linghuo', '', '', '', '0', '1536925625', '', '');
INSERT INTO `guestbook` VALUES ('3484', '胡倩倩', '18339280243', 'plan=ceshi1&unit=bendizhaogong&keyword=bendizhaogong', '', '', '', '0', '1536925642', '', '');
INSERT INTO `guestbook` VALUES ('3485', '孙悦', '14762519823', 'plan=D1&unit=zuanshihuashizixiu&keyword=zuanshihuashizixiu', '', '', '', '0', '1536925766', '', '');
INSERT INTO `guestbook` VALUES ('3486', '饶志敏', '15270551206', 'plan=wuyajinci&unit=chuanzhushougonghuo&keyword=chuanzhushougonghuo', '', '', '', '0', '1536927059', '', '');
INSERT INTO `guestbook` VALUES ('3487', '谭谭', '13214349606', 'plan=ceshi1&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1536927348', '', '');
INSERT INTO `guestbook` VALUES ('3488', '袁顺平', '18748550234', 'plan=C1&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536927811', '', '');
INSERT INTO `guestbook` VALUES ('3489', '王也', '15562062822', 'plan=7&unit=zhifuxiaojiqi&keyword=zhifuxiaojiqi', '', '', '', '0', '1536928043', '', '');
INSERT INTO `guestbook` VALUES ('3490', '刘照宇', '13581371357', 'plan=B1&unit=fujinzhaogong&keyword=fujinzhaogong', '', '', '', '0', '1536928182', '', '');
INSERT INTO `guestbook` VALUES ('3491', '李灵霞', '18236173643', 'plan=5&unit=zaijiajianzhizuoshougonghuo&keyword=zaijiajianzhizuoshougonghuo', '', '', '', '0', '1536928235', '', '');
INSERT INTO `guestbook` VALUES ('3492', '李宝春', '15971350887', 'plan=C1&unit=dianzichangzhaogong&keyword=dianzichangzhaogong', '', '', '', '0', '1536929210', '', '');
INSERT INTO `guestbook` VALUES ('3493', '朱海燕', '18915801892', 'plan=2&unit=zhaopinxinxi&keyword=zhaopinxinxi', '', '', '', '0', '1536929731', '', '');
INSERT INTO `guestbook` VALUES ('3494', '李春红', '13180695097', 'plan=zhuanqian2&unit=wuyajinshougonghuojiagong&keyword=wuyajinshougonghuojiagong', '', '', '', '0', '1536929973', '', '');
INSERT INTO `guestbook` VALUES ('3495', '颜新连', '15327091196', 'plan=zhuanqian3&unit=zhaoshougonghuozaijiazuo&keyword=zhaoshougonghuozaijiazuo', '', '', '', '0', '1536930024', '', '');
INSERT INTO `guestbook` VALUES ('3496', '张菊艳', '13624536090', 'plan=ceshi1&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1536930090', '', '');
INSERT INTO `guestbook` VALUES ('3497', '罗旭登', '18573734688', 'plan=3&unit=jiagong&keyword=jiagong', '', '', '', '0', '1536930728', '', '');
INSERT INTO `guestbook` VALUES ('3498', '张勇', '17305155100', 'plan=1&unit=waifajiagong&keyword=waifajiagong', '', '', '', '0', '1536970303', '', '');
INSERT INTO `guestbook` VALUES ('3499', '李秋玲', '13949669224', 'plan=3&unit=zaijiashougongjiagong&keyword=zaijiashougongjiagong', '', '', '', '0', '1536970612', '', '');
INSERT INTO `guestbook` VALUES ('3500', '张红梅', '13935295805', 'plan=C1&unit=shougongchuanzhuwaifajiagong&keyword=shougongchuanzhuwaifajiagong', '', '', '', '0', '1536970675', '', '');
INSERT INTO `guestbook` VALUES ('3501', '张立南', '13324163777', 'plan=5&unit=shougongjiagong&keyword=shougongjiagong', '', '', '', '0', '1536970827', '', '');
INSERT INTO `guestbook` VALUES ('3502', '李宁', '13942528580', 'plan=zhuanqian4&unit=shougonghuojiagongwuyajinwaifang&keyword=shougonghuojiagongwuyajinwaifang', '', '', '', '0', '1536971415', '', '');
INSERT INTO `guestbook` VALUES ('3503', '周小东', '15985022154', 'plan=B1&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1536972375', '', '');
INSERT INTO `guestbook` VALUES ('3504', '刘树立', '18164119319', 'plan=2&unit=rencaishichangzhaopin&keyword=rencaishichangzhaopin', '', '', '', '0', '1536972720', '', '');
INSERT INTO `guestbook` VALUES ('3505', '余秀伦', '18871976898', 'plan=3&unit=gongzuo&keyword=gongzuo', '', '', '', '0', '1536972821', '', '');
INSERT INTO `guestbook` VALUES ('3506', '紫云妈', '18250759566', 'plan=2&unit=baixingrencaiwangzhaopinxinxi&keyword=baixingrencaiwangzhaopinxinxi', '', '', '', '0', '1536972893', '', '');
INSERT INTO `guestbook` VALUES ('3507', '马文革', '15562539958', 'plan=5&unit=linshigongzhaopin&keyword=linshigongzhaopin', '', '', '', '0', '1536974398', '', '');
INSERT INTO `guestbook` VALUES ('3509', '赵帅', '13676901511', 'plan=6&unit=wanyuanxiaoshengyi&keyword=wanyuanxiaoshengyi', '', '', '', '0', '1536977702', '', '');
INSERT INTO `guestbook` VALUES ('3510', '晓晓', '18751232619', 'plan=4&unit=jiagong&keyword=jiagong', '', '', '', '0', '1536978078', '', '');
INSERT INTO `guestbook` VALUES ('3511', '谭顺华', '13673412649', 'plan=3&unit=fujinnalizhaogong&keyword=fujinnalizhaogong', '', '', '', '0', '1536978972', '', '');
INSERT INTO `guestbook` VALUES ('3512', '吴绍珍', '13141600228', 'plan=shougong12311111111&unit=58tongcheng&keyword=58tongcheng', '', '', '', '0', '1536979375', '', '');
INSERT INTO `guestbook` VALUES ('3513', '赵军军', '13133436506', 'plan=3&unit=wangshangzhaogongzuo&keyword=wangshangzhaogongzuo', '', '', '', '0', '1536981499', '', '');
INSERT INTO `guestbook` VALUES ('3514', '李忠芬', '18855967599', 'plan=zhong3&unit=canjirenzhaogong&keyword=canjirenzhaogong', '', '', '', '0', '1536981915', '', '');
INSERT INTO `guestbook` VALUES ('3515', '赵可柏', '18949521667', 'plan=zhong3&unit=canjirenzhaogong&keyword=canjirenzhaogong', '', '', '', '0', '1536982616', '', '');
INSERT INTO `guestbook` VALUES ('3516', '张凡', '15064209062', 'plan=2&unit=rencaizhaopinwang&keyword=rencaizhaopinwang', '', '', '', '0', '1536982960', '', '');
INSERT INTO `guestbook` VALUES ('3517', '王娟', '15293964009', 'plan=5&unit=xiaoshougong&keyword=xiaoshougong', '', '', '', '0', '1536983412', '', '');
INSERT INTO `guestbook` VALUES ('3518', '毛伟', '13746482293', 'plan=shougong12311111111&unit=zhaogongchang&keyword=zhaogongchang', '', '', '', '0', '1536986759', '', '');
INSERT INTO `guestbook` VALUES ('3519', '王亚', '15050043609', 'plan=3&unit=xiaoshigong&keyword=xiaoshigong', '', '', '', '0', '1536987330', '', '');
INSERT INTO `guestbook` VALUES ('3520', '孙靑云', '13074090128', 'plan=6&unit=zaifujinzhaogongzuo&keyword=zaifujinzhaogongzuo', '', '', '', '0', '1536987543', '', '');
INSERT INTO `guestbook` VALUES ('3521', '郑杰', '13160285167', 'plan=zhuanqian4&unit=chuanzhuzishougonghuo&keyword=chuanzhuzishougonghuo', '', '', '', '0', '1536989048', '', '');
INSERT INTO `guestbook` VALUES ('3522', '王启才', '15866954481', 'plan=5&unit=shougonghuozhaopin&keyword=shougonghuozhaopin', '', '', '', '0', '1536991887', '', '');
INSERT INTO `guestbook` VALUES ('3523', '绿叶', '13031780654', 'plan=4&unit=xiaoshigong&keyword=xiaoshigong', '', '', '', '0', '1536992036', '', '');
INSERT INTO `guestbook` VALUES ('3524', '吕小红', '18767523966', 'plan=6&unit=chuanzhuzi&keyword=chuanzhuzi', '', '', '', '0', '1536992078', '', '');
INSERT INTO `guestbook` VALUES ('3525', '叶先生', '13812402113', 'plan=5&unit=fujinzhaopin&keyword=fujinzhaopin', '', '', '', '0', '1536993897', '', '');
INSERT INTO `guestbook` VALUES ('3526', '郭伊博', '17629713178', 'plan=1&unit=jiagong&keyword=jiagong', '', '', '', '0', '1536996047', '', '');
INSERT INTO `guestbook` VALUES ('3527', '彭耀文', '15273383131', 'plan=1&unit=daijiagongxiangmu&keyword=daijiagongxiangmu', '', '', '', '0', '1536998532', '', '');
INSERT INTO `guestbook` VALUES ('3528', '徐冬梅', '13793230062', 'plan=shougong12311111111&unit=benrenjizhaoyimingzhongdiangong&keyword=benrenjizhaoyimingzhongdiangong', '', '', '', '0', '1537001407', '', '');
INSERT INTO `guestbook` VALUES ('3529', '徐世兰', '13793230062', 'plan=shougong12311111111&unit=benrenjizhaoyimingzhongdiangong&keyword=benrenjizhaoyimingzhongdiangong', '', '', '', '0', '1537001598', '', '');
INSERT INTO `guestbook` VALUES ('3530', '李颖', '15850107723', 'plan=zhuanqian2&unit=xiutaowaifajiagong&keyword=xiutaowaifajiagong', '', '', '', '0', '1537003712', '', '');
INSERT INTO `guestbook` VALUES ('3531', '欧阳', '18821800688', 'plan=7&unit=shougonghuobujiaoyajin&keyword=shougonghuobujiaoyajin', '', '', '', '0', '1537056323', '', '');
INSERT INTO `guestbook` VALUES ('3532', '吴琼', '13273839200', 'plan=B1&unit=zuanshihuadaijiagong&keyword=zuanshihuadaijiagong', '', '', '', '0', '1537056596', '', '');
INSERT INTO `guestbook` VALUES ('3533', '白利群', '13884334895', 'plan=B&unit=qiushougongjiagong&keyword=qiushougongjiagong', '', '', '', '0', '1537057003', '', '');
INSERT INTO `guestbook` VALUES ('3534', '郭振满', '13803795110', 'plan=7&unit=shougonghuozaijia&keyword=shougonghuozaijia', '', '', '', '0', '1537057742', '', '');
INSERT INTO `guestbook` VALUES ('3535', '王学会', '18365206309', 'plan=6&unit=fujinyoushougonghuonahuijiazuo&keyword=fujinyoushougonghuonahuijiazuo', '', '', '', '0', '1537057827', '', '');
INSERT INTO `guestbook` VALUES ('3536', '李荣方', '13956895199', 'plan=4&unit=jiagong&keyword=jiagong', '', '', '', '0', '1537058049', '', '');
INSERT INTO `guestbook` VALUES ('3537', '周玉兰', '13812243020', 'plan=A&unit=chuanzhuzideshougonghuo&keyword=chuanzhuzideshougonghuo', '', '', '', '0', '1537058196', '', '');
INSERT INTO `guestbook` VALUES ('3538', '张志娟', '17081905547', 'plan=3&unit=zaijiazuodeshougonghuo&keyword=zaijiazuodeshougonghuo', '', '', '', '0', '1537058289', '', '');
INSERT INTO `guestbook` VALUES ('3539', '黄安花', '13866989475', 'plan=ceshi2&unit=zhaogongzuo&keyword=zhaogongzuo', '', '', '', '0', '1537058434', '', '');
INSERT INTO `guestbook` VALUES ('3540', '王友明', '13958373843', 'plan=ceshi1&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1537059493', '', '');
INSERT INTO `guestbook` VALUES ('3541', '周德芳', '13782958989', 'plan=wuyajinci1&unit=nahuijiadeshougonghuo&keyword=nahuijiadeshougonghuo', '', '', '', '0', '1537061041', '', '');
INSERT INTO `guestbook` VALUES ('3542', '刘彬', '15638075683', 'plan=7&unit=gongchangzhaogong&keyword=gongchangzhaogong', '', '', '', '0', '1537061219', '', '');
INSERT INTO `guestbook` VALUES ('3543', '紫想', '17631642902', 'plan=1&unit=chuanzhushougonghuo&keyword=chuanzhushougonghuo', '', '', '', '0', '1537062164', '', '');
INSERT INTO `guestbook` VALUES ('3544', '党松峰', '13082598393', 'plan=3&unit=gongchangzhaogong&keyword=gongchangzhaogong', '', '', '', '0', '1537063450', '', '');
INSERT INTO `guestbook` VALUES ('3545', '孟滟林', '13573525273', 'plan=ceshi1&unit=zhaogong&keyword=zhaogong', '', '', '', '0', '1537064484', '', '');
INSERT INTO `guestbook` VALUES ('3546', '周英', '13648189603', 'plan=2&unit=zhaopinwangzhaogongzuo&keyword=zhaopinwangzhaogongzuo', '', '', '', '0', '1537066260', '', '');
INSERT INTO `guestbook` VALUES ('3547', '杨凤', '18385116491', 'plan=C&unit=chuanzhuzideshougonghuo&keyword=chuanzhuzideshougonghuo', '', '', '', '0', '1537066818', '', '');
INSERT INTO `guestbook` VALUES ('3548', '杨凤', '18385116491', 'plan=C&unit=chuanzhuzideshougonghuo&keyword=chuanzhuzideshougonghuo', '', '', '', '0', '1537066829', '', '');
INSERT INTO `guestbook` VALUES ('3549', '徐慧', '18658155119', 'plan=zhong2&unit=xunqiulailiaojiagong&keyword=xunqiulailiaojiagong', '', '', '', '0', '1537067257', '', '');
INSERT INTO `guestbook` VALUES ('3550', '李利利', '18681998615', 'plan=shougong123&unit=pugongzhaopin&keyword=pugongzhaopin', '', '', '', '0', '1537068259', '', '');
INSERT INTO `guestbook` VALUES ('3551', '马婷婷', '15807270480', 'plan=ceshi2&unit=fuzhuangchangzhaogong&keyword=fuzhuangchangzhaogong', '', '', '', '0', '1537069517', '', '');
INSERT INTO `guestbook` VALUES ('3552', '马婷婷', '15807270480', 'plan=ceshi2&unit=fuzhuangchangzhaogong&keyword=fuzhuangchangzhaogong', '', '', '', '0', '1537069586', '', '');
INSERT INTO `guestbook` VALUES ('3553', '彭莲', '13535563971', 'plan=shougong123&unit=zhaopinwang&keyword=zhaopinwang', '', '', '', '0', '1537069647', '', '');
INSERT INTO `guestbook` VALUES ('3554', '陈秀琼', '13883665295', 'plan=ceshi1&unit=zhaogongxinxi&keyword=zhaogongxinxi', '', '', '', '0', '1537069841', '', '');
INSERT INTO `guestbook` VALUES ('3555', '郑效远', '15105863971', 'plan=C&unit=zhaogongzuoxinxi&keyword=zhaogongzuoxinxi', '', '', '', '0', '1537070041', '', '');
INSERT INTO `guestbook` VALUES ('3556', '张虹', '15083635177', 'plan=zhong3&unit=canjirenzhaogong&keyword=canjirenzhaogong', '', '', '', '0', '1537070182', '', '');
INSERT INTO `guestbook` VALUES ('3557', '还芳', '13952413711', 'plan=3&unit=zhaogongpugong&keyword=zhaogongpugong', '', '', '', '0', '1537071023', '', '');
INSERT INTO `guestbook` VALUES ('3558', '刘连春', '17771731781', 'plan=C&unit=zhaogongzuoxinxi&keyword=zhaogongzuoxinxi', '', '', '', '0', '1537072316', '', '');
INSERT INTO `guestbook` VALUES ('3559', '胡绍义', '15180391210', 'plan=shougong12311111111&unit=zuixinzhaopinxinxi&keyword=zuixinzhaopinxinxi', '', '', '', '0', '1537073477', '', '');
INSERT INTO `guestbook` VALUES ('3560', '刘春霞', '15308809035', 'plan=2&unit=zaijiajianzhishougonghuo&keyword=zaijiajianzhishougonghuo', '', '', '', '0', '1537074136', '', '');
INSERT INTO `guestbook` VALUES ('3561', '肖芬连', '18153309806', 'plan=7&unit=gongzuo&keyword=gongzuo', '', '', '', '0', '1537074228', '', '');
INSERT INTO `guestbook` VALUES ('3562', '肖芬连', '18153309806', 'plan=7&unit=gongzuo&keyword=gongzuo', '', '', '', '0', '1537074404', '', '');
INSERT INTO `guestbook` VALUES ('3563', '周建国', '15242546567', 'plan=1&unit=woxiangzhaogongzuo&keyword=woxiangzhaogongzuo', '', '', '', '0', '1537074810', '', '');
INSERT INTO `guestbook` VALUES ('3564', '赵玉霞', '18786888407', 'plan=3&unit=dianzichangzhaogong&keyword=dianzichangzhaogong', '', '', '', '0', '1537075162', '', '');
INSERT INTO `guestbook` VALUES ('3565', '阿木', '18481513156', 'plan=ceshi2&unit=fuzhuangchangzhaogong&keyword=fuzhuangchangzhaogong', '', '', '', '0', '1537075763', '', '');

-- ----------------------------
-- Table structure for `info`
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `phone` varchar(255) NOT NULL COMMENT '联系电话',
  `datetime` int(11) NOT NULL COMMENT '编辑时间',
  `custid` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', '18027174649', '1536906660', '102391', '');
INSERT INTO `info` VALUES ('3', '1', '1515337499', '102381', '');
INSERT INTO `info` VALUES ('2', '18702703525', '1515155727', '102388', '(function() {var _53code = document.createElement(&amp;quot;script&amp;quot;);_53code.src = &amp;quot;https://tb.53kf.com/code/code/10167625/1&amp;nbsp; &amp;quot;;var s = document.getElementsByTagName(&amp;quot;script&amp;quot;)[0]; s.parentNode.insertBefore(_53code, s);})();');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `datetime` int(11) NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'c6370d6089bc9b3f393b6e66266d9274', '1536316867');
