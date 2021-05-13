/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : evan23_gem

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-05-07 02:30:20
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ci_activity_log`
-- ----------------------------
DROP TABLE IF EXISTS `ci_activity_log`;
CREATE TABLE `ci_activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1027 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_activity_log
-- ----------------------------
INSERT INTO `ci_activity_log` VALUES ('1', '4', '3', '2021-01-11 22:24:35');
INSERT INTO `ci_activity_log` VALUES ('2', '5', '3', '2021-01-11 22:51:58');
INSERT INTO `ci_activity_log` VALUES ('3', '4', '3', '2021-01-11 22:52:42');
INSERT INTO `ci_activity_log` VALUES ('4', '4', '3', '2021-01-12 07:18:02');
INSERT INTO `ci_activity_log` VALUES ('5', '4', '3', '2021-01-12 14:32:49');
INSERT INTO `ci_activity_log` VALUES ('6', '5', '3', '2021-01-12 14:57:45');
INSERT INTO `ci_activity_log` VALUES ('7', '4', '3', '2021-01-12 20:32:39');
INSERT INTO `ci_activity_log` VALUES ('8', '4', '3', '2021-01-14 21:36:35');
INSERT INTO `ci_activity_log` VALUES ('9', '5', '3', '2021-01-14 21:36:50');
INSERT INTO `ci_activity_log` VALUES ('10', '4', '3', '2021-01-17 13:44:13');
INSERT INTO `ci_activity_log` VALUES ('11', '4', '3', '2021-01-18 03:00:51');
INSERT INTO `ci_activity_log` VALUES ('12', '4', '3', '2021-01-18 07:26:50');
INSERT INTO `ci_activity_log` VALUES ('13', '15', '3', '2021-01-18 00:05:03');
INSERT INTO `ci_activity_log` VALUES ('14', '15', '3', '2021-01-18 00:05:18');
INSERT INTO `ci_activity_log` VALUES ('15', '15', '3', '2021-01-18 00:05:22');
INSERT INTO `ci_activity_log` VALUES ('16', '15', '3', '2021-01-18 00:05:26');
INSERT INTO `ci_activity_log` VALUES ('17', '15', '3', '2021-01-18 00:05:31');
INSERT INTO `ci_activity_log` VALUES ('18', '15', '3', '2021-01-18 00:05:57');
INSERT INTO `ci_activity_log` VALUES ('19', '15', '3', '2021-01-18 00:06:51');
INSERT INTO `ci_activity_log` VALUES ('20', '15', '3', '2021-01-18 00:06:54');
INSERT INTO `ci_activity_log` VALUES ('21', '15', '3', '2021-01-18 00:06:59');
INSERT INTO `ci_activity_log` VALUES ('22', '15', '3', '2021-01-18 00:07:04');
INSERT INTO `ci_activity_log` VALUES ('23', '15', '3', '2021-01-18 00:07:10');
INSERT INTO `ci_activity_log` VALUES ('24', '15', '3', '2021-01-18 00:07:13');
INSERT INTO `ci_activity_log` VALUES ('25', '15', '3', '2021-01-18 00:07:17');
INSERT INTO `ci_activity_log` VALUES ('26', '15', '3', '2021-01-18 00:07:21');
INSERT INTO `ci_activity_log` VALUES ('27', '15', '3', '2021-01-18 00:07:25');
INSERT INTO `ci_activity_log` VALUES ('28', '15', '3', '2021-01-18 00:07:32');
INSERT INTO `ci_activity_log` VALUES ('29', '15', '3', '2021-01-18 00:07:37');
INSERT INTO `ci_activity_log` VALUES ('30', '15', '3', '2021-01-18 00:07:41');
INSERT INTO `ci_activity_log` VALUES ('31', '4', '3', '2021-01-19 21:20:32');
INSERT INTO `ci_activity_log` VALUES ('32', '4', '3', '2021-01-20 20:10:17');
INSERT INTO `ci_activity_log` VALUES ('33', '4', '3', '2021-01-21 02:16:02');
INSERT INTO `ci_activity_log` VALUES ('34', '4', '3', '2021-01-23 08:53:18');
INSERT INTO `ci_activity_log` VALUES ('35', '4', '3', '2021-01-25 08:10:42');
INSERT INTO `ci_activity_log` VALUES ('36', '15', '3', '2021-01-24 22:11:00');
INSERT INTO `ci_activity_log` VALUES ('37', '15', '3', '2021-01-24 22:11:09');
INSERT INTO `ci_activity_log` VALUES ('38', '15', '3', '2021-01-24 22:11:12');
INSERT INTO `ci_activity_log` VALUES ('39', '15', '3', '2021-01-24 22:42:50');
INSERT INTO `ci_activity_log` VALUES ('40', '15', '3', '2021-01-24 22:44:54');
INSERT INTO `ci_activity_log` VALUES ('41', '4', '3', '2021-01-25 15:46:51');
INSERT INTO `ci_activity_log` VALUES ('42', '4', '3', '2021-01-26 01:22:21');
INSERT INTO `ci_activity_log` VALUES ('43', '4', '3', '2021-01-26 15:02:12');
INSERT INTO `ci_activity_log` VALUES ('44', '1', '3', '2021-01-26 05:05:39');
INSERT INTO `ci_activity_log` VALUES ('45', '4', '44', '2021-01-26 15:18:26');
INSERT INTO `ci_activity_log` VALUES ('46', '4', '44', '2021-01-26 15:19:17');
INSERT INTO `ci_activity_log` VALUES ('47', '2', '3', '2021-01-26 05:30:30');
INSERT INTO `ci_activity_log` VALUES ('48', '5', '3', '2021-01-26 15:36:41');
INSERT INTO `ci_activity_log` VALUES ('49', '4', '3', '2021-01-26 15:37:07');
INSERT INTO `ci_activity_log` VALUES ('50', '4', '44', '2021-01-26 15:37:50');
INSERT INTO `ci_activity_log` VALUES ('51', '4', '3', '2021-01-26 16:48:23');
INSERT INTO `ci_activity_log` VALUES ('52', '4', '3', '2021-01-26 19:53:34');
INSERT INTO `ci_activity_log` VALUES ('53', '5', '3', '2021-01-26 21:53:33');
INSERT INTO `ci_activity_log` VALUES ('54', '4', '3', '2021-01-26 22:08:03');
INSERT INTO `ci_activity_log` VALUES ('55', '5', '3', '2021-01-26 22:20:31');
INSERT INTO `ci_activity_log` VALUES ('56', '4', '3', '2021-01-27 13:55:26');
INSERT INTO `ci_activity_log` VALUES ('57', '15', '3', '2021-01-27 04:45:02');
INSERT INTO `ci_activity_log` VALUES ('58', '4', '3', '2021-01-27 16:28:22');
INSERT INTO `ci_activity_log` VALUES ('59', '4', '3', '2021-01-27 17:52:47');
INSERT INTO `ci_activity_log` VALUES ('60', '18', '3', '2021-01-27 07:54:37');
INSERT INTO `ci_activity_log` VALUES ('61', '2', '3', '2021-01-27 08:08:54');
INSERT INTO `ci_activity_log` VALUES ('62', '5', '3', '2021-01-27 18:09:11');
INSERT INTO `ci_activity_log` VALUES ('63', '4', '44', '2021-01-27 18:09:21');
INSERT INTO `ci_activity_log` VALUES ('64', '5', '3', '2021-01-27 18:13:49');
INSERT INTO `ci_activity_log` VALUES ('65', '4', '44', '2021-01-27 18:14:19');
INSERT INTO `ci_activity_log` VALUES ('66', '15', '44', '2021-01-27 08:15:31');
INSERT INTO `ci_activity_log` VALUES ('67', '15', '44', '2021-01-27 08:17:42');
INSERT INTO `ci_activity_log` VALUES ('68', '4', '3', '2021-01-27 18:54:43');
INSERT INTO `ci_activity_log` VALUES ('69', '18', '3', '2021-01-27 08:56:20');
INSERT INTO `ci_activity_log` VALUES ('70', '15', '44', '2021-01-27 08:58:51');
INSERT INTO `ci_activity_log` VALUES ('71', '15', '44', '2021-01-27 08:58:56');
INSERT INTO `ci_activity_log` VALUES ('72', '5', '44', '2021-01-27 19:22:30');
INSERT INTO `ci_activity_log` VALUES ('73', '4', '3', '2021-01-27 19:22:58');
INSERT INTO `ci_activity_log` VALUES ('74', '7', '3', '2021-01-27 09:26:12');
INSERT INTO `ci_activity_log` VALUES ('75', '6', '3', '2021-01-27 09:26:16');
INSERT INTO `ci_activity_log` VALUES ('76', '6', '3', '2021-01-27 09:26:39');
INSERT INTO `ci_activity_log` VALUES ('77', '18', '3', '2021-01-27 09:27:29');
INSERT INTO `ci_activity_log` VALUES ('78', '18', '3', '2021-01-27 09:34:31');
INSERT INTO `ci_activity_log` VALUES ('79', '20', '3', '2021-01-27 09:35:06');
INSERT INTO `ci_activity_log` VALUES ('80', '20', '3', '2021-01-27 09:47:30');
INSERT INTO `ci_activity_log` VALUES ('81', '20', '3', '2021-01-27 09:47:49');
INSERT INTO `ci_activity_log` VALUES ('82', '18', '3', '2021-01-27 09:48:49');
INSERT INTO `ci_activity_log` VALUES ('83', '4', '3', '2021-01-27 22:36:40');
INSERT INTO `ci_activity_log` VALUES ('84', '18', '3', '2021-01-27 12:36:57');
INSERT INTO `ci_activity_log` VALUES ('85', '4', '3', '2021-01-28 02:11:16');
INSERT INTO `ci_activity_log` VALUES ('86', '4', '3', '2021-01-28 06:09:02');
INSERT INTO `ci_activity_log` VALUES ('87', '5', '3', '2021-01-28 06:09:57');
INSERT INTO `ci_activity_log` VALUES ('88', '4', '3', '2021-01-28 15:55:42');
INSERT INTO `ci_activity_log` VALUES ('89', '4', '44', '2021-01-28 16:14:34');
INSERT INTO `ci_activity_log` VALUES ('90', '17', '3', '2021-01-28 07:36:04');
INSERT INTO `ci_activity_log` VALUES ('91', '4', '44', '2021-01-28 19:58:37');
INSERT INTO `ci_activity_log` VALUES ('92', '4', '3', '2021-01-28 20:32:14');
INSERT INTO `ci_activity_log` VALUES ('93', '1', '3', '2021-01-28 10:35:01');
INSERT INTO `ci_activity_log` VALUES ('94', '5', '3', '2021-01-28 20:36:27');
INSERT INTO `ci_activity_log` VALUES ('95', '4', '44', '2021-01-28 22:31:32');
INSERT INTO `ci_activity_log` VALUES ('96', '4', '43', '2021-01-29 10:09:37');
INSERT INTO `ci_activity_log` VALUES ('97', '1', '43', '2021-01-29 01:43:02');
INSERT INTO `ci_activity_log` VALUES ('98', '4', '45', '2021-01-29 14:53:47');
INSERT INTO `ci_activity_log` VALUES ('99', '4', '3', '2021-01-29 15:01:35');
INSERT INTO `ci_activity_log` VALUES ('100', '4', '3', '2021-01-29 20:48:48');
INSERT INTO `ci_activity_log` VALUES ('101', '5', '3', '2021-01-29 20:59:26');
INSERT INTO `ci_activity_log` VALUES ('102', '4', '45', '2021-01-29 23:24:04');
INSERT INTO `ci_activity_log` VALUES ('103', '4', '43', '2021-01-30 00:40:00');
INSERT INTO `ci_activity_log` VALUES ('104', '4', '43', '2021-01-30 03:26:56');
INSERT INTO `ci_activity_log` VALUES ('105', '4', '43', '2021-01-30 06:44:12');
INSERT INTO `ci_activity_log` VALUES ('106', '4', '44', '2021-01-30 14:23:04');
INSERT INTO `ci_activity_log` VALUES ('107', '15', '44', '2021-01-30 04:25:53');
INSERT INTO `ci_activity_log` VALUES ('108', '15', '44', '2021-01-30 04:26:10');
INSERT INTO `ci_activity_log` VALUES ('109', '15', '44', '2021-01-30 04:26:27');
INSERT INTO `ci_activity_log` VALUES ('110', '15', '44', '2021-01-30 04:26:31');
INSERT INTO `ci_activity_log` VALUES ('111', '15', '44', '2021-01-30 04:26:35');
INSERT INTO `ci_activity_log` VALUES ('112', '15', '44', '2021-01-30 04:26:50');
INSERT INTO `ci_activity_log` VALUES ('113', '4', '44', '2021-02-01 13:36:42');
INSERT INTO `ci_activity_log` VALUES ('114', '4', '3', '2021-02-01 14:35:21');
INSERT INTO `ci_activity_log` VALUES ('115', '18', '3', '2021-02-01 04:35:40');
INSERT INTO `ci_activity_log` VALUES ('116', '15', '44', '2021-02-01 06:01:29');
INSERT INTO `ci_activity_log` VALUES ('117', '4', '45', '2021-02-01 18:44:58');
INSERT INTO `ci_activity_log` VALUES ('118', '4', '3', '2021-02-01 18:56:12');
INSERT INTO `ci_activity_log` VALUES ('119', '4', '43', '2021-02-02 10:46:33');
INSERT INTO `ci_activity_log` VALUES ('120', '17', '43', '2021-02-02 03:10:33');
INSERT INTO `ci_activity_log` VALUES ('121', '4', '44', '2021-02-02 14:56:00');
INSERT INTO `ci_activity_log` VALUES ('122', '4', '43', '2021-02-02 19:56:04');
INSERT INTO `ci_activity_log` VALUES ('123', '4', '3', '2021-02-02 20:46:25');
INSERT INTO `ci_activity_log` VALUES ('124', '5', '3', '2021-02-02 22:33:02');
INSERT INTO `ci_activity_log` VALUES ('125', '4', '43', '2021-02-03 00:29:43');
INSERT INTO `ci_activity_log` VALUES ('126', '4', '43', '2021-02-03 02:50:03');
INSERT INTO `ci_activity_log` VALUES ('127', '1', '43', '2021-02-02 16:53:06');
INSERT INTO `ci_activity_log` VALUES ('128', '1', '43', '2021-02-02 16:55:41');
INSERT INTO `ci_activity_log` VALUES ('129', '1', '43', '2021-02-02 16:55:57');
INSERT INTO `ci_activity_log` VALUES ('130', '5', '43', '2021-02-03 03:00:54');
INSERT INTO `ci_activity_log` VALUES ('131', '4', '3', '2021-02-03 03:09:48');
INSERT INTO `ci_activity_log` VALUES ('132', '18', '3', '2021-02-02 17:10:37');
INSERT INTO `ci_activity_log` VALUES ('133', '17', '43', '2021-02-02 17:12:18');
INSERT INTO `ci_activity_log` VALUES ('134', '1', '3', '2021-02-02 17:20:41');
INSERT INTO `ci_activity_log` VALUES ('135', '1', '3', '2021-02-02 17:21:08');
INSERT INTO `ci_activity_log` VALUES ('136', '15', '43', '2021-02-02 17:42:44');
INSERT INTO `ci_activity_log` VALUES ('137', '17', '43', '2021-02-02 18:51:29');
INSERT INTO `ci_activity_log` VALUES ('138', '4', '43', '2021-02-03 07:14:29');
INSERT INTO `ci_activity_log` VALUES ('139', '4', '3', '2021-02-03 14:25:16');
INSERT INTO `ci_activity_log` VALUES ('140', '4', '43', '2021-02-03 14:43:39');
INSERT INTO `ci_activity_log` VALUES ('141', '15', '43', '2021-02-03 04:44:38');
INSERT INTO `ci_activity_log` VALUES ('142', '17', '3', '2021-02-03 05:15:19');
INSERT INTO `ci_activity_log` VALUES ('143', '17', '3', '2021-02-03 05:15:36');
INSERT INTO `ci_activity_log` VALUES ('144', '17', '3', '2021-02-03 05:15:56');
INSERT INTO `ci_activity_log` VALUES ('145', '17', '3', '2021-02-03 05:16:06');
INSERT INTO `ci_activity_log` VALUES ('146', '17', '3', '2021-02-03 05:16:15');
INSERT INTO `ci_activity_log` VALUES ('147', '17', '3', '2021-02-03 05:16:25');
INSERT INTO `ci_activity_log` VALUES ('148', '17', '3', '2021-02-03 05:16:33');
INSERT INTO `ci_activity_log` VALUES ('149', '17', '3', '2021-02-03 05:16:42');
INSERT INTO `ci_activity_log` VALUES ('150', '17', '3', '2021-02-03 05:16:49');
INSERT INTO `ci_activity_log` VALUES ('151', '17', '3', '2021-02-03 05:16:59');
INSERT INTO `ci_activity_log` VALUES ('152', '17', '3', '2021-02-03 05:17:07');
INSERT INTO `ci_activity_log` VALUES ('153', '17', '3', '2021-02-03 05:17:17');
INSERT INTO `ci_activity_log` VALUES ('154', '17', '3', '2021-02-03 05:17:31');
INSERT INTO `ci_activity_log` VALUES ('155', '17', '3', '2021-02-03 05:19:26');
INSERT INTO `ci_activity_log` VALUES ('156', '17', '3', '2021-02-03 05:19:50');
INSERT INTO `ci_activity_log` VALUES ('157', '17', '3', '2021-02-03 05:20:22');
INSERT INTO `ci_activity_log` VALUES ('158', '17', '3', '2021-02-03 05:21:14');
INSERT INTO `ci_activity_log` VALUES ('159', '4', '44', '2021-02-03 15:21:59');
INSERT INTO `ci_activity_log` VALUES ('160', '15', '44', '2021-02-03 05:22:28');
INSERT INTO `ci_activity_log` VALUES ('161', '15', '44', '2021-02-03 05:22:33');
INSERT INTO `ci_activity_log` VALUES ('162', '17', '3', '2021-02-03 05:23:49');
INSERT INTO `ci_activity_log` VALUES ('163', '17', '3', '2021-02-03 05:24:08');
INSERT INTO `ci_activity_log` VALUES ('164', '17', '3', '2021-02-03 05:24:48');
INSERT INTO `ci_activity_log` VALUES ('165', '17', '3', '2021-02-03 05:25:06');
INSERT INTO `ci_activity_log` VALUES ('166', '17', '3', '2021-02-03 05:25:19');
INSERT INTO `ci_activity_log` VALUES ('167', '17', '3', '2021-02-03 05:25:31');
INSERT INTO `ci_activity_log` VALUES ('168', '17', '3', '2021-02-03 05:26:06');
INSERT INTO `ci_activity_log` VALUES ('169', '17', '3', '2021-02-03 05:26:28');
INSERT INTO `ci_activity_log` VALUES ('170', '17', '3', '2021-02-03 05:26:41');
INSERT INTO `ci_activity_log` VALUES ('171', '17', '3', '2021-02-03 05:26:56');
INSERT INTO `ci_activity_log` VALUES ('172', '17', '3', '2021-02-03 05:27:08');
INSERT INTO `ci_activity_log` VALUES ('173', '17', '3', '2021-02-03 05:27:27');
INSERT INTO `ci_activity_log` VALUES ('174', '17', '3', '2021-02-03 05:27:47');
INSERT INTO `ci_activity_log` VALUES ('175', '17', '3', '2021-02-03 05:28:04');
INSERT INTO `ci_activity_log` VALUES ('176', '17', '3', '2021-02-03 05:28:31');
INSERT INTO `ci_activity_log` VALUES ('177', '17', '3', '2021-02-03 05:28:45');
INSERT INTO `ci_activity_log` VALUES ('178', '17', '3', '2021-02-03 05:28:56');
INSERT INTO `ci_activity_log` VALUES ('179', '17', '3', '2021-02-03 05:29:38');
INSERT INTO `ci_activity_log` VALUES ('180', '17', '3', '2021-02-03 05:29:46');
INSERT INTO `ci_activity_log` VALUES ('181', '17', '3', '2021-02-03 05:30:25');
INSERT INTO `ci_activity_log` VALUES ('182', '17', '3', '2021-02-03 05:30:35');
INSERT INTO `ci_activity_log` VALUES ('183', '17', '3', '2021-02-03 05:30:55');
INSERT INTO `ci_activity_log` VALUES ('184', '17', '3', '2021-02-03 05:31:04');
INSERT INTO `ci_activity_log` VALUES ('185', '17', '3', '2021-02-03 05:31:11');
INSERT INTO `ci_activity_log` VALUES ('186', '17', '3', '2021-02-03 05:31:28');
INSERT INTO `ci_activity_log` VALUES ('187', '17', '3', '2021-02-03 05:31:45');
INSERT INTO `ci_activity_log` VALUES ('188', '17', '3', '2021-02-03 05:31:55');
INSERT INTO `ci_activity_log` VALUES ('189', '17', '3', '2021-02-03 05:32:06');
INSERT INTO `ci_activity_log` VALUES ('190', '17', '3', '2021-02-03 05:32:21');
INSERT INTO `ci_activity_log` VALUES ('191', '17', '3', '2021-02-03 05:32:28');
INSERT INTO `ci_activity_log` VALUES ('192', '17', '3', '2021-02-03 05:32:35');
INSERT INTO `ci_activity_log` VALUES ('193', '17', '3', '2021-02-03 05:32:42');
INSERT INTO `ci_activity_log` VALUES ('194', '17', '3', '2021-02-03 05:32:54');
INSERT INTO `ci_activity_log` VALUES ('195', '17', '3', '2021-02-03 05:33:03');
INSERT INTO `ci_activity_log` VALUES ('196', '17', '3', '2021-02-03 05:33:10');
INSERT INTO `ci_activity_log` VALUES ('197', '17', '3', '2021-02-03 05:33:18');
INSERT INTO `ci_activity_log` VALUES ('198', '17', '3', '2021-02-03 05:33:25');
INSERT INTO `ci_activity_log` VALUES ('199', '17', '3', '2021-02-03 05:33:33');
INSERT INTO `ci_activity_log` VALUES ('200', '17', '3', '2021-02-03 05:33:40');
INSERT INTO `ci_activity_log` VALUES ('201', '17', '3', '2021-02-03 05:33:48');
INSERT INTO `ci_activity_log` VALUES ('202', '17', '3', '2021-02-03 05:33:55');
INSERT INTO `ci_activity_log` VALUES ('203', '17', '3', '2021-02-03 05:34:02');
INSERT INTO `ci_activity_log` VALUES ('204', '17', '3', '2021-02-03 05:34:18');
INSERT INTO `ci_activity_log` VALUES ('205', '17', '3', '2021-02-03 05:34:30');
INSERT INTO `ci_activity_log` VALUES ('206', '17', '3', '2021-02-03 05:34:38');
INSERT INTO `ci_activity_log` VALUES ('207', '17', '3', '2021-02-03 05:34:51');
INSERT INTO `ci_activity_log` VALUES ('208', '17', '3', '2021-02-03 05:35:05');
INSERT INTO `ci_activity_log` VALUES ('209', '17', '3', '2021-02-03 05:35:16');
INSERT INTO `ci_activity_log` VALUES ('210', '17', '3', '2021-02-03 05:35:36');
INSERT INTO `ci_activity_log` VALUES ('211', '17', '3', '2021-02-03 05:35:52');
INSERT INTO `ci_activity_log` VALUES ('212', '17', '3', '2021-02-03 05:35:57');
INSERT INTO `ci_activity_log` VALUES ('213', '4', '44', '2021-02-03 20:47:57');
INSERT INTO `ci_activity_log` VALUES ('214', '4', '43', '2021-02-03 21:48:31');
INSERT INTO `ci_activity_log` VALUES ('215', '4', '44', '2021-02-04 15:02:07');
INSERT INTO `ci_activity_log` VALUES ('216', '15', '44', '2021-02-04 05:03:49');
INSERT INTO `ci_activity_log` VALUES ('217', '4', '3', '2021-02-04 15:42:08');
INSERT INTO `ci_activity_log` VALUES ('218', '4', '43', '2021-02-04 21:46:03');
INSERT INTO `ci_activity_log` VALUES ('219', '4', '3', '2021-02-05 01:41:45');
INSERT INTO `ci_activity_log` VALUES ('220', '4', '43', '2021-02-05 03:03:07');
INSERT INTO `ci_activity_log` VALUES ('221', '17', '43', '2021-02-04 17:41:31');
INSERT INTO `ci_activity_log` VALUES ('222', '4', '43', '2021-02-05 07:14:53');
INSERT INTO `ci_activity_log` VALUES ('223', '17', '43', '2021-02-04 21:17:09');
INSERT INTO `ci_activity_log` VALUES ('224', '15', '43', '2021-02-04 22:59:35');
INSERT INTO `ci_activity_log` VALUES ('225', '15', '43', '2021-02-04 22:59:42');
INSERT INTO `ci_activity_log` VALUES ('226', '17', '43', '2021-02-04 23:14:13');
INSERT INTO `ci_activity_log` VALUES ('227', '4', '43', '2021-02-05 12:33:08');
INSERT INTO `ci_activity_log` VALUES ('228', '17', '43', '2021-02-05 03:53:18');
INSERT INTO `ci_activity_log` VALUES ('229', '4', '3', '2021-02-05 15:05:48');
INSERT INTO `ci_activity_log` VALUES ('230', '4', '3', '2021-02-05 16:06:38');
INSERT INTO `ci_activity_log` VALUES ('231', '17', '3', '2021-02-05 06:50:47');
INSERT INTO `ci_activity_log` VALUES ('232', '15', '3', '2021-02-05 06:51:18');
INSERT INTO `ci_activity_log` VALUES ('233', '15', '3', '2021-02-05 06:51:21');
INSERT INTO `ci_activity_log` VALUES ('234', '5', '3', '2021-02-05 17:02:39');
INSERT INTO `ci_activity_log` VALUES ('235', '4', '43', '2021-02-05 18:53:15');
INSERT INTO `ci_activity_log` VALUES ('236', '4', '43', '2021-02-05 22:55:57');
INSERT INTO `ci_activity_log` VALUES ('237', '4', '43', '2021-02-06 08:53:26');
INSERT INTO `ci_activity_log` VALUES ('238', '4', '44', '2021-02-06 15:51:36');
INSERT INTO `ci_activity_log` VALUES ('239', '15', '44', '2021-02-06 05:52:06');
INSERT INTO `ci_activity_log` VALUES ('240', '4', '44', '2021-02-06 22:40:48');
INSERT INTO `ci_activity_log` VALUES ('241', '4', '43', '2021-02-08 07:39:18');
INSERT INTO `ci_activity_log` VALUES ('242', '4', '44', '2021-02-08 14:22:42');
INSERT INTO `ci_activity_log` VALUES ('243', '4', '3', '2021-02-08 15:54:14');
INSERT INTO `ci_activity_log` VALUES ('244', '4', '44', '2021-02-08 19:06:37');
INSERT INTO `ci_activity_log` VALUES ('245', '4', '45', '2021-02-08 20:37:38');
INSERT INTO `ci_activity_log` VALUES ('246', '4', '44', '2021-02-09 15:51:02');
INSERT INTO `ci_activity_log` VALUES ('247', '4', '45', '2021-02-09 15:52:36');
INSERT INTO `ci_activity_log` VALUES ('248', '4', '44', '2021-02-09 19:03:32');
INSERT INTO `ci_activity_log` VALUES ('249', '4', '45', '2021-02-09 20:44:17');
INSERT INTO `ci_activity_log` VALUES ('250', '4', '44', '2021-02-09 21:19:17');
INSERT INTO `ci_activity_log` VALUES ('251', '4', '43', '2021-02-09 23:28:23');
INSERT INTO `ci_activity_log` VALUES ('252', '4', '44', '2021-02-09 23:38:31');
INSERT INTO `ci_activity_log` VALUES ('253', '4', '45', '2021-02-10 02:11:52');
INSERT INTO `ci_activity_log` VALUES ('254', '4', '45', '2021-02-10 14:42:28');
INSERT INTO `ci_activity_log` VALUES ('255', '4', '44', '2021-02-10 14:47:25');
INSERT INTO `ci_activity_log` VALUES ('256', '4', '45', '2021-02-10 18:47:16');
INSERT INTO `ci_activity_log` VALUES ('257', '4', '44', '2021-02-10 21:38:11');
INSERT INTO `ci_activity_log` VALUES ('258', '4', '45', '2021-02-10 22:25:34');
INSERT INTO `ci_activity_log` VALUES ('259', '4', '44', '2021-02-11 14:28:08');
INSERT INTO `ci_activity_log` VALUES ('260', '4', '3', '2021-02-11 15:58:10');
INSERT INTO `ci_activity_log` VALUES ('261', '4', '45', '2021-02-11 16:11:31');
INSERT INTO `ci_activity_log` VALUES ('262', '5', '3', '2021-02-11 16:14:37');
INSERT INTO `ci_activity_log` VALUES ('263', '4', '44', '2021-02-11 19:15:03');
INSERT INTO `ci_activity_log` VALUES ('264', '4', '45', '2021-02-11 21:30:06');
INSERT INTO `ci_activity_log` VALUES ('265', '4', '45', '2021-02-12 16:27:02');
INSERT INTO `ci_activity_log` VALUES ('266', '4', '44', '2021-02-13 15:45:48');
INSERT INTO `ci_activity_log` VALUES ('267', '4', '45', '2021-02-13 16:44:07');
INSERT INTO `ci_activity_log` VALUES ('268', '4', '45', '2021-02-13 19:23:40');
INSERT INTO `ci_activity_log` VALUES ('269', '4', '43', '2021-02-15 08:40:49');
INSERT INTO `ci_activity_log` VALUES ('270', '4', '44', '2021-02-15 14:54:32');
INSERT INTO `ci_activity_log` VALUES ('271', '4', '45', '2021-02-15 15:16:00');
INSERT INTO `ci_activity_log` VALUES ('272', '4', '44', '2021-02-15 17:33:41');
INSERT INTO `ci_activity_log` VALUES ('273', '4', '43', '2021-02-16 02:55:22');
INSERT INTO `ci_activity_log` VALUES ('274', '4', '44', '2021-02-16 14:34:20');
INSERT INTO `ci_activity_log` VALUES ('275', '4', '45', '2021-02-16 15:16:13');
INSERT INTO `ci_activity_log` VALUES ('276', '4', '44', '2021-02-16 20:05:28');
INSERT INTO `ci_activity_log` VALUES ('277', '4', '44', '2021-02-16 23:05:23');
INSERT INTO `ci_activity_log` VALUES ('278', '4', '43', '2021-02-17 11:25:05');
INSERT INTO `ci_activity_log` VALUES ('279', '4', '43', '2021-02-17 11:32:06');
INSERT INTO `ci_activity_log` VALUES ('280', '4', '43', '2021-02-26 03:19:26');
INSERT INTO `ci_activity_log` VALUES ('281', '5', '43', '2021-02-26 03:21:06');
INSERT INTO `ci_activity_log` VALUES ('282', '4', '43', '2021-02-26 03:21:25');
INSERT INTO `ci_activity_log` VALUES ('283', '5', '43', '2021-02-26 03:24:58');
INSERT INTO `ci_activity_log` VALUES ('284', '4', '43', '2021-02-26 03:26:14');
INSERT INTO `ci_activity_log` VALUES ('285', '4', '43', '2021-02-26 03:30:41');
INSERT INTO `ci_activity_log` VALUES ('286', '2', '43', '2021-02-25 16:32:52');
INSERT INTO `ci_activity_log` VALUES ('287', '5', '43', '2021-02-26 03:32:58');
INSERT INTO `ci_activity_log` VALUES ('288', '4', '43', '2021-02-26 03:33:35');
INSERT INTO `ci_activity_log` VALUES ('289', '1', '43', '2021-02-25 16:34:41');
INSERT INTO `ci_activity_log` VALUES ('290', '1', '43', '2021-02-25 16:42:25');
INSERT INTO `ci_activity_log` VALUES ('291', '5', '43', '2021-02-26 03:43:29');
INSERT INTO `ci_activity_log` VALUES ('292', '4', '43', '2021-02-26 04:11:53');
INSERT INTO `ci_activity_log` VALUES ('293', '4', '43', '2021-02-26 12:50:23');
INSERT INTO `ci_activity_log` VALUES ('294', '5', '43', '2021-02-26 13:44:00');
INSERT INTO `ci_activity_log` VALUES ('295', '4', '43', '2021-02-27 02:25:51');
INSERT INTO `ci_activity_log` VALUES ('296', '2', '43', '2021-02-26 15:29:15');
INSERT INTO `ci_activity_log` VALUES ('297', '1', '43', '2021-02-26 16:51:00');
INSERT INTO `ci_activity_log` VALUES ('298', '1', '43', '2021-02-26 17:01:03');
INSERT INTO `ci_activity_log` VALUES ('299', '4', '43', '2021-02-27 08:05:38');
INSERT INTO `ci_activity_log` VALUES ('300', '4', '43', '2021-02-27 12:55:11');
INSERT INTO `ci_activity_log` VALUES ('301', '4', '43', '2021-02-28 01:38:36');
INSERT INTO `ci_activity_log` VALUES ('302', '4', '43', '2021-03-01 03:21:52');
INSERT INTO `ci_activity_log` VALUES ('303', '1', '43', '2021-02-28 17:05:46');
INSERT INTO `ci_activity_log` VALUES ('304', '1', '43', '2021-02-28 17:05:58');
INSERT INTO `ci_activity_log` VALUES ('305', '1', '43', '2021-02-28 17:23:19');
INSERT INTO `ci_activity_log` VALUES ('306', '1', '43', '2021-02-28 17:23:34');
INSERT INTO `ci_activity_log` VALUES ('307', '4', '43', '2021-03-01 18:31:13');
INSERT INTO `ci_activity_log` VALUES ('308', '4', '43', '2021-03-02 02:23:16');
INSERT INTO `ci_activity_log` VALUES ('309', '4', '43', '2021-03-03 07:14:35');
INSERT INTO `ci_activity_log` VALUES ('310', '5', '43', '2021-03-03 07:17:53');
INSERT INTO `ci_activity_log` VALUES ('311', '4', '43', '2021-03-03 08:08:34');
INSERT INTO `ci_activity_log` VALUES ('312', '5', '43', '2021-03-03 08:08:38');
INSERT INTO `ci_activity_log` VALUES ('313', '4', '43', '2021-03-03 08:22:28');
INSERT INTO `ci_activity_log` VALUES ('314', '5', '43', '2021-03-03 08:22:35');
INSERT INTO `ci_activity_log` VALUES ('315', '4', '43', '2021-03-03 13:20:03');
INSERT INTO `ci_activity_log` VALUES ('316', '5', '43', '2021-03-03 13:20:06');
INSERT INTO `ci_activity_log` VALUES ('317', '4', '43', '2021-03-03 23:11:29');
INSERT INTO `ci_activity_log` VALUES ('318', '4', '43', '2021-03-09 02:16:00');
INSERT INTO `ci_activity_log` VALUES ('319', '4', '43', '2021-03-09 08:01:20');
INSERT INTO `ci_activity_log` VALUES ('320', '6', '43', '2021-03-08 21:27:59');
INSERT INTO `ci_activity_log` VALUES ('321', '5', '43', '2021-03-09 08:28:08');
INSERT INTO `ci_activity_log` VALUES ('322', '4', '43', '2021-03-09 08:28:21');
INSERT INTO `ci_activity_log` VALUES ('323', '4', '43', '2021-03-09 14:25:42');
INSERT INTO `ci_activity_log` VALUES ('324', '4', '43', '2021-03-10 05:58:03');
INSERT INTO `ci_activity_log` VALUES ('325', '5', '43', '2021-03-10 06:32:21');
INSERT INTO `ci_activity_log` VALUES ('326', '4', '43', '2021-03-10 06:32:26');
INSERT INTO `ci_activity_log` VALUES ('327', '11', '43', '2021-03-09 20:00:37');
INSERT INTO `ci_activity_log` VALUES ('328', '11', '43', '2021-03-09 20:21:28');
INSERT INTO `ci_activity_log` VALUES ('329', '5', '43', '2021-03-10 07:28:40');
INSERT INTO `ci_activity_log` VALUES ('330', '4', '43', '2021-03-10 13:27:33');
INSERT INTO `ci_activity_log` VALUES ('331', '5', '43', '2021-03-10 13:29:12');
INSERT INTO `ci_activity_log` VALUES ('332', '4', '43', '2021-03-10 13:29:20');
INSERT INTO `ci_activity_log` VALUES ('333', '11', '43', '2021-03-10 02:29:47');
INSERT INTO `ci_activity_log` VALUES ('334', '11', '43', '2021-03-10 02:29:52');
INSERT INTO `ci_activity_log` VALUES ('335', '4', '43', '2021-03-20 04:05:26');
INSERT INTO `ci_activity_log` VALUES ('336', '4', '43', '2021-03-25 03:07:39');
INSERT INTO `ci_activity_log` VALUES ('337', '2', '43', '2021-03-24 17:13:10');
INSERT INTO `ci_activity_log` VALUES ('338', '5', '43', '2021-03-25 03:50:56');
INSERT INTO `ci_activity_log` VALUES ('339', '4', '43', '2021-03-25 03:52:29');
INSERT INTO `ci_activity_log` VALUES ('340', '4', '43', '2021-03-25 08:02:18');
INSERT INTO `ci_activity_log` VALUES ('341', '5', '43', '2021-03-25 08:36:41');
INSERT INTO `ci_activity_log` VALUES ('342', '4', '43', '2021-03-25 08:36:48');
INSERT INTO `ci_activity_log` VALUES ('343', '2', '43', '2021-03-24 22:43:19');
INSERT INTO `ci_activity_log` VALUES ('344', '5', '43', '2021-03-25 08:43:27');
INSERT INTO `ci_activity_log` VALUES ('345', '4', '43', '2021-03-25 08:44:10');
INSERT INTO `ci_activity_log` VALUES ('346', '2', '43', '2021-03-24 22:44:47');
INSERT INTO `ci_activity_log` VALUES ('347', '5', '43', '2021-03-25 08:44:56');
INSERT INTO `ci_activity_log` VALUES ('348', '4', '46', '2021-03-25 08:45:05');
INSERT INTO `ci_activity_log` VALUES ('349', '2', '46', '2021-03-24 22:45:37');
INSERT INTO `ci_activity_log` VALUES ('350', '17', '46', '2021-03-24 22:48:42');
INSERT INTO `ci_activity_log` VALUES ('351', '1', '46', '2021-03-24 23:47:36');
INSERT INTO `ci_activity_log` VALUES ('352', '5', '46', '2021-03-25 10:58:38');
INSERT INTO `ci_activity_log` VALUES ('353', '4', '43', '2021-03-25 10:58:54');
INSERT INTO `ci_activity_log` VALUES ('354', '5', '43', '2021-03-25 11:01:54');
INSERT INTO `ci_activity_log` VALUES ('355', '4', '43', '2021-03-25 11:02:09');
INSERT INTO `ci_activity_log` VALUES ('356', '5', '43', '2021-03-25 11:03:37');
INSERT INTO `ci_activity_log` VALUES ('357', '4', '43', '2021-03-25 11:03:47');
INSERT INTO `ci_activity_log` VALUES ('358', '5', '43', '2021-03-25 11:03:57');
INSERT INTO `ci_activity_log` VALUES ('359', '4', '43', '2021-03-25 11:04:00');
INSERT INTO `ci_activity_log` VALUES ('360', '5', '43', '2021-03-25 11:04:33');
INSERT INTO `ci_activity_log` VALUES ('361', '4', '43', '2021-03-25 11:04:35');
INSERT INTO `ci_activity_log` VALUES ('362', '5', '43', '2021-03-25 11:04:54');
INSERT INTO `ci_activity_log` VALUES ('363', '4', '43', '2021-03-25 11:06:23');
INSERT INTO `ci_activity_log` VALUES ('364', '4', '43', '2021-03-25 20:17:00');
INSERT INTO `ci_activity_log` VALUES ('365', '4', '43', '2021-03-26 02:53:52');
INSERT INTO `ci_activity_log` VALUES ('366', '4', '43', '2021-03-26 08:06:17');
INSERT INTO `ci_activity_log` VALUES ('367', '4', '43', '2021-03-26 15:43:52');
INSERT INTO `ci_activity_log` VALUES ('368', '5', '43', '2021-03-26 16:13:02');
INSERT INTO `ci_activity_log` VALUES ('369', '4', '43', '2021-03-26 16:13:05');
INSERT INTO `ci_activity_log` VALUES ('370', '4', '43', '2021-03-26 11:32:13');
INSERT INTO `ci_activity_log` VALUES ('371', '1', '43', '2021-03-26 06:33:02');
INSERT INTO `ci_activity_log` VALUES ('372', '1', '43', '2021-03-26 06:33:19');
INSERT INTO `ci_activity_log` VALUES ('373', '5', '43', '2021-03-26 11:33:28');
INSERT INTO `ci_activity_log` VALUES ('374', '4', '48', '2021-03-26 12:59:37');
INSERT INTO `ci_activity_log` VALUES ('375', '4', '50', '2021-03-26 13:11:38');
INSERT INTO `ci_activity_log` VALUES ('376', '5', '50', '2021-03-26 13:11:49');
INSERT INTO `ci_activity_log` VALUES ('377', '4', '50', '2021-03-26 13:13:14');
INSERT INTO `ci_activity_log` VALUES ('378', '4', '50', '2021-03-26 13:20:24');
INSERT INTO `ci_activity_log` VALUES ('379', '4', '43', '2021-03-31 13:24:36');
INSERT INTO `ci_activity_log` VALUES ('380', '4', '43', '2021-03-31 13:24:52');
INSERT INTO `ci_activity_log` VALUES ('381', '4', '43', '2021-04-01 03:04:16');
INSERT INTO `ci_activity_log` VALUES ('382', '5', '43', '2021-04-01 04:24:52');
INSERT INTO `ci_activity_log` VALUES ('383', '4', '43', '2021-04-01 04:25:06');
INSERT INTO `ci_activity_log` VALUES ('384', '4', '43', '2021-04-03 00:51:48');
INSERT INTO `ci_activity_log` VALUES ('385', '4', '48', '2021-04-07 09:48:47');
INSERT INTO `ci_activity_log` VALUES ('386', '5', '48', '2021-04-07 09:51:15');
INSERT INTO `ci_activity_log` VALUES ('387', '4', '43', '2021-04-07 09:51:25');
INSERT INTO `ci_activity_log` VALUES ('388', '1', '43', '2021-04-07 04:51:36');
INSERT INTO `ci_activity_log` VALUES ('389', '5', '43', '2021-04-07 09:51:50');
INSERT INTO `ci_activity_log` VALUES ('390', '4', '43', '2021-04-07 09:52:00');
INSERT INTO `ci_activity_log` VALUES ('391', '5', '43', '2021-04-07 09:52:09');
INSERT INTO `ci_activity_log` VALUES ('392', '4', '48', '2021-04-07 09:52:19');
INSERT INTO `ci_activity_log` VALUES ('393', '5', '48', '2021-04-07 11:15:00');
INSERT INTO `ci_activity_log` VALUES ('394', '4', '43', '2021-04-07 11:15:07');
INSERT INTO `ci_activity_log` VALUES ('395', '5', '43', '2021-04-07 11:15:15');
INSERT INTO `ci_activity_log` VALUES ('396', '4', '48', '2021-04-07 11:15:24');
INSERT INTO `ci_activity_log` VALUES ('397', '5', '48', '2021-04-07 11:22:19');
INSERT INTO `ci_activity_log` VALUES ('398', '4', '43', '2021-04-07 11:22:26');
INSERT INTO `ci_activity_log` VALUES ('399', '5', '43', '2021-04-07 11:23:25');
INSERT INTO `ci_activity_log` VALUES ('400', '4', '50', '2021-04-07 11:24:00');
INSERT INTO `ci_activity_log` VALUES ('401', '1', '50', '2021-04-07 06:24:17');
INSERT INTO `ci_activity_log` VALUES ('402', '1', '50', '2021-04-07 06:24:31');
INSERT INTO `ci_activity_log` VALUES ('403', '5', '50', '2021-04-07 11:24:44');
INSERT INTO `ci_activity_log` VALUES ('404', '4', '48', '2021-04-07 11:25:26');
INSERT INTO `ci_activity_log` VALUES ('405', '5', '48', '2021-04-07 11:25:31');
INSERT INTO `ci_activity_log` VALUES ('406', '4', '50', '2021-04-07 14:26:02');
INSERT INTO `ci_activity_log` VALUES ('407', '1', '50', '2021-04-07 09:29:10');
INSERT INTO `ci_activity_log` VALUES ('408', '1', '50', '2021-04-07 09:31:56');
INSERT INTO `ci_activity_log` VALUES ('409', '1', '50', '2021-04-07 09:32:01');
INSERT INTO `ci_activity_log` VALUES ('410', '1', '50', '2021-04-07 09:32:42');
INSERT INTO `ci_activity_log` VALUES ('411', '5', '50', '2021-04-07 14:33:53');
INSERT INTO `ci_activity_log` VALUES ('412', '4', '50', '2021-04-07 14:34:02');
INSERT INTO `ci_activity_log` VALUES ('413', '4', '43', '2021-04-07 16:01:29');
INSERT INTO `ci_activity_log` VALUES ('414', '1', '43', '2021-04-07 12:46:22');
INSERT INTO `ci_activity_log` VALUES ('415', '1', '43', '2021-04-07 12:46:32');
INSERT INTO `ci_activity_log` VALUES ('416', '1', '43', '2021-04-07 12:46:43');
INSERT INTO `ci_activity_log` VALUES ('417', '4', '43', '2021-04-08 04:54:54');
INSERT INTO `ci_activity_log` VALUES ('418', '5', '43', '2021-04-08 05:01:20');
INSERT INTO `ci_activity_log` VALUES ('419', '4', '43', '2021-04-08 05:02:43');
INSERT INTO `ci_activity_log` VALUES ('420', '4', '43', '2021-04-08 05:03:59');
INSERT INTO `ci_activity_log` VALUES ('421', '4', '50', '2021-04-08 10:17:10');
INSERT INTO `ci_activity_log` VALUES ('422', '4', '43', '2021-04-10 06:57:09');
INSERT INTO `ci_activity_log` VALUES ('423', '1', '43', '2021-04-10 01:59:03');
INSERT INTO `ci_activity_log` VALUES ('424', '1', '43', '2021-04-10 01:59:09');
INSERT INTO `ci_activity_log` VALUES ('425', '1', '43', '2021-04-10 01:59:18');
INSERT INTO `ci_activity_log` VALUES ('426', '5', '43', '2021-04-10 06:59:41');
INSERT INTO `ci_activity_log` VALUES ('427', '4', '43', '2021-04-10 06:59:49');
INSERT INTO `ci_activity_log` VALUES ('428', '1', '43', '2021-04-10 02:22:12');
INSERT INTO `ci_activity_log` VALUES ('429', '1', '43', '2021-04-10 02:22:14');
INSERT INTO `ci_activity_log` VALUES ('430', '1', '43', '2021-04-10 02:22:26');
INSERT INTO `ci_activity_log` VALUES ('431', '1', '43', '2021-04-10 02:22:29');
INSERT INTO `ci_activity_log` VALUES ('432', '1', '43', '2021-04-10 02:24:24');
INSERT INTO `ci_activity_log` VALUES ('433', '1', '43', '2021-04-10 03:28:39');
INSERT INTO `ci_activity_log` VALUES ('434', '1', '43', '2021-04-10 03:28:45');
INSERT INTO `ci_activity_log` VALUES ('435', '1', '43', '2021-04-10 03:30:05');
INSERT INTO `ci_activity_log` VALUES ('436', '5', '43', '2021-04-10 08:30:24');
INSERT INTO `ci_activity_log` VALUES ('437', '4', '48', '2021-04-10 08:30:33');
INSERT INTO `ci_activity_log` VALUES ('438', '1', '48', '2021-04-10 03:30:50');
INSERT INTO `ci_activity_log` VALUES ('439', '1', '48', '2021-04-10 03:30:55');
INSERT INTO `ci_activity_log` VALUES ('440', '1', '48', '2021-04-10 03:31:20');
INSERT INTO `ci_activity_log` VALUES ('441', '1', '48', '2021-04-10 03:32:03');
INSERT INTO `ci_activity_log` VALUES ('442', '1', '48', '2021-04-10 03:33:07');
INSERT INTO `ci_activity_log` VALUES ('443', '1', '48', '2021-04-10 03:33:15');
INSERT INTO `ci_activity_log` VALUES ('444', '1', '48', '2021-04-10 03:33:30');
INSERT INTO `ci_activity_log` VALUES ('445', '1', '48', '2021-04-10 03:33:32');
INSERT INTO `ci_activity_log` VALUES ('446', '1', '48', '2021-04-10 03:33:41');
INSERT INTO `ci_activity_log` VALUES ('447', '4', '48', '2021-04-10 14:39:35');
INSERT INTO `ci_activity_log` VALUES ('448', '5', '48', '2021-04-10 14:39:42');
INSERT INTO `ci_activity_log` VALUES ('449', '4', '43', '2021-04-10 14:39:46');
INSERT INTO `ci_activity_log` VALUES ('450', '5', '43', '2021-04-10 14:39:50');
INSERT INTO `ci_activity_log` VALUES ('451', '4', '48', '2021-04-10 14:39:59');
INSERT INTO `ci_activity_log` VALUES ('452', '1', '48', '2021-04-10 03:40:09');
INSERT INTO `ci_activity_log` VALUES ('453', '1', '48', '2021-04-10 03:40:11');
INSERT INTO `ci_activity_log` VALUES ('454', '1', '48', '2021-04-10 03:40:13');
INSERT INTO `ci_activity_log` VALUES ('455', '1', '48', '2021-04-10 03:44:55');
INSERT INTO `ci_activity_log` VALUES ('456', '1', '48', '2021-04-10 03:47:31');
INSERT INTO `ci_activity_log` VALUES ('457', '1', '48', '2021-04-10 03:47:35');
INSERT INTO `ci_activity_log` VALUES ('458', '1', '48', '2021-04-10 03:47:35');
INSERT INTO `ci_activity_log` VALUES ('459', '1', '48', '2021-04-10 03:47:36');
INSERT INTO `ci_activity_log` VALUES ('460', '1', '48', '2021-04-10 03:47:36');
INSERT INTO `ci_activity_log` VALUES ('461', '1', '48', '2021-04-10 03:47:36');
INSERT INTO `ci_activity_log` VALUES ('462', '1', '48', '2021-04-10 03:47:36');
INSERT INTO `ci_activity_log` VALUES ('463', '1', '48', '2021-04-10 03:48:13');
INSERT INTO `ci_activity_log` VALUES ('464', '1', '48', '2021-04-10 03:48:16');
INSERT INTO `ci_activity_log` VALUES ('465', '1', '48', '2021-04-10 03:48:16');
INSERT INTO `ci_activity_log` VALUES ('466', '1', '48', '2021-04-10 03:48:16');
INSERT INTO `ci_activity_log` VALUES ('467', '1', '48', '2021-04-10 03:48:16');
INSERT INTO `ci_activity_log` VALUES ('468', '1', '48', '2021-04-10 03:48:24');
INSERT INTO `ci_activity_log` VALUES ('469', '1', '48', '2021-04-10 03:48:45');
INSERT INTO `ci_activity_log` VALUES ('470', '1', '48', '2021-04-10 03:48:50');
INSERT INTO `ci_activity_log` VALUES ('471', '1', '48', '2021-04-10 03:48:55');
INSERT INTO `ci_activity_log` VALUES ('472', '1', '48', '2021-04-10 03:48:55');
INSERT INTO `ci_activity_log` VALUES ('473', '1', '48', '2021-04-10 03:48:55');
INSERT INTO `ci_activity_log` VALUES ('474', '1', '48', '2021-04-10 03:48:56');
INSERT INTO `ci_activity_log` VALUES ('475', '5', '48', '2021-04-10 14:49:03');
INSERT INTO `ci_activity_log` VALUES ('476', '4', '43', '2021-04-10 14:49:06');
INSERT INTO `ci_activity_log` VALUES ('477', '1', '43', '2021-04-10 03:49:14');
INSERT INTO `ci_activity_log` VALUES ('478', '1', '43', '2021-04-10 03:49:17');
INSERT INTO `ci_activity_log` VALUES ('479', '1', '43', '2021-04-10 03:49:17');
INSERT INTO `ci_activity_log` VALUES ('480', '1', '43', '2021-04-10 03:49:21');
INSERT INTO `ci_activity_log` VALUES ('481', '1', '43', '2021-04-10 03:49:26');
INSERT INTO `ci_activity_log` VALUES ('482', '1', '43', '2021-04-10 04:02:22');
INSERT INTO `ci_activity_log` VALUES ('483', '1', '43', '2021-04-10 04:02:37');
INSERT INTO `ci_activity_log` VALUES ('484', '1', '43', '2021-04-10 04:02:40');
INSERT INTO `ci_activity_log` VALUES ('485', '1', '43', '2021-04-10 04:02:40');
INSERT INTO `ci_activity_log` VALUES ('486', '1', '43', '2021-04-10 04:02:44');
INSERT INTO `ci_activity_log` VALUES ('487', '1', '43', '2021-04-10 04:02:48');
INSERT INTO `ci_activity_log` VALUES ('488', '1', '43', '2021-04-10 04:02:59');
INSERT INTO `ci_activity_log` VALUES ('489', '1', '43', '2021-04-10 04:03:13');
INSERT INTO `ci_activity_log` VALUES ('490', '1', '43', '2021-04-10 04:03:14');
INSERT INTO `ci_activity_log` VALUES ('491', '1', '43', '2021-04-10 04:03:15');
INSERT INTO `ci_activity_log` VALUES ('492', '1', '43', '2021-04-10 04:03:15');
INSERT INTO `ci_activity_log` VALUES ('493', '1', '43', '2021-04-10 04:03:16');
INSERT INTO `ci_activity_log` VALUES ('494', '1', '43', '2021-04-10 04:03:16');
INSERT INTO `ci_activity_log` VALUES ('495', '1', '43', '2021-04-10 04:03:17');
INSERT INTO `ci_activity_log` VALUES ('496', '1', '43', '2021-04-10 04:03:18');
INSERT INTO `ci_activity_log` VALUES ('497', '1', '43', '2021-04-10 04:03:18');
INSERT INTO `ci_activity_log` VALUES ('498', '1', '43', '2021-04-10 04:03:19');
INSERT INTO `ci_activity_log` VALUES ('499', '1', '43', '2021-04-10 04:03:20');
INSERT INTO `ci_activity_log` VALUES ('500', '1', '43', '2021-04-10 04:03:34');
INSERT INTO `ci_activity_log` VALUES ('501', '1', '43', '2021-04-10 04:03:37');
INSERT INTO `ci_activity_log` VALUES ('502', '1', '43', '2021-04-10 04:09:37');
INSERT INTO `ci_activity_log` VALUES ('503', '1', '43', '2021-04-10 04:09:43');
INSERT INTO `ci_activity_log` VALUES ('504', '1', '43', '2021-04-10 04:09:45');
INSERT INTO `ci_activity_log` VALUES ('505', '4', '43', '2021-04-12 03:35:11');
INSERT INTO `ci_activity_log` VALUES ('506', '5', '43', '2021-04-12 03:39:20');
INSERT INTO `ci_activity_log` VALUES ('507', '4', '43', '2021-04-12 04:11:40');
INSERT INTO `ci_activity_log` VALUES ('508', '4', '43', '2021-04-12 05:23:58');
INSERT INTO `ci_activity_log` VALUES ('509', '4', '43', '2021-04-13 03:06:44');
INSERT INTO `ci_activity_log` VALUES ('510', '1', '43', '2021-04-12 16:49:30');
INSERT INTO `ci_activity_log` VALUES ('511', '1', '43', '2021-04-12 16:53:50');
INSERT INTO `ci_activity_log` VALUES ('512', '1', '43', '2021-04-12 16:55:23');
INSERT INTO `ci_activity_log` VALUES ('513', '1', '43', '2021-04-12 17:04:29');
INSERT INTO `ci_activity_log` VALUES ('514', '1', '43', '2021-04-12 17:04:46');
INSERT INTO `ci_activity_log` VALUES ('515', '1', '43', '2021-04-12 17:04:51');
INSERT INTO `ci_activity_log` VALUES ('516', '1', '43', '2021-04-12 17:05:00');
INSERT INTO `ci_activity_log` VALUES ('517', '5', '43', '2021-04-13 05:35:04');
INSERT INTO `ci_activity_log` VALUES ('518', '4', '43', '2021-04-13 05:35:06');
INSERT INTO `ci_activity_log` VALUES ('519', '1', '43', '2021-04-12 20:53:50');
INSERT INTO `ci_activity_log` VALUES ('520', '1', '43', '2021-04-12 20:54:00');
INSERT INTO `ci_activity_log` VALUES ('521', '1', '43', '2021-04-12 20:56:19');
INSERT INTO `ci_activity_log` VALUES ('522', '1', '43', '2021-04-12 20:56:37');
INSERT INTO `ci_activity_log` VALUES ('523', '1', '43', '2021-04-12 20:57:03');
INSERT INTO `ci_activity_log` VALUES ('524', '1', '43', '2021-04-12 21:09:57');
INSERT INTO `ci_activity_log` VALUES ('525', '1', '43', '2021-04-12 21:10:01');
INSERT INTO `ci_activity_log` VALUES ('526', '4', '43', '2021-04-13 13:45:21');
INSERT INTO `ci_activity_log` VALUES ('527', '5', '43', '2021-04-13 13:45:29');
INSERT INTO `ci_activity_log` VALUES ('528', '4', '43', '2021-04-13 13:45:31');
INSERT INTO `ci_activity_log` VALUES ('529', '1', '43', '2021-04-13 02:48:37');
INSERT INTO `ci_activity_log` VALUES ('530', '1', '43', '2021-04-13 04:37:04');
INSERT INTO `ci_activity_log` VALUES ('531', '1', '43', '2021-04-13 04:39:56');
INSERT INTO `ci_activity_log` VALUES ('532', '1', '43', '2021-04-13 04:42:28');
INSERT INTO `ci_activity_log` VALUES ('533', '1', '43', '2021-04-13 04:46:37');
INSERT INTO `ci_activity_log` VALUES ('534', '1', '43', '2021-04-13 04:48:24');
INSERT INTO `ci_activity_log` VALUES ('535', '1', '43', '2021-04-13 04:51:09');
INSERT INTO `ci_activity_log` VALUES ('536', '1', '43', '2021-04-13 04:51:45');
INSERT INTO `ci_activity_log` VALUES ('537', '1', '43', '2021-04-13 04:54:32');
INSERT INTO `ci_activity_log` VALUES ('538', '1', '43', '2021-04-13 04:54:42');
INSERT INTO `ci_activity_log` VALUES ('539', '1', '43', '2021-04-13 04:54:52');
INSERT INTO `ci_activity_log` VALUES ('540', '1', '43', '2021-04-13 04:55:09');
INSERT INTO `ci_activity_log` VALUES ('541', '1', '43', '2021-04-13 04:55:15');
INSERT INTO `ci_activity_log` VALUES ('542', '1', '43', '2021-04-13 05:04:08');
INSERT INTO `ci_activity_log` VALUES ('543', '1', '43', '2021-04-13 05:04:43');
INSERT INTO `ci_activity_log` VALUES ('544', '1', '43', '2021-04-13 05:08:14');
INSERT INTO `ci_activity_log` VALUES ('545', '1', '43', '2021-04-13 05:14:37');
INSERT INTO `ci_activity_log` VALUES ('546', '1', '43', '2021-04-13 05:16:16');
INSERT INTO `ci_activity_log` VALUES ('547', '1', '43', '2021-04-13 05:17:27');
INSERT INTO `ci_activity_log` VALUES ('548', '1', '43', '2021-04-13 05:17:38');
INSERT INTO `ci_activity_log` VALUES ('549', '1', '43', '2021-04-13 05:17:49');
INSERT INTO `ci_activity_log` VALUES ('550', '1', '43', '2021-04-13 05:18:01');
INSERT INTO `ci_activity_log` VALUES ('551', '1', '43', '2021-04-13 05:18:39');
INSERT INTO `ci_activity_log` VALUES ('552', '1', '43', '2021-04-13 05:21:04');
INSERT INTO `ci_activity_log` VALUES ('553', '1', '43', '2021-04-13 05:25:34');
INSERT INTO `ci_activity_log` VALUES ('554', '1', '43', '2021-04-13 05:25:42');
INSERT INTO `ci_activity_log` VALUES ('555', '1', '43', '2021-04-13 05:25:50');
INSERT INTO `ci_activity_log` VALUES ('556', '1', '43', '2021-04-13 05:26:51');
INSERT INTO `ci_activity_log` VALUES ('557', '1', '43', '2021-04-13 05:27:19');
INSERT INTO `ci_activity_log` VALUES ('558', '1', '43', '2021-04-13 05:27:52');
INSERT INTO `ci_activity_log` VALUES ('559', '1', '43', '2021-04-13 05:39:40');
INSERT INTO `ci_activity_log` VALUES ('560', '1', '43', '2021-04-13 05:41:26');
INSERT INTO `ci_activity_log` VALUES ('561', '1', '43', '2021-04-13 05:43:56');
INSERT INTO `ci_activity_log` VALUES ('562', '1', '43', '2021-04-13 05:44:47');
INSERT INTO `ci_activity_log` VALUES ('563', '5', '43', '2021-04-13 16:50:50');
INSERT INTO `ci_activity_log` VALUES ('564', '4', '43', '2021-04-13 16:50:52');
INSERT INTO `ci_activity_log` VALUES ('565', '1', '43', '2021-04-13 05:53:22');
INSERT INTO `ci_activity_log` VALUES ('566', '1', '43', '2021-04-13 05:58:18');
INSERT INTO `ci_activity_log` VALUES ('567', '1', '43', '2021-04-13 06:04:37');
INSERT INTO `ci_activity_log` VALUES ('568', '1', '43', '2021-04-13 06:05:03');
INSERT INTO `ci_activity_log` VALUES ('569', '1', '43', '2021-04-13 06:06:16');
INSERT INTO `ci_activity_log` VALUES ('570', '1', '43', '2021-04-13 06:07:13');
INSERT INTO `ci_activity_log` VALUES ('571', '1', '43', '2021-04-13 06:26:00');
INSERT INTO `ci_activity_log` VALUES ('572', '1', '43', '2021-04-13 06:26:45');
INSERT INTO `ci_activity_log` VALUES ('573', '1', '43', '2021-04-13 06:27:30');
INSERT INTO `ci_activity_log` VALUES ('574', '1', '43', '2021-04-13 06:28:46');
INSERT INTO `ci_activity_log` VALUES ('575', '1', '43', '2021-04-13 06:30:13');
INSERT INTO `ci_activity_log` VALUES ('576', '1', '43', '2021-04-13 06:30:23');
INSERT INTO `ci_activity_log` VALUES ('577', '1', '43', '2021-04-13 06:31:29');
INSERT INTO `ci_activity_log` VALUES ('578', '1', '43', '2021-04-13 06:31:35');
INSERT INTO `ci_activity_log` VALUES ('579', '1', '43', '2021-04-13 06:31:43');
INSERT INTO `ci_activity_log` VALUES ('580', '1', '43', '2021-04-13 06:35:47');
INSERT INTO `ci_activity_log` VALUES ('581', '1', '43', '2021-04-13 06:35:50');
INSERT INTO `ci_activity_log` VALUES ('582', '1', '43', '2021-04-13 06:35:52');
INSERT INTO `ci_activity_log` VALUES ('583', '1', '43', '2021-04-13 06:35:55');
INSERT INTO `ci_activity_log` VALUES ('584', '1', '43', '2021-04-13 06:43:12');
INSERT INTO `ci_activity_log` VALUES ('585', '1', '43', '2021-04-13 06:43:16');
INSERT INTO `ci_activity_log` VALUES ('586', '4', '43', '2021-04-14 04:34:04');
INSERT INTO `ci_activity_log` VALUES ('587', '1', '43', '2021-04-13 18:14:54');
INSERT INTO `ci_activity_log` VALUES ('588', '4', '43', '2021-04-14 14:18:53');
INSERT INTO `ci_activity_log` VALUES ('589', '4', '43', '2021-04-14 16:36:18');
INSERT INTO `ci_activity_log` VALUES ('590', '1', '43', '2021-04-14 06:46:52');
INSERT INTO `ci_activity_log` VALUES ('591', '1', '43', '2021-04-14 06:47:03');
INSERT INTO `ci_activity_log` VALUES ('592', '1', '43', '2021-04-14 06:50:10');
INSERT INTO `ci_activity_log` VALUES ('593', '1', '43', '2021-04-14 07:00:09');
INSERT INTO `ci_activity_log` VALUES ('594', '1', '43', '2021-04-14 08:25:07');
INSERT INTO `ci_activity_log` VALUES ('595', '4', '43', '2021-04-15 11:47:19');
INSERT INTO `ci_activity_log` VALUES ('596', '4', '43', '2021-04-17 03:43:24');
INSERT INTO `ci_activity_log` VALUES ('597', '4', '43', '2021-04-17 11:12:14');
INSERT INTO `ci_activity_log` VALUES ('598', '1', '43', '2021-04-17 01:02:50');
INSERT INTO `ci_activity_log` VALUES ('599', '1', '43', '2021-04-17 01:04:03');
INSERT INTO `ci_activity_log` VALUES ('600', '1', '43', '2021-04-17 01:04:41');
INSERT INTO `ci_activity_log` VALUES ('601', '1', '43', '2021-04-17 01:48:06');
INSERT INTO `ci_activity_log` VALUES ('602', '1', '43', '2021-04-17 02:09:51');
INSERT INTO `ci_activity_log` VALUES ('603', '4', '43', '2021-04-17 23:48:18');
INSERT INTO `ci_activity_log` VALUES ('604', '4', '43', '2021-04-19 03:24:37');
INSERT INTO `ci_activity_log` VALUES ('605', '1', '43', '2021-04-18 17:38:43');
INSERT INTO `ci_activity_log` VALUES ('606', '1', '43', '2021-04-18 19:08:09');
INSERT INTO `ci_activity_log` VALUES ('607', '4', '43', '2021-04-19 13:58:30');
INSERT INTO `ci_activity_log` VALUES ('608', '4', '43', '2021-04-19 23:00:15');
INSERT INTO `ci_activity_log` VALUES ('609', '1', '43', '2021-04-19 12:31:17');
INSERT INTO `ci_activity_log` VALUES ('610', '1', '43', '2021-04-19 12:32:19');
INSERT INTO `ci_activity_log` VALUES ('611', '1', '43', '2021-04-19 12:57:56');
INSERT INTO `ci_activity_log` VALUES ('612', '1', '43', '2021-04-19 13:02:34');
INSERT INTO `ci_activity_log` VALUES ('613', '1', '43', '2021-04-19 13:11:19');
INSERT INTO `ci_activity_log` VALUES ('614', '1', '43', '2021-04-19 13:13:37');
INSERT INTO `ci_activity_log` VALUES ('615', '1', '43', '2021-04-19 13:14:42');
INSERT INTO `ci_activity_log` VALUES ('616', '1', '43', '2021-04-19 13:15:04');
INSERT INTO `ci_activity_log` VALUES ('617', '1', '43', '2021-04-19 13:15:10');
INSERT INTO `ci_activity_log` VALUES ('618', '1', '43', '2021-04-19 13:17:23');
INSERT INTO `ci_activity_log` VALUES ('619', '1', '43', '2021-04-19 13:17:42');
INSERT INTO `ci_activity_log` VALUES ('620', '1', '43', '2021-04-19 14:45:57');
INSERT INTO `ci_activity_log` VALUES ('621', '1', '43', '2021-04-19 14:46:10');
INSERT INTO `ci_activity_log` VALUES ('622', '1', '43', '2021-04-19 16:01:36');
INSERT INTO `ci_activity_log` VALUES ('623', '1', '43', '2021-04-19 16:02:59');
INSERT INTO `ci_activity_log` VALUES ('624', '1', '43', '2021-04-19 16:04:38');
INSERT INTO `ci_activity_log` VALUES ('625', '1', '43', '2021-04-19 16:04:53');
INSERT INTO `ci_activity_log` VALUES ('626', '1', '43', '2021-04-19 16:06:00');
INSERT INTO `ci_activity_log` VALUES ('627', '1', '43', '2021-04-19 16:07:46');
INSERT INTO `ci_activity_log` VALUES ('628', '1', '43', '2021-04-19 16:07:54');
INSERT INTO `ci_activity_log` VALUES ('629', '1', '43', '2021-04-19 16:08:55');
INSERT INTO `ci_activity_log` VALUES ('630', '1', '43', '2021-04-19 16:09:05');
INSERT INTO `ci_activity_log` VALUES ('631', '1', '43', '2021-04-19 16:09:09');
INSERT INTO `ci_activity_log` VALUES ('632', '1', '43', '2021-04-19 17:56:22');
INSERT INTO `ci_activity_log` VALUES ('633', '1', '43', '2021-04-19 17:57:19');
INSERT INTO `ci_activity_log` VALUES ('634', '1', '43', '2021-04-19 17:57:19');
INSERT INTO `ci_activity_log` VALUES ('635', '1', '43', '2021-04-19 17:57:19');
INSERT INTO `ci_activity_log` VALUES ('636', '1', '43', '2021-04-19 17:57:20');
INSERT INTO `ci_activity_log` VALUES ('637', '1', '43', '2021-04-19 17:57:24');
INSERT INTO `ci_activity_log` VALUES ('638', '1', '43', '2021-04-19 17:57:24');
INSERT INTO `ci_activity_log` VALUES ('639', '1', '43', '2021-04-19 17:57:24');
INSERT INTO `ci_activity_log` VALUES ('640', '1', '43', '2021-04-19 17:57:24');
INSERT INTO `ci_activity_log` VALUES ('641', '1', '43', '2021-04-19 17:57:32');
INSERT INTO `ci_activity_log` VALUES ('642', '1', '43', '2021-04-19 17:57:37');
INSERT INTO `ci_activity_log` VALUES ('643', '1', '43', '2021-04-19 17:57:37');
INSERT INTO `ci_activity_log` VALUES ('644', '1', '43', '2021-04-19 17:57:37');
INSERT INTO `ci_activity_log` VALUES ('645', '1', '43', '2021-04-19 17:57:37');
INSERT INTO `ci_activity_log` VALUES ('646', '1', '43', '2021-04-19 17:57:37');
INSERT INTO `ci_activity_log` VALUES ('647', '1', '43', '2021-04-19 17:57:44');
INSERT INTO `ci_activity_log` VALUES ('648', '1', '43', '2021-04-19 17:57:44');
INSERT INTO `ci_activity_log` VALUES ('649', '1', '43', '2021-04-19 17:57:45');
INSERT INTO `ci_activity_log` VALUES ('650', '1', '43', '2021-04-19 17:57:48');
INSERT INTO `ci_activity_log` VALUES ('651', '1', '43', '2021-04-19 17:57:48');
INSERT INTO `ci_activity_log` VALUES ('652', '1', '43', '2021-04-19 17:57:48');
INSERT INTO `ci_activity_log` VALUES ('653', '1', '43', '2021-04-19 17:57:48');
INSERT INTO `ci_activity_log` VALUES ('654', '1', '43', '2021-04-19 17:57:48');
INSERT INTO `ci_activity_log` VALUES ('655', '1', '43', '2021-04-19 17:57:49');
INSERT INTO `ci_activity_log` VALUES ('656', '1', '43', '2021-04-19 17:57:49');
INSERT INTO `ci_activity_log` VALUES ('657', '1', '43', '2021-04-19 17:57:49');
INSERT INTO `ci_activity_log` VALUES ('658', '1', '43', '2021-04-19 17:57:49');
INSERT INTO `ci_activity_log` VALUES ('659', '1', '43', '2021-04-19 17:57:49');
INSERT INTO `ci_activity_log` VALUES ('660', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('661', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('662', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('663', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('664', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('665', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('666', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('667', '1', '43', '2021-04-19 17:57:50');
INSERT INTO `ci_activity_log` VALUES ('668', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('669', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('670', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('671', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('672', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('673', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('674', '1', '43', '2021-04-19 17:58:04');
INSERT INTO `ci_activity_log` VALUES ('675', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('676', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('677', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('678', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('679', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('680', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('681', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('682', '1', '43', '2021-04-19 17:58:05');
INSERT INTO `ci_activity_log` VALUES ('683', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('684', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('685', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('686', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('687', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('688', '1', '43', '2021-04-19 17:58:06');
INSERT INTO `ci_activity_log` VALUES ('689', '1', '43', '2021-04-19 18:00:14');
INSERT INTO `ci_activity_log` VALUES ('690', '1', '43', '2021-04-19 18:00:14');
INSERT INTO `ci_activity_log` VALUES ('691', '1', '43', '2021-04-19 18:00:14');
INSERT INTO `ci_activity_log` VALUES ('692', '1', '43', '2021-04-19 18:00:14');
INSERT INTO `ci_activity_log` VALUES ('693', '1', '43', '2021-04-19 18:03:52');
INSERT INTO `ci_activity_log` VALUES ('694', '1', '43', '2021-04-19 18:03:59');
INSERT INTO `ci_activity_log` VALUES ('695', '1', '43', '2021-04-19 18:04:02');
INSERT INTO `ci_activity_log` VALUES ('696', '1', '43', '2021-04-19 18:04:05');
INSERT INTO `ci_activity_log` VALUES ('697', '1', '43', '2021-04-19 18:04:13');
INSERT INTO `ci_activity_log` VALUES ('698', '1', '43', '2021-04-19 18:04:18');
INSERT INTO `ci_activity_log` VALUES ('699', '1', '43', '2021-04-19 18:04:25');
INSERT INTO `ci_activity_log` VALUES ('700', '1', '43', '2021-04-19 18:04:37');
INSERT INTO `ci_activity_log` VALUES ('701', '1', '43', '2021-04-19 18:04:40');
INSERT INTO `ci_activity_log` VALUES ('702', '1', '43', '2021-04-19 18:04:43');
INSERT INTO `ci_activity_log` VALUES ('703', '1', '43', '2021-04-19 18:04:46');
INSERT INTO `ci_activity_log` VALUES ('704', '1', '43', '2021-04-19 18:04:49');
INSERT INTO `ci_activity_log` VALUES ('705', '1', '43', '2021-04-19 18:04:53');
INSERT INTO `ci_activity_log` VALUES ('706', '1', '43', '2021-04-19 18:04:58');
INSERT INTO `ci_activity_log` VALUES ('707', '1', '43', '2021-04-19 18:04:59');
INSERT INTO `ci_activity_log` VALUES ('708', '1', '43', '2021-04-19 18:05:36');
INSERT INTO `ci_activity_log` VALUES ('709', '1', '43', '2021-04-19 18:05:40');
INSERT INTO `ci_activity_log` VALUES ('710', '1', '43', '2021-04-19 18:06:02');
INSERT INTO `ci_activity_log` VALUES ('711', '1', '43', '2021-04-19 18:06:11');
INSERT INTO `ci_activity_log` VALUES ('712', '1', '43', '2021-04-19 18:06:13');
INSERT INTO `ci_activity_log` VALUES ('713', '1', '43', '2021-04-19 18:06:14');
INSERT INTO `ci_activity_log` VALUES ('714', '1', '43', '2021-04-19 18:06:53');
INSERT INTO `ci_activity_log` VALUES ('715', '1', '43', '2021-04-19 18:06:58');
INSERT INTO `ci_activity_log` VALUES ('716', '1', '43', '2021-04-19 18:07:01');
INSERT INTO `ci_activity_log` VALUES ('717', '1', '43', '2021-04-19 18:07:05');
INSERT INTO `ci_activity_log` VALUES ('718', '1', '43', '2021-04-19 18:07:07');
INSERT INTO `ci_activity_log` VALUES ('719', '1', '43', '2021-04-19 18:08:38');
INSERT INTO `ci_activity_log` VALUES ('720', '1', '43', '2021-04-19 18:08:41');
INSERT INTO `ci_activity_log` VALUES ('721', '1', '43', '2021-04-19 18:08:44');
INSERT INTO `ci_activity_log` VALUES ('722', '1', '43', '2021-04-19 18:11:16');
INSERT INTO `ci_activity_log` VALUES ('723', '1', '43', '2021-04-19 18:11:24');
INSERT INTO `ci_activity_log` VALUES ('724', '1', '43', '2021-04-19 18:11:47');
INSERT INTO `ci_activity_log` VALUES ('725', '1', '43', '2021-04-19 18:11:52');
INSERT INTO `ci_activity_log` VALUES ('726', '1', '43', '2021-04-19 18:12:36');
INSERT INTO `ci_activity_log` VALUES ('727', '1', '43', '2021-04-19 18:12:40');
INSERT INTO `ci_activity_log` VALUES ('728', '1', '43', '2021-04-19 18:12:47');
INSERT INTO `ci_activity_log` VALUES ('729', '1', '43', '2021-04-19 18:12:52');
INSERT INTO `ci_activity_log` VALUES ('730', '1', '43', '2021-04-19 18:12:57');
INSERT INTO `ci_activity_log` VALUES ('731', '1', '43', '2021-04-19 18:13:01');
INSERT INTO `ci_activity_log` VALUES ('732', '1', '43', '2021-04-19 18:13:03');
INSERT INTO `ci_activity_log` VALUES ('733', '1', '43', '2021-04-19 18:15:28');
INSERT INTO `ci_activity_log` VALUES ('734', '1', '43', '2021-04-19 18:23:29');
INSERT INTO `ci_activity_log` VALUES ('735', '1', '43', '2021-04-19 18:23:30');
INSERT INTO `ci_activity_log` VALUES ('736', '1', '43', '2021-04-19 18:23:45');
INSERT INTO `ci_activity_log` VALUES ('737', '1', '43', '2021-04-19 18:28:49');
INSERT INTO `ci_activity_log` VALUES ('738', '1', '43', '2021-04-19 18:28:54');
INSERT INTO `ci_activity_log` VALUES ('739', '1', '43', '2021-04-19 18:30:14');
INSERT INTO `ci_activity_log` VALUES ('740', '1', '43', '2021-04-19 18:30:20');
INSERT INTO `ci_activity_log` VALUES ('741', '1', '43', '2021-04-19 18:30:37');
INSERT INTO `ci_activity_log` VALUES ('742', '1', '43', '2021-04-19 18:30:42');
INSERT INTO `ci_activity_log` VALUES ('743', '1', '43', '2021-04-19 18:32:44');
INSERT INTO `ci_activity_log` VALUES ('744', '1', '43', '2021-04-19 18:32:49');
INSERT INTO `ci_activity_log` VALUES ('745', '1', '43', '2021-04-19 18:33:14');
INSERT INTO `ci_activity_log` VALUES ('746', '1', '43', '2021-04-19 18:33:18');
INSERT INTO `ci_activity_log` VALUES ('747', '1', '43', '2021-04-19 18:33:35');
INSERT INTO `ci_activity_log` VALUES ('748', '1', '43', '2021-04-19 18:36:11');
INSERT INTO `ci_activity_log` VALUES ('749', '1', '43', '2021-04-19 18:36:20');
INSERT INTO `ci_activity_log` VALUES ('750', '1', '43', '2021-04-19 18:37:40');
INSERT INTO `ci_activity_log` VALUES ('751', '1', '43', '2021-04-19 18:37:50');
INSERT INTO `ci_activity_log` VALUES ('752', '1', '43', '2021-04-19 18:38:16');
INSERT INTO `ci_activity_log` VALUES ('753', '1', '43', '2021-04-19 18:38:25');
INSERT INTO `ci_activity_log` VALUES ('754', '1', '43', '2021-04-19 18:39:16');
INSERT INTO `ci_activity_log` VALUES ('755', '1', '43', '2021-04-19 18:42:30');
INSERT INTO `ci_activity_log` VALUES ('756', '1', '43', '2021-04-19 18:43:30');
INSERT INTO `ci_activity_log` VALUES ('757', '1', '43', '2021-04-19 18:43:36');
INSERT INTO `ci_activity_log` VALUES ('758', '1', '43', '2021-04-19 18:43:44');
INSERT INTO `ci_activity_log` VALUES ('759', '1', '43', '2021-04-19 18:43:49');
INSERT INTO `ci_activity_log` VALUES ('760', '1', '43', '2021-04-19 18:43:58');
INSERT INTO `ci_activity_log` VALUES ('761', '1', '43', '2021-04-19 18:44:41');
INSERT INTO `ci_activity_log` VALUES ('762', '1', '43', '2021-04-19 18:44:55');
INSERT INTO `ci_activity_log` VALUES ('763', '1', '43', '2021-04-19 18:44:58');
INSERT INTO `ci_activity_log` VALUES ('764', '1', '43', '2021-04-19 18:45:02');
INSERT INTO `ci_activity_log` VALUES ('765', '1', '43', '2021-04-19 18:45:05');
INSERT INTO `ci_activity_log` VALUES ('766', '1', '43', '2021-04-19 18:45:08');
INSERT INTO `ci_activity_log` VALUES ('767', '1', '43', '2021-04-19 18:46:15');
INSERT INTO `ci_activity_log` VALUES ('768', '1', '43', '2021-04-19 18:46:24');
INSERT INTO `ci_activity_log` VALUES ('769', '1', '43', '2021-04-19 18:46:32');
INSERT INTO `ci_activity_log` VALUES ('770', '4', '43', '2021-04-20 08:38:30');
INSERT INTO `ci_activity_log` VALUES ('771', '1', '43', '2021-04-19 21:38:37');
INSERT INTO `ci_activity_log` VALUES ('772', '1', '43', '2021-04-19 21:38:47');
INSERT INTO `ci_activity_log` VALUES ('773', '1', '43', '2021-04-19 21:38:48');
INSERT INTO `ci_activity_log` VALUES ('774', '1', '43', '2021-04-19 21:38:50');
INSERT INTO `ci_activity_log` VALUES ('775', '1', '43', '2021-04-19 21:38:56');
INSERT INTO `ci_activity_log` VALUES ('776', '1', '43', '2021-04-19 21:39:00');
INSERT INTO `ci_activity_log` VALUES ('777', '1', '43', '2021-04-19 21:39:02');
INSERT INTO `ci_activity_log` VALUES ('778', '4', '43', '2021-04-20 14:31:10');
INSERT INTO `ci_activity_log` VALUES ('779', '1', '43', '2021-04-20 03:31:18');
INSERT INTO `ci_activity_log` VALUES ('780', '4', '43', '2021-04-22 03:42:36');
INSERT INTO `ci_activity_log` VALUES ('781', '1', '43', '2021-04-21 16:42:43');
INSERT INTO `ci_activity_log` VALUES ('782', '1', '43', '2021-04-21 16:42:50');
INSERT INTO `ci_activity_log` VALUES ('783', '1', '43', '2021-04-21 17:52:20');
INSERT INTO `ci_activity_log` VALUES ('784', '1', '43', '2021-04-21 17:52:45');
INSERT INTO `ci_activity_log` VALUES ('785', '1', '43', '2021-04-21 17:53:00');
INSERT INTO `ci_activity_log` VALUES ('786', '1', '43', '2021-04-21 17:53:10');
INSERT INTO `ci_activity_log` VALUES ('787', '1', '43', '2021-04-21 17:53:59');
INSERT INTO `ci_activity_log` VALUES ('788', '1', '43', '2021-04-21 17:54:07');
INSERT INTO `ci_activity_log` VALUES ('789', '1', '43', '2021-04-21 17:54:22');
INSERT INTO `ci_activity_log` VALUES ('790', '4', '43', '2021-04-23 03:26:37');
INSERT INTO `ci_activity_log` VALUES ('791', '1', '43', '2021-04-22 17:25:12');
INSERT INTO `ci_activity_log` VALUES ('792', '1', '43', '2021-04-22 17:25:13');
INSERT INTO `ci_activity_log` VALUES ('793', '1', '43', '2021-04-22 18:21:30');
INSERT INTO `ci_activity_log` VALUES ('794', '1', '43', '2021-04-22 18:31:48');
INSERT INTO `ci_activity_log` VALUES ('795', '1', '43', '2021-04-22 18:31:58');
INSERT INTO `ci_activity_log` VALUES ('796', '1', '43', '2021-04-22 18:32:07');
INSERT INTO `ci_activity_log` VALUES ('797', '1', '43', '2021-04-22 18:32:33');
INSERT INTO `ci_activity_log` VALUES ('798', '1', '43', '2021-04-22 18:33:01');
INSERT INTO `ci_activity_log` VALUES ('799', '1', '43', '2021-04-22 18:33:33');
INSERT INTO `ci_activity_log` VALUES ('800', '1', '43', '2021-04-22 18:54:04');
INSERT INTO `ci_activity_log` VALUES ('801', '1', '43', '2021-04-22 19:33:38');
INSERT INTO `ci_activity_log` VALUES ('802', '4', '43', '2021-04-24 04:15:03');
INSERT INTO `ci_activity_log` VALUES ('803', '4', '43', '2021-04-24 09:20:39');
INSERT INTO `ci_activity_log` VALUES ('804', '5', '43', '2021-04-24 09:38:26');
INSERT INTO `ci_activity_log` VALUES ('805', '4', '43', '2021-04-24 09:38:28');
INSERT INTO `ci_activity_log` VALUES ('806', '5', '43', '2021-04-24 09:38:42');
INSERT INTO `ci_activity_log` VALUES ('807', '4', '43', '2021-04-24 09:38:44');
INSERT INTO `ci_activity_log` VALUES ('808', '6', '43', '2021-04-23 23:24:04');
INSERT INTO `ci_activity_log` VALUES ('809', '6', '43', '2021-04-23 23:26:47');
INSERT INTO `ci_activity_log` VALUES ('810', '6', '43', '2021-04-23 23:26:56');
INSERT INTO `ci_activity_log` VALUES ('811', '6', '43', '2021-04-23 23:27:55');
INSERT INTO `ci_activity_log` VALUES ('812', '6', '43', '2021-04-23 23:29:17');
INSERT INTO `ci_activity_log` VALUES ('813', '7', '43', '2021-04-23 23:31:43');
INSERT INTO `ci_activity_log` VALUES ('814', '5', '43', '2021-04-24 10:31:46');
INSERT INTO `ci_activity_log` VALUES ('815', '4', '43', '2021-04-24 10:31:53');
INSERT INTO `ci_activity_log` VALUES ('816', '7', '43', '2021-04-23 23:32:05');
INSERT INTO `ci_activity_log` VALUES ('817', '5', '43', '2021-04-24 10:32:09');
INSERT INTO `ci_activity_log` VALUES ('818', '4', '43', '2021-04-24 10:32:11');
INSERT INTO `ci_activity_log` VALUES ('819', '1', '43', '2021-04-24 02:27:19');
INSERT INTO `ci_activity_log` VALUES ('820', '1', '43', '2021-04-24 02:27:21');
INSERT INTO `ci_activity_log` VALUES ('821', '1', '43', '2021-04-24 02:27:32');
INSERT INTO `ci_activity_log` VALUES ('822', '1', '43', '2021-04-24 02:27:35');
INSERT INTO `ci_activity_log` VALUES ('823', '1', '43', '2021-04-24 02:27:36');
INSERT INTO `ci_activity_log` VALUES ('824', '1', '43', '2021-04-24 02:27:54');
INSERT INTO `ci_activity_log` VALUES ('825', '1', '43', '2021-04-24 02:27:57');
INSERT INTO `ci_activity_log` VALUES ('826', '1', '43', '2021-04-24 02:27:59');
INSERT INTO `ci_activity_log` VALUES ('827', '1', '43', '2021-04-24 02:40:09');
INSERT INTO `ci_activity_log` VALUES ('828', '1', '43', '2021-04-24 02:40:11');
INSERT INTO `ci_activity_log` VALUES ('829', '1', '43', '2021-04-24 02:40:11');
INSERT INTO `ci_activity_log` VALUES ('830', '1', '43', '2021-04-24 02:40:13');
INSERT INTO `ci_activity_log` VALUES ('831', '1', '43', '2021-04-24 02:40:15');
INSERT INTO `ci_activity_log` VALUES ('832', '1', '43', '2021-04-24 02:40:15');
INSERT INTO `ci_activity_log` VALUES ('833', '1', '43', '2021-04-24 02:49:30');
INSERT INTO `ci_activity_log` VALUES ('834', '1', '43', '2021-04-24 02:49:33');
INSERT INTO `ci_activity_log` VALUES ('835', '1', '43', '2021-04-24 02:49:33');
INSERT INTO `ci_activity_log` VALUES ('836', '1', '43', '2021-04-24 02:49:35');
INSERT INTO `ci_activity_log` VALUES ('837', '1', '43', '2021-04-24 02:49:36');
INSERT INTO `ci_activity_log` VALUES ('838', '1', '43', '2021-04-24 02:49:36');
INSERT INTO `ci_activity_log` VALUES ('839', '1', '43', '2021-04-24 02:50:21');
INSERT INTO `ci_activity_log` VALUES ('840', '1', '43', '2021-04-24 02:50:24');
INSERT INTO `ci_activity_log` VALUES ('841', '1', '43', '2021-04-24 02:50:24');
INSERT INTO `ci_activity_log` VALUES ('842', '1', '43', '2021-04-24 02:51:01');
INSERT INTO `ci_activity_log` VALUES ('843', '1', '43', '2021-04-24 02:51:04');
INSERT INTO `ci_activity_log` VALUES ('844', '1', '43', '2021-04-24 02:51:05');
INSERT INTO `ci_activity_log` VALUES ('845', '1', '43', '2021-04-24 02:51:08');
INSERT INTO `ci_activity_log` VALUES ('846', '1', '43', '2021-04-24 02:58:07');
INSERT INTO `ci_activity_log` VALUES ('847', '1', '43', '2021-04-24 02:58:14');
INSERT INTO `ci_activity_log` VALUES ('848', '1', '43', '2021-04-24 02:58:14');
INSERT INTO `ci_activity_log` VALUES ('849', '1', '43', '2021-04-24 03:02:49');
INSERT INTO `ci_activity_log` VALUES ('850', '1', '43', '2021-04-24 03:02:53');
INSERT INTO `ci_activity_log` VALUES ('851', '1', '43', '2021-04-24 03:02:53');
INSERT INTO `ci_activity_log` VALUES ('852', '1', '43', '2021-04-24 03:29:50');
INSERT INTO `ci_activity_log` VALUES ('853', '1', '43', '2021-04-24 03:29:54');
INSERT INTO `ci_activity_log` VALUES ('854', '1', '43', '2021-04-24 03:29:54');
INSERT INTO `ci_activity_log` VALUES ('855', '1', '43', '2021-04-24 03:29:55');
INSERT INTO `ci_activity_log` VALUES ('856', '1', '43', '2021-04-24 03:30:04');
INSERT INTO `ci_activity_log` VALUES ('857', '1', '43', '2021-04-24 03:30:04');
INSERT INTO `ci_activity_log` VALUES ('858', '1', '43', '2021-04-24 03:30:06');
INSERT INTO `ci_activity_log` VALUES ('859', '1', '43', '2021-04-24 03:30:09');
INSERT INTO `ci_activity_log` VALUES ('860', '4', '43', '2021-04-24 17:40:31');
INSERT INTO `ci_activity_log` VALUES ('861', '4', '43', '2021-04-24 23:20:50');
INSERT INTO `ci_activity_log` VALUES ('862', '4', '43', '2021-04-25 06:23:35');
INSERT INTO `ci_activity_log` VALUES ('863', '1', '43', '2021-04-24 19:23:42');
INSERT INTO `ci_activity_log` VALUES ('864', '1', '43', '2021-04-24 19:23:51');
INSERT INTO `ci_activity_log` VALUES ('865', '1', '43', '2021-04-24 19:23:57');
INSERT INTO `ci_activity_log` VALUES ('866', '1', '43', '2021-04-24 19:24:06');
INSERT INTO `ci_activity_log` VALUES ('867', '1', '43', '2021-04-24 19:24:13');
INSERT INTO `ci_activity_log` VALUES ('868', '1', '43', '2021-04-24 19:24:21');
INSERT INTO `ci_activity_log` VALUES ('869', '4', '43', '2021-04-26 03:21:31');
INSERT INTO `ci_activity_log` VALUES ('870', '5', '43', '2021-04-26 04:17:17');
INSERT INTO `ci_activity_log` VALUES ('871', '4', '43', '2021-04-26 04:17:49');
INSERT INTO `ci_activity_log` VALUES ('872', '4', '43', '2021-04-28 04:10:34');
INSERT INTO `ci_activity_log` VALUES ('873', '4', '43', '2021-04-29 23:54:12');
INSERT INTO `ci_activity_log` VALUES ('874', '4', '43', '2021-04-30 03:36:01');
INSERT INTO `ci_activity_log` VALUES ('875', '4', '43', '2021-05-01 01:17:35');
INSERT INTO `ci_activity_log` VALUES ('876', '4', '43', '2021-05-01 05:50:37');
INSERT INTO `ci_activity_log` VALUES ('877', '4', '43', '2021-05-01 18:41:15');
INSERT INTO `ci_activity_log` VALUES ('878', '1', '43', '2021-05-01 08:19:17');
INSERT INTO `ci_activity_log` VALUES ('879', '5', '43', '2021-05-01 19:20:36');
INSERT INTO `ci_activity_log` VALUES ('880', '4', '50', '2021-05-01 19:20:43');
INSERT INTO `ci_activity_log` VALUES ('881', '7', '50', '2021-05-01 08:21:02');
INSERT INTO `ci_activity_log` VALUES ('882', '5', '50', '2021-05-01 19:21:07');
INSERT INTO `ci_activity_log` VALUES ('883', '4', '50', '2021-05-01 19:21:13');
INSERT INTO `ci_activity_log` VALUES ('884', '4', '43', '2021-05-03 03:03:35');
INSERT INTO `ci_activity_log` VALUES ('885', '4', '43', '2021-05-03 16:04:35');
INSERT INTO `ci_activity_log` VALUES ('886', '1', '43', '2021-05-03 05:08:28');
INSERT INTO `ci_activity_log` VALUES ('887', '1', '43', '2021-05-03 05:10:04');
INSERT INTO `ci_activity_log` VALUES ('888', '1', '43', '2021-05-03 05:19:08');
INSERT INTO `ci_activity_log` VALUES ('889', '1', '43', '2021-05-03 05:21:17');
INSERT INTO `ci_activity_log` VALUES ('890', '1', '43', '2021-05-03 05:22:50');
INSERT INTO `ci_activity_log` VALUES ('891', '1', '43', '2021-05-03 05:23:12');
INSERT INTO `ci_activity_log` VALUES ('892', '1', '43', '2021-05-03 05:25:36');
INSERT INTO `ci_activity_log` VALUES ('893', '1', '43', '2021-05-03 05:26:13');
INSERT INTO `ci_activity_log` VALUES ('894', '1', '43', '2021-05-03 05:28:23');
INSERT INTO `ci_activity_log` VALUES ('895', '1', '43', '2021-05-03 05:29:07');
INSERT INTO `ci_activity_log` VALUES ('896', '1', '43', '2021-05-03 05:29:15');
INSERT INTO `ci_activity_log` VALUES ('897', '1', '43', '2021-05-03 05:29:39');
INSERT INTO `ci_activity_log` VALUES ('898', '1', '43', '2021-05-03 05:29:41');
INSERT INTO `ci_activity_log` VALUES ('899', '1', '43', '2021-05-03 05:32:07');
INSERT INTO `ci_activity_log` VALUES ('900', '1', '43', '2021-05-03 05:32:10');
INSERT INTO `ci_activity_log` VALUES ('901', '1', '43', '2021-05-03 05:32:17');
INSERT INTO `ci_activity_log` VALUES ('902', '1', '43', '2021-05-03 05:32:21');
INSERT INTO `ci_activity_log` VALUES ('903', '1', '43', '2021-05-03 05:32:26');
INSERT INTO `ci_activity_log` VALUES ('904', '1', '43', '2021-05-03 05:32:32');
INSERT INTO `ci_activity_log` VALUES ('905', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('906', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('907', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('908', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('909', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('910', '1', '43', '2021-05-03 05:41:30');
INSERT INTO `ci_activity_log` VALUES ('911', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('912', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('913', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('914', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('915', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('916', '1', '43', '2021-05-03 05:41:37');
INSERT INTO `ci_activity_log` VALUES ('917', '1', '43', '2021-05-03 05:44:00');
INSERT INTO `ci_activity_log` VALUES ('918', '1', '43', '2021-05-03 05:44:09');
INSERT INTO `ci_activity_log` VALUES ('919', '1', '43', '2021-05-03 05:45:14');
INSERT INTO `ci_activity_log` VALUES ('920', '1', '43', '2021-05-03 05:45:17');
INSERT INTO `ci_activity_log` VALUES ('921', '1', '43', '2021-05-03 05:45:19');
INSERT INTO `ci_activity_log` VALUES ('922', '1', '43', '2021-05-03 05:45:34');
INSERT INTO `ci_activity_log` VALUES ('923', '1', '43', '2021-05-03 05:47:22');
INSERT INTO `ci_activity_log` VALUES ('924', '1', '43', '2021-05-03 05:47:24');
INSERT INTO `ci_activity_log` VALUES ('925', '1', '43', '2021-05-03 05:47:33');
INSERT INTO `ci_activity_log` VALUES ('926', '1', '43', '2021-05-03 05:47:54');
INSERT INTO `ci_activity_log` VALUES ('927', '1', '43', '2021-05-03 05:47:56');
INSERT INTO `ci_activity_log` VALUES ('928', '1', '43', '2021-05-03 05:48:23');
INSERT INTO `ci_activity_log` VALUES ('929', '1', '43', '2021-05-03 06:08:54');
INSERT INTO `ci_activity_log` VALUES ('930', '1', '43', '2021-05-03 06:09:05');
INSERT INTO `ci_activity_log` VALUES ('931', '1', '43', '2021-05-03 06:17:11');
INSERT INTO `ci_activity_log` VALUES ('932', '1', '43', '2021-05-03 06:17:39');
INSERT INTO `ci_activity_log` VALUES ('933', '1', '43', '2021-05-03 06:19:27');
INSERT INTO `ci_activity_log` VALUES ('934', '4', '43', '2021-05-03 23:29:57');
INSERT INTO `ci_activity_log` VALUES ('935', '4', '43', '2021-05-04 02:44:15');
INSERT INTO `ci_activity_log` VALUES ('936', '1', '43', '2021-05-03 16:42:44');
INSERT INTO `ci_activity_log` VALUES ('937', '1', '43', '2021-05-03 17:15:09');
INSERT INTO `ci_activity_log` VALUES ('938', '1', '43', '2021-05-03 17:15:13');
INSERT INTO `ci_activity_log` VALUES ('939', '1', '43', '2021-05-03 17:17:28');
INSERT INTO `ci_activity_log` VALUES ('940', '1', '43', '2021-05-03 17:21:42');
INSERT INTO `ci_activity_log` VALUES ('941', '1', '43', '2021-05-03 17:22:36');
INSERT INTO `ci_activity_log` VALUES ('942', '1', '43', '2021-05-03 17:23:48');
INSERT INTO `ci_activity_log` VALUES ('943', '1', '43', '2021-05-03 17:23:51');
INSERT INTO `ci_activity_log` VALUES ('944', '1', '43', '2021-05-03 17:24:05');
INSERT INTO `ci_activity_log` VALUES ('945', '1', '43', '2021-05-03 17:24:11');
INSERT INTO `ci_activity_log` VALUES ('946', '1', '43', '2021-05-03 17:25:37');
INSERT INTO `ci_activity_log` VALUES ('947', '1', '43', '2021-05-03 17:26:21');
INSERT INTO `ci_activity_log` VALUES ('948', '1', '43', '2021-05-03 17:28:43');
INSERT INTO `ci_activity_log` VALUES ('949', '1', '43', '2021-05-03 17:30:38');
INSERT INTO `ci_activity_log` VALUES ('950', '1', '43', '2021-05-03 17:46:01');
INSERT INTO `ci_activity_log` VALUES ('951', '1', '43', '2021-05-03 17:46:03');
INSERT INTO `ci_activity_log` VALUES ('952', '1', '43', '2021-05-03 17:46:13');
INSERT INTO `ci_activity_log` VALUES ('953', '4', '43', '2021-05-04 15:25:50');
INSERT INTO `ci_activity_log` VALUES ('954', '1', '43', '2021-05-04 06:15:05');
INSERT INTO `ci_activity_log` VALUES ('955', '1', '43', '2021-05-04 07:14:04');
INSERT INTO `ci_activity_log` VALUES ('956', '1', '43', '2021-05-04 07:14:04');
INSERT INTO `ci_activity_log` VALUES ('957', '1', '43', '2021-05-04 07:14:36');
INSERT INTO `ci_activity_log` VALUES ('958', '1', '43', '2021-05-04 07:14:37');
INSERT INTO `ci_activity_log` VALUES ('959', '4', '43', '2021-05-05 02:44:50');
INSERT INTO `ci_activity_log` VALUES ('960', '5', '43', '2021-05-05 04:27:12');
INSERT INTO `ci_activity_log` VALUES ('961', '4', '43', '2021-05-05 04:27:28');
INSERT INTO `ci_activity_log` VALUES ('962', '5', '43', '2021-05-05 04:29:01');
INSERT INTO `ci_activity_log` VALUES ('963', '4', '43', '2021-05-05 04:29:03');
INSERT INTO `ci_activity_log` VALUES ('964', '5', '43', '2021-05-05 04:33:54');
INSERT INTO `ci_activity_log` VALUES ('965', '4', '43', '2021-05-05 04:34:12');
INSERT INTO `ci_activity_log` VALUES ('966', '1', '43', '2021-05-04 17:38:07');
INSERT INTO `ci_activity_log` VALUES ('967', '1', '43', '2021-05-04 17:38:16');
INSERT INTO `ci_activity_log` VALUES ('968', '1', '43', '2021-05-04 17:38:18');
INSERT INTO `ci_activity_log` VALUES ('969', '4', '43', '2021-05-05 14:55:14');
INSERT INTO `ci_activity_log` VALUES ('970', '5', '43', '2021-05-05 15:19:32');
INSERT INTO `ci_activity_log` VALUES ('971', '4', '43', '2021-05-05 15:20:04');
INSERT INTO `ci_activity_log` VALUES ('972', '4', '43', '2021-05-05 18:12:10');
INSERT INTO `ci_activity_log` VALUES ('973', '6', '43', '2021-05-05 09:07:18');
INSERT INTO `ci_activity_log` VALUES ('974', '6', '43', '2021-05-05 09:07:35');
INSERT INTO `ci_activity_log` VALUES ('975', '6', '43', '2021-05-05 09:13:56');
INSERT INTO `ci_activity_log` VALUES ('976', '6', '43', '2021-05-05 09:18:03');
INSERT INTO `ci_activity_log` VALUES ('977', '5', '43', '2021-05-05 20:20:07');
INSERT INTO `ci_activity_log` VALUES ('978', '4', '43', '2021-05-05 20:20:47');
INSERT INTO `ci_activity_log` VALUES ('979', '4', '43', '2021-05-06 03:45:18');
INSERT INTO `ci_activity_log` VALUES ('980', '6', '43', '2021-05-05 16:46:00');
INSERT INTO `ci_activity_log` VALUES ('981', '5', '43', '2021-05-06 03:46:24');
INSERT INTO `ci_activity_log` VALUES ('982', '4', '53', '2021-05-06 03:46:30');
INSERT INTO `ci_activity_log` VALUES ('983', '1', '53', '2021-05-05 16:46:36');
INSERT INTO `ci_activity_log` VALUES ('984', '1', '53', '2021-05-05 16:46:42');
INSERT INTO `ci_activity_log` VALUES ('985', '1', '53', '2021-05-05 16:46:45');
INSERT INTO `ci_activity_log` VALUES ('986', '1', '53', '2021-05-05 16:46:47');
INSERT INTO `ci_activity_log` VALUES ('987', '5', '53', '2021-05-06 03:46:48');
INSERT INTO `ci_activity_log` VALUES ('988', '4', '43', '2021-05-06 03:46:50');
INSERT INTO `ci_activity_log` VALUES ('989', '5', '43', '2021-05-06 03:57:23');
INSERT INTO `ci_activity_log` VALUES ('990', '4', '43', '2021-05-06 03:57:25');
INSERT INTO `ci_activity_log` VALUES ('991', '6', '43', '2021-05-05 17:01:07');
INSERT INTO `ci_activity_log` VALUES ('992', '4', '43', '2021-05-06 22:06:20');
INSERT INTO `ci_activity_log` VALUES ('993', '4', '43', '2021-05-07 03:13:10');
INSERT INTO `ci_activity_log` VALUES ('994', '1', '43', '2021-05-06 18:31:43');
INSERT INTO `ci_activity_log` VALUES ('995', '1', '43', '2021-05-06 18:31:46');
INSERT INTO `ci_activity_log` VALUES ('996', '1', '43', '2021-05-06 18:52:51');
INSERT INTO `ci_activity_log` VALUES ('997', '1', '43', '2021-05-06 19:03:56');
INSERT INTO `ci_activity_log` VALUES ('998', '1', '43', '2021-05-06 19:04:56');
INSERT INTO `ci_activity_log` VALUES ('999', '1', '43', '2021-05-06 19:04:59');
INSERT INTO `ci_activity_log` VALUES ('1000', '1', '43', '2021-05-06 19:05:15');
INSERT INTO `ci_activity_log` VALUES ('1001', '1', '43', '2021-05-06 19:05:22');
INSERT INTO `ci_activity_log` VALUES ('1002', '1', '43', '2021-05-06 19:07:41');
INSERT INTO `ci_activity_log` VALUES ('1003', '1', '43', '2021-05-06 19:07:53');
INSERT INTO `ci_activity_log` VALUES ('1004', '1', '43', '2021-05-06 19:52:22');
INSERT INTO `ci_activity_log` VALUES ('1005', '1', '43', '2021-05-06 19:54:23');
INSERT INTO `ci_activity_log` VALUES ('1006', '1', '43', '2021-05-06 19:54:49');
INSERT INTO `ci_activity_log` VALUES ('1007', '1', '43', '2021-05-06 19:55:05');
INSERT INTO `ci_activity_log` VALUES ('1008', '1', '43', '2021-05-06 19:55:09');
INSERT INTO `ci_activity_log` VALUES ('1009', '1', '43', '2021-05-06 19:59:36');
INSERT INTO `ci_activity_log` VALUES ('1010', '1', '43', '2021-05-06 19:59:50');
INSERT INTO `ci_activity_log` VALUES ('1011', '1', '43', '2021-05-06 20:50:30');
INSERT INTO `ci_activity_log` VALUES ('1012', '1', '43', '2021-05-06 20:50:41');
INSERT INTO `ci_activity_log` VALUES ('1013', '1', '43', '2021-05-06 20:57:09');
INSERT INTO `ci_activity_log` VALUES ('1014', '1', '43', '2021-05-06 21:02:30');
INSERT INTO `ci_activity_log` VALUES ('1015', '1', '43', '2021-05-06 21:02:44');
INSERT INTO `ci_activity_log` VALUES ('1016', '1', '43', '2021-05-06 21:04:45');
INSERT INTO `ci_activity_log` VALUES ('1017', '1', '43', '2021-05-06 21:07:48');
INSERT INTO `ci_activity_log` VALUES ('1018', '1', '43', '2021-05-06 21:12:27');
INSERT INTO `ci_activity_log` VALUES ('1019', '1', '43', '2021-05-06 21:12:38');
INSERT INTO `ci_activity_log` VALUES ('1020', '1', '43', '2021-05-06 21:13:48');
INSERT INTO `ci_activity_log` VALUES ('1021', '1', '43', '2021-05-06 21:13:52');
INSERT INTO `ci_activity_log` VALUES ('1022', '1', '43', '2021-05-06 21:17:09');
INSERT INTO `ci_activity_log` VALUES ('1023', '1', '43', '2021-05-06 21:17:13');
INSERT INTO `ci_activity_log` VALUES ('1024', '1', '43', '2021-05-06 21:17:15');
INSERT INTO `ci_activity_log` VALUES ('1025', '1', '43', '2021-05-06 21:27:02');
INSERT INTO `ci_activity_log` VALUES ('1026', '1', '43', '2021-05-06 21:27:31');

-- ----------------------------
-- Table structure for `ci_activity_status`
-- ----------------------------
DROP TABLE IF EXISTS `ci_activity_status`;
CREATE TABLE `ci_activity_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_activity_status
-- ----------------------------
INSERT INTO `ci_activity_status` VALUES ('1', 'User Created');
INSERT INTO `ci_activity_status` VALUES ('2', 'User Edited');
INSERT INTO `ci_activity_status` VALUES ('3', 'User Deleted');
INSERT INTO `ci_activity_status` VALUES ('4', 'Login');
INSERT INTO `ci_activity_status` VALUES ('5', 'Logout');
INSERT INTO `ci_activity_status` VALUES ('6', 'Profile Updated');
INSERT INTO `ci_activity_status` VALUES ('7', 'Password Updated');
INSERT INTO `ci_activity_status` VALUES ('8', 'User Group Created');
INSERT INTO `ci_activity_status` VALUES ('9', 'User Group Edited');
INSERT INTO `ci_activity_status` VALUES ('10', 'User Group Deleted');
INSERT INTO `ci_activity_status` VALUES ('11', 'Setting Updated');
INSERT INTO `ci_activity_status` VALUES ('12', 'Customer Edited');
INSERT INTO `ci_activity_status` VALUES ('13', 'Customer Deleted');
INSERT INTO `ci_activity_status` VALUES ('14', 'Request Edited');
INSERT INTO `ci_activity_status` VALUES ('15', 'Request Deleted');
INSERT INTO `ci_activity_status` VALUES ('16', 'Online-Payment Edited');
INSERT INTO `ci_activity_status` VALUES ('17', 'Online-Payment Deleted');
INSERT INTO `ci_activity_status` VALUES ('18', 'Online-Payments Exported');
INSERT INTO `ci_activity_status` VALUES ('19', 'Requests Exported');
INSERT INTO `ci_activity_status` VALUES ('20', 'Customers Exported');
INSERT INTO `ci_activity_status` VALUES ('21', 'Request Email Template Updated');
INSERT INTO `ci_activity_status` VALUES ('22', 'Online-Payment Email Template Updated');
INSERT INTO `ci_activity_status` VALUES ('23', 'Notes Deleted');

-- ----------------------------
-- Table structure for `ci_customers`
-- ----------------------------
DROP TABLE IF EXISTS `ci_customers`;
CREATE TABLE `ci_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_customers
-- ----------------------------
INSERT INTO `ci_customers` VALUES ('35', '', 'Terrence ', 'Licorish ', 'Teachny8@gmail.com', '718909752', '', '', '', '2021-01-27 10:01:45', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('34', '', 'Kemi', 'Desalu', 'Kydesalu@gmail.com', '3472073976', '', '', '', '2021-01-27 09:01:03', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('32', '', 'Mary', 'Garrido', 'magib7@aol.com', '3478588006', '', '', '', '2021-01-27 07:01:04', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('33', '', 'Joseph', 'Santos', 'jojizzle04js@yahoo.com', '6314139390', '', '', '', '2021-01-27 08:01:39', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('31', '', 'Sofa', 'Mustafaj', 'Sofiabroker@gmail.com', '9175533600', '', '', '', '2021-01-27 05:01:49', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('29', '', 'John', 'Custin', 'jocust100@yah00.com', '340-201-3318', '', '', '', '2021-01-27 12:01:18', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('30', '', 'Tina', 'Scarborough', 'tscarbor1@juno.com', '5164568345', '', '', '', '2021-01-27 02:01:27', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('27', '', 'Judith', 'Sully ', 'Judiths@gmail.com', '3476860631', '11238', '', '', '2021-01-26 09:01:47', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('26', '', 'rachel', 'wilen', 'rachel@gempawn.net', '5162638200', '11803-1524', '', '', '2021-01-26 04:01:54', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('25', '', 'Michael ', 'Feliciano ', 'Salvation20bx@icloud.com', '7188259737', '10457', '', '', '2021-01-26 03:01:53', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('115', '', '', '', '', '', 'TEST', '', '', '2021-02-03 03:02:39', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('21', '', 'Gaelle', 'closeille', 'louisgiselle37@gmail.com', '13476176057', '11226', '', '', '2021-01-25 05:01:29', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('23', '', 'Raenelle', 'Adams', 'raenellea@gmail.com', '3474527280', '11434', '', '', '2021-01-25 05:01:47', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('36', '', 'John', 'Brown', 'Brownj1550@live.com', '3474960456', '', '', '', '2021-01-27 11:01:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('37', '', 'Cassilda ', 'Smith', 'mrsjripley@gmail.com', '9172250776', '', '', '', '2021-01-27 11:01:49', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('38', '', 'Gessika ', 'Fede', 'Sexydlover@gmail.com', '7184157288', '', '', '', '2021-01-28 05:01:01', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('39', '', 'Judith', 'Sully', 'judithsully@gmail.com', '7181234567', '', '', '', '2021-01-28 05:01:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('40', '', 'Denise ', 'Cousins ', 'Dcousinsgh@yahoo.com', '9142479222', '', '', '', '2021-01-28 05:01:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('41', '', 'Jose', 'Vega', 'Jvega1019@gmail.com', '347-659-4559', '', '', '', '2021-01-28 06:01:00', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('42', '', 'Joseph', 'Gargiulo', 'joeg19@optonline.net', '5164511374', '', '', '', '2021-01-28 08:01:57', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('43', '', 'LUCY', 'MARTINEZ', 'LMartin413@gmail.com', '347-622-4297', '', '', '', '2021-01-28 08:01:46', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('44', '', 'Tamara', 'Richey', 'tamarat34@hotmail.com', '3478739968', '', '', '', '2021-01-29 05:01:38', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('45', '', 'Andrea', 'Graham', 'jmom4scholars@gmail.com', '646-250-7544', '', '', '', '2021-01-29 06:01:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('46', '', 'Mohamed', 'Hegazy', 'Mohamed_hegazyv@yahoo.com', '3477813277', '', '', '', '2021-01-29 06:01:45', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('47', '', 'Leif ', 'Rosen', 'nyleif72@gmail.com', '5165437621', '', '', '', '2021-01-29 06:01:25', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('48', '', 'Sarah', 'Logunleko', 'slogunleko@hotmail.com', '9177280277', '', '', '', '2021-01-29 07:01:38', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('49', '', 'Christopher', 'Bautista', 'Chris.anthony.bautista@gmail.com', '3475721504', '', '', '', '2021-01-29 07:01:36', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('50', '', 'Arthur', 'Scott', 'Arthurscott@ymail.com', '917-5302827', '', '', '', '2021-01-29 07:01:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('51', '', 'Jonathan', 'Castrovilla', 'joncastrovilla@gmail.com', '5166997012', '', '', '', '2021-01-29 07:01:34', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('52', '', 'Mariana ', 'Leon', 'Aleon_85@live.com', '9174828408', '', '', '', '2021-01-29 07:01:16', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('53', '', 'Jordan', 'Fuentes', 'Jofuentes90@gmail.com', '9178049460', '10032', '', '', '2021-01-29 07:01:52', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('54', '', 'Debra', 'Turner', 'titanent@aol.com', '7184154859', '', '', '', '2021-01-29 07:01:54', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('55', '', 'Kevin ', 'campbell', 'blessman777@yahoo.com', '6464074173', '', '', '', '2021-01-29 07:01:25', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('56', '', 'Elizabeth', 'Grey-Pardo', 'lizardgrey@icloud.com', '917-992-2343', '', '', '', '2021-01-29 07:01:53', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('57', '', 'Miguel', 'Reyes', 'miguelreyes1090@gmail.com', '6466182428', '', '', '', '2021-01-29 07:01:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('58', '', 'Keon', 'Maule', 'Keonmaule@yahoo.com', '6462560531', '', '', '', '2021-01-29 08:01:41', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('59', '', 'Robert', 'Capers', 'Capers319@gmail.com', '6464109173', '', '', '', '2021-01-29 08:01:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('60', '', 'Brandon', 'Saunders', 'Kk4u2015@gmail.com', '7186752715', '', '', '', '2021-01-29 09:01:12', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('61', '', 'Collin', 'Palmquist', 'collin.palmquist@gmail.com', '3473044655', '', '', '', '2021-01-29 09:01:48', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('62', '', 'sharice', 'gethers', 'smgethers@yahoo.com', '9179297696', '', '', '', '2021-01-29 09:01:47', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('63', '', 'Kaveh', 'Karbasi', 'Kavehkarbasi@me.com', '5162207556', '10468', '', '', '2021-01-29 10:01:41', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('64', '', 'Arlene', 'Perez', 'APerez620@hotmail.com', '9298000409', '', '', '', '2021-01-29 10:01:21', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('65', '', 'Nelson', 'Delarosa', 'Nelson.delarosa17@yahoo.com', '6467967319', '', '', '', '2021-01-29 11:01:14', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('66', '', 'Micha ', 'Loseil', 'mloseil83@gmail.com', '3475517868', '', '', '', '2021-01-30 12:01:10', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('67', '', 'David', 'Berlin', 'david.berlin.esl@gmail.com', '7328075424', '', '', '', '2021-01-30 12:01:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('68', '', 'Desmond ', 'Malcolm ', 'Des42@optonline.net', '9178738351', '', '', '', '2021-01-30 01:01:02', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('69', '', 'Daniel', 'Delgado', 'Dandelgado1982@gmail.com', '9144148701', '10465', '', '', '2021-01-30 08:01:09', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('70', '', 'Antonio', 'gonzalez', 'pebbles19718600@gmail.com', '12034408180', '10455', '', '', '2021-01-30 09:01:28', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('71', '', 'Michele', 'Kahnis-Diaz', 'justinmishy@gmail.com', '6313173886', '', '', '', '2021-01-30 12:01:31', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('72', '', 'Jacqueline ', 'Melhado ', 'Jackiemb4@yahoo.com', '4703326543', '', '', '', '2021-01-30 03:01:23', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('73', '', 'Gherman', 'Clusan', 'puppycozie@yahoo.com', '(646)316-6677', '', '', '', '2021-01-30 03:01:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('74', '', 'Marlene ', 'Samuel ', 'kiskidee9@aol.com', '718-617-3815', '', '', '', '2021-01-30 04:01:03', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('75', '', 'Carmina', 'Cornejo', 'cubacornejo79@gmail.com', '15168085573', '', '', '', '2021-01-30 04:01:32', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('76', '', 'Bernice', 'Hernandez', 'Dylanmyboy1@gmail.com', '6464798598', '', '', '', '2021-01-30 06:01:49', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('77', '', 'Jocelyn', 'Lovell', 'vampiress918@gmail.com', '3475313800', '', '', '', '2021-01-30 06:01:52', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('78', '', 'Paula', 'Johnson', 'pwjohnson@nyc.rr.com', '7182177895', '', '', '', '2021-01-30 06:01:10', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('79', '', 'amit ', 'budram', 'justchillz21@gmail.com', '9178252507', '', '', '', '2021-01-30 08:01:30', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('80', '', 'Ivy', 'Knipe', 'ivy.knipe@uncommonprepcharter.org', '8083675986', '', '', '', '2021-01-30 09:01:57', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('81', '', 'Huguens', 'Legagneur', 'signaturework@gmail.com', '9298883820', '', '', '', '2021-01-30 09:01:50', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('82', '', 'Mohammed ', 'Bello', 'Mobello68@gmail.com', '6466219643', '', '', '', '2021-01-30 10:01:07', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('83', '', 'Edda', 'Estrada', 'edda1475@gmail.com', '347-5 13-1857', '', '', '', '2021-01-30 10:01:48', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('84', '', 'Kenton', 'Jenkins', 'kenton.jenkins@yahoo.com', '3472282138', '10473', '', '', '2021-01-30 11:01:19', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('85', '', 'Nida', 'Mazhar ', 'nmazhar8@gmail.com', '6468970586', '', '', '', '2021-01-31 05:01:24', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('86', '', 'Donato', 'Tenore', 'dtenore@rcn.com', '9172970710', '', '', '', '2021-01-31 04:01:11', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('87', '', 'Wanda', 'Mohsen', 'Walexander1961@gmail.com', '929 308 8113', '', '', '', '2021-02-01 02:02:01', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('88', '', 'Daiquimilda', 'Pichardo', 'daiquimilda@gmail.com', '6469611086', '', '', '', '2021-02-01 04:02:30', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('89', '', 'Daiquimilda', 'Pichardo', 'daiquimilda.pichardo@gmail.com', '6469611086', '', '', '', '2021-02-01 04:02:21', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('90', '', 'Judee', 'Carchietta', 'Judee.Carchietta@Citi.com', '914-656-1833', '', '', '', '2021-02-01 12:02:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('91', '', 'Jose', 'Cabassa', 'Jcabassa15@gmail.com', '7188100881', '', '', '', '2021-02-01 04:02:43', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('92', '', 'Shemene', 'Minter', 'shemene@aol.com', '7187819690', '', '', '', '2021-02-01 07:02:23', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('93', '', 'Suzette', 'Rivera', 'srivera777@gmail.com', '5164301316', '', '', '', '2021-02-01 07:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('94', '', 'Ashley', 'Lugo', 'ajlugo1987@gmail.com', '7187649149', '', '', '', '2021-02-01 07:02:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('95', '', 'LaShawn', 'Lindsey', 'Lshwn7@gmail.com', '6467968009', '', '', '', '2021-02-01 08:02:24', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('96', '', 'Georgette', 'Blair', 'georgetteblair1@gmail.com', '3473803762', '', '', '', '2021-02-02 12:02:07', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('97', '', 'Felicita ', 'Lopez', 'Wilflokat@aol.com', '7184444143', '', '', '', '2021-02-02 01:02:33', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('98', '', 'Katrina', 'Roberts', 'Ladymerciless81@gmail.com', '3476444239', '', '', '', '2021-02-02 10:02:13', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('99', '', 'Grant', 'Larocca', 'grantlarocca4@gmail.com', '310-869-2428', '', '', '', '2021-02-02 01:02:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('100', '', 'TRAVIS', 'GOODLEY', 'travisgee316@gmail.com', '7189300529', '', '', '', '2021-02-02 02:02:08', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('101', '', 'LAKISHA', 'STEWART', 'lakisha.stewart@yahoo.com', '9177090093', '', '', '', '2021-02-02 03:02:39', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('102', '', 'Vinetta ', 'Batten', 'Mzdeevine34@gmail.com', '3473551000', '', '', '', '2021-02-02 03:02:54', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('103', '', 'Angelina', 'Gonzalez', 'stayinmycorner@hotmail.com', '5165474769', '', '', '', '2021-02-02 06:02:40', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('104', '', 'Sheri', 'Brown', 'mspurdy38@yahoo.com', '9178373548', '', '', '', '2021-02-02 08:02:38', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('105', '', 'Pablo', 'Diaz', 'alexisdiaz0417@gmail.com', '9174001293', '', '', '', '2021-02-02 08:02:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('106', '', 'Luz', 'Betancourt', 'Genovena32@aol.com', '7326968466', '', '', '', '2021-02-02 08:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('107', '', 'Tonia', 'Williams', 'twhawes@optimum.net', '9177438582', '', '', '', '2021-02-02 09:02:11', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('108', '', 'Rudolph ', 'Peart ', 'prosperityglobalenterprise@gmail.com', '6312950477', '', '', '', '2021-02-02 09:02:31', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('109', '', 'Johanny ', 'Fondeur', 'diazjohanny0@gmail.com', '929-284-5673', '', '', '', '2021-02-02 09:02:33', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('110', '', 'Bridgette', 'Jenkins', 'buzzybee306@yahoo.com', '347 366-3473', '', '', '', '2021-02-02 11:02:02', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('111', '', 'Akeem', 'Benjamin', 'Akeembenjamin6001@gmail.com', '9294548769', '', '', '', '2021-02-02 11:02:25', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('112', '', 'Llewellyn', 'Leibert', 'LLEWLEIB1430@GMAIL.COM', '4707553779', '', '', '', '2021-02-03 12:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('113', '', 'Rosario', 'Tiburcio', 'Retravelplanner@gmail.com', '5169027978', '', '', '', '2021-02-03 01:02:24', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('114', '', 'Judith', 'TEST', 'judiths@gempawn.net', '3471234567', '', '', '', '2021-02-03 02:02:11', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('116', '', 'Carol', 'Watts johnson', 'Carolwj130@gmail.com', '7576132111', '', '', '', '2021-02-03 15:08:43', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('117', '', 'Liana', 'Kim', 'linglingstar07@gmail.com', '9144799215', '11735', '', '', '2021-02-03 16:44:07', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('118', '', 'Regina', 'Dale', 'queenhealer@gmail.com', '6467329326', '', '', '', '2021-02-03 17:37:46', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('119', '', 'Sharon', 'Belk', 'mizell2belk@gmail.com', '6467329326', '', '', '', '2021-02-03 17:52:35', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('120', '', 'Dellanira', 'Martinez-Jimenez', 'Morelola47@gmail.com', '9172931461', '', '', '', '2021-02-03 18:06:55', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('121', '', 'shanna', 'cruz', 'shannacruz77@gmail.com', '6292004312', '', '', '', '2021-02-03 19:07:34', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('122', '', 'Gregoria', 'Mejia', 'GregoriaMejia6@gmail.com', '3025978330', '10032', '', '', '2021-02-03 20:08:08', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('123', '', 'Yvonne', 'Wright', 'von3tys4me@yahoo.com', '347-742-8157', '', '', '', '2021-02-03 21:53:27', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('124', '', 'Aida', 'Tejada', 'luztejada1947@yahoo.com', '3476458532', '', '', '', '2021-02-03 23:37:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('125', '', 'Yvette', 'Miller', 'ymiller10@gmail.com', '9174824725', '', '', '', '2021-02-04 01:14:52', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('126', '', 'Rodney', 'Cherry', 'rodneycherry41@gmail.com', '17186007176', '11731', '', '', '2021-02-04 03:43:02', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('127', '', 'Rony', 'Louissaint', 'rony_louissaint@yahoo.com', '3474266888', '', '', '', '2021-02-04 04:08:16', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('128', '', 'Nicole', 'Young', 'nicole082804@gmail.com', '3472462036', '', '', '', '2021-02-04 14:44:14', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('129', '', 'Marieid', 'Rodriguez', 'Marienid.Rodriguez@gmail.com', '6469393910', '', '', '', '2021-02-04 15:04:03', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('130', '', 'Patricia', 'Davis', 'pdavis@legal-aid.org', '3478643726', '', '', '', '2021-02-04 15:31:48', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('131', '', 'lisa', 'pedroza-charles', 'lisaleediamond@yahoo.com', '7189865642', '', '', '', '2021-02-04 17:22:45', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('132', '', 'jasanne', 'odum', 'jas81070@aol.com', '6467021541', '', '', '', '2021-02-04 17:53:13', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('133', '', 'Freddie', 'Barnes', 'Freddiebarnes721@yahoo.com', '3476057636', '', '', '', '2021-02-04 18:09:59', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('134', '', 'kesha', 'britt', 'Brittkesha@yahoo.com', '3472541885', '', '', '', '2021-02-04 19:23:40', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('135', '', 'Sherald', 'Cooper', 'Sherryy5354@gmail.com', '9293269183', '', '', '', '2021-02-04 19:59:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('136', '', 'Kirstina', 'Rodriguez ', 'Kirstinaa.janeaa@icloud.com', '6469340519', '', '', '', '2021-02-04 21:44:18', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('137', '', 'Lus ', 'Fernandez ', 'Flaka.1409@icloud.com', '7188646632', '11221', '', '', '2021-02-05 00:09:18', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('138', '', 'Jill', 'Ferrone', 'Jbferrone7@gmail.com', '5162720693', '', '', '', '2021-02-05 00:50:53', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('139', '', 'Raymona', 'Pittman', 'raymonapittman@gmail.com', '3476228181', '', '', '', '2021-02-05 02:22:37', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('140', '', 'Danet', 'Cedeno', 'Danetc@aim.com', '917-564-2224', '10033', '', '', '2021-02-05 02:24:40', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('141', '', 'aaa', 'bbb', 'tech@hamparproductions.com', '1234567890', '', '', '', '2021-02-05 03:41:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('142', '', 'Holly ', 'Scipio', 'Curtis1921@gmail.com', '9149079901', '', '', '', '2021-02-05 04:11:47', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('143', '', 'Pedro', 'Gamboa', 'pgamboa0524@gmail.com', '9174886521', '07086', '', '', '2021-02-05 11:00:38', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('144', '', 'Shamica', 'Punter', 'shamicapunter1075@gmail.com', '3474695225', '', '', '', '2021-02-05 13:16:28', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('145', '', 'Tierra', 'Rivera', 'Riveratierra23@gmail.com', '6095096885', '', '', '', '2021-02-05 14:22:05', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('146', '', 'Tierra', 'Rivera', 'Riverratierra23@gmail.com', '6095096885', '', '', '', '2021-02-05 14:32:01', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('147', '', 'Deja', 'Kilpatrick ', 'Kilpatrickd21@gmail.com', '3475157757', '', '', '', '2021-02-05 14:34:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('148', '', 'Alan', 'Ransom', 'alleyal518@gmail.com', '6465913670', '', '', '', '2021-02-05 15:15:27', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('149', '', 'amina', 'abdur-razzaqel', 'ameenah@aol.com', '7183411913', '', '', '', '2021-02-05 16:12:54', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('150', '', 'Richard', 'Ortiz', 'richienicole76@gmail.com', '917-963-9017', '', '', '', '2021-02-05 18:36:19', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('151', '', 'Kevon ', 'Artz', 'kaitlinpetrashune@yahoo.com', '929-216-2720', '', '', '', '2021-02-05 19:04:18', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('152', '', 'Frances', 'Carrillo', 'fcarrillo1965@gmail.com', '3475957458', '', '', '', '2021-02-05 20:30:37', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('153', '', 'Albert', 'Capriotti', '914ajc@gmail.com', '5166683143', '', '', '', '2021-02-05 20:58:21', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('154', '', 'Genesis', 'Hiciano', 'ghiciano16@gmail.com', '7184960533', '10040', '', '', '2021-02-05 20:59:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('155', '', 'Felix', 'RODRIGUEZ', 'FRODRIGUEZ130@GMAIL.COM', '3478862051', '', '', '', '2021-02-05 21:09:43', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('156', '', 'Evan', 'Reed', 'evan@evdev.co', '9292602408', '', '', '', '2021-02-05 22:35:30', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('157', '', 'Katherine', 'Berges', 'Kathiishunz@gmail.com', '7187909761', '', '', '', '2021-02-06 15:47:55', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('158', '', 'Joseph ', 'Ortiz ', 'j.ortiz.032568@gmail.com', '7186447041', '', '', '', '2021-02-06 17:25:07', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('159', '', 'Deborah', 'Taylor', 'divadeb2001@yahoo.com', '2129201881', '', '', '', '2021-02-06 17:54:50', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('160', '', 'FRANCINE ', 'GRIFFITH', 'thresau55@gmail.com', '(917) 340-4961', '', '', '', '2021-02-06 18:27:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('161', '', 'Marilyn’', 'Jackson', 'Reneejsy7@yahoo.com', '9176923114', '', '', '', '2021-02-06 18:31:56', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('162', '', 'Maureen ', 'Vella', 'mvella1010@gmail.com', '516-356-2447', '', '', '', '2021-02-06 19:57:11', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('163', '', 'Raymond', 'Colon', 'Pucho76@me.com', '6464673733', '', '', '', '2021-02-06 20:19:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('164', '', 'Karine', 'Gilles', 'kagie22@aol.com', '(917) 348-6488', '', '', '', '2021-02-06 20:33:37', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('165', '', 'Gyssel', 'Danzine', 'Gdanzine@ymail.com', '9172941300', '', '', '', '2021-02-06 23:01:34', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('166', '', 'Colette', 'Scales', 'Colettescales@gmail.com', '2016181454', '07112', '', '', '2021-02-07 07:20:39', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('167', '', 'Santa', 'Berihuete ', 'Santy1177@aol.com', '646-281-2288', '', '', '', '2021-02-07 14:27:52', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('168', '', 'Dashawn', 'Alonzo', 'Dashawnzoe77@gmail.com', '9174975397', '10457', '', '', '2021-02-07 16:27:28', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('169', '', 'Yasmine', 'Kelly', 'Yasmine.kelly99@gmail.com', '7187304124', '11203', '', '', '2021-02-07 20:12:17', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('170', '', 'Jack', 'Toussaint', 'jjet1964@gmail.com', '3474161913', '', '', '', '2021-02-07 23:20:46', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('171', '', 'Josiah', 'Nimely', 'joblak718@yahoo.com', '9738188154', '', '', '', '2021-02-08 00:37:43', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('172', '', 'Niguel', 'Douglas', 'primehastime@gmail.com', '9293631305', '11234', '', '', '2021-02-08 05:16:04', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('173', '', 'Nicolas', 'PERRELLI', 'jperrelli@nyc.rr.com', '3477495163', '11206', '', '', '2021-02-08 12:43:56', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('174', '', 'André', 'Medford', 'andregm1021@hotmail.com', '5188676331', '', '', '', '2021-02-08 14:19:52', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('175', '', 'Amenata', 'Sillah', 'asylla95@outlook.com', '6462060757', '', '', '', '2021-02-08 15:57:40', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('176', '', 'Keanu', 'Collins', 'Collinskeanu@yahoo.com', '9145623389', '10705', '', '', '2021-02-08 16:08:28', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('177', '', 'Amabilis', 'Mosquera', 'amabilis.mosquera@gmail.com', '347-956-1831', '', '', '', '2021-02-08 16:19:17', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('178', '', 'JOHN', 'SHERWOOD', 'JOHNLSHERWOOD@OPTONLINE.NET', '914-751-9168', '', '', '', '2021-02-08 16:47:23', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('179', '', 'Brenda', 'Harris', 'raysmom1219@aol.com', '7187723087', '', '', '', '2021-02-08 16:59:02', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('180', '', 'Maria', 'Gonzalez', 'maria.gonzalezkendra@gmail.com', '(321) 576-8550', '', '', '', '2021-02-08 17:37:20', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('181', '', 'Patricia', 'Howlett', 'peg6710@yahoo.com', '2019122237', '', '', '', '2021-02-08 20:32:12', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('182', '', 'Tiffany K', 'Payne', 'tkennetta@yahoo.com', '6263670252', '', '', '', '2021-02-08 21:20:35', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('183', '', 'Andre', 'Patterson', 'pattersonandre182@gmail.com', '9292289449', '', '', '', '2021-02-08 22:28:17', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('184', '', 'Chiselle', 'Simmons mootoo', 'Chizelle2012@gmail.com', '5164459737', '', '', '', '2021-02-09 14:52:25', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('185', '', 'Shantagg', 'brown', 'shantabrown73@gmail.com', '6464319385', '', '', '', '2021-02-09 15:22:59', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('186', '', 'Kory ', 'Gittens ', 'Hfq18@icloud.com', '9292040782', '', '', '', '2021-02-09 16:52:15', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('187', '', 'Roy', 'Braithwaite', 'Sitymacbk0303@gmail.com', '5165473644', '', '', '', '2021-02-09 22:15:19', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('188', '', 'Angie', 'Flores', 'flores.angie18@gmail.com', '6319910749', '11757', '', '', '2021-02-09 23:37:13', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('189', '', 'Sharon', 'Pyle', 'Spyle11@aol.com', '9176870078', '', '', '', '2021-02-10 00:23:50', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('190', '', 'Denise', 'Brown', 'denise.denice.b16@gmail.com', '3476239454', '', '', '', '2021-02-10 00:31:46', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('191', '', 'Denise', 'Cherry', 'dmcherry20@gmail.com', '7182900717', '', '', '', '2021-02-10 12:42:51', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('192', '', 'William ', 'Fernandez', 'Familiaprimero0322@gmail.com', '347-345-9373', '', '', '', '2021-02-10 17:32:51', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('193', '', 'Trevor', 'Chamier', 'Trevorchamier@gmail.com', '6314452552', '11719', '', '', '2021-02-10 17:43:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('194', '', 'Konstantinos ', 'Mocas', 'gus.mocas1@gmail.com', '914-207-5842', '', '', '', '2021-02-10 17:46:20', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('195', '', 'Alex', 'Gray', 'Dakomplec14it@gmail.com', '2146730516', '', '', '', '2021-02-10 22:04:59', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('196', '', 'Michael ', 'Campbell', 'Www.bentleepbl@icloud.com', '9297240461', '', '', '', '2021-02-10 22:29:02', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('197', '', 'Michael ', 'Campbell ', 'Bentleepbl@icloud.com', '9297240461', '', '', '', '2021-02-10 22:30:41', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('198', '', 'Elsie', 'Chatel', 'lc6157@aol.com', '6466453454', '', '', '', '2021-02-10 22:37:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('199', '', 'Haeson', 'Chang ', 'iristhegardenview@gmail.com', '9176283109', '', '', '', '2021-02-10 22:49:14', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('200', '', 'Rameen', 'Aminzadeh', 'rameen4real@gmail.com', '4109807717', '', '', '', '2021-02-10 23:08:13', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('201', '', 'Nisha', 'Ali', 'alinisha22@yahoo.com', '7189137399', '', '', '', '2021-02-10 23:17:54', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('202', '', 'Yesenia', 'Santini', 'yesi10457@gmail.com', '7188257630', '', '', '', '2021-02-11 04:41:09', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('203', '', 'Kerna', 'Poole', 'kpoole8567@hotmail.com', '3479397352', '', '', '', '2021-02-11 16:00:38', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('204', '', 'Lushiel ', 'Brown', 'Lushielbrown33@gmail.com', '9292644478', '', '', '', '2021-02-11 17:54:14', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('205', '', 'Lushiel ', 'Brown', 'Lushiellbrown34@gmail.com', '9294501066', '', '', '', '2021-02-11 18:07:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('206', '', 'Delilah', 'Acevedo', 'chyna619@aol.com', '3475314383', '10473', '', '', '2021-02-12 06:10:09', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('207', '', 'Isaiah', 'Mason', 'Isaiahmason17@gmail.com', '3477428752', '11207', '', '', '2021-02-12 08:42:57', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('208', '', 'Tyrone', 'Jackson', 'Tyetyejack2986@gmail.com', '3472770755', '10030', '', '', '2021-02-12 08:53:59', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('209', '', 'Galves', 'Victoria', 'viki_galves@hotmsil.com', '9178853783', '', '', '', '2021-02-12 12:59:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('210', '', 'Ashley', 'Wall', 'Ashley.w.724@gmail.com', '3478200955', '', '', '', '2021-02-12 16:52:00', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('211', '', 'Rosaly', 'Santana', 'rosaly.santana@gmail.com', '9175697034', '', '', '', '2021-02-12 18:40:53', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('212', '', 'Laverne', 'Aponte', 'apontelaverne@gmail.com', '908-246-6853', '', '', '', '2021-02-12 19:29:17', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('213', '', 'Quanita', 'Hailey', 'Qhailey1@gmail.com', '5132954424', '11226', '', '', '2021-02-12 21:44:42', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('214', '', 'Constance', 'Hall', 'chefjanhall@gmail.com', '7703697718', '', '', '', '2021-02-12 22:49:57', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('215', '', 'Eddie', 'sanchez', 'broaday.4@gmail.com', '3472390445', '', '', '', '2021-02-13 06:21:36', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('216', '', 'Joseph', 'Anang', 'delakofi60@gmail.com', '4962999608', '11432-5014', '', '', '2021-02-13 10:47:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('217', '', 'Bryant', 'Alvarez', 'Bryantalvarez4242@gmail.com', '8188596784', '', '', '', '2021-02-13 14:46:20', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('218', '', 'Khadija', 'Gumaneh', 'khadijagumaneh672@gmail.com', '3472615934', '10459', '', '', '2021-02-13 15:28:16', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('219', '', 'Khadija', 'Gumaneh', 'khadija.gumaneh@bsswa.org', '3472615934', '10459', '', '', '2021-02-13 15:30:30', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('220', '', 'marvin', 'grady', 'marvingrady700@gmail.com', '6462211381', '', '', '', '2021-02-13 17:53:59', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('221', '', 'LISE', 'BLYDEN', 'LADYMOON4112@aol.com', '7189260862', '', '', '', '2021-02-13 17:58:08', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('222', '', 'Jesus', 'Velasco', 'Sarrahbi@hotmail.com', '3478803267', '', '', '', '2021-02-13 22:18:45', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('223', '', 'Lois', 'Richardson', 'Loisr0908@gmail.com', '3473599693', '11236', '', '', '2021-02-14 03:27:47', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('224', '', 'Natividad', 'Jaime ', 'lesnyjaime@yahoo.com', '3472838093', '', '', '', '2021-02-15 04:30:10', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('225', '', 'Mark', 'Lever', 'mwlever1962@gmail.com', '516-262-8087', '11553', '', '', '2021-02-15 13:39:29', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('226', '', 'Teresa', 'Lago', 'Teresa.lago28@gmail.com', '2016473917', '', '', '', '2021-02-15 15:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('227', '', 'Noelle', 'Vanmanen', 'VANMANEN.N@GMAIL.COM', '5165192541', '', '', '', '2021-02-15 16:02:00', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('228', '', 'Lisa', 'Derosso', 'lisaderosso@gmail.com', '9149200605', '', '', '', '2021-02-15 16:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('229', '', 'Robert', 'Crockett', 'Robertcrockett78@gmail.com', '3477840620', '', '', '', '2021-02-15 16:19:24', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('230', '', 'Robert', 'Crockett', 'Robertcrockett@gmail.com', '3477840620', '', '', '', '2021-02-15 16:27:45', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('231', '', 'Margaret ', 'Chin ', 'margochin2000@yahoo.com', '3476646054', '', '', '', '2021-02-15 17:58:12', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('232', '', 'charlene', 'coppedge', 'ccoppedge10031@yahoo.com', '9176534077', '', '', '', '2021-02-15 18:21:55', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('233', '', 'Mary', 'Earvolino', 'Marybe64@verizon.net', '5164458360', '', '', '', '2021-02-15 19:00:09', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('234', '', 'Regina', 'Jordan', 'rgnjrdn17@gmail.com', '9292584019', '', '', '', '2021-02-15 19:02:36', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('235', '', 'Randy', 'Reyes ', 'r.natanael.r@icloud.com', '347-6343816', '', '', '', '2021-02-15 19:28:01', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('236', '', 'Sylvia', 'Menard', 'jasminemenard26@gmail.com', '9177566664', '', '', '', '2021-02-15 20:34:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('237', '', 'Olga', 'Ortiz ', 'cortiz12882@yahoo.com', '3477853927', '', '', '', '2021-02-15 22:50:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('238', '', 'Francois', 'Blood', 'francoisblood@gmail.com', '3474919337', '10027', '', '', '2021-02-16 01:36:06', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('239', '', 'Seth', 'Berman', 'diamonds909@gmail.com', '(516) 524-3398', '11561', '', '', '2021-02-16 02:50:55', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('240', '', 'RandyDavid', 'Genil', 'randydavidg@icloud.com', '9296001100', '', '', '', '2021-02-16 15:38:00', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('241', '', 'Gilberto', 'Alvarez Castro', 'granadosxiomara9@gmail.com', '(908) 499-0389', '', '', '', '2021-02-16 15:38:33', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('242', '', 'Jovan', 'Gutierrez', 'jovan.gutierrez28@gmail.com', '9179137828', '', '', '', '2021-02-16 15:57:46', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('243', '', 'Rosa ', 'Tabat', 'ejtabar@gmail.com', '3479284749', '', '', '', '2021-02-16 16:51:22', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('244', '', 'Isadora', 'Miale', 'Fdori822@gmail.com', '5166476818', '', '', '', '2021-02-16 20:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('245', '', 'Terrell', 'Gibbs', 'tjsgibbs@gmail.com', '3479285632', '10464', '', '', '2021-02-16 20:46:30', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('246', '', 'Greg', 'Emeribe', 'beatknockaz23@gmail.com', '5167707065', '', '', '', '2021-02-16 21:04:16', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('247', '', 'agustin', 'Sarabia', 'agustin_sarabia@hotmail.com', '3329993981', '', '', '', '2021-02-16 22:17:44', '0000-00-00 00:00:00');
INSERT INTO `ci_customers` VALUES ('248', '', 'Taurye', 'Wilson', 'Livelovelife629@gmail.com', '5164397084', '', '', '', '2021-02-17 08:35:07', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `ci_general_settings`
-- ----------------------------
DROP TABLE IF EXISTS `ci_general_settings`;
CREATE TABLE `ci_general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `copyright` tinytext DEFAULT NULL,
  `email_from` varchar(100) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `recaptcha_status` int(11) NOT NULL DEFAULT 0,
  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
  `recaptcha_site_key` varchar(255) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `paypal_is_sandbox` tinyint(4) DEFAULT NULL,
  `paypal_sandbox_url` varchar(255) DEFAULT NULL,
  `paypal_live_url` varchar(255) DEFAULT NULL,
  `paypal_email` varchar(255) DEFAULT NULL,
  `paypal_cur_code` varchar(5) DEFAULT NULL,
  `stripe_secret_key` varchar(255) DEFAULT NULL,
  `stripe_publish_key` varchar(255) DEFAULT NULL,
  `default_language` varchar(255) DEFAULT NULL COMMENT 'set from the Languages section in admin side',
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_general_settings
-- ----------------------------
INSERT INTO `ci_general_settings` VALUES ('1', 'public/images/877e94d5a62773345a4416181dbe7908.png', 'public/images/631c63f71c06a8b35fd1f9f0cc190e28.png', 'CareEquity Brain Admin Panel', 'America/Adak', 'USD', 'Copyright © 2021 CareEquity Brain', 'info@domain.com', 'ssl://smtp.gmail.com', '465', 'info@domain.com', 'info@domain.com', 'https://facebook.com', 'https://twitter.com', 'https://google.com', 'https://youtube.com', 'https://linkedin.com', 'https://instagram.com', '0', '6Le0HZIUAAAAABxzALAPxfn_EvPTQEkDtxZm2OxQ', '6Le0HZIUAAAAAGlN837KsF6nbXsjZ0KeU2q', 'en', '0', '', '', '', '', '', '', 'english', '2021-03-10 02:29:52', '2021-03-10 02:29:52');

-- ----------------------------
-- Table structure for `ci_item`
-- ----------------------------
DROP TABLE IF EXISTS `ci_item`;
CREATE TABLE `ci_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_item
-- ----------------------------
INSERT INTO `ci_item` VALUES ('1', 'Jewelry');
INSERT INTO `ci_item` VALUES ('2', 'Electronics');
INSERT INTO `ci_item` VALUES ('3', 'Watches');
INSERT INTO `ci_item` VALUES ('4', 'Fashion Goods');
INSERT INTO `ci_item` VALUES ('5', 'Others');

-- ----------------------------
-- Table structure for `ci_media`
-- ----------------------------
DROP TABLE IF EXISTS `ci_media`;
CREATE TABLE `ci_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `original_filename` varchar(255) NOT NULL,
  `size` mediumtext NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_media
-- ----------------------------
INSERT INTO `ci_media` VALUES ('1', 'Request_1_Photo_0.png', './uploads/files/2021-01', 'png', 'Test1 - 1 of 1 - Crew LXL - Back.png', '506246', '1', '1');
INSERT INTO `ci_media` VALUES ('2', 'Request_1_Photo_1.png', './uploads/files/2021-01', 'png', 'Test1 - 1 of 1 - Crew LXL - Front.png', '2894397', '1', '1');
INSERT INTO `ci_media` VALUES ('3', 'Request_3_Photo_0.png', './uploads/files/2021-01', 'png', 'Artboard_10.png', '23987', '3', '1');
INSERT INTO `ci_media` VALUES ('4', 'Request_3_Photo_1.png', './uploads/files/2021-01', 'png', 'Artboard_11.png', '14457', '3', '1');
INSERT INTO `ci_media` VALUES ('5', 'Request_3_Photo_2.png', './uploads/files/2021-01', 'png', 'Artboard_12.png', '26527', '3', '1');
INSERT INTO `ci_media` VALUES ('6', 'Request_3_Receipt.xlsx', './uploads/files/2021-01', 'xlsx', 'Error List.xlsx', '9595', '3', '2');
INSERT INTO `ci_media` VALUES ('7', 'Request_4_Photo_0.jpg', './uploads/files/2021-01', 'jpg', '20190717_The_Original_ScrapBox_2982_copy_1.jpg', '3728696', '4', '1');
INSERT INTO `ci_media` VALUES ('8', 'Request_5_Photo_0.jpg', './uploads/files/2021-01', 'jpg', '20190717_The_Original_ScrapBox_2982_copy_1.jpg', '3728696', '5', '1');
INSERT INTO `ci_media` VALUES ('9', 'Request_6_Photo_0.png', './uploads/files/2021-01', 'png', 'crafter_avatar.png', '493465', '6', '1');
INSERT INTO `ci_media` VALUES ('10', 'Request_6_Receipt.pdf', './uploads/files/2021-01', 'pdf', 'Graphic Socks Print Dimensions (August 2020).pdf', '489077', '6', '2');
INSERT INTO `ci_media` VALUES ('11', 'Request_7_Photo_0.png', './uploads/files/2021-01', 'png', 'Kazoo - 1 of 10 - Crew LXL - Front.png', '5357616', '7', '1');
INSERT INTO `ci_media` VALUES ('12', 'Request_9_Photo_0.png', './uploads/files/2021-01', 'png', 'Kazoo - 1 of 10 - Crew LXL - Front.png', '5357616', '9', '1');
INSERT INTO `ci_media` VALUES ('13', 'Request_10_Photo_0.tiff', './uploads/files/2021-01', 'tiff', 'Custom-SM-Front.tiff', '1520568', '10', '1');
INSERT INTO `ci_media` VALUES ('14', 'Request_19_Photo_0.png', './uploads/files/2021-01', 'png', 'Aaron-Rodgers---Superstar-Stripes-(NFLPA-Green-Bay-Packers)---Crew-LXL---Back.png', '139942', '19', '1');
INSERT INTO `ci_media` VALUES ('15', 'Request_23_Photo_0.png', './uploads/files/2021-01', 'png', 'Aaron-Rodgers---Superstar-Stripes-(NFLPA-Green-Bay-Packers)---Crew-LXL---Front.png', '565791', '23', '1');
INSERT INTO `ci_media` VALUES ('16', 'Request_25_Receipt.jpg', './uploads/files/2021-01', 'jpg', 'image.jpg', '2165230', '25', '2');
INSERT INTO `ci_media` VALUES ('17', 'Request_26_Photo_0.jpeg', './uploads/files/2021-01', 'jpeg', '6F565254-2F82-4A14-A1C2-C5F66DE15BAE.jpeg', '152944', '26', '1');
INSERT INTO `ci_media` VALUES ('18', 'Request_28_Photo_0.jpeg', './uploads/files/2021-01', 'jpeg', '81273168-594B-4C86-B518-8035E7C55198.jpeg', '40596', '28', '1');
INSERT INTO `ci_media` VALUES ('19', 'Request_28_Receipt.jpeg', './uploads/files/2021-01', 'jpeg', 'F8DE6726-A9D7-4F61-83BD-EFF679D4A393.jpeg', '87063', '28', '2');
INSERT INTO `ci_media` VALUES ('20', 'Request_30_Photo_0.jpg', './uploads/files/2021-01', 'jpg', 'image.jpg', '4562119', '30', '1');
INSERT INTO `ci_media` VALUES ('21', 'Request_38_Photo_0.jpeg', './uploads/files/2021-01', 'jpeg', '354A352F-F15E-4AD2-A927-DBC53B050DD4.jpeg', '3077833', '38', '1');
INSERT INTO `ci_media` VALUES ('22', 'Request_38_Photo_1.jpeg', './uploads/files/2021-01', 'jpeg', '129A47FB-DDAE-447B-B892-615B711460A1.jpeg', '3351986', '38', '1');
INSERT INTO `ci_media` VALUES ('23', 'Request_38_Photo_2.jpeg', './uploads/files/2021-01', 'jpeg', 'E8CC04B6-CAA3-4B54-83C3-0DF80CEC20B4.jpeg', '3262217', '38', '1');
INSERT INTO `ci_media` VALUES ('24', 'Request_38_Photo_3.jpeg', './uploads/files/2021-01', 'jpeg', 'AF8EBC24-3B03-4989-9902-DCDD21976DDA.jpeg', '3113418', '38', '1');
INSERT INTO `ci_media` VALUES ('25', 'Request_38_Photo_4.jpeg', './uploads/files/2021-01', 'jpeg', '7969E6C1-418F-4393-8EE3-957BD90DBFFA.jpeg', '3340622', '38', '1');
INSERT INTO `ci_media` VALUES ('26', 'Request_39_Photo_0.jpeg', './uploads/files/2021-01', 'jpeg', '6FB56D07-765A-4608-B949-21911CE35FD5.jpeg', '4274756', '39', '1');
INSERT INTO `ci_media` VALUES ('27', 'Request_39_Receipt.jpeg', './uploads/files/2021-01', 'jpeg', '5FA470AA-722C-4518-BFEE-E2C31CB8EDE1.jpeg', '307296', '39', '2');
INSERT INTO `ci_media` VALUES ('28', 'Request_40_Receipt.jpeg', './uploads/files/2021-01', 'jpeg', '457ACA4B-FD9F-412E-B506-EB98BD797CF8.jpeg', '471067', '40', '2');
INSERT INTO `ci_media` VALUES ('29', 'Request_41_Photo_0.jpeg', './uploads/files/2021-01', 'jpeg', 'photo0.jpeg', '602287', '41', '1');
INSERT INTO `ci_media` VALUES ('30', 'Request_42_Photo_0.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6007.jpg', '930296', '42', '1');
INSERT INTO `ci_media` VALUES ('31', 'Request_42_Photo_1.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6008.jpg', '821553', '42', '1');
INSERT INTO `ci_media` VALUES ('32', 'Request_42_Photo_2.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6009.jpg', '788382', '42', '1');
INSERT INTO `ci_media` VALUES ('33', 'Request_42_Photo_3.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6010.jpg', '822988', '42', '1');
INSERT INTO `ci_media` VALUES ('34', 'Request_42_Photo_4.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6011.jpg', '791534', '42', '1');
INSERT INTO `ci_media` VALUES ('35', 'Request_42_Photo_5.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6012.jpg', '694584', '42', '1');
INSERT INTO `ci_media` VALUES ('36', 'Request_42_Photo_6.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6013.jpg', '709102', '42', '1');
INSERT INTO `ci_media` VALUES ('37', 'Request_42_Photo_7.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6014.jpg', '1183826', '42', '1');
INSERT INTO `ci_media` VALUES ('38', 'Request_42_Photo_8.PNG', './uploads/files/2021-01', 'PNG', 'IMG_6015.PNG', '1379324', '42', '1');
INSERT INTO `ci_media` VALUES ('39', 'Request_42_Photo_9.PNG', './uploads/files/2021-01', 'PNG', 'IMG_6016.PNG', '1403291', '42', '1');
INSERT INTO `ci_media` VALUES ('40', 'Request_42_Photo_10.jpg', './uploads/files/2021-01', 'jpg', 'IMG_6017.jpg', '903564', '42', '1');
INSERT INTO `ci_media` VALUES ('41', 'Request_42_Receipt.PNG', './uploads/files/2021-01', 'PNG', 'IMG_6016.PNG', '1403291', '42', '2');
INSERT INTO `ci_media` VALUES ('42', 'Request_62_Photo_0.jpg', './uploads/files/2021-02', 'jpg', '16124100888534598263527324559696.jpg', '3285691', '62', '1');
INSERT INTO `ci_media` VALUES ('43', 'Request_66_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', '41AF4589-47E6-4C12-936E-2465C03E1A56.jpeg', '1202301', '66', '1');
INSERT INTO `ci_media` VALUES ('44', 'Request_66_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', 'EBCC6EFB-C913-454F-B37D-2259086CBE08.jpeg', '594425', '66', '1');
INSERT INTO `ci_media` VALUES ('45', 'Request_69_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '1628793', '69', '1');
INSERT INTO `ci_media` VALUES ('46', 'Request_72_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', '17BFEAB9-6258-49D4-B351-9C9354BC23C9.jpeg', '939223', '72', '1');
INSERT INTO `ci_media` VALUES ('47', 'Request_72_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', 'A59D3A3A-B551-4216-9D6D-4D1BFEA42B0F.jpeg', '1772810', '72', '1');
INSERT INTO `ci_media` VALUES ('48', 'Request_72_Photo_2.jpeg', './uploads/files/2021-02', 'jpeg', '140A7B1F-9687-428A-97B9-4B4CBC53734C.jpeg', '3048809', '72', '1');
INSERT INTO `ci_media` VALUES ('49', 'Request_76_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'PC itself.jpg', '3342180', '76', '1');
INSERT INTO `ci_media` VALUES ('50', 'Request_76_Photo_1.jpg', './uploads/files/2021-02', 'jpg', 'pc specs.jpg', '3805842', '76', '1');
INSERT INTO `ci_media` VALUES ('51', 'Request_76_Receipt.png', './uploads/files/2021-02', 'png', 'Screen Shot 2021-02-08 at 12.10.39 AM.png', '1794893', '76', '2');
INSERT INTO `ci_media` VALUES ('52', 'Request_77_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '3729044', '77', '1');
INSERT INTO `ci_media` VALUES ('53', 'Request_77_Receipt.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '3556491', '77', '2');
INSERT INTO `ci_media` VALUES ('54', 'Request_79_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '3231344', '79', '1');
INSERT INTO `ci_media` VALUES ('55', 'Request_79_Receipt.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '2031239', '79', '2');
INSERT INTO `ci_media` VALUES ('56', 'Request_80_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', 'F57984CE-5855-438E-B9AD-A57FCAB86E08.jpeg', '4940871', '80', '1');
INSERT INTO `ci_media` VALUES ('57', 'Request_80_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', 'EBBB839F-5F78-4C62-9BB2-B6FA41286F3A.jpeg', '3779383', '80', '1');
INSERT INTO `ci_media` VALUES ('58', 'Request_80_Photo_2.jpeg', './uploads/files/2021-02', 'jpeg', '5383182F-1666-4E1C-BEDB-0AA8B5E8AB98.jpeg', '4193329', '80', '1');
INSERT INTO `ci_media` VALUES ('59', 'Request_80_Receipt.png', './uploads/files/2021-02', 'png', '237B89EA-7912-45B3-AB06-EBADC6CA5264.png', '487821', '80', '2');
INSERT INTO `ci_media` VALUES ('60', 'Request_84_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', 'ADF589E6-5607-422C-A297-509324FA820F.jpeg', '383838', '84', '1');
INSERT INTO `ci_media` VALUES ('61', 'Request_84_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', '779528E0-D9E0-4C2C-A102-B22496EC90A9.jpeg', '177075', '84', '1');
INSERT INTO `ci_media` VALUES ('62', 'Request_84_Photo_2.jpeg', './uploads/files/2021-02', 'jpeg', 'CB224A4D-5DDB-40BF-AE70-E2CC56769BE2.jpeg', '251793', '84', '1');
INSERT INTO `ci_media` VALUES ('63', 'Request_84_Receipt.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '2581889', '84', '2');
INSERT INTO `ci_media` VALUES ('64', 'Request_85_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'IMG-20210203-WA0013[1].jpg', '62719', '85', '1');
INSERT INTO `ci_media` VALUES ('65', 'Request_85_Receipt.jpg', './uploads/files/2021-02', 'jpg', '20210213_100532[1].jpg', '40469', '85', '2');
INSERT INTO `ci_media` VALUES ('66', 'Request_89_Photo_0.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '2542148', '89', '1');
INSERT INTO `ci_media` VALUES ('67', 'Request_90_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', 'F6DC1388-F04C-4D17-A620-DE9153A990B9.jpeg', '3497039', '90', '1');
INSERT INTO `ci_media` VALUES ('68', 'Request_90_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', 'EE013FB2-E882-422F-AD91-A6B3D435A559.jpeg', '3035364', '90', '1');
INSERT INTO `ci_media` VALUES ('69', 'Request_90_Photo_2.jpeg', './uploads/files/2021-02', 'jpeg', 'DB97138A-425C-4039-866C-0BAF891C2B8C.jpeg', '3814022', '90', '1');
INSERT INTO `ci_media` VALUES ('70', 'Request_90_Photo_3.jpeg', './uploads/files/2021-02', 'jpeg', '7ABB1969-B426-4A76-BFAA-4256909EE3F3.jpeg', '4715255', '90', '1');
INSERT INTO `ci_media` VALUES ('71', 'Request_90_Photo_4.jpeg', './uploads/files/2021-02', 'jpeg', '73435F80-FC78-406E-BCC1-1DAEA6E6545F.jpeg', '4178617', '90', '1');
INSERT INTO `ci_media` VALUES ('72', 'Request_90_Photo_5.jpeg', './uploads/files/2021-02', 'jpeg', '988C5517-91B5-4D86-8DBC-3187C995FD25.jpeg', '3111377', '90', '1');
INSERT INTO `ci_media` VALUES ('73', 'Request_90_Photo_6.jpeg', './uploads/files/2021-02', 'jpeg', 'F1D60197-4EF6-4707-90EE-0296E65C7322.jpeg', '3348034', '90', '1');
INSERT INTO `ci_media` VALUES ('74', 'Request_90_Receipt.jpg', './uploads/files/2021-02', 'jpg', 'image.jpg', '2434816', '90', '2');
INSERT INTO `ci_media` VALUES ('75', 'Request_91_Photo_0.jpeg', './uploads/files/2021-02', 'jpeg', '168D2B73-96C9-4F55-B362-C80860BE91FF.jpeg', '3347030', '91', '1');
INSERT INTO `ci_media` VALUES ('76', 'Request_91_Photo_1.jpeg', './uploads/files/2021-02', 'jpeg', 'B3499720-B229-43A2-B93A-9AF3A8B414EC.jpeg', '2258119', '91', '1');
INSERT INTO `ci_media` VALUES ('77', 'Request_91_Photo_2.jpeg', './uploads/files/2021-02', 'jpeg', 'F7479E78-5DC5-4E22-B820-59133E7A8B3F.jpeg', '2418198', '91', '1');
INSERT INTO `ci_media` VALUES ('78', 'Request_91_Photo_3.jpeg', './uploads/files/2021-02', 'jpeg', '669ABE8B-01AF-431F-B1FB-841804F41D79.jpeg', '2800814', '91', '1');
INSERT INTO `ci_media` VALUES ('79', 'Request_92_Photo_0.HEIC', './uploads/files/2021-02', 'HEIC', 'IMG_0145.HEIC', '1268383', '92', '1');
INSERT INTO `ci_media` VALUES ('80', 'Request_92_Photo_1.HEIC', './uploads/files/2021-02', 'HEIC', 'IMG_0146.HEIC', '1356701', '92', '1');
INSERT INTO `ci_media` VALUES ('81', 'Request_92_Photo_2.HEIC', './uploads/files/2021-02', 'HEIC', 'IMG_0147.HEIC', '1340659', '92', '1');

-- ----------------------------
-- Table structure for `ci_payment_type`
-- ----------------------------
DROP TABLE IF EXISTS `ci_payment_type`;
CREATE TABLE `ci_payment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_payment_type
-- ----------------------------
INSERT INTO `ci_payment_type` VALUES ('1', 'Existing Loan');
INSERT INTO `ci_payment_type` VALUES ('2', 'Layaway Item');

-- ----------------------------
-- Table structure for `ci_payments`
-- ----------------------------
DROP TABLE IF EXISTS `ci_payments`;
CREATE TABLE `ci_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pledge1` varchar(100) NOT NULL,
  `pledge2` varchar(100) NOT NULL,
  `pledge3` varchar(100) NOT NULL,
  `pledge4` varchar(100) NOT NULL,
  `pledge5` varchar(100) NOT NULL,
  `type` int(2) NOT NULL,
  `type1` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `ticket` varchar(300) NOT NULL,
  `store` int(10) NOT NULL,
  `mark_read` int(1) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_payments
-- ----------------------------
INSERT INTO `ci_payments` VALUES ('154', 'LT-G08006983', 'LT-G08006984', 'LT-G08006985', '', '', '1', 'Renew', '', '0', '', '5', '0', '156', '2021-02-05 22:49:28', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('157', 'LT-G14045513', '', '', '', '', '1', 'Extend', '', '0', '', '11', '0', '158', '2021-02-06 17:25:07', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('156', 'LT-G14046088', '', '', '', '', '1', 'Renew', '', '0', '', '11', '0', '119', '2021-02-06 15:51:16', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('155', 'LT-G14045493', '', '', '', '', '1', 'Extend', '', '0', '', '11', '0', '157', '2021-02-06 15:47:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('153', 'LT-G01075136', 'LT-G08007736', 'LT-G08007737', 'LT-G08007738', 'LT-G18010793', '1', 'Renew', '', '0', '', '25', '0', '156', '2021-02-05 22:35:30', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('152', 'LT-L26015402', 'LT-L26015403', '', '', '', '1', 'Extend', '', '0', '', '14', '0', '155', '2021-02-05 21:12:51', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('150', 'LT-H41006382', 'LT-H41006383', '', '', '', '1', 'Extend', '', '0', '', '20', '0', '153', '2021-02-05 20:58:21', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('151', 'LT-L26015402', 'LT-L26015403', '', '', '', '1', 'Extend', '', '0', '', '14', '0', '155', '2021-02-05 21:09:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('149', 'LT-G14044883', '', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_149.jpeg', '11', '0', '152', '2021-02-05 20:30:37', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('109', 'LT-G14036017', '', '', '', '', '1', '', '', '0', '', '11', '0', '120', '2021-02-03 18:06:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('110', 'LT-G14046805', '', '', '', '', '1', '', '', '0', '', '11', '0', '121', '2021-02-03 19:07:34', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('111', 'LT-G05015223', 'LT-G05015224', '', '', '', '1', '', '', '0', '', '9', '0', '105', '2021-02-03 19:55:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('112', 'LT-G01073994', '', '', '', '', '1', '', '', '0', '', '1', '0', '123', '2021-02-03 21:53:27', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('113', 'LT-G01073081', 'LT-G01073082', '', '', '', '1', '', '', '0', '', '1', '0', '124', '2021-02-03 23:37:06', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('114', 'LT-G01073079', '', '', '', '', '1', '', '', '0', '', '1', '0', '124', '2021-02-03 23:45:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('115', 'LT-L21044480', 'LT-L21044481', '', '', '', '1', '', '', '0', '', '24', '0', '125', '2021-02-04 01:14:52', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('116', 'LT-G03017258', '', '', '', '', '1', '', '', '0', '', '15', '0', '127', '2021-02-04 04:08:16', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('117', 'LT-G08005863', 'LT-G08008178', 'LT-G08005723', 'LT-G08005908', 'LT-G08006767', '1', '', '', '0', '', '5', '0', '128', '2021-02-04 14:44:14', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('118', 'LT-G14046412', '', '', '', '', '2', '', '', '0', '', '11', '0', '129', '2021-02-04 15:04:03', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('119', 'LT-G01070917', '', '', '', '', '1', '', '', '0', '', '1', '0', '130', '2021-02-04 15:31:48', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('120', 'LT-G07028401', '', '', '', '', '1', '', '', '0', '', '4', '0', '131', '2021-02-04 17:22:45', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('121', 'LT-G02033378', '', '', '', '', '1', '', '', '0', '', '2', '0', '132', '2021-02-04 17:53:13', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('122', 'LT-L27029011', 'LT-L27029012', '', '', '', '1', '', '', '0', '', '8', '0', '133', '2021-02-04 18:09:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('123', 'LT-G01073428', 'LT-G01073429', '', '', '', '1', '', '', '0', '', '1', '0', '134', '2021-02-04 19:23:40', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('124', 'LT-G01073572', '', '', '', '', '1', '', '', '0', '', '1', '0', '135', '2021-02-04 19:59:44', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('125', 'LT-L27027332', 'LT-L27027333', '', '', '', '1', '', '', '0', '', '8', '0', '133', '2021-02-04 21:28:56', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('126', 'LT-L22023113', '', '', '', '', '1', '', '', '0', '', '7', '0', '136', '2021-02-04 21:44:18', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('127', 'LT-270273333', '', '', '', '', '1', '', '', '0', '', '8', '0', '133', '2021-02-04 21:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('128', 'LT-L27027332', '', '', '', '', '1', '', '', '0', '', '8', '0', '133', '2021-02-04 22:08:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('129', 'LT-L27027332', '', '', '', '', '1', '', '', '0', '', '8', '0', '133', '2021-02-04 22:21:04', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('130', 'LT-M31004675', '', '', '', '', '1', '', '', '0', '', '21', '1', '138', '2021-02-05 00:50:53', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('131', 'LT-GO1068060', '', '', '', '', '1', '', '', '0', '', '1', '0', '139', '2021-02-05 02:22:37', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('133', 'LT-9M1001169', '', '', '', '', '1', '', '', '0', '', '2', '0', '142', '2021-02-05 04:11:47', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('135', 'LT-G03020408', '', '', '', '', '1', '', '', '0', '', '15', '0', '96', '2021-02-05 09:10:25', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('137', 'LT-G14046783', '', '', '', '', '1', '', '', '0', '', '11', '0', '144', '2021-02-05 13:16:28', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('139', 'LT-G01079969', 'LT-G01079968', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_139.jpg', '1', '0', '145', '2021-02-05 14:22:05', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('140', 'LT-G01079969', 'LT-G01079968', 'LT-G01079723', '', '', '1', 'Renew', '', '0', '', '1', '0', '146', '2021-02-05 14:32:01', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('141', 'LT-G01077326', '', '', '', '', '1', 'Renew', '', '0', '', '1', '0', '147', '2021-02-05 14:34:15', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('145', 'LT-L29005183', '', '', '', '', '1', 'Extend', '', '0', '', '12', '0', '150', '2021-02-05 18:36:19', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('146', 'LT-L27027332', '', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_146.jpeg', '8', '0', '133', '2021-02-05 18:41:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('143', 'LT-G14046354', 'LT-G14046353', '', '', '', '1', 'Extend', '', '0', '', '11', '0', '148', '2021-02-05 15:15:27', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('144', 'LT-M31004162', '', '', '', '', '1', 'Extend', '', '0', '', '21', '0', '149', '2021-02-05 16:12:54', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('147', 'LT-G02033202', '', '', '', '', '1', 'Extend', '', '0', '', '2', '0', '151', '2021-02-05 19:04:18', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('148', 'LT-G02032257', 'LT-G02029402', '', '', '', '1', 'Extend', '', '0', '', '2', '0', '151', '2021-02-05 19:19:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('71', 'LT-G01074244', '', '', '', '', '1', '', '', '0', '', '1', '0', '87', '2021-02-01 02:02:01', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('72', 'LT-G01074244', '', '', '', '', '1', '', '', '0', '', '1', '0', '87', '2021-02-01 02:02:53', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('73', 'ltg13013546', '', '', '', '', '1', '', '', '0', '', '23', '0', '88', '2021-02-01 04:02:30', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('74', 'LT-G13013546', '', '', '', '', '1', '', '', '0', '', '23', '0', '89', '2021-02-01 04:02:21', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('75', 'LT-L22022122-00', '', '', '', '', '1', '', '', '0', '', '7', '0', '90', '2021-02-01 12:02:15', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('76', 'LT-L22022096', 'LT-22022095', '', '', '', '1', '', '', '0', '', '7', '0', '91', '2021-02-01 04:02:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('77', 'LT-G1079278', '', '', '', '', '1', '', '', '0', '', '1', '0', '92', '2021-02-01 07:02:23', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('78', 'LT-H41006249', '', '', '', '', '1', '', '', '0', '', '20', '0', '93', '2021-02-01 07:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('79', 'LT-G05019009', '', '', '', '', '1', '', '', '0', '', '9', '0', '94', '2021-02-01 07:02:44', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('80', 'g14045405', '', '', '', '', '1', '', '', '0', '', '11', '0', '95', '2021-02-01 08:02:24', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('81', 'LT-G14047378', '', '', '', '', '1', '', '', '0', '', '11', '0', '96', '2021-02-02 12:02:07', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('82', 'Ltg0800742700', '', '', '', '', '1', '', '', '0', '', '5', '0', '97', '2021-02-02 01:02:33', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('83', '1001169', '', '', '', '', '1', '', '', '0', '', '24', '0', '98', '2021-02-02 10:02:13', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('85', 'LT-G01073361', '', '', '', '', '1', '', '', '0', '', '5', '0', '100', '2021-02-02 02:02:08', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('86', 'LT-G18010481', '', '', '', '', '1', '', '', '0', '', '3', '0', '101', '2021-02-02 03:02:39', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('87', 'LT-M62008690', '', '', '', '', '1', '', '', '0', '', '22', '0', '102', '2021-02-02 03:02:54', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('88', 'LT-L26018071', 'LT-L26018070', '', '', '', '1', '', '', '0', '', '14', '0', '103', '2021-02-02 06:02:40', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('89', 'LT-g13012739', 'LT-g13013140', 'LT-g13013141', '', '', '1', '', '', '0', '', '23', '0', '104', '2021-02-02 08:02:38', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('90', 'LT-L29001355', '', '', '', '', '2', '', '', '0', '', '1', '0', '59', '2021-02-02 08:02:41', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('91', 'LT-G05015223', '', '', '', '', '1', '', '', '0', '', '9', '0', '105', '2021-02-02 08:02:06', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('92', 'LT-G14046487', '', '', '', '', '1', '', '', '0', '', '11', '0', '106', '2021-02-02 08:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('93', 'LT-G14046491', 'LT-G14046490', '', '', '', '1', '', '', '0', '', '11', '0', '106', '2021-02-02 08:02:52', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('94', 'LT-L22012860', '', '', '', '', '1', '', '', '0', '', '7', '0', '107', '2021-02-02 09:02:11', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('95', 'LT-G14042658', 'LT-G14042659', 'LT-G14042657', '', '', '1', '', '', '0', '', '11', '0', '108', '2021-02-02 09:02:31', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('96', 'LT-G06019911', 'LT-G06019910', '', '', '', '1', '', '', '0', '', '10', '0', '109', '2021-02-02 09:02:33', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('97', 'LT-G14046493', '', '', '', '', '1', '', '', '0', '', '11', '0', '110', '2021-02-02 11:02:02', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('98', 'LT-G01073665', '', '', '', '', '1', '', '', '0', '', '1', '0', '111', '2021-02-02 11:02:25', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('99', 'LT-G02034101', '', '', '', '', '1', '', '', '0', '', '2', '1', '112', '2021-02-03 12:02:22', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('100', 'LT-M31003920', 'LT-M31004462', '', '', '', '1', '', '', '0', '', '21', '0', '113', '2021-02-03 01:02:24', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('107', 'LT-G05018810', '', '', '', '', '1', '', '', '0', '', '9', '0', '118', '2021-02-03 17:37:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('108', 'LT-G14046088', '', '', '', '', '1', '', '', '0', '', '11', '0', '119', '2021-02-03 17:52:35', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('158', 'LT-L21044925', '', '', '', '', '1', 'Extend', '', '0', '', '24', '0', '159', '2021-02-06 17:54:50', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('105', 'LT-L26018070', 'LT-L26018071', '', '', '', '1', '', '', '0', '', '14', '1', '103', '2021-02-03 14:26:19', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('106', 'LT-G01070290', 'LT-G01070289', '', '', '', '1', '', '', '0', '', '1', '0', '116', '2021-02-03 15:08:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('159', 'LT-G01070880', '', '', '', '', '1', 'Renew', '', '0', '', '1', '0', '160', '2021-02-06 18:27:44', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('160', 'LT-G18009365', '', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_160.jpg', '3', '0', '161', '2021-02-06 18:31:56', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('161', 'LT-H41004462', '', '', '', '', '1', 'Extend', '', '0', '', '20', '0', '162', '2021-02-06 19:57:11', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('162', 'LT-L22022182', 'LT-L22022181', 'LT-L22022183', '', '', '1', 'Extend', '', '0', '', '7', '0', '163', '2021-02-06 20:19:42', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('163', 'LT-G07032576', '', '', '', '', '1', 'Renew', '', '0', '', '4', '0', '164', '2021-02-06 20:33:37', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('164', 'LT-V51007636', '', '', '', '', '1', 'Extend', '', '0', '', '19', '0', '165', '2021-02-06 23:01:34', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('165', 'LT-V51008199', 'LT-V51008200', 'LT-V51008201', '', '', '1', 'Extend', '', '0', '', '19', '1', '66', '2021-02-07 01:21:37', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('166', 'LT-G07028824', '', '', '', '', '1', 'Extend', '', '0', '', '4', '1', '66', '2021-02-07 01:23:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('167', 'LT-V51008199', '', '', '', '', '1', 'Extend', '', '0', '', '19', '1', '66', '2021-02-07 01:34:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('168', 'LT-L21043058', '', '', '', '', '1', 'Renew', '', '0', '', '24', '1', '167', '2021-02-07 14:27:52', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('169', 'LT-G02030833', '', '', '', '', '1', 'Renew', '', '0', '', '2', '1', '170', '2021-02-07 23:20:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('170', 'LT-G01073914', 'LT-G01073913', '', '', '', '2', '', 'Minimum Amount', '0', '', '1', '1', '171', '2021-02-08 00:37:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('171', 'LT-G03019054', '', '', '', '', '2', '', 'Minimum Amount', '0', '', '26', '1', '174', '2021-02-08 14:19:52', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('172', 'LT-G03019054', '', '', '', '', '2', '', 'Minimum Amount', '251', '', '15', '1', '174', '2021-02-08 14:23:02', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('173', 'LT-G03019054', '', '', '', '', '2', '', 'Custom Amount', '251', '', '15', '1', '174', '2021-02-08 14:26:13', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('174', 'LT-G03019054', '', '', '', '', '2', '', 'Custom Amount', '251', '', '15', '1', '174', '2021-02-08 14:37:07', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('175', 'LT-G03019054', '', '', '', '', '2', '', 'Minimum Amount', '251', '', '15', '1', '174', '2021-02-08 15:51:11', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('176', 'LT-L21047060', '', '', '', '', '1', 'Extend', '', '0', '', '24', '1', '175', '2021-02-08 15:57:40', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('177', 'LT-G02034042', '', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_177.jpg', '2', '1', '177', '2021-02-08 16:19:17', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('178', 'LT-G14047470', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '178', '2021-02-08 16:47:23', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('179', 'LT-G14042272', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '179', '2021-02-08 16:59:02', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('180', 'LT-G14042272', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '179', '2021-02-08 17:00:15', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('181', 'LT-G14042272', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '179', '2021-02-08 17:06:08', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('182', 'LT-G14042272', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '179', '2021-02-08 17:07:03', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('183', 'LT-H41006086', '', '', '', '', '1', 'Extend', '', '0', '', '20', '1', '180', '2021-02-08 17:37:20', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('184', 'LT-G02032434', '', '', '', '', '1', 'Renew', '', '0', '', '26', '1', '181', '2021-02-08 20:32:12', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('185', 'LT-L27028843', '', '', '', '', '1', 'Extend', '', '0', '', '8', '1', '182', '2021-02-08 21:20:35', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('186', 'LT-G18012079', '', '', '', '', '2', '', 'Custom Amount', '266.28', './uploads/files/2021-02/Ticket_186.jpg', '3', '1', '183', '2021-02-08 22:28:17', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('187', 'LT-G03016458', '', '', '', '', '1', 'Renew', '', '0', './uploads/files/2021-02/Ticket_187.jpeg', '15', '1', '184', '2021-02-09 14:52:25', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('188', 'LT-G14044563', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '185', '2021-02-09 15:22:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('189', 'LT-G03016458', 'LT-G03016456', 'LT-G03016455', 'LT-G03016869', '', '1', 'Renew', '', '0', './uploads/files/2021-02/Ticket_189.jpeg', '26', '1', '184', '2021-02-09 16:15:52', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('190', 'LT-G02033872', 'LT-G02033871', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_190.jpg', '2', '1', '186', '2021-02-09 16:52:15', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('191', 'LT-M63013261', 'LT-M63013530', '', '', '', '1', 'Extend', '', '0', '', '18', '1', '187', '2021-02-09 22:15:19', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('192', 'LT-GO1073956', 'LT-GO1073955', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '189', '2021-02-10 00:23:50', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('193', 'LT-H41D06226', '', '', '', '', '1', 'Extend', '', '0', '', '20', '1', '190', '2021-02-10 00:31:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('194', 'LT-G01072694', '', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '191', '2021-02-10 12:42:51', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('195', 'LT-G02033871', 'LT-G02033872', '', '', '', '2', '', 'Minimum Amount', '0', '', '2', '1', '186', '2021-02-10 14:56:42', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('196', 'LT-G18010481', '', '', '', '', '1', 'Extend', '', '0', '', '3', '1', '101', '2021-02-10 16:10:13', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('197', 'LT-G05019176', '', '', '', '', '1', 'Extend', '', '0', '', '9', '1', '192', '2021-02-10 17:32:51', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('198', 'LT-G02032591', '', '', '', '', '1', 'Renew', '', '0', '', '2', '1', '194', '2021-02-10 17:46:20', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('199', 'LT-G01071458', '', '', '', '', '1', 'Renew', '', '0', '', '1', '1', '191', '2021-02-10 18:35:05', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('200', 'LT-G14047181', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '195', '2021-02-10 22:04:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('201', 'LT-G05018753', '', '', '', '', '1', 'Renew', '', '0', '', '9', '1', '196', '2021-02-10 22:29:02', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('202', 'LT-G05018753', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '197', '2021-02-10 22:30:41', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('203', 'LT-G02032188', '', '', '', '', '1', 'Renew', '', '0', '', '2', '1', '198', '2021-02-10 22:37:06', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('204', 'LT-G02032775', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '199', '2021-02-10 22:49:14', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('205', 'LT-G02032775', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '199', '2021-02-10 22:52:43', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('206', 'LT-L21045378', '', '', '', '', '1', 'Renew', '', '0', '', '24', '1', '200', '2021-02-10 23:08:13', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('207', 'LT-G01073904', '', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '201', '2021-02-10 23:17:54', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('208', 'LT-G14046667', 'LT-G14046666', '', '', '', '1', 'Renew', '', '0', '', '11', '1', '202', '2021-02-11 04:41:09', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('209', 'LT-G01064725', '', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '203', '2021-02-11 16:00:38', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('210', 'LT-L21045190', '', '', '', '', '1', 'Extend', '', '0', './uploads/files/2021-02/Ticket_210.jpg', '24', '1', '204', '2021-02-11 17:54:14', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('211', 'LT-L21045190', '', '', '', '', '1', 'Extend', '', '0', '', '24', '1', '205', '2021-02-11 18:07:42', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('212', 'LT-G01070509', 'LT-G01070508', '', '', '', '1', 'Renew', '', '0', '', '1', '1', '209', '2021-02-12 12:59:06', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('213', 'LT-G14043484', '', '', '', '', '1', 'Renew', '', '0', '', '11', '1', '210', '2021-02-12 16:52:00', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('214', 'LT-G14043493', '', '', '', '', '1', 'Renew', '', '0', '', '11', '1', '210', '2021-02-12 16:53:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('215', 'LT-G14046950', 'LT-G14046951', 'LT-G14046952', '', '', '1', 'Extend', '', '0', '', '11', '1', '211', '2021-02-12 18:40:53', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('216', 'LT-G02034380', '', '', '', '', '1', 'Extend', '', '0', '', '2', '1', '212', '2021-02-12 19:29:17', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('217', 'LT-G14047199', 'LT-G14047198', 'LT-G14047200', 'LT-G14404721', '', '1', 'Extend', '', '0', '', '11', '1', '214', '2021-02-12 22:49:57', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('218', 'LT-L26017544', '', '', '', '', '1', 'Renew', '', '0', '', '14', '1', '215', '2021-02-13 06:21:36', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('219', 'LT-L26017283', 'LT-L26017317', 'LT-L26017318', 'LT-L26017324', 'LT-L26017472', '1', 'Renew', '', '0', '', '14', '1', '215', '2021-02-13 06:26:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('220', 'LT-L26017544', '', '', '', '', '1', 'Renew', '', '0', './uploads/files/2021-02/Ticket_220.jpg', '14', '1', '215', '2021-02-13 06:31:51', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('221', 'LT-L26017283', 'LT-L26017317', 'LT-L26017318', 'LT-L26017324', 'LT-L26017472', '1', 'Renew', '', '0', '', '14', '1', '215', '2021-02-13 06:38:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('222', 'LT-M61009180', '', '', '', '', '1', 'Extend', '', '0', '', '16', '1', '217', '2021-02-13 14:46:20', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('223', 'LT-V51007346', 'LT-V51007345', 'LT-V51008199', '', '', '1', 'Renew', '', '0', '', '19', '1', '66', '2021-02-13 17:00:07', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('224', 'LT-G01073817', '', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '220', '2021-02-13 17:53:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('225', 'LT-G01063159', '', '', '', '', '1', 'Extend', '', '0', '', '26', '1', '221', '2021-02-13 17:58:08', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('226', 'LT-G01073817', '', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '220', '2021-02-13 17:58:10', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('227', 'LT-G01063159', 'LT-G01069734', '', '', '', '1', 'Renew', '', '0', '', '1', '1', '221', '2021-02-13 18:22:02', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('228', 'LT-V51008295', 'LT-V51008294', 'LT-V51008293', 'LT-V51008292', 'LT-V51008427', '1', 'Extend', '', '0', '', '19', '1', '222', '2021-02-13 22:18:45', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('229', 'LT-GO7033900', '', '', '', '', '2', '', 'Minimum Amount', '100', './uploads/files/2021-02/Ticket_229.jpeg', '1', '1', '224', '2021-02-15 04:30:10', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('230', 'LT-GO7033900', '', '', '', '', '2', '', 'Minimum Amount', '250', './uploads/files/2021-02/Ticket_230.jpeg', '1', '1', '224', '2021-02-15 04:34:59', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('231', 'LT-G02031979', '', '', '', '', '1', 'Extend', '', '0', '', '2', '1', '226', '2021-02-15 15:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('232', 'LT-V51008305', '', '', '', '', '1', 'Extend', '', '0', '', '19', '1', '227', '2021-02-15 16:02:00', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('233', 'LT-G14046383', '', '', '', '', '2', '', 'Minimum Amount', '104.37', './uploads/files/2021-02/Ticket_233.jpeg', '11', '1', '228', '2021-02-15 16:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('234', 'LT-G14046382', '', '', '', '', '2', '', 'Minimum Amount', '31.63', './uploads/files/2021-02/Ticket_234.jpeg', '11', '1', '228', '2021-02-15 16:18:19', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('235', 'LT-G14043028', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '229', '2021-02-15 16:19:24', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('236', 'LT-G14044685', 'LT-G14042607', 'LT-G14043028', '', '', '1', 'Extend', '', '0', '', '11', '1', '229', '2021-02-15 16:24:16', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('237', 'LT-G14043028', 'LT-G14042607', 'LT-G14044685', '', '', '1', 'Extend', '', '0', '', '11', '1', '230', '2021-02-15 16:27:45', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('238', 'LT-G14046382', '', '', '', '', '2', '', 'Minimum Amount', '31.63', './uploads/files/2021-02/Ticket_238.jpeg', '11', '1', '228', '2021-02-15 16:33:17', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('239', 'LT-G05017638', '', '', '', '', '1', 'Renew', '', '0', '', '9', '1', '231', '2021-02-15 17:58:12', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('240', 'LT-G06022296', 'LT-2/15/2021', 'LT-9/17/2020', '', '', '1', 'Extend', '', '0', '', '10', '1', '232', '2021-02-15 18:21:55', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('241', 'LT-M42006534', '', '', '', '', '1', 'Extend', '', '0', '', '17', '1', '233', '2021-02-15 19:00:09', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('242', 'LT-G01073815', 'LT-G01071575', '', '', '', '1', 'Extend', '', '0', '', '1', '1', '234', '2021-02-15 19:02:36', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('243', 'LT-G14047238', 'LT-G14047239', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '235', '2021-02-15 19:28:01', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('244', 'LT-G14038223', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '236', '2021-02-15 20:34:22', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('245', 'LT-G14038223', '', '', '', '', '2', '', 'Minimum Amount', '177', '', '11', '1', '236', '2021-02-15 20:36:51', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('246', 'LT-G14034051', 'LT-G14034052', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '237', '2021-02-15 22:50:44', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('247', 'LT-G06022325', '', '', '', '', '1', 'Extend', '', '0', '', '10', '1', '240', '2021-02-16 15:38:00', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('248', 'LT-G07035266', 'LT-G07035262', 'LT-G07035263', 'LT-G07035264', '', '1', 'Extend', '', '0', '', '4', '1', '241', '2021-02-16 15:38:33', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('249', 'LT-G14046989', 'LT-G14047524', '', '', '', '1', 'Renew', '', '0', '', '11', '1', '242', '2021-02-16 15:57:46', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('250', 'LT-G14045226', 'LT-G14045227', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '243', '2021-02-16 16:51:22', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('251', 'LT-G14045226', 'LT-G14045227', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '243', '2021-02-16 16:53:56', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('252', 'LT-G14047037', '', '', '', '', '1', 'Extend', '', '0', '', '11', '1', '179', '2021-02-16 18:44:40', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('253', 'LT-H41006460', 'LT-H41006459', '', '', '', '1', 'Extend', '', '0', '', '20', '1', '244', '2021-02-16 20:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('254', 'LT-H41006481', '', '', '', '', '1', 'Renew', '', '0', '', '20', '1', '246', '2021-02-16 21:04:16', '0000-00-00 00:00:00');
INSERT INTO `ci_payments` VALUES ('255', 'LT-L27017976', '', '', '', '', '1', 'Extend', '', '0', '', '8', '1', '247', '2021-02-16 22:17:44', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `ci_request`
-- ----------------------------
DROP TABLE IF EXISTS `ci_request`;
CREATE TABLE `ci_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_request
-- ----------------------------
INSERT INTO `ci_request` VALUES ('1', 'Loan');
INSERT INTO `ci_request` VALUES ('2', 'Sell');

-- ----------------------------
-- Table structure for `ci_requests`
-- ----------------------------
DROP TABLE IF EXISTS `ci_requests`;
CREATE TABLE `ci_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `attrs` mediumtext NOT NULL,
  `price` float DEFAULT NULL,
  `original_price` float DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `mark_read` int(1) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_requests
-- ----------------------------
INSERT INTO `ci_requests` VALUES ('24', '1', '2', 'other', '{\"electronics type\":\"Ipad\"}', '2000', '1000', '', '0', '21', '2021-01-25 08:01:35', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('50', '1', '1', 'rings', '', '0', '0', '', '0', '24', '2021-02-02 10:02:01', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('51', '1', '4', 'other', '{\"apparel item\":\"\"}', '0', '0', '', '0', '24', '2021-02-02 10:02:07', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('52', '1', '1', 'earrings', '', '0', '0', '', '0', '24', '2021-02-02 10:02:14', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('53', '1', '4', 'outerwear', '{\"outerwear type\":\"jackets\"}', '0', '0', '', '0', '24', '2021-02-02 10:02:19', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('25', '2', '4', 'outerwear', '{\"outerwear type\":\"coats\"}', '460', '0', '', '0', '23', '2021-01-25 05:01:47', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('47', '1', '1', 'bracelets', '', '0', '0', '', '0', '24', '2021-02-02 08:02:13', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('48', '1', '3', 'breitling', '', '0', '0', '', '0', '24', '2021-02-02 08:02:35', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('49', '1', '1', 'bracelets', '', '8600', '0', '', '0', '24', '2021-02-02 10:02:49', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('28', '1', '2', 'other', '{\"electronics type\":\"(Two)  brand new white PlayStation 5 Dualsense wireless controller \"}', '0', '76.7', 'Two brand new never opened PlayStation 5 controllers ', '0', '25', '2021-01-26 03:01:53', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('44', '1', '1', 'bracelets', '', '1000', '0', '', '0', '24', '2021-02-02 07:02:04', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('45', '1', '1', 'bracelets', '', '1000', '0', '', '0', '24', '2021-02-02 08:02:38', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('46', '1', '4', 'footwear', '{\"footwear type\":\"heels\"}', '500', '0', '', '0', '24', '2021-02-02 08:02:51', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('42', '2', '2', 'phone', '{\"phone brand\":\"apple\",\"service provider\":\"sprint\",\"What is the make and model number?\":\"Iphone  XR\",\"what is the condition of your phone?\":\"Used\"}', '500', '749', 'Phone is used from 2018 release. It was encased throughout its entire usage. Phone is in great working condition ', '1', '84', '2021-01-30 11:01:19', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('38', '2', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"MacBook air\",\"what is the condition of computer device?\":\"New\"}', '900', '1', 'Brand new used less than 10 times. Comes w box and chords ', '1', '53', '2021-01-29 07:01:52', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('39', '1', '2', 'other', '{\"electronics type\":\"iPad \"}', '80', '400', '', '1', '63', '2021-01-29 10:01:41', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('40', '1', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"Lenovo Legion Y540\",\"what is the condition of computer device?\":\"Used\"}', '0', '0', '', '1', '69', '2021-01-30 08:01:09', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('41', '1', '2', 'tv', '{\"Does it include original remote?\":\"yes\",\"What is the make and model number?\":\"203 440 8180 \",\"what is the condition of your tv?\":\"New\"}', '800', '0', 'I need and this watch to be apraise i bought it at saks fith avenue and I held it for a while it means a lot to me for I put it up for calorital..I did call the saks fith avenue to see if they carry this watch they said yes but there out stock I ask the price of this model they told me they  get back once there shipment arrives ', '1', '70', '2021-01-30 09:01:28', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('54', '2', '3', 'cartier', '', '0', '0', '', '0', '24', '2021-02-02 10:02:27', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('55', '2', '2', 'gaming system', '{\"does it include original remote and cable cords?\":\"yes\",\"What is the make and model number?\":\"\",\"what is the condition of your gaming system?\":\"Used\"}', '250', '0', '', '0', '24', '2021-02-02 11:02:45', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('60', '2', '2', 'phone', '{\"phone brand\":\"apple\",\"service provider\":\"at&t\",\"What is the make and model number?\":\"iphone 8\",\"what is the condition of your phone?\":\"Used\"}', '0', '600', 'no cracks on screen, small blemishes on the sides of the phone, and a missing glass piece on the back. works perfectly', '1', '117', '2021-02-03 16:44:07', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('61', '2', '1', 'other', '{\"jewelry piece name\":\"Pendant\"}', '0', '130', '', '1', '122', '2021-02-03 20:08:08', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('62', '1', '1', 'rings', '', '0', '500', '', '1', '126', '2021-02-04 03:43:02', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('73', '1', '1', 'chains', '', '400', '2000', '1/2 karat diamonds in the eye of Jesus charm', '1', '166', '2021-02-07 07:20:39', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('65', '2', '1', 'chains', '', '1000', '1200', '', '1', '137', '2021-02-05 00:09:18', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('66', '2', '2', 'tv', '{\"Does it include original remote?\":\"yes\",\"What is the make and model number?\":\"Sceptre\",\"what is the condition of your tv?\":\"New\"}', '0', '200', '', '1', '140', '2021-02-05 02:24:40', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('69', '2', '3', 'rolex', '', '20', '0', '', '1', '143', '2021-02-05 11:00:38', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('72', '2', '2', 'tv', '{\"Does it include original remote?\":\"no\",\"What is the make and model number?\":\"Toshiba 23\\u201d screen\",\"what is the condition of your tv?\":\"Used\"}', '0', '0', 'Works good ', '1', '154', '2021-02-05 20:59:15', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('74', '1', '2', 'phone', '{\"phone brand\":\"iPhone \",\"service provider\":\"T-mobile \",\"What is the make and model number?\":\"12 929-497-5378\",\"what is the condition of your phone?\":\"Used\"}', '200', '800', 'It’s in great condition.', '1', '168', '2021-02-07 16:27:28', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('75', '2', '4', 'footwear', '{\"footwear type\":\"sneakers\"}', '0', '0', '', '1', '169', '2021-02-07 20:12:17', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('76', '2', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"Omen 15\",\"what is the condition of computer device?\":\"Used\"}', '700', '1', 'HP - OMEN Gaming 15.6\" Gaming Laptop - Intel Core i7 - 16GB Memory - NVIDIA GeForce RTX 2060 - 512GB SSD + 32GB Optane - Shadow Black\r\n\r\nI bought the pc in September from Best Buy and it works just like it is brand new. Minimal wear. ', '1', '172', '2021-02-08 05:16:04', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('77', '1', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"HP laptop\",\"what is the condition of computer device?\":\"New\"}', '140', '499', '', '1', '173', '2021-02-08 12:43:56', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('78', '2', '2', 'gaming system', '{\"does it include original remote and cable cords?\":\"yes\",\"What is the make and model number?\":\"MG230161229\",\"what is the condition of your gaming system?\":\"Used\"}', '100', '299.99', 'Includes Controller, Original Cords, and Mortal Kombat 11 as a downloaded game on the console.', '1', '176', '2021-02-08 16:08:28', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('79', '1', '1', 'rings', '', '600', '1200', '', '1', '188', '2021-02-09 23:37:13', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('80', '2', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"Dell Latitude 3500\",\"what is the condition of computer device?\":\"Used\"}', '600', '819.99', '', '1', '193', '2021-02-10 17:43:22', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('81', '2', '2', 'phone', '{\"phone brand\":\"Iphone xs\",\"service provider\":\"at &T\",\"What is the make and model number?\":\"iphone xs nta2ll\\/a\",\"what is the condition of your phone?\":\"New\"}', '350', '450', '', '1', '206', '2021-02-12 06:10:09', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('82', '1', '2', 'gaming system', '{\"does it include original remote and cable cords?\":\"yes\",\"What is the make and model number?\":\"Xbox one\",\"what is the condition of your gaming system?\":\"New\"}', '1000', '560', '', '1', '207', '2021-02-12 08:42:57', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('83', '2', '2', 'phone', '{\"phone brand\":\"Apple\",\"service provider\":\"T-Mobile \",\"What is the make and model number?\":\"iPhone 11\",\"what is the condition of your phone?\":\"Used\"}', '100', '700', '', '1', '208', '2021-02-12 08:53:59', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('84', '2', '1', 'rings', '', '800', '1665', 'It was my former fiancée engagement ring. Size 8', '1', '213', '2021-02-12 21:44:42', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('85', '2', '2', 'computer', '{\"computer device\":\"desktop\",\"What is the make and model number?\":\"\",\"what is the condition of computer device?\":\"Open box\"}', '150', '319', '', '1', '216', '2021-02-13 10:47:06', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('86', '1', '2', 'phone', '{\"phone brand\":\"iPhone x\",\"service provider\":\"Khadija Gumaneh\",\"What is the make and model number?\":\"iPhone c\",\"what is the condition of your phone?\":\"Open box\"}', '300', '400', 'Samsung s6', '1', '218', '2021-02-13 15:28:16', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('87', '2', '2', 'phone', '{\"phone brand\":\"iPhone x\",\"service provider\":\"Khadija Gumaneh\",\"What is the make and model number?\":\"iPhone x\",\"what is the condition of your phone?\":\"Open box\"}', '350', '400', '', '1', '219', '2021-02-13 15:30:30', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('88', '2', '2', 'computer', '{\"computer device\":\"desktop\",\"What is the make and model number?\":\"Hp\",\"what is the condition of computer device?\":\"Used\"}', '2000', '3000', 'Desktop and keyboard mouse ', '1', '223', '2021-02-14 03:27:47', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('89', '2', '2', 'computer', '{\"computer device\":\"laptop\",\"What is the make and model number?\":\"MacBook Pro\\/A1278\",\"what is the condition of computer device?\":\"Used\"}', '0', '0', '', '1', '225', '2021-02-15 13:39:29', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('90', '2', '2', 'gaming system', '{\"does it include original remote and cable cords?\":\"yes\",\"What is the make and model number?\":\"1787\",\"what is the condition of your gaming system?\":\"Used\"}', '200', '550', '', '1', '238', '2021-02-16 01:36:06', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('91', '2', '3', 'rolex', '', '9000', '0', '18 K gold Ladies Presidential with factory set diamonds bezel, rare blue dial with diamonds, original boxes, booklets and tag. ', '1', '239', '2021-02-16 02:50:55', '0000-00-00 00:00:00');
INSERT INTO `ci_requests` VALUES ('92', '1', '2', 'other', '{\"electronics type\":\"Scanner\"}', '70', '89.99', 'This Canon CanScan Lide300 is a item I obtained from my online college course in computer animation. I currently do not use it as of now but do believe I will require it for later class courses.\r\nIt is in 100% working order yet it does not have the required cable to connect to my MacBook Pro. ', '1', '245', '2021-02-16 20:46:30', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `ci_stores`
-- ----------------------------
DROP TABLE IF EXISTS `ci_stores`;
CREATE TABLE `ci_stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_stores
-- ----------------------------
INSERT INTO `ci_stores` VALUES ('1', '230 Flatbush Avenue - Brooklyn', '', '', '');
INSERT INTO `ci_stores` VALUES ('2', '608 8th Avenue - Manhattan', '', '', '');
INSERT INTO `ci_stores` VALUES ('3', '1708 Atlantic Ave - Brooklyn', '', '', '');
INSERT INTO `ci_stores` VALUES ('4', '1535 Flatbush Avenue, Junction - Brooklyn', '', '', '');
INSERT INTO `ci_stores` VALUES ('5', '1912 Flatbush Avenue - Brooklyn', '', '', '');
INSERT INTO `ci_stores` VALUES ('6', '1724-A Pitkin Avenue - Brooklyn', '', '', '');
INSERT INTO `ci_stores` VALUES ('7', '2199 Westchester Avenue - Bronx', '', '', '');
INSERT INTO `ci_stores` VALUES ('8', '754 Allerton Avenue - Bronx', '', '', '');
INSERT INTO `ci_stores` VALUES ('9', '1049 Westchester Avenue - Southern Blvd', '', '', '');
INSERT INTO `ci_stores` VALUES ('10', '420 E. 149th Street - Bronx', '', '', '');
INSERT INTO `ci_stores` VALUES ('11', '367 East Fordham Road - Bronx', '', '', '');
INSERT INTO `ci_stores` VALUES ('12', '45-31 Bell Boulevard - Bayside', '', '', '');
INSERT INTO `ci_stores` VALUES ('13', '28-07 Steinway Street - Astoria', '', '', '');
INSERT INTO `ci_stores` VALUES ('14', '90-26 Sutphin Blvd. - Jamaica', '', '', '');
INSERT INTO `ci_stores` VALUES ('15', '216-15 Jamaica Avenue – Queens Village', '', '', '');
INSERT INTO `ci_stores` VALUES ('16', '5 South 4th Avenue - Mount Vernon', '', '', '');
INSERT INTO `ci_stores` VALUES ('17', '708 Walt Whitman Road - Melville', '', '', '');
INSERT INTO `ci_stores` VALUES ('18', '50 North Franklin Street - Hempstead', '', '', '');
INSERT INTO `ci_stores` VALUES ('19', '126 East Sunrise - Valley Stream', '', '', '');
INSERT INTO `ci_stores` VALUES ('20', '43 West John Street - Hicksville', '', '', '');
INSERT INTO `ci_stores` VALUES ('21', '229 West Sunrise Highway - Merrick', '', '', '');
INSERT INTO `ci_stores` VALUES ('22', '430 Middle Country Road - Selden', '', '', '');
INSERT INTO `ci_stores` VALUES ('23', '4229A Broadway - New York', '', '', '');
INSERT INTO `ci_stores` VALUES ('24', '351 West 125th Street - New York', '', '', '');
INSERT INTO `ci_stores` VALUES ('25', 'I don\'t know', '', '', '');
INSERT INTO `ci_stores` VALUES ('26', '-', '', '', '');

-- ----------------------------
-- Table structure for `ci_tags`
-- ----------------------------
DROP TABLE IF EXISTS `ci_tags`;
CREATE TABLE `ci_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of ci_tags
-- ----------------------------
INSERT INTO `ci_tags` VALUES ('2', 'test', '2021-04-10 03:48:24', '48');
INSERT INTO `ci_tags` VALUES ('3', 'first', '2021-04-10 03:48:45', '48');
INSERT INTO `ci_tags` VALUES ('4', 'lol', '2021-04-10 03:49:21', '43');
INSERT INTO `ci_tags` VALUES ('5', 'tags', '2021-04-10 04:02:22', '43');
INSERT INTO `ci_tags` VALUES ('6', 'cool', '2021-04-10 04:02:48', '43');
INSERT INTO `ci_tags` VALUES ('7', 'aaa', '2021-04-12 16:55:23', '43');
INSERT INTO `ci_tags` VALUES ('8', '111', '2021-04-13 02:48:37', '43');
INSERT INTO `ci_tags` VALUES ('9', 'asdf', '2021-04-13 06:35:55', '43');
INSERT INTO `ci_tags` VALUES ('10', 'aaaa', '2021-04-14 07:00:09', '43');
INSERT INTO `ci_tags` VALUES ('11', 'cool test', '2021-04-14 08:25:07', '43');
INSERT INTO `ci_tags` VALUES ('12', 'long tag test is good', '2021-04-18 17:38:43', '43');
INSERT INTO `ci_tags` VALUES ('13', 'ccc', '2021-04-19 12:57:56', '43');
INSERT INTO `ci_tags` VALUES ('14', 'sss', '2021-05-01 08:19:17', '43');
INSERT INTO `ci_tags` VALUES ('15', 'administrator', '2021-05-03 05:08:28', '43');
INSERT INTO `ci_tags` VALUES ('16', 'asdfa', '2021-05-03 05:10:04', '43');
INSERT INTO `ci_tags` VALUES ('17', 'bbb', '2021-05-03 05:21:17', '43');
INSERT INTO `ci_tags` VALUES ('18', 'eee', '2021-05-03 05:47:22', '43');
INSERT INTO `ci_tags` VALUES ('20', 'ppp', '2021-05-04 06:01:04', '43');
INSERT INTO `ci_tags` VALUES ('21', 'lll', '2021-05-04 06:02:32', '43');
INSERT INTO `ci_tags` VALUES ('23', 'kkk', '2021-05-04 06:06:14', '43');
INSERT INTO `ci_tags` VALUES ('24', 'jjj', '2021-05-04 06:06:48', '43');
INSERT INTO `ci_tags` VALUES ('25', 'aaaaaaa', '2021-05-04 06:46:01', '43');
INSERT INTO `ci_tags` VALUES ('26', 'aaa', '2021-05-04 07:26:20', '43');
INSERT INTO `ci_tags` VALUES ('27', 'ggg', '2021-05-04 07:31:26', '43');
INSERT INTO `ci_tags` VALUES ('28', 'fffffff', '2021-05-04 07:32:02', '43');
INSERT INTO `ci_tags` VALUES ('35', 'bbbb', '2021-05-06 19:05:15', '43');
INSERT INTO `ci_tags` VALUES ('36', 'r', '2021-05-06 20:50:30', '43');
INSERT INTO `ci_tags` VALUES ('37', 'ad', '2021-05-06 21:13:48', '43');
INSERT INTO `ci_tags` VALUES ('38', 'dd', '2021-05-06 21:17:13', '43');

-- ----------------------------
-- Table structure for `ci_templates`
-- ----------------------------
DROP TABLE IF EXISTS `ci_templates`;
CREATE TABLE `ci_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_templates
-- ----------------------------
INSERT INTO `ci_templates` VALUES ('1', 'Your Submission Has Been Received', '<p>aaaaa</p>\n', '2021-01-29 03:10:09', '2021-05-03 05:41:37', '0', '', '0');
INSERT INTO `ci_templates` VALUES ('2', 'Your Online Payment Request Has Been Received', '<p><span style=\"font-size:36px\"><strong>This is test note.</strong></span></p>\n', '2021-01-29 03:10:12', '2021-05-03 06:19:27', '0', '', '0');
INSERT INTO `ci_templates` VALUES ('5', 'There rise and fall of fish soy in the Roman Empire', '<p>I was thinking about this the other day. &nbsp;An important <strong>distinction</strong> to be made when discussing the impact of Roman pie making vs the the cultural impact of chatbots.</p>\r\n\r\n<ul>\r\n	<li>Shrimp paste</li>\r\n	<li>Intel</li>\r\n	<li>Ceaser</li>\r\n</ul>\r\n', '2021-04-07 09:29:10', '2021-04-07 09:31:56', '50', '', '1');
INSERT INTO `ci_templates` VALUES ('6', 'Making donuts with a typewriter', '<p>The perfect meal to go with coffee and a Hurst speed shifter.</p>\r\n', '2021-04-07 09:32:01', '2021-04-07 09:32:42', '50', '', '1');
INSERT INTO `ci_templates` VALUES ('7', 'cccaaa', '<p>aaaaaaaerer</p>\n', '2021-04-07 12:46:22', '2021-04-13 05:04:08', '43', '5,4,6,8', '1');
INSERT INTO `ci_templates` VALUES ('8', 'Test', '', '2021-04-10 01:59:09', '2021-05-03 05:32:07', '43', '1,4,3,5', '1');
INSERT INTO `ci_templates` VALUES ('9', 'Test', '', '2021-04-10 03:30:50', '2021-05-03 05:32:10', '48', '3', '1');
INSERT INTO `ci_templates` VALUES ('21', 'test', '<p>tttaaa</p>\n', '2021-04-10 04:03:20', '2021-05-03 17:24:11', '43', '6', '1');
INSERT INTO `ci_templates` VALUES ('35', 'ttt', '<p>bbbbb</p>\n\n<p>&nbsp;</p>\n', '2021-04-19 16:06:00', '2021-05-06 21:27:31', '43', '16,7,17,18,19,36,13', '1');
INSERT INTO `ci_templates` VALUES ('37', 'Create test', '<p>aaaaa</p>\n', '2021-04-19 16:08:55', '2021-05-03 17:30:38', '43', '2,14,15', '1');
INSERT INTO `ci_templates` VALUES ('38', 'testestaaaa', '<p>aaaaa</p>\n', '2021-04-19 18:23:29', '2021-05-06 21:17:15', '43', '38', '1');
INSERT INTO `ci_templates` VALUES ('53', 'www', '', '2021-05-04 07:14:36', '2021-05-06 19:59:50', '43', '26', '1');
INSERT INTO `ci_templates` VALUES ('54', 'tester', '<p>test</p>\n\n<p>&nbsp;</p>\n', '2021-05-05 16:46:36', '2021-05-06 18:52:51', '53', '26', '1');

-- ----------------------------
-- Table structure for `ci_user_groups`
-- ----------------------------
DROP TABLE IF EXISTS `ci_user_groups`;
CREATE TABLE `ci_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_user_groups
-- ----------------------------
INSERT INTO `ci_user_groups` VALUES ('1', 'member');
INSERT INTO `ci_user_groups` VALUES ('2', 'admin');

-- ----------------------------
-- Table structure for `ci_users`
-- ----------------------------
DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verify` tinyint(4) NOT NULL DEFAULT 0,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_users
-- ----------------------------
INSERT INTO `ci_users` VALUES ('3', 'Jsully', 'Judith', 'Sully', 'Judiths@gempawn.net', '', '$2y$10$YCokJeCfh8KdAqH31Iob7eCS0CCjuzMsFRaUnN2Cq4WUVn.OIlMC2', '', '1', '0', '1', '1', '', '', '', '2017-09-29 10:09:44', '2021-01-27 09:01:39', '', '', '', '');
INSERT INTO `ci_users` VALUES ('43', 'grant', '', '', 'grantlarocca4@gmail.com', '', '$2y$10$3Rsam3RMqkxRwM26DpAu1..BcRXKHcqI5WCszUuBnUfWPERj/Gnni', '', '2', '1', '1', '1', '', '', '', '2021-01-10 00:00:00', '2021-04-23 23:29:17', 'Gatekeeper', 'Blue Bridge', 'Color theory', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit');
INSERT INTO `ci_users` VALUES ('54', 'test', '', '', 'test@gmail.com', '', '$2y$10$XRmT9tYos/9O8wcquS/5i.TSAJaTBuLdmvLgwN.I2aYGf6dhVWv7u', '', '1', '1', '1', '0', '', '', '', '2021-05-05 17:01:07', '2021-05-05 17:01:07', 'Gatekeeper', '123', 'Color theory', 'asfadsf');
INSERT INTO `ci_users` VALUES ('48', 'ddd', 'Evan', 'Sanderson', 'kingdeveloper@yahoo.com', '', '$2y$10$M81TzOrtzxHbSskzX9ACU.TPCIPYk78zKt0LQxMTFs0ZPdofundym', '', '1', '1', '1', '0', '', '', '', '2021-03-26 12:59:07', '2021-03-26 12:59:07', '', '', '', '');
INSERT INTO `ci_users` VALUES ('49', 'rrr', 'Dan', 'Crutis', 'cole@danrite.com', '', '$2y$10$/Ot4uIESDKyJzqctNjHjXO7muT0ijwjVQxSnX72H.NyPvmVmouT3O', '', '1', '1', '1', '0', '', '', '', '2021-03-26 13:08:50', '2021-03-26 13:08:50', '', '', '', '');
INSERT INTO `ci_users` VALUES ('50', 'administrator', 'Administrator', 'Developer', 'lignepolaris@gmail.com', '', '$2y$10$FWK.wZSKDmdvZ2UoF4TSGOdXMcY/ZlXag07difCK1/ZkZ5gCRjOSi', '', '1', '1', '1', '1', '', '', '', '2021-03-26 13:11:00', '2021-03-26 13:11:00', '', '', '', '');
