/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : microsties

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2011-11-30 16:11:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `image`
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('27', '3', '1322550650_UDID_final.jpg', null);
INSERT INTO `image` VALUES ('28', '3', '1322550650_UDID_Device.png', null);
INSERT INTO `image` VALUES ('29', '3', '1322550650_UDID_serial.png', null);

-- ----------------------------
-- Table structure for `review`
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` text,
  `rate` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('1', 'Race Of Champions Review', 'http://www.148apps.com/reviews/race-champions-review/', 'Real Racing 2 has competition on its hands. That’s the most striking thing to come to mind when looking at Race of Champions. It’s a bit of admitted hyperbole, as there’s plenty of room for two excellent racing games on the App Store, but it’s an easy way to explain that Race of Champions is rather good.', '3', '3');

-- ----------------------------
-- Table structure for `site`
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('3', 'Race Of Champion Official Mobile Game', 'roc', 'Race Of Champion Official Mobile Game Promotion Site', '1322664621_RoC_bg.png', '#000000');

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('2', 'Dynamite - Taio Cruz (Boyce Avenue acoustic/piano cover) on iTunes', '3', '&lt;iframe src=\"http://www.youtube.com/embed/30WakIlloqs\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" width=\"560\"&gt;&lt;/iframe>');
