/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : meeage

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2017-08-14 01:52:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mes_admin
-- ----------------------------
DROP TABLE IF EXISTS `mes_admin`;
CREATE TABLE `mes_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(30) NOT NULL COMMENT '管理员名字',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mes_admin
-- ----------------------------
INSERT INTO `mes_admin` VALUES ('1', 'kenuo', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for mes_info
-- ----------------------------
DROP TABLE IF EXISTS `mes_info`;
CREATE TABLE `mes_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(60) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `addtime` varchar(20) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mes_info
-- ----------------------------
INSERT INTO `mes_info` VALUES ('10', '罗阳是傻逼', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.12 23:12:38');
INSERT INTO `mes_info` VALUES ('11', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016-07-10');
INSERT INTO `mes_info` VALUES ('12', '习近平：坚定不移推进供给侧结构性改革', '习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革', '2016-07-10');
INSERT INTO `mes_info` VALUES ('13', '习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革', '习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革习近平：坚定不移推进供给侧结构性改革', '2016-07-10');
INSERT INTO `mes_info` VALUES ('15', '习近平：用重大改革举措落地增强信心', '习近平主持召开经济形势专家座谈会强调\r\n坚定信心增强定力 坚定不移推进供给侧结构性改革\r\n张高丽出席\r\n新华社北京7月8日电 中共中央总书记、国家主席、中央军委主席习近平7月8日上午在京主持召开经济形势专家座谈会，就当前经济形势和经济工作听取专家学者意见和建议，并发表了重要讲话。\r\n中共中央政治局常委、国务院副总理张高丽出席座谈会。', '2016-07-10');
INSERT INTO `mes_info` VALUES ('16', '尼伯特致莆田多座民宅倒塌啊啊', '受“尼伯特”外围影响，莆田遭遇大暴雨袭击，7月8日到9日6点降雨量达到250毫米以上，目前已致多栋房屋倒塌。', '2016.07.11 03:03:12');
INSERT INTO `mes_info` VALUES ('17', '女记者播报雨情被浇透:不断提醒市民注意安全', '图为当地两名记者在近齐腰深的积水中报道，浑身被大雨浇得湿透，不断提醒市民出门小心。图为当地两名记者在近齐腰深的积水中报道，浑身被大雨浇得湿透，不断提醒市民出门小心。图为当地两名记者在近齐腰深的积水中报道，浑身被大雨浇得湿透，不断提醒市民出门小心。', '2016-07-10');
INSERT INTO `mes_info` VALUES ('18', '习近平2016年上半年调研凸显改革创新两大主线', '中新社北京7月9日电 (记者 梁晓辉)全面深化改革，是决定当代中国命运的“关键一招”；创新发展，是引领中国发展的第一动力。在“十三五”规划开局之年进入下半程时，回顾中共中央总书记、国家主席习近平2016年上半年的调研路径和系列讲话，人们可以清晰看到改革和创新这两条贯穿始终的主线。', '2016-07-10');
INSERT INTO `mes_info` VALUES ('19', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '中新社北京7月9日电 (记者 梁晓辉)全面深化改革，是决定当代中国命运的“关键一招”；创新发展，是引领中国发展的第一动力。在“十三五”规划开局之年进入下半程时，回顾中共中央总书记、国家主席习近平2016年上半年的调研路径和系列讲话，人们可以清晰看到改革和创新这两条贯穿始终的主线。', '2016-07-10');
INSERT INTO `mes_info` VALUES ('21', '薛尧是学霸', '薛尧是学霸薛尧是学霸', '2016.07.11 03.48.44');
INSERT INTO `mes_info` VALUES ('23', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.01');
INSERT INTO `mes_info` VALUES ('24', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.06');
INSERT INTO `mes_info` VALUES ('25', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.19');
INSERT INTO `mes_info` VALUES ('26', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.29');
INSERT INTO `mes_info` VALUES ('27', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.34');
INSERT INTO `mes_info` VALUES ('28', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.39');
INSERT INTO `mes_info` VALUES ('62', 'aaa', 'aaa', '2016-08-14');
INSERT INTO `mes_info` VALUES ('63', 'aaa', 'aaa', '2017-08-14');
INSERT INTO `mes_info` VALUES ('30', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.03.51');
INSERT INTO `mes_info` VALUES ('31', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.00');
INSERT INTO `mes_info` VALUES ('32', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.17');
INSERT INTO `mes_info` VALUES ('33', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.22');
INSERT INTO `mes_info` VALUES ('34', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.26');
INSERT INTO `mes_info` VALUES ('35', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.31');
INSERT INTO `mes_info` VALUES ('36', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.35');
INSERT INTO `mes_info` VALUES ('37', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全女记者穿睡衣报雨情被浇透:不断提醒市民注意安全', '2016.07.11 07.04.40');
INSERT INTO `mes_info` VALUES ('38', '啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '2016-07-11');
INSERT INTO `mes_info` VALUES ('39', '罗阳是傻逼', '罗阳是傻逼', '2016-07-11');
INSERT INTO `mes_info` VALUES ('40', '罗阳是傻逼', 'aaaa', '2016-07-11');
INSERT INTO `mes_info` VALUES ('52', '&lt;html&gt;&lt;font style=&quot;color:red&quot;&gt;&aring;?', '&lt;html&gt;&lt;font style=&quot;color:red&quot;&gt;&aring;??&aring;??&lt;/font&gt;&lt;/html&gt;&lt;html&gt;&lt;font style=&quot;color:red&quot;&gt;&aring;??&aring;??&lt;/font&gt;&lt;/html&gt;', '2016-07-12');
INSERT INTO `mes_info` VALUES ('53', 'hahahahahah&lt;a href=&quot;www.baidu.com&quot;&gt;fhsdfasdf', 'hahahahahah&lt;a href=&quot;www.baidu.com&quot;&gt;fhsdfasdf&lt;/a&gt;;dfsdfsdfsd', '2016-07-12');
INSERT INTO `mes_info` VALUES ('54', '&egrave;&iquest;?&aelig;?&macr;&auml;&raquo;?&auml;&sup1;?&c', '&iuml;&frac14;?', '2016-07-13');
INSERT INTO `mes_info` VALUES ('55', 'aaa', 'aaaaaaaaaaaaaaaaaa', '2016.08.03 12.47.35');
INSERT INTO `mes_info` VALUES ('56', 'adfminaa', 'aaaaa', '2016.08.03 12.49.43');
INSERT INTO `mes_info` VALUES ('57', 'aaaa', 'aaaa', '2016.08.03 12.50.41');
INSERT INTO `mes_info` VALUES ('58', '&lt;a href=&quot;www.baidu.com&quot;&gt;haha &lt;/a&gt;', '&lt;a href=&quot;www.baidu.com&quot;&gt;haha &lt;/a&gt;&lt;a href=&quot;www.baidu.com&quot;&gt;haha &lt;/a&gt;&lt;a href=&quot;www.baidu.com&quot;&gt;haha &lt;/a&gt;&lt;a href=&quot;www.baidu.com&quot;&gt;haha &lt;/a&gt;', '2016-08-14');
INSERT INTO `mes_info` VALUES ('59', '你他妈是不是傻!', '验证码有用么', '2016-08-14');
INSERT INTO `mes_info` VALUES ('60', '你他妈是不是傻!', '验证码有用么', '2016-08-14');
INSERT INTO `mes_info` VALUES ('61', 'aaa', 'aaa', '2016-08-14');
