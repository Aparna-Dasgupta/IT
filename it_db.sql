-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: it
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `cus_login`
--

DROP TABLE IF EXISTS `cus_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cus_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  CONSTRAINT `cus_login_cus_register` FOREIGN KEY (`username`) REFERENCES `cus_register` (`cusername`) ON UPDATE CASCADE,
  CONSTRAINT `cus_login_cus_register_nam` FOREIGN KEY (`username`) REFERENCES `cus_register` (`cusername`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cus_login`
--

LOCK TABLES `cus_login` WRITE;
/*!40000 ALTER TABLE `cus_login` DISABLE KEYS */;
INSERT INTO `cus_login` VALUES ('Aparna','876'),('sumaiya','sumaiya');
/*!40000 ALTER TABLE `cus_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cus_register`
--

DROP TABLE IF EXISTS `cus_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cus_register` (
  `cusername` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`cusername`),
  UNIQUE KEY `cusername` (`cusername`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cus_register`
--

LOCK TABLES `cus_register` WRITE;
/*!40000 ALTER TABLE `cus_register` DISABLE KEYS */;
INSERT INTO `cus_register` VALUES ('Aparna','Aparna Dasgupta','bengaluru','India',9087654321,'elizabeth@gmail.com','876'),('sumaiya','sumaiya','bangalore','india',9590147894,'sumaiyanaj@gmail.com','sumaiya');
/*!40000 ALTER TABLE `cus_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_characteristics`
--

DROP TABLE IF EXISTS `res_characteristics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_characteristics` (
  `resname` varchar(100) NOT NULL,
  `alcohol` varchar(50) DEFAULT NULL,
  `seating` varchar(50) DEFAULT NULL,
  `payments` varchar(50) DEFAULT NULL,
  `cuisines` varchar(50) DEFAULT NULL,
  `avg_price` int(5) NOT NULL,
  `tags` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`resname`),
  CONSTRAINT `res_characteristics_res_register` FOREIGN KEY (`resname`) REFERENCES `res_register` (`resname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_characteristics`
--

LOCK TABLES `res_characteristics` WRITE;
/*!40000 ALTER TABLE `res_characteristics` DISABLE KEYS */;
INSERT INTO `res_characteristics` VALUES ('Club Cabana','serves','notAvailable','cash','Indian',0,'DJ'),('Le Arabian','serves','available','cards','Italian',0,'music'),('Udupi grand','doesntServe','available','cards','Indian',0,'veg');
/*!40000 ALTER TABLE `res_characteristics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_location`
--

DROP TABLE IF EXISTS `res_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_location` (
  `resname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip` bigint(6) NOT NULL,
  `country` varchar(10) NOT NULL,
  PRIMARY KEY (`resname`),
  CONSTRAINT `res_register_res_location` FOREIGN KEY (`resname`) REFERENCES `res_register` (`resname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_location`
--

LOCK TABLES `res_location` WRITE;
/*!40000 ALTER TABLE `res_location` DISABLE KEYS */;
INSERT INTO `res_location` VALUES ('Club Cabana','kormangala',580064,'INDIA'),('Le Arabian','bel road',560098,'INDIA'),('Udupi grand','yelahanka new town',560064,'INDIA');
/*!40000 ALTER TABLE `res_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_login`
--

DROP TABLE IF EXISTS `res_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  CONSTRAINT `res_login_res_register` FOREIGN KEY (`username`) REFERENCES `res_register` (`resname`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_login`
--

LOCK TABLES `res_login` WRITE;
/*!40000 ALTER TABLE `res_login` DISABLE KEYS */;
INSERT INTO `res_login` VALUES ('Club Cabana','cabana'),('Le Arabian','1234'),('Udupi grand','123');
/*!40000 ALTER TABLE `res_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `res_register`
--

DROP TABLE IF EXISTS `res_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_register` (
  `resname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(80) NOT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `phone` bigint(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `cuisines` varchar(50) NOT NULL,
  PRIMARY KEY (`resname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_register`
--

LOCK TABLES `res_register` WRITE;
/*!40000 ALTER TABLE `res_register` DISABLE KEYS */;
INSERT INTO `res_register` VALUES ('Club Cabana','cabana@gmail.com','cabana','Bangalore','YesOwner',9087654321,'Open','Indian'),('Le Arabian','learabian@gmail.com','1234','Mangalore','Yes I\'m the Owner',9807654321,'Open','Italian'),('Udupi grand','udupi@gmail.com','123','Bangalore','YesOwner',9876567890,'Open','Indian');
/*!40000 ALTER TABLE `res_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `review_id` int(5) NOT NULL AUTO_INCREMENT,
  `resname` varchar(100) NOT NULL,
  `cusername` varchar(50) NOT NULL,
  `rcuisine` varchar(50) NOT NULL,
  `res_review` text NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `resname` (`resname`),
  KEY `cusername` (`cusername`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (16,'Le Arabian','Aparna','Italian','good restuarant'),(17,'Club Cabana','Aparna','Indian','very good'),(18,'Udupi grand','sumaiya','Indian','very good one'),(19,'Le Arabian','sumaiya','Italian','nice one');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-16 23:17:25
