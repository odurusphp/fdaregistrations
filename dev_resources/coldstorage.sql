/*
 Navicat Premium Data Transfer

 Source Server         : home
 Source Server Type    : MySQL
 Source Server Version : 50633
 Source Host           : localhost:3306
 Source Schema         : fdaregistration

 Target Server Type    : MySQL
 Target Server Version : 50633
 File Encoding         : 65001

 Date: 31/12/2018 16:14:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for coldstorage
-- ----------------------------
DROP TABLE IF EXISTS `coldstorage`;
CREATE TABLE `coldstorage`  (
  `coldid` int(11) NOT NULL AUTO_INCREMENT,
  `facilityname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facilitylocation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `storagecapacity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `freezerfacility` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horsepower` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `otherfacilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`coldid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of coldstorage
-- ----------------------------
INSERT INTO `coldstorage` VALUES (1, 'storage hub', 'Accra, Ghana', '50', 'Blast Freezer', '750hp', 'washer', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dateregistered` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`uid`) USING BTREE,
  UNIQUE INDEX `uid_UNIQUE`(`uid`) USING BTREE,
  UNIQUE INDEX `username_UNIQUE`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'yaw@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'POQA', NULL);
INSERT INTO `users` VALUES (2, 'odurusphp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Prince Oduro', NULL);

SET FOREIGN_KEY_CHECKS = 1;
