/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50051
Source Host           : 127.0.0.1:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2020-03-19 11:45:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(12) collate utf8_unicode_ci NOT NULL,
  `pwd` varchar(12) collate utf8_unicode_ci NOT NULL,
  `danwei` varchar(12) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for info_computer
-- ----------------------------
DROP TABLE IF EXISTS `info_computer`;
CREATE TABLE `info_computer` (
  `computer_id` int(12) NOT NULL,
  `computer_email` varchar(22) collate utf8_unicode_ci NOT NULL,
  `computer_name` varchar(12) collate utf8_unicode_ci NOT NULL,
  `computer_ceo` varchar(12) collate utf8_unicode_ci NOT NULL,
  `computer_tel` varchar(12) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`computer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for info_toubiao
-- ----------------------------
DROP TABLE IF EXISTS `info_toubiao`;
CREATE TABLE `info_toubiao` (
  `toubiao_id` int(12) NOT NULL auto_increment,
  `zhaobiao_id` int(12) NOT NULL,
  `computer_id` int(12) NOT NULL,
  `toubiao_date` varchar(60) collate utf8_unicode_ci NOT NULL,
  `toubiao_money` varchar(12) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`toubiao_id`),
  KEY `computer_id` (`computer_id`),
  KEY `zhaobiao_id` (`zhaobiao_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for info_zhaobiao
-- ----------------------------
DROP TABLE IF EXISTS `info_zhaobiao`;
CREATE TABLE `info_zhaobiao` (
  `zhaobiao_id` int(12) NOT NULL auto_increment,
  `yaopin_name` varchar(12) collate utf8_unicode_ci NOT NULL,
  `zhaobiao_total` varchar(12) collate utf8_unicode_ci NOT NULL,
  `zhaobiao_end_date` date NOT NULL,
  `zhaobiao_baozhenjin` varchar(12) collate utf8_unicode_ci NOT NULL,
  `computer_id` int(12) NOT NULL,
  PRIMARY KEY  (`zhaobiao_id`),
  KEY `computer_id` (`computer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user_toubiao
-- ----------------------------
DROP TABLE IF EXISTS `user_toubiao`;
CREATE TABLE `user_toubiao` (
  `username` varchar(12) collate utf8_unicode_ci NOT NULL,
  `pwd` varchar(12) collate utf8_unicode_ci NOT NULL,
  `danwei` varchar(12) collate utf8_unicode_ci NOT NULL,
  `computer_id` int(12) NOT NULL auto_increment,
  PRIMARY KEY  (`computer_id`),
  UNIQUE KEY `username` (`username`),
  KEY `danwei` (`danwei`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for user_zhaobiao
-- ----------------------------
DROP TABLE IF EXISTS `user_zhaobiao`;
CREATE TABLE `user_zhaobiao` (
  `username` varchar(12) collate utf8_unicode_ci NOT NULL,
  `pwd` varchar(12) collate utf8_unicode_ci NOT NULL,
  `danwei` varchar(12) collate utf8_unicode_ci NOT NULL,
  `computer_id` int(12) NOT NULL auto_increment,
  PRIMARY KEY  (`computer_id`),
  UNIQUE KEY `username` (`username`),
  KEY `danwei` (`danwei`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
