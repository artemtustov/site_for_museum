-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: kpvo_2
-- ------------------------------------------------------
-- Server version	5.5.62

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
-- Table structure for table `zachoronenie`
--

DROP TABLE IF EXISTS `zachoronenie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zachoronenie` (
  `Nomer` int(11) NOT NULL,
  `Oblast` varchar(45) DEFAULT NULL,
  `Rayon` int(11) DEFAULT NULL,
  `Naselennyy_punkt` varchar(45) DEFAULT NULL,
  `Izvestnych_passport` varchar(45) DEFAULT NULL,
  `Neizvestnyvh_passport` varchar(45) DEFAULT NULL,
  `Vsego_passport` varchar(45) DEFAULT NULL,
  `Izvestnych_baza` varchar(45) DEFAULT NULL,
  `Neizvestnych_baza` varchar(45) DEFAULT NULL,
  `Vsego_baza` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Nomer`),
  KEY `rajon_key_idx` (`Rayon`),
  CONSTRAINT `rajon_key` FOREIGN KEY (`Rayon`) REFERENCES `rayon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zachoronenie`
--

LOCK TABLES `zachoronenie` WRITE;
/*!40000 ALTER TABLE `zachoronenie` DISABLE KEYS */;
INSERT INTO `zachoronenie` VALUES (0,'Витебская',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2100,'Витебска',50,'Вороны','5','5','10',NULL,NULL,NULL),(2101,'Витебская',50,'Шапуры','45','3','48',NULL,NULL,NULL),(4320,'Витебская',130,'Высочаны','85','0','85',NULL,NULL,NULL);
/*!40000 ALTER TABLE `zachoronenie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-26 12:27:41
