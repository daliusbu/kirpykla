-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: us-cdbr-iron-east-03.cleardb.net    Database: heroku_c89f304222c3de3
-- ------------------------------------------------------
-- Server version	5.5.56-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `firstName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `visits` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=802 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (2,'2019-02-17 06:07:56','2019-02-17 09:42:42','Dalius','123123',7),(12,'2019-02-17 05:59:10','2019-02-17 05:59:10','Petras','321321',1),(22,'2019-02-17 06:53:56','2019-02-19 13:07:34','Juozas','123123',4),(32,'2019-02-17 06:55:08','2019-02-19 19:34:16','Moise','123123',4),(42,'2019-02-17 06:57:38','2019-02-17 08:34:28','Antanas','123123',2),(52,'2019-02-17 06:57:58','2019-02-19 16:50:08','Petras','123123',39),(62,'2019-02-17 07:07:41','2019-02-17 07:07:41','Joske','123123',1),(72,'2019-02-17 07:40:42','2019-02-19 16:49:46','','',4),(82,'2019-02-17 08:39:31','2019-02-17 08:39:31','Kazys','123123',1),(92,'2019-02-17 08:41:10','2019-02-17 09:16:49','Johm','123123',2),(102,'2019-02-17 09:30:29','2019-02-17 09:30:29','John','123123',1),(112,'2019-02-17 14:11:52','2019-02-19 19:34:16','Mauricio','123123',4),(122,'2019-02-17 14:33:25','2019-02-19 19:21:47','Robinhood','',5),(132,'2019-02-17 14:33:43','2019-02-19 19:21:47','Robinhood','123123',5),(142,'2019-02-17 14:57:06','2019-02-19 19:21:47','robin','123123',5),(152,'2019-02-17 15:11:20','2019-02-17 15:11:20','Bob','123123',1),(162,'2019-02-17 15:12:23','2019-02-19 19:34:16','Miranda','123123',4),(172,'2019-02-17 16:35:13','2019-02-19 19:21:47','Rokas','123123',5),(182,'2019-02-19 07:56:39','2019-02-19 19:21:47','Rupertas','123',5),(192,'2019-02-19 08:25:46','2019-02-19 08:25:46','Fazenda','123',1),(202,'2019-02-19 09:25:09','2019-02-19 09:26:41','Algis','123',2),(212,'2019-02-19 09:33:40','2019-02-19 19:21:47','Roma','123',5),(222,'2019-02-19 09:40:19','2019-02-19 19:21:47','Roma','123123',5),(232,'2019-02-19 10:14:20','2019-02-19 10:14:20','Albinas','123123',1),(242,'2019-02-19 10:15:19','2019-02-19 19:21:47','Rodrigaz','123123',5),(252,'2019-02-19 10:21:17','2019-02-19 19:34:16','Mana','123123',4),(262,'2019-02-19 10:37:24','2019-02-19 19:34:16','Mitia','123123',4),(272,'2019-02-19 10:43:59','2019-02-19 10:43:59','Aldona','123123',1),(282,'2019-02-19 10:45:34','2019-02-19 19:21:47','Rapuga','123123',5),(292,'2019-02-19 10:55:22','2019-02-19 11:03:50','Urte','123123',4),(302,'2019-02-19 11:16:25','2019-02-19 19:21:47','Rugile','123123',5),(312,'2019-02-19 11:21:39','2019-02-19 19:21:47','Rapolas','123123',5),(322,'2019-02-19 12:24:32','2019-02-19 12:24:32','Ugne','123123',1),(332,'2019-02-19 12:34:58','2019-02-19 12:34:58','Ugne','123123',1),(342,'2019-02-19 12:49:28','2019-02-19 19:21:47','Ronda','123123',5),(352,'2019-02-19 12:52:10','2019-02-19 19:21:47','Ronda','123123',5),(362,'2019-02-19 12:52:46','2019-02-19 19:21:47','Ronda','123123',5),(372,'2019-02-19 12:58:37','2019-02-19 12:58:37','Juozas','123123',1),(382,'2019-02-19 12:58:42','2019-02-19 12:58:42','Juozas','123123',1),(392,'2019-02-19 13:00:46','2019-02-19 13:00:46','Juozas','123123',1),(402,'2019-02-19 13:03:57','2019-02-19 13:03:57','Juozas','123123',1),(412,'2019-02-19 13:12:47','2019-02-19 13:13:45','Jurgis','123123',2),(422,'2019-02-19 14:54:25','2019-02-19 15:00:00','Frankas','456456',4),(432,'2019-02-19 16:29:01','2019-02-19 19:21:47','Rioja','dlksjflds',5),(442,'2019-02-19 16:49:15','2019-02-19 19:21:47','Richard','+370 23 23 ',5),(452,'2019-02-19 16:52:36','2019-02-19 16:56:23','dsfg','123 123',2),(462,'2019-02-19 17:25:02','2019-02-19 17:25:02','fdg','13',1),(472,'2019-02-19 19:01:15','2019-02-19 19:01:15','Jurga','8 666 12345',1),(482,'2019-02-19 19:04:19','2019-02-19 19:04:19','Pranas','8 666 12 123',1),(492,'2019-02-19 19:04:47','2019-02-19 19:04:47','Vilnius','456456',1),(502,'2019-02-19 19:05:32','2019-02-19 19:05:32','Blekas Å amarliakas','3233233',1),(512,'2019-02-19 19:07:09','2019-02-19 19:21:47','Rambynas','123123',5),(522,'2019-02-19 19:07:31','2019-02-19 19:21:47','Robotas','321321',5),(532,'2019-02-19 19:07:57','2019-02-19 19:21:47','Rokas','145236',5),(542,'2019-02-19 19:08:18','2019-02-19 19:08:18','Vladas','555555',1),(552,'2019-02-19 19:08:41','2019-02-19 19:08:41','Å arÅ«nas','696969',1),(562,'2019-02-19 19:09:01','2019-02-19 19:09:01','Betkas','656565',1),(572,'2019-02-19 19:09:27','2019-02-19 19:09:27','Kosmosas','666666',1),(582,'2019-02-19 19:09:52','2019-02-19 19:09:52','Oba','456456',1),(592,'2019-02-19 19:10:21','2019-02-19 19:10:21','Niekotokio Petrai','456456',1),(602,'2019-02-19 19:10:44','2019-02-19 19:10:44','Vardas','555666333',1),(612,'2019-02-19 19:11:09','2019-02-19 19:11:09','Okidoki','159159',1),(622,'2019-02-19 19:11:42','2019-02-19 19:21:47','Roktuna','555777',5),(632,'2019-02-19 19:12:35','2019-02-19 19:12:35','AÅ¡ ir Tu mes vieno kraujo','6656656',1),(642,'2019-02-19 19:13:22','2019-02-19 19:13:22','Vardenis','456544566565',1),(652,'2019-02-19 19:13:46','2019-02-19 19:13:46','Kas as tox','8 656 54545 4',1),(662,'2019-02-19 19:14:08','2019-02-19 19:14:08','Indenas','4555556',1),(672,'2019-02-19 19:14:32','2019-02-19 19:14:32','Kaubojus','656565',1),(682,'2019-02-19 19:25:37','2019-02-19 19:25:37','Rapolas','45656664',1),(692,'2019-02-19 19:26:00','2019-02-19 19:26:00','Jurate','465656656',1),(702,'2019-02-19 19:26:27','2019-02-19 19:26:27','Steponas','8 6665 122332',1),(712,'2019-02-19 19:26:55','2019-02-19 19:26:55','Klaipeda','655 555 555',1),(722,'2019-02-19 19:27:16','2019-02-19 19:27:16','Saulius','66331122',1),(732,'2019-02-19 19:27:57','2019-02-19 19:27:57','Chauckas','8 666 5666',1),(742,'2019-02-19 19:28:23','2019-02-19 19:28:23','Kotryna','6 6666 6666',1),(752,'2019-02-19 19:29:11','2019-02-19 19:29:11','Fonatnas','456 465 456',1),(762,'2019-02-19 19:29:34','2019-02-19 19:29:36','Ivartis','45666 66654',2),(772,'2019-02-19 19:30:00','2019-02-19 19:30:00','Valdute','445556655',1),(782,'2019-02-19 19:30:27','2019-02-19 19:30:27','zvidras','4564665464',1),(792,'2019-02-19 21:02:38','2019-02-19 21:02:38','Audrius','123123',1);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `customerId` int(6) DEFAULT NULL,
  `dateFill` varchar(20) NOT NULL,
  `rezMonth` varchar(3) DEFAULT NULL,
  `rezDay` varchar(20) NOT NULL,
  `rezHour` int(3) NOT NULL,
  `rezMin` int(3) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1622 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (2,2,'2019-02-16 00:00:00',NULL,'2016-02-19 00:00:00',12,30,NULL),(12,2,'2019-02-16 00:00:00',NULL,'2016-02-19 00:00:00',12,30,NULL),(22,2,'2019-02-17',NULL,'2016-03-22',12,30,NULL),(32,12,'2019-02-17',NULL,'2016-02-22',10,45,NULL),(42,22,'2019-02-17',NULL,'2016-02-22',11,45,NULL),(52,32,'2019-02-17',NULL,'2016-02-22',12,45,NULL),(62,12,'2019-02-16 11:45:45','2','19',10,30,NULL),(72,12,'2019-02-16 12:19:02','3','19',10,30,NULL),(82,12,'2019-02-16 12:25:04','5','5',15,30,NULL),(92,12,'2019-02-16 12:28:24','2','2',10,15,NULL),(102,12,'2019-02-16 12:31:40','4','4',12,0,NULL),(112,12,'2019-02-16 17:46:27','2','2',10,30,NULL),(122,12,'2019-02-16 18:02:05','2','2',11,0,NULL),(132,12,'2019-02-16 18:11:48','2','2',10,45,NULL),(142,12,'2019-02-16 18:49:30','2','2',12,0,NULL),(152,12,'2019-02-16 18:50:23','2','2',13,0,NULL),(162,12,'2019-02-16 18:52:12','2','2',14,30,NULL),(172,12,'2019-02-16 18:53:00','2','2',14,45,NULL),(182,12,'2019-02-16 19:04:11','1','3',11,0,NULL),(192,12,'2019-02-16 19:07:35','2','2',15,30,NULL),(202,12,'2019-02-16 19:09:05','2','2',14,15,NULL),(212,12,'2019-02-16 19:09:55','2','2',12,45,NULL),(222,12,'2019-02-16 19:12:54','2','2',17,30,NULL),(232,12,'2019-02-16 19:14:19','2','2',17,0,NULL),(242,12,'2019-02-16 19:18:02','2','1',14,15,NULL),(252,12,'2019-02-16 19:23:04','2','2',13,15,NULL),(262,12,'2019-02-16 19:24:13','2','2',16,30,NULL),(272,12,'2019-02-16 19:38:32','2','2',12,15,NULL),(282,12,'2019-02-16 19:39:41','2','2',13,30,NULL),(292,12,'2019-02-16 19:43:27','2','2',11,45,NULL),(302,12,'2019-02-16 19:48:02','2','2',16,45,NULL),(312,12,'2019-02-16 19:54:06','2','2',15,45,NULL),(322,12,'2019-02-16 20:06:52','3','2',14,30,NULL),(332,12,'2019-02-16 20:13:12','3','9',12,30,NULL),(342,12,'2019-02-16 20:17:25','5','8',13,30,NULL),(352,12,'2019-02-16 20:18:09','4','6',11,30,NULL),(362,12,'2019-02-16 20:20:16','3','4',12,15,NULL),(372,12,'2019-02-16 20:20:35','4','5',11,15,NULL),(382,12,'2019-02-16 20:20:57','4','5',12,30,NULL),(392,12,'2019-02-16 20:23:02','4','6',12,0,NULL),(402,12,'2019-02-17 05:37:06','3','3',11,30,NULL),(412,12,'2019-02-17 05:37:38','5','6',11,45,NULL),(422,12,'2019-02-17 05:39:07','5','9',11,30,NULL),(432,12,'2019-02-17 05:40:32','4','5',12,15,NULL),(442,12,'2019-02-17 05:40:48','3','7',12,0,NULL),(452,12,'2019-02-17 05:49:43','2','3',12,0,NULL),(462,12,'2019-02-17 05:54:20','4','2',11,45,NULL),(472,12,'2019-02-17 05:59:11','2','1',11,30,NULL),(482,12,'2019-02-17 06:07:57','2','2',15,0,NULL),(492,12,'2019-02-17 06:13:56','3','3',11,15,NULL),(502,12,'2019-02-17 06:24:15','3','5',11,15,NULL),(512,12,'2019-02-17 06:34:16','2','2',16,0,NULL),(522,12,'2019-02-17 06:51:45','3','4',11,30,NULL),(532,12,'2019-02-17 06:53:57','4','3',11,15,NULL),(542,12,'2019-02-17 06:55:09','2','5',11,15,NULL),(552,12,'2019-02-17 06:57:39','3','4',11,15,NULL),(562,12,'2019-02-17 06:57:59','4','3',11,0,NULL),(572,12,'2019-02-17 07:07:42','2','4',11,15,NULL),(582,12,'2019-02-17 07:08:01','4','4',11,45,NULL),(592,12,'2019-02-17 07:45:45','2','4',10,45,NULL),(602,12,'2019-02-17 08:15:45','2','4',12,15,NULL),(612,12,'2019-02-17 08:20:43','4','5',12,0,NULL),(622,12,'2019-02-17 08:34:29','3','3',12,0,NULL),(632,12,'2019-02-17 08:36:53','3','3',10,45,NULL),(642,12,'2019-02-17 08:39:31','6','7',12,45,NULL),(652,12,'2019-02-17 08:41:11','4','6',13,0,NULL),(662,12,'2019-02-17 09:16:50','4','5',13,15,NULL),(672,12,'2019-02-17 09:20:29','4','4',13,0,NULL),(682,102,'2019-02-17 09:30:30','4','5',12,45,'active'),(692,2,'2019-02-17 09:42:42','2','3',11,0,'active'),(732,52,'2019-02-17 09:53:26','6','4',11,15,'active'),(742,52,'2019-02-17 10:07:33','4','8',12,0,'active'),(1002,112,'2019-02-17 14:11:53','8','10',14,0,'active'),(1012,112,'2019-02-17 14:24:29','8','8',11,45,'active'),(1022,122,'2019-02-17 14:33:26','4','7',12,45,'active'),(1032,132,'2019-02-17 14:33:45','5','5',11,15,'active'),(1042,152,'2019-02-17 15:11:21','5','5',12,0,'active'),(1052,162,'2019-02-17 15:12:25','1','1',10,45,'active'),(1072,182,'2019-02-19 07:56:40','4','5',11,45,'active'),(1082,192,'2019-02-19 08:25:47','4','5',11,0,'active'),(1092,202,'2019-02-19 09:25:10','6','16',13,30,'active'),(1172,272,'2019-02-19 10:44:00','6','13',13,15,'active'),(1222,322,'2019-02-19 12:24:34','3','15',13,45,'active'),(1232,342,'2019-02-19 12:53:30','9','16',13,15,'active'),(1242,22,'2019-02-19 13:04:24','6','16',13,0,'active'),(1252,412,'2019-02-19 13:12:50','3','15',13,30,'active'),(1272,432,'2019-02-19 16:29:03','1','16',13,45,'active'),(1282,442,'2019-02-19 16:49:16','9','15',13,30,'active'),(1292,472,'2019-02-19 19:01:17','3','15',12,45,'active'),(1302,482,'2019-02-19 19:04:21','9','26',10,30,'active'),(1312,492,'2019-02-19 19:04:50','3','15',17,45,'active'),(1322,502,'2019-02-19 19:05:34','4','14',13,45,'active'),(1332,512,'2019-02-19 19:07:11','2','25',13,15,'active'),(1342,522,'2019-02-19 19:07:33','2','25',11,30,'active'),(1352,532,'2019-02-19 19:07:59','2','25',14,0,'active'),(1362,542,'2019-02-19 19:08:20','2','25',14,30,'active'),(1372,552,'2019-02-19 19:08:43','2','25',14,45,'active'),(1382,562,'2019-02-19 19:09:03','2','25',15,0,'active'),(1392,572,'2019-02-19 19:09:28','2','25',12,45,'active'),(1402,582,'2019-02-19 19:09:54','2','25',14,15,'active'),(1412,592,'2019-02-19 19:10:23','2','25',15,30,'active'),(1422,602,'2019-02-19 19:10:46','2','25',16,0,'active'),(1432,612,'2019-02-19 19:11:11','2','25',16,15,'active'),(1442,622,'2019-02-19 19:11:44','2','25',17,15,'active'),(1452,632,'2019-02-19 19:12:37','2','25',18,15,'active'),(1462,642,'2019-02-19 19:13:23','3','15',14,0,'active'),(1472,652,'2019-02-19 19:13:48','2','24',13,45,'active'),(1482,662,'2019-02-19 19:14:09','2','27',13,45,'active'),(1492,672,'2019-02-19 19:14:34','3','15',14,45,'active'),(1502,682,'2019-02-19 19:25:39','2','27',13,45,'active'),(1512,692,'2019-02-19 19:26:02','2','16',13,45,'active'),(1522,702,'2019-02-19 19:26:28','2','30',13,45,'active'),(1532,712,'2019-02-19 19:26:57','3','4',14,15,'active'),(1542,722,'2019-02-19 19:27:19','2','28',14,0,'active'),(1552,732,'2019-02-19 19:27:58','2','29',13,30,'active'),(1562,742,'2019-02-19 19:28:25','4','19',13,45,'active'),(1572,752,'2019-02-19 19:29:13','7','16',13,30,'active'),(1582,762,'2019-02-19 19:29:36','5','16',13,45,'active'),(1592,772,'2019-02-19 19:30:02','3','4',14,30,'active'),(1602,782,'2019-02-19 19:30:29','3','16',13,45,'active'),(1612,792,'2019-02-19 21:02:39','3','16',13,30,'active');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tcompany`
--

DROP TABLE IF EXISTS `tcompany`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcompany` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prename` varchar(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `StreetA` varchar(150) NOT NULL,
  `StreetB` varchar(150) NOT NULL,
  `StreetC` varchar(150) NOT NULL,
  `County` varchar(100) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcompany`
--

LOCK TABLES `tcompany` WRITE;
/*!40000 ALTER TABLE `tcompany` DISABLE KEYS */;
/*!40000 ALTER TABLE `tcompany` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES (2,'Petras','8 699 565 4545','uzimtas',''),(12,'Jonas','8 4534 456 456745','laisvas',''),(22,'Rabinas','vienasvienas','laisvas',''),(32,'Rabinas','vienasvienas','laisvas','rabinas');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-19 23:14:47
