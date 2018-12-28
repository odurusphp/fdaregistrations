/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.21-log : Database - ldbcopy
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
  `nationality` varchar(100) DEFAULT NULL,
  `nationality2` varchar(100) DEFAULT NULL,
  `schoolname` varchar(50) DEFAULT NULL,
  `schoolform` varchar(20) DEFAULT NULL,
  `classroom` varchar(20) DEFAULT NULL,
  `graduationclass` varchar(20) DEFAULT NULL,
  `doeseducationworkerknow` varchar(5) DEFAULT NULL,
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
  `preamble` varchar(5) DEFAULT NULL,
  `videopath` varchar(500) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `employerlocation` varchar(50) DEFAULT NULL,
  `graduation` varchar(100) DEFAULT NULL,
  `educationlevel` varchar(50) DEFAULT NULL,
  `apprenticeship` varchar(100) DEFAULT NULL,
  `photocopyid` varchar(500) DEFAULT NULL,
  `additionalinfo` varchar(100) DEFAULT NULL,
  `expectation` varchar(100) DEFAULT NULL,
  `referral` varchar(50) DEFAULT NULL,
  `jobtitle` varchar(50) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  KEY `uid_idx` (`uid`),
  CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `menteeinformation` */

insert  into `menteeinformation`(`nationality`,`nationality2`,`schoolname`,`schoolform`,`classroom`,`graduationclass`,`doeseducationworkerknow`,`educationworkerfirstname`,`educationworkerlastname`,`educationworkerhousenumber`,`educationworkertelephone`,`educationworkeremail`,`educationworkerpostaladdress`,`reasonforjoining`,`hobby`,`favoritesport`,`menteeuniquid`,`preamble`,`videopath`,`usertype`,`employer`,`employerlocation`,`graduation`,`educationlevel`,`apprenticeship`,`photocopyid`,`additionalinfo`,`expectation`,`referral`,`jobtitle`,`uid`) values ('Ghanaian',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29183),('Nigeria','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',29189);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
