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
-- Table structure for table `chelovek`
--

DROP TABLE IF EXISTS `chelovek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chelovek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tip` varchar(45) DEFAULT NULL,
  `№_zachoroneniya` int(11) DEFAULT NULL,
  `Familiya` varchar(45) DEFAULT NULL,
  `Imya` varchar(45) DEFAULT NULL,
  `Otchestvo` varchar(45) DEFAULT NULL,
  `God_rozhdeniya` int(11) DEFAULT NULL,
  `Data_vybytiya` date DEFAULT NULL,
  `Voinskoe_zvanie` varchar(45) DEFAULT NULL,
  `Pervonachalno_zachoronen` mediumtext,
  `Voinskaya_chast` varchar(45) DEFAULT NULL,
  `Strana_rozhdeniya` varchar(45) DEFAULT NULL,
  `Oblast_rozhdeniya` varchar(45) DEFAULT NULL,
  `Rajon_rozhdeniya` varchar(45) DEFAULT NULL,
  `Naselennyy_punkt` varchar(45) DEFAULT NULL,
  `Dom_rozhdeniya` varchar(45) DEFAULT NULL,
  `Prizvan_RVK` varchar(45) DEFAULT NULL,
  `Dolzhnost` varchar(45) DEFAULT NULL,
  `Rodstvenniki` varchar(45) DEFAULT NULL,
  `Sostavitel` int(11) DEFAULT NULL,
  `Predlozhenie` mediumtext,
  `Reshenie_RIK` mediumtext,
  `Primechanie` mediumtext,
  `Data_dobavleniya` date DEFAULT NULL,
  `Show` varchar(45) DEFAULT 'not',
  PRIMARY KEY (`id`),
  KEY `sostavitel_key_idx` (`Sostavitel`),
  KEY `zachoronenie_key_idx` (`№_zachoroneniya`),
  CONSTRAINT `sostavitel_key` FOREIGN KEY (`Sostavitel`) REFERENCES `sostavitel` (`id`) ON UPDATE NO ACTION,
  CONSTRAINT `zachoronenie_key` FOREIGN KEY (`№_zachoroneniya`) REFERENCES `zachoronenie` (`Nomer`) ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chelovek`
--

LOCK TABLES `chelovek` WRITE;
/*!40000 ALTER TABLE `chelovek` DISABLE KEYS */;
INSERT INTO `chelovek` VALUES (4,'погибший',2100,'Иванов','Иван','Иванович',1925,'2001-01-20','рядовой','Витебская область, Витебский район, Лучиновка','25 сп 54 сд','Беларусь','Брестская','Березинский','Березина','5','Березинским','старшина','Марья Никитична',1,NULL,NULL,NULL,'2019-08-11','not'),(6,'погибший',2101,'Петров','Николай','Петрович',1914,'1944-10-11','ефрейтор','Витебская область, Витебский район, Шеляги','36 ап 58 сд','Россия','Тверская','Тверской','Ужино','6','Зубровским','наводчик','Ольга Ивановна',2,NULL,NULL,NULL,'2020-10-30','yes'),(9,'погибший',4320,'Смирнов','Сидор','Викторович',1911,'1943-11-02','сержант','Витебская область, Оршанский район, д. Манулки','12 сп 58 сд','Украина','Харьковская','Днепровский','Собаково','45','Лимановским','противотанкист','Марфа Никитична',1,NULL,NULL,NULL,'2018-11-03','yes'),(11,'земляк',0,'Федоровский','Ерофей','Спиридонович',1914,'1943-12-25','гв. майор','Витебская область, Витебский район, д. Задолбино','254 сд 10 сп','Китай','Сычуань','Витебский','Ухань','1547','Хабаровским','ком. батальона','жена Хомякова Аксинья',1,NULL,NULL,NULL,'2020-11-16','yes'),(12,'погибший',2100,'Иванов','Петр','Петрович',1920,'2000-01-20','рядовой','Куковячино',NULL,'Украина',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'yes'),(14,NULL,2100,'Зуев','Зиновий','Павлович',1916,'1944-06-01','лейтенант','Зюзьковичи','1188 сп','Зимбабве','Калахари','шгдлр','Сумахум','156','Витебский','политрук','брат Лука Петрович',NULL,'увековечен','нет',NULL,NULL,'yes'),(17,NULL,2100,'Загорский','Семен','Семенович',1920,'1944-12-01','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,'yes');
/*!40000 ALTER TABLE `chelovek` ENABLE KEYS */;
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
