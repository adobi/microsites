/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : microsties

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2011-12-07 16:03:47
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('27', '3', '1322550650_UDID_final.jpg', null);
INSERT INTO `image` VALUES ('28', '3', '1322550650_UDID_Device.png', null);
INSERT INTO `image` VALUES ('29', '3', '1322550650_UDID_serial.png', null);
INSERT INTO `image` VALUES ('40', '4', '1322812388_2011.10_.06_1317918533_greedcorp05_iPad_.jpg', null);
INSERT INTO `image` VALUES ('41', '4', '1322812658_2011.10_.06_1317918574_greedcorp01_iPad_.jpg', null);
INSERT INTO `image` VALUES ('42', '4', '1322812658_2011.10_.06_1317918539_greedcorp02_iPad_.jpg', null);
INSERT INTO `image` VALUES ('43', '4', '1322812658_2011.10_.06_1317918578_greedcorp04_iPad_.jpg', null);
INSERT INTO `image` VALUES ('44', '4', '1322812658_2011.10_.06_1317918574_greedcorp03_iPad_.jpg', null);
INSERT INTO `image` VALUES ('45', '4', '1323253372_2011.10_.06_1317918574_greedcorp03_iPad_.jpg', null);
INSERT INTO `image` VALUES ('46', '4', '1323253372_2011.10_.06_1317918578_greedcorp04_iPad_.jpg', null);
INSERT INTO `image` VALUES ('47', '4', '1323253372_2011.10_.06_1317918539_greedcorp02_iPad_.jpg', null);
INSERT INTO `image` VALUES ('48', '4', '1323253372_2011.10_.06_1317918533_greedcorp05_iPad_.jpg', null);
INSERT INTO `image` VALUES ('49', '4', '1323253372_2011.10_.06_1317918574_greedcorp01_iPad_.jpg', null);
INSERT INTO `image` VALUES ('50', '5', '1323256782_2011.10_.06_1317918533_greedcorp05_iPad_.jpg', null);
INSERT INTO `image` VALUES ('51', '5', '1323256794_2011.10_.06_1317918539_greedcorp02_iPad_.jpg', null);

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
  `press` varchar(255) DEFAULT NULL,
  `press_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('1', 'Race Of Champions Review', 'http://www.148apps.com/reviews/race-champions-review/', 'Real Racing 2 has competition on its hands. That’s the most striking thing to come to mind when looking at Race of Champions. It’s a bit of admitted hyperbole, as there’s plenty of room for two excellent racing games on the App Store, but it’s an easy way to explain that Race of Champions is rather good.', '3', '3', null, null);
INSERT INTO `review` VALUES ('3', 'Lorem Ipsum is simply dummy text', 'http://google.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2', '4', 'Lorem Ipsum dolor', null);

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
  `font_color` varchar(255) DEFAULT NULL,
  `description` text,
  `link_color` varchar(255) DEFAULT NULL,
  `about_background_color` varchar(255) DEFAULT NULL,
  `reviews_background_color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES ('3', 'Race Of Champion Official Mobile Game', 'roc', 'Race Of Champion Official Mobile Game Promotion Site', '1323072656_RoC_bg.png', '#000000', null, null, null, null, null);
INSERT INTO `site` VALUES ('4', 'Greed Corp', 'greed-corp', 'Official Game', '1323251754_bg.png', '#000000', '#f7f7f7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '#eb782d', '#111111', '#111111');
INSERT INTO `site` VALUES ('5', 'Santa Ride', 'santa-ride', 'Santa Ride', '1323251767_bg.png', '#ffffff', '#000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', null, null, null);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('2', 'Dynamite - Taio Cruz (Boyce Avenue acoustic/piano cover) on iTunes', '3', '&lt;iframe src=\"http://www.youtube.com/embed/30WakIlloqs\" allowfullscreen=\"\" frameborder=\"0\" height=\"350\" width=\"450\"&gt;&lt;/iframe>');
INSERT INTO `video` VALUES ('3', 'To demonstrate this process here is brief tutorial. Afterward you\'ll find reference information.', '4', '&lt;iframe src=\"http://www.youtube.com/embed/1P3MegpkaMI\" allowfullscreen=\"\" frameborder=\"0\" height=\"350\" width=\"450\"&gt;&lt;/iframe>');
INSERT INTO `video` VALUES ('4', 'To demonstrate this process here is brief tutorial. Afterward you\'ll find reference information.', '4', '&lt;iframe src=\"http://www.youtube.com/embed/1P3MegpkaMI\" allowfullscreen=\"\" frameborder=\"0\" height=\"350\" width=\"450\"&gt;&lt;/iframe>');
