/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : clubs

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-07-27 16:08:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for application
-- ----------------------------
DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `treasurer_name` varchar(255) DEFAULT NULL,
  `treasurer_last` varchar(255) DEFAULT NULL,
  `treasurer_email` varchar(255) DEFAULT NULL,
  `treasurer_phone` varchar(255) DEFAULT NULL,
  `club_name` varchar(255) DEFAULT NULL,
  `sport` varchar(255) DEFAULT NULL,
  `members` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `free` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of application
-- ----------------------------

-- ----------------------------
-- Table structure for contents
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(11) DEFAULT NULL,
  `Content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES ('1', 'About Us', 'About quis lacus tortor. Donec aliquam dolor a euismod facilisis. Nullam convallis arcu et dignissim luctus. Vestibulum facilisis suscipit laoreet. Nullam quis consequat erat. Maecenas vel augue sed lorem ullamcorper aliquet efficitur et enim. Vivamus scelerisque ipsum at arcu scelerisque, auctor vulputate neque fermentum.\r\n\r\nNunc urna ligula, rutrum sed ante at, malesuada rutrum arcu. Pellentesque pretium et lorem ultricies hendrerit. Integer rutrum malesuada urna eget cursus. Integer semper dui sem, id lobortis orci volutpat sit amet. Sed ornare venenatis lobortis. Mauris finibus libero in consequat tincidunt. Vivamus quis scelerisque quam, placerat fermentum arcu. Integer ornare nulla neque, et dignissim orci consequat a. Nunc consequat pellentesque ipsum sed cursus. Sed eu accumsan leo. Nulla venenatis eleifend nisl, et pretium lorem tincidunt eu. Curabitur vel aliquet nibh.\r\n\r\nQuisque lorem nibh, hendrerit eu nibh ac, hendrerit mollis nulla. Phasellus eleifend ultrices condimentum. Fusce vestibulum pharetra quam dapibus bibendum. Nulla in urna felis. Integer vel euismod felis. Nunc in placerat neque. Quisque consequat facilisis tellus, nec malesuada nulla pharetra in. Nulla elementum imperdiet ex vel blandit. Vestibulum vestibulum tortor justo. Aliquam sit amet pulvinar justo, placerat vulputate quam. Donec tempor, augue sed tincidunt vehicula, ipsum metus tristique tortor, ac commodo nisl nibh sit amet lacus. Duis gravida placerat mi vel aliquet. Duis pretium justo eget enim volutpat malesuada. Integer leo arcu, sollicitudin maximus leo non, cursus suscipit nulla. Proin elementum ultricies lectus, convallis suscipit dolor.\r\n\r\nFusce mattis libero a tincidunt placerat. Nulla quis odio ac arcu volutpat scelerisque. Ut eget nibh vitae nisi imperdiet accumsan. Nunc ac efficitur ligula. Etiam ornare magna enim, quis porta nunc dictum vitae. Donec at est ut tortor tempus pulvinar et non quam. Cras mattis, elit in posuere auctor, justo mauris tempor ex, in consectetur nisl dolor fringilla erat. Nullam aliquam libero turpis, sit amet dapibus lorem laoreet eu. In neque libero, semper in sollicitudin laoreet, volutpat id leo. Vestibulum eleifend sem neque, id dapibus neque aliquam a. Etiam porta mi ante, a interdum quam dignissim at. Donec mi leo, malesuada at malesuada non, malesuada eget nunc. Phasellus scelerisque diam eu sapien venenatis, at malesuada augue dignissim. Aliquam et ornare risus, ut facilisis enim. Nullam placerat sem sit amet diam iaculis, at vestibulum velit laoreet. Quisque in mi sit amet dolor interdum congue a a justo.\r\n\r\nCras porta convallis laoreet. Nunc sit amet arcu sit amet mauris dictum sollicitudin non tincidunt diam. Morbi non aliquam ante. Duis sed risus facilisis, fringilla orci non, blandit augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor molestie lacus et dapibus. Nullam eget lobortis dolor. Etiam in suscipit quam. Etiam convallis nulla eu risus commodo sollicitudin quis non nunc. Praesent ultricies ante eros, ac blandit turpis rhoncus sit amet. Phasellus dignissim mollis risus, et imperdiet lacus pharetra sed. Fusce risus lorem, luctus vitae dignissim ut, feugiat interdum arcu. Pellentesque aliquet in lectus a molestie. Integer vel vulputate libero. Integer vehicula eros in massa malesuada ultrices. Suspendisse hendrerit diam rutrum magna volutpat, eget sodales nisl ornare.');
INSERT INTO `contents` VALUES ('2', 'Contact Us', 'Contact ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus tortor. Donec aliquam dolor a euismod facilisis. Nullam convallis arcu et dignissim luctus. Vestibulum facilisis suscipit laoreet. Nullam quis consequat erat. Maecenas vel augue sed lorem ullamcorper aliquet efficitur et enim. Vivamus scelerisque ipsum at arcu scelerisque, auctor vulputate neque fermentum.\r\n\r\nNunc urna ligula, rutrum sed ante at, malesuada rutrum arcu. Pellentesque pretium et lorem ultricies hendrerit. Integer rutrum malesuada urna eget cursus. Integer semper dui sem, id lobortis orci volutpat sit amet. Sed ornare venenatis lobortis. Mauris finibus libero in consequat tincidunt. Vivamus quis scelerisque quam, placerat fermentum arcu. Integer ornare nulla neque, et dignissim orci consequat a. Nunc consequat pellentesque ipsum sed cursus. Sed eu accumsan leo. Nulla venenatis eleifend nisl, et pretium lorem tincidunt eu. Curabitur vel aliquet nibh.\r\n\r\nQuisque lorem nibh, hendrerit eu nibh ac, hendrerit mollis nulla. Phasellus eleifend ultrices condimentum. Fusce vestibulum pharetra quam dapibus bibendum. Nulla in urna felis. Integer vel euismod felis. Nunc in placerat neque. Quisque consequat facilisis tellus, nec malesuada nulla pharetra in. Nulla elementum imperdiet ex vel blandit. Vestibulum vestibulum tortor justo. Aliquam sit amet pulvinar justo, placerat vulputate quam. Donec tempor, augue sed tincidunt vehicula, ipsum metus tristique tortor, ac commodo nisl nibh sit amet lacus. Duis gravida placerat mi vel aliquet. Duis pretium justo eget enim volutpat malesuada. Integer leo arcu, sollicitudin maximus leo non, cursus suscipit nulla. Proin elementum ultricies lectus, convallis suscipit dolor.\r\n\r\nFusce mattis libero a tincidunt placerat. Nulla quis odio ac arcu volutpat scelerisque. Ut eget nibh vitae nisi imperdiet accumsan. Nunc ac efficitur ligula. Etiam ornare magna enim, quis porta nunc dictum vitae. Donec at est ut tortor tempus pulvinar et non quam. Cras mattis, elit in posuere auctor, justo mauris tempor ex, in consectetur nisl dolor fringilla erat. Nullam aliquam libero turpis, sit amet dapibus lorem laoreet eu. In neque libero, semper in sollicitudin laoreet, volutpat id leo. Vestibulum eleifend sem neque, id dapibus neque aliquam a. Etiam porta mi ante, a interdum quam dignissim at. Donec mi leo, malesuada at malesuada non, malesuada eget nunc. Phasellus scelerisque diam eu sapien venenatis, at malesuada augue dignissim. Aliquam et ornare risus, ut facilisis enim. Nullam placerat sem sit amet diam iaculis, at vestibulum velit laoreet. Quisque in mi sit amet dolor interdum congue a a justo.\r\n\r\nCras porta convallis laoreet. Nunc sit amet arcu sit amet mauris dictum sollicitudin non tincidunt diam. Morbi non aliquam ante. Duis sed risus facilisis, fringilla orci non, blandit augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor molestie lacus et dapibus. Nullam eget lobortis dolor. Etiam in suscipit quam. Etiam convallis nulla eu risus commodo sollicitudin quis non nunc. Praesent ultricies ante eros, ac blandit turpis rhoncus sit amet. Phasellus dignissim mollis risus, et imperdiet lacus pharetra sed. Fusce risus lorem, luctus vitae dignissim ut, feugiat interdum arcu. Pellentesque aliquet in lectus a molestie. Integer vel vulputate libero. Integer vehicula eros in massa malesuada ultrices. Suspendisse hendrerit diam rutrum magna volutpat, eget sodales nisl ornare.');
INSERT INTO `contents` VALUES ('3', 'FAQ', 'Faq ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus tortor. Donec aliquam dolor a euismod facilisis. Nullam convallis arcu et dignissim luctus. Vestibulum facilisis suscipit laoreet. Nullam quis consequat erat. Maecenas vel augue sed lorem ullamcorper aliquet efficitur et enim. Vivamus scelerisque ipsum at arcu scelerisque, auctor vulputate neque fermentum.\r\n\r\nNunc urna ligula, rutrum sed ante at, malesuada rutrum arcu. Pellentesque pretium et lorem ultricies hendrerit. Integer rutrum malesuada urna eget cursus. Integer semper dui sem, id lobortis orci volutpat sit amet. Sed ornare venenatis lobortis. Mauris finibus libero in consequat tincidunt. Vivamus quis scelerisque quam, placerat fermentum arcu. Integer ornare nulla neque, et dignissim orci consequat a. Nunc consequat pellentesque ipsum sed cursus. Sed eu accumsan leo. Nulla venenatis eleifend nisl, et pretium lorem tincidunt eu. Curabitur vel aliquet nibh.\r\n\r\nQuisque lorem nibh, hendrerit eu nibh ac, hendrerit mollis nulla. Phasellus eleifend ultrices condimentum. Fusce vestibulum pharetra quam dapibus bibendum. Nulla in urna felis. Integer vel euismod felis. Nunc in placerat neque. Quisque consequat facilisis tellus, nec malesuada nulla pharetra in. Nulla elementum imperdiet ex vel blandit. Vestibulum vestibulum tortor justo. Aliquam sit amet pulvinar justo, placerat vulputate quam. Donec tempor, augue sed tincidunt vehicula, ipsum metus tristique tortor, ac commodo nisl nibh sit amet lacus. Duis gravida placerat mi vel aliquet. Duis pretium justo eget enim volutpat malesuada. Integer leo arcu, sollicitudin maximus leo non, cursus suscipit nulla. Proin elementum ultricies lectus, convallis suscipit dolor.\r\n\r\nFusce mattis libero a tincidunt placerat. Nulla quis odio ac arcu volutpat scelerisque. Ut eget nibh vitae nisi imperdiet accumsan. Nunc ac efficitur ligula. Etiam ornare magna enim, quis porta nunc dictum vitae. Donec at est ut tortor tempus pulvinar et non quam. Cras mattis, elit in posuere auctor, justo mauris tempor ex, in consectetur nisl dolor fringilla erat. Nullam aliquam libero turpis, sit amet dapibus lorem laoreet eu. In neque libero, semper in sollicitudin laoreet, volutpat id leo. Vestibulum eleifend sem neque, id dapibus neque aliquam a. Etiam porta mi ante, a interdum quam dignissim at. Donec mi leo, malesuada at malesuada non, malesuada eget nunc. Phasellus scelerisque diam eu sapien venenatis, at malesuada augue dignissim. Aliquam et ornare risus, ut facilisis enim. Nullam placerat sem sit amet diam iaculis, at vestibulum velit laoreet. Quisque in mi sit amet dolor interdum congue a a justo.\r\n\r\nCras porta convallis laoreet. Nunc sit amet arcu sit amet mauris dictum sollicitudin non tincidunt diam. Morbi non aliquam ante. Duis sed risus facilisis, fringilla orci non, blandit augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque porttitor molestie lacus et dapibus. Nullam eget lobortis dolor. Etiam in suscipit quam. Etiam convallis nulla eu risus commodo sollicitudin quis non nunc. Praesent ultricies ante eros, ac blandit turpis rhoncus sit amet. Phasellus dignissim mollis risus, et imperdiet lacus pharetra sed. Fusce risus lorem, luctus vitae dignissim ut, feugiat interdum arcu. Pellentesque aliquet in lectus a molestie. Integer vel vulputate libero. Integer vehicula eros in massa malesuada ultrices. Suspendisse hendrerit diam rutrum magna volutpat, eget sodales nisl ornare.');

-- ----------------------------
-- Table structure for login_tokens
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for logos
-- ----------------------------
DROP TABLE IF EXISTS `logos`;
CREATE TABLE `logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logos
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin', '045ce212b12837b6a68f9eeda3ecf242', '83132671d46057c17213eef021af2b55', 'admin@admin.com', 'Admin', '', '1', '1', '', '2016-03-29 09:55:25', '2016-04-12 19:04:38');

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES ('1', 'Admin', 'Admin', '0', '2016-03-29 09:55:26', '2016-03-29 09:55:26');
INSERT INTO `user_groups` VALUES ('2', 'User', 'User', '1', '2016-03-29 09:55:26', '2016-03-29 09:55:26');
INSERT INTO `user_groups` VALUES ('3', 'Guest', 'Guest', '0', '2016-03-29 09:55:26', '2016-03-29 09:55:26');

-- ----------------------------
-- Table structure for user_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO `user_group_permissions` VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO `user_group_permissions` VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO `user_group_permissions` VALUES ('26', '2', 'Users', 'viewUser', '0');
INSERT INTO `user_group_permissions` VALUES ('27', '3', 'Users', 'viewUser', '0');
INSERT INTO `user_group_permissions` VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('30', '3', 'Users', 'myprofile', '0');
INSERT INTO `user_group_permissions` VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO `user_group_permissions` VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('44', '2', 'Users', 'changeUserPassword', '0');
INSERT INTO `user_group_permissions` VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO `user_group_permissions` VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO `user_group_permissions` VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO `user_group_permissions` VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO `user_group_permissions` VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO `user_group_permissions` VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('54', '3', 'Users', 'dashboard', '0');
INSERT INTO `user_group_permissions` VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO `user_group_permissions` VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO `user_group_permissions` VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO `user_group_permissions` VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO `user_group_permissions` VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('78', '3', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('79', '1', 'Pages', 'sendMail', '1');
INSERT INTO `user_group_permissions` VALUES ('80', '2', 'Pages', 'sendMail', '1');
INSERT INTO `user_group_permissions` VALUES ('81', '3', 'Pages', 'sendMail', '1');
INSERT INTO `user_group_permissions` VALUES ('82', '1', 'Pages', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('83', '2', 'Pages', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('84', '3', 'Pages', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('85', '1', 'Pages', 'faq', '1');
INSERT INTO `user_group_permissions` VALUES ('86', '2', 'Pages', 'faq', '1');
INSERT INTO `user_group_permissions` VALUES ('87', '3', 'Pages', 'faq', '1');
INSERT INTO `user_group_permissions` VALUES ('88', '1', 'Pages', 'contact', '1');
INSERT INTO `user_group_permissions` VALUES ('89', '2', 'Pages', 'contact', '1');
INSERT INTO `user_group_permissions` VALUES ('90', '3', 'Pages', 'contact', '1');
INSERT INTO `user_group_permissions` VALUES ('91', '1', 'Pages', 'about', '1');
INSERT INTO `user_group_permissions` VALUES ('92', '2', 'Pages', 'about', '1');
INSERT INTO `user_group_permissions` VALUES ('93', '3', 'Pages', 'about', '1');
INSERT INTO `user_group_permissions` VALUES ('94', '1', 'Pages', 'confirmation', '1');
INSERT INTO `user_group_permissions` VALUES ('95', '2', 'Pages', 'confirmation', '1');
INSERT INTO `user_group_permissions` VALUES ('96', '3', 'Pages', 'confirmation', '1');
INSERT INTO `user_group_permissions` VALUES ('97', '1', 'Pages', 'apply', '1');
INSERT INTO `user_group_permissions` VALUES ('98', '2', 'Pages', 'apply', '1');
INSERT INTO `user_group_permissions` VALUES ('99', '3', 'Pages', 'apply', '1');
INSERT INTO `user_group_permissions` VALUES ('100', '1', 'Start', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('101', '2', 'Start', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('102', '3', 'Start', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('103', '1', 'Applications', 'add', '1');
INSERT INTO `user_group_permissions` VALUES ('104', '2', 'Applications', 'add', '1');
INSERT INTO `user_group_permissions` VALUES ('105', '3', 'Applications', 'add', '1');
