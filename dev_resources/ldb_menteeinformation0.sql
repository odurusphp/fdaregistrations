-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ldb
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menteeinformation`
--

DROP TABLE IF EXISTS `menteeinformation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menteeinformation` (
  `menteeid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
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
  PRIMARY KEY (`menteeid`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menteeinformation`
--

LOCK TABLES `menteeinformation` WRITE;
/*!40000 ALTER TABLE `menteeinformation` DISABLE KEYS */;
INSERT INTO `menteeinformation` VALUES (19,'Cassandra','Sarfo',NULL,'female','East','Legon','2018-05-19','Germany (Deutschland)','','9823789327892','cassandra@getinnotized.com','Good Int','Mittelschule','Good','9. Klasse','12. Klasse',1,'Shaddy','Mensah','Abgoba','87368538875','shadrak@getinnotized.com','Haatso','Good good ','Singing','Table Tennis','5afd7770c87a9',1,'5afd7770c87a9.mp4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'jkgnfskjnkj','jnfkjnjk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'c@c.c',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5afd9bd659852',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'Ama','Tene',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ttn@ttn.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5afec9bd3b795',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Ama','twen',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'papme@pappy.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5afeca142518f',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'Cassandra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(171,'cassie','yahoo','121c60df0c03083d2693c251f15fdfb2','female','ksdnsjklnl','nvgnvj','2018-06-22','Germany (Deutschland)','','84375238973','cassandra.sarfo@yahoo.com','kldnsfkjngfdkjnk','Mittelschule','knfdskjnskj','9. Klasse','12. Klasse',1,'Anita','Emma','jkjvnkjnkj','8927583','cas@cas.com','jngkjnkjn',NULL,NULL,NULL,'5b19592c0f6a6',1,'5b19592c0f6a6.mp4','mentee',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(172,'Kay','Babe','bd78d52aefce05fd31c3823daa6c49c7','female','jndsknknkjn','kjnkjfnjknkj','2018-06-21','Germany (Deutschland)','','2387597987','cassandra.kesewa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'kmnvcjnskjnfdkjnkjn ','kjfdnkjfsdnknkjnkj','kngknjknkjn','5b1a63139dffe',1,'5b1a63139dffe.mp4','mentor','nsdnjfndskjnjk','jdsfkkjsbdfbnfkdjnjks','nkjfnkjdnkjn','Master','knfdsnkjdsnjknjds','5b1a63139dffe.png','jngkjnkjrnkjnkjre','nknfjdnkjsnkjn','kdfsnkgsdfjngk','nfnkjnjk');
/*!40000 ALTER TABLE `menteeinformation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-11 10:54:26
