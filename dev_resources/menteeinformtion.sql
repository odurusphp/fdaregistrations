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


/*Table structure for table `menteeinformation` */

DROP TABLE IF EXISTS `menteeinformation`;

CREATE TABLE `menteeinformation` (
  `menteeid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `housenumber` varchar(15) DEFAULT NULL,
  `postaladdress` varchar(100) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `nationality2` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `schoolname` varchar(50) DEFAULT NULL,
  `schoolform` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `classroom` varchar(20) DEFAULT NULL,
  `graduationclass` varchar(20) DEFAULT NULL,
  `doeseducationworkerknow` tinyint(5) DEFAULT NULL,
  `educationworkerfirstname` varchar(50) DEFAULT NULL,
  `educationworkerlastname` varchar(50) DEFAULT NULL,
  `educationworkerhousenumber` varchar(50) DEFAULT NULL,
  `educationworkertelephone` varchar(50) DEFAULT NULL,
  `educationworkeremail` varchar(50) DEFAULT NULL,
  `educationworkerpostaladdress` varchar(100) DEFAULT NULL,
  `reasonforjoining` text,
  `hobby` varchar(100) DEFAULT NULL,
  `favoritesport` varchar(100) DEFAULT NULL,
  `menteeuniquid` varchar(50) DEFAULT NULL,
  `preamble` tinyint(5) DEFAULT NULL,
  `videopath` varchar(500) DEFAULT NULL,
  `usertype` VARCHAR(50) NULL DEFAULT NULL,
  `employer` VARCHAR(50) NULL DEFAULT NULL,
  `employerlocation` VARCHAR(50) NULL DEFAULT NULL,
  `graduation` VARCHAR(100) NULL DEFAULT NULL,
  `educationlevel` VARCHAR(50) NULL DEFAULT NULL,
  `apprenticeship` VARCHAR(100) NULL DEFAULT NULL,
  `photocopyid` VARCHAR(500) NULL DEFAULT NULL,
  `additionalinfo` VARCHAR(100) NULL DEFAULT NULL,
  `expectation` VARCHAR(100) NULL DEFAULT NULL,
  `referral` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`menteeid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;