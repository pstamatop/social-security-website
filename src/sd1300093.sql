-- MySQL dump 10.13  Distrib 5.7.20, for macos10.12 (x86_64)
--
-- Host: localhost    Database: sdi1300093
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `idnum` varchar(255) DEFAULT NULL,
  `afm` varchar(255) DEFAULT NULL,
  `ama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` VALUES (1,3,'Panagiota','Stamatopoulou','','212-121','121-121'),(2,6,'Panagiota','Stamatopoulou','','121-121','232-121');
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `idnum` varchar(255) DEFAULT NULL,
  `afm` varchar(255) DEFAULT NULL,
  `ame` varchar(255) DEFAULT NULL,
  `ama` varchar(255) DEFAULT NULL,
  `doy` varchar(255) DEFAULT NULL,
  `busname` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `numadr` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `naturalPers` varchar(255) DEFAULT NULL,
  `insured` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `bday` varchar(255) DEFAULT NULL,
  `bmonth` varchar(255) DEFAULT NULL,
  `byear` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'eam@di.com','123','Panagiota','pstamatop','Stam','198-127','672-389','','127-122','','','Athens','Alexandrou','1','12321','Î‘Ï„Ï„Î¹ÎºÎ®Ï‚','12321312','1','1','0','31','12','1991','2018-01-14 19:10:16'),(2,'isabella@gmail.com','123','Isabelle','isabellemanolakis','Manolakis','212-121','222-213','121-212','','Î‘Ï„Ï„Î¹ÎºÎ®Ï‚','','Athens','Alexandrou','212','12712','Î‘Ï„Ï„Î¹ÎºÎ®Ï‚','1232131','1','0','1','24','2','1990','2018-01-14 19:13:07'),(3,'gtrachanas@gmail.com','123','Giwrgos','giwrgostrach','Trachanas','232-232','323-322','232-232','','Î‘Ï„Ï„Î¹ÎºÎ®Ï‚','','Athens','Paktouriou','213','21781','Î‘Ï„Ï„Î¹ÎºÎ®Ï‚','12137923','1','0','1','31','12','1992','2018-01-14 19:15:54'),(4,'eam@di.com','123','Panagiota','pstamatop','Stamatopoulou','198-127','121-121','','127-122','','','Athens','Alexandrou','2','1221','Î™Ï‰Î±Î½Î½Î¯Î½Ï‰Î½','1213233','1','1','0','31','12','1992','2018-01-14 19:33:36'),(5,'isabella@gmail.com','123','Isabelle','isabellem','Doe','123-213','213-213','131-121','','Î—ÏÎ±ÎºÎ»ÎµÎ¯Î¿Ï…','','Athens','Alexandrou','1','1231','Î˜ÎµÏƒÏƒÎ±Î»Î¿Î½Î¯ÎºÎ·Ï‚','11212332','1','0','1','31','12','1990','2018-01-14 19:47:39'),(6,'gtrachanas@gmail.com','123','Giwrgos','gtrachanas','Trachanas','121-211','123-213','121-121','','Î™Ï‰Î±Î½Î½Î¯Î½Ï‰Î½','','Athens','Alexandrou','1','213213','Î™Ï‰Î±Î½Î½Î¯Î½Ï‰Î½','123123123','1','0','1','31','12','1992','2018-01-14 19:48:55');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-14 22:00:07
