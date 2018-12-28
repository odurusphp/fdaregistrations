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
/*Table structure for table `activities` */

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `activityid` int(11) NOT NULL AUTO_INCREMENT,
  `activitydate` datetime DEFAULT NULL,
  `addressform` varchar(45) DEFAULT NULL,
  `addressresult` varchar(45) DEFAULT NULL,
  `nextsteps` text,
  PRIMARY KEY (`activityid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `activities_users` */

DROP TABLE IF EXISTS `activities_users`;

CREATE TABLE `activities_users` (
  `activitiyid` int(11) NOT NULL,
  `users_uid` int(11) NOT NULL,
  PRIMARY KEY (`activitiyid`,`users_uid`),
  KEY `userActivityKey_idx` (`users_uid`),
  CONSTRAINT `activityUserKey` FOREIGN KEY (`activitiyid`) REFERENCES `activities` (`activityid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `userActivityKey` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

/*Table structure for table `institutions` */

DROP TABLE IF EXISTS `institutions`;

CREATE TABLE `institutions` (
  `institutionid` int(11) NOT NULL AUTO_INCREMENT,
  `nameofinstitution` varchar(190) DEFAULT NULL,
  `address` varchar(160) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `homepage` varchar(200) DEFAULT NULL,
  `principal` varchar(100) DEFAULT NULL,
  `hub` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `schoolnumber` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`institutionid`)
) ENGINE=InnoDB AUTO_INCREMENT=16732 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `logcategories` */

DROP TABLE IF EXISTS `logcategories`;

CREATE TABLE `logcategories` (
  `logcategory` varchar(32) NOT NULL,
  PRIMARY KEY (`logcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `materials` */

DROP TABLE IF EXISTS `materials`;

CREATE TABLE `materials` (
  `matid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(45) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  PRIMARY KEY (`matid`),
  KEY `matOrdKey_idx` (`orderid`),
  CONSTRAINT `matOrdKey` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `newsletterid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `receivednewsletters` int(11) DEFAULT NULL,
  `openednewsletters` int(11) DEFAULT NULL,
  `newsletterclicks` int(11) DEFAULT NULL,
  PRIMARY KEY (`newsletterid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `newsletter_users` */

DROP TABLE IF EXISTS `newsletter_users`;

CREATE TABLE `newsletter_users` (
  `newsletterid` int(11) NOT NULL,
  `users_uid` int(11) NOT NULL,
  PRIMARY KEY (`newsletterid`,`users_uid`),
  KEY `newsKey_idx` (`users_uid`),
  CONSTRAINT `newsLetterKey` FOREIGN KEY (`newsletterid`) REFERENCES `newsletter` (`newsletterid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `newsuserKey` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `orderdate` date DEFAULT NULL,
  `ordertype` varchar(10) DEFAULT NULL,
  `theme` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `numberofstudents` int(11) DEFAULT NULL,
  `numberofclasses` int(11) DEFAULT NULL,
  `otherinformation` text,
  `trainingid` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderid`),
  KEY `trainingOrdKey_idx` (`trainingid`),
  CONSTRAINT `trainingOrdKey` FOREIGN KEY (`trainingid`) REFERENCES `trainings` (`trainingid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(24) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `schooltype` */

DROP TABLE IF EXISTS `schooltype`;

CREATE TABLE `schooltype` (
  `schooltype_id` int(11) NOT NULL,
  `schooltype` varchar(45) DEFAULT NULL,
  `description` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`schooltype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `schooltype_institutions` */

DROP TABLE IF EXISTS `schooltype_institutions`;

CREATE TABLE `schooltype_institutions` (
  `institutionid` int(11) NOT NULL,
  `schooltype_id` int(11) NOT NULL,
  PRIMARY KEY (`institutionid`,`schooltype_id`),
  KEY `schoolKey_idx` (`schooltype_id`),
  CONSTRAINT `institutionKey` FOREIGN KEY (`institutionid`) REFERENCES `institutions` (`institutionid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `schoolKey` FOREIGN KEY (`schooltype_id`) REFERENCES `schooltype` (`schooltype_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

/*Table structure for table `training_users` */

DROP TABLE IF EXISTS `training_users`;

CREATE TABLE `training_users` (
  `users_uid` int(11) NOT NULL,
  `trainingid` int(11) NOT NULL,
  `trainingdate` date DEFAULT NULL,
  `last_trainingdate` date DEFAULT NULL,
  PRIMARY KEY (`users_uid`,`trainingid`),
  KEY `traiingKey_idx` (`trainingid`),
  CONSTRAINT `traiingKey` FOREIGN KEY (`trainingid`) REFERENCES `trainings` (`trainingid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `userKey` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `trainings` */

DROP TABLE IF EXISTS `trainings`;

CREATE TABLE `trainings` (
  `trainingid` int(11) NOT NULL AUTO_INCREMENT,
  `trainingdate` date DEFAULT NULL,
  `organizer` varchar(90) DEFAULT NULL,
  `partner` varchar(90) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `reference` varchar(90) DEFAULT NULL,
  `theme` varchar(90) DEFAULT NULL,
  `remarks` text,
  `practitioners` varchar(90) DEFAULT NULL,
  `otherinfomation` varchar(90) DEFAULT NULL,
  `detailsofreference` varchar(90) DEFAULT NULL,
  `originalid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`trainingid`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `users_uid` int(11) NOT NULL,
  `roles_roleid` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`users_uid`,`roles_roleid`),
  KEY `fk_user_roles_roles1_idx` (`roles_roleid`),
  CONSTRAINT `fk_user_roles_roles1` FOREIGN KEY (`roles_roleid`) REFERENCES `roles` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_roles_users1` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `reachability` varchar(45) DEFAULT NULL,
  `subjects` varchar(45) DEFAULT NULL,
  `otherinformation` text,
  `telephone` varchar(100) DEFAULT NULL,
  `housenumber` varchar(20) DEFAULT NULL,
  `originalid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12861 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
