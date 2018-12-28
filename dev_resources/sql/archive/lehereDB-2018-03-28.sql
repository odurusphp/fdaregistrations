/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.21-log : Database - lehrerdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lehrerdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `lehrerdb`;

/*Table structure for table `activities` */

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `activitydate` date DEFAULT NULL,
  `addressform` varchar(45) DEFAULT NULL,
  `addressresult` varchar(45) DEFAULT NULL,
  `nextsteps` text,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `activities` */

/*Table structure for table `financecoaches` */

DROP TABLE IF EXISTS `financecoaches`;

CREATE TABLE `financecoaches` (
  `financecoachid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`financecoachid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `financecoaches` */

/*Table structure for table `frameworkjobs` */

DROP TABLE IF EXISTS `frameworkjobs`;

CREATE TABLE `frameworkjobs` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(45) NOT NULL,
  `jobmethod` varchar(45) NOT NULL,
  `lastrun` timestamp NULL DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `queuewait` tinyint(4) DEFAULT NULL,
  `frequencyminutes` int(11) DEFAULT NULL,
  `numtoprocess` int(11) DEFAULT NULL,
  `batchsize` int(11) DEFAULT NULL,
  `processed` int(11) DEFAULT NULL,
  `lastprocessed` int(11) DEFAULT NULL,
  `lasttimestamp` timestamp NULL DEFAULT NULL,
  `exitmessage` varchar(45) DEFAULT NULL,
  `queuedata` text,
  PRIMARY KEY (`jobid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `frameworkjobs` */

/*Table structure for table `institutions` */

DROP TABLE IF EXISTS `institutions`;

CREATE TABLE `institutions` (
  `institutionid` int(11) NOT NULL AUTO_INCREMENT,
  `nameofinstitution` varchar(90) DEFAULT NULL,
  `typeofinstitution` varchar(45) DEFAULT NULL,
  `typeofschool` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `homepage` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`institutionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `institutions` */

/*Table structure for table `logcategories` */

DROP TABLE IF EXISTS `logcategories`;

CREATE TABLE `logcategories` (
  `logcategory` varchar(32) NOT NULL,
  PRIMARY KEY (`logcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `logcategories` */

insert  into `logcategories`(`logcategory`) values ('administrator action'),('customer action'),('information'),('system - general'),('system - scheduled');

/*Table structure for table `materials` */

DROP TABLE IF EXISTS `materials`;

CREATE TABLE `materials` (
  `matid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(45) DEFAULT NULL,
  `memberid` int(11) DEFAULT NULL,
  PRIMARY KEY (`matid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `materials` */

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `institutionid` int(11) DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `street` varchar(90) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `reachability` varchar(45) DEFAULT NULL,
  `subjects` varchar(45) DEFAULT NULL,
  `housenumber` varchar(45) DEFAULT NULL,
  `otherinfomation` text,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `members` */

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `newsletterid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `receivednewsletters` int(11) DEFAULT NULL,
  `openednewsletters` int(11) DEFAULT NULL,
  `newsletterclicks` int(11) DEFAULT NULL,
  PRIMARY KEY (`newsletterid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `newsletter` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `activityid` int(11) DEFAULT NULL,
  `financecoachid` int(11) DEFAULT NULL,
  `orderdate` date DEFAULT NULL,
  `ordertype` varchar(10) DEFAULT NULL,
  `theme` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `numberofstudents` int(11) DEFAULT NULL,
  `numberofclasses` int(11) DEFAULT NULL,
  `otherinformation` text,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `orders` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(24) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

/*Table structure for table `systemlog` */

DROP TABLE IF EXISTS `systemlog`;

CREATE TABLE `systemlog` (
  `idsystemlog` int(11) NOT NULL AUTO_INCREMENT,
  `logcategory` varchar(32) NOT NULL DEFAULT 'information',
  `user` varchar(90) NOT NULL DEFAULT 'unknown - error?',
  `logmessage` varchar(1024) NOT NULL,
  `diagnostic` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsystemlog`),
  KEY `enforce_cats_idx` (`logcategory`),
  CONSTRAINT `enforce_cat` FOREIGN KEY (`logcategory`) REFERENCES `logcategories` (`logcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `systemlog` */

/*Table structure for table `trainings` */

DROP TABLE IF EXISTS `trainings`;

CREATE TABLE `trainings` (
  `trainingid` int(11) NOT NULL AUTO_INCREMENT,
  `activityid` int(11) DEFAULT NULL,
  `financecoachid` int(11) DEFAULT NULL,
  `trainingdate` date DEFAULT NULL,
  `organizer` varchar(45) DEFAULT NULL,
  `partner` varchar(45) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `references` varchar(90) DEFAULT NULL,
  `theme` varchar(90) DEFAULT NULL,
  `remarks` text,
  PRIMARY KEY (`trainingid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `trainings` */

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `users_uid` int(11) NOT NULL,
  `roles_roleid` int(11) NOT NULL,
  PRIMARY KEY (`users_uid`,`roles_roleid`),
  KEY `fk_user_roles_roles1_idx` (`roles_roleid`),
  CONSTRAINT `fk_user_roles_roles1` FOREIGN KEY (`roles_roleid`) REFERENCES `roles` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_roles_users1` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_roles` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(24) DEFAULT NULL,
  `lastname` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`),
  UNIQUE KEY `username_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
