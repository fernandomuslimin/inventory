-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: inventory_new
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('003ffpdr3pgu3vk21uncn1f56pka2qg2','::1',1601654667,_binary '__ci_last_regenerate|i:1601654667;'),('04vfpibaeko818i6lavbh2s30bd27e3e','::1',1601808725,_binary '__ci_last_regenerate|i:1601808724;'),('0n4q6sh6kcloi5k87b0uj21s01h7j6mv','::1',1601654229,_binary '__ci_last_regenerate|i:1601654229;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('1j3nc4ekoce0p6g6lgmumltlod7ks004','::1',1601657179,_binary '__ci_last_regenerate|i:1601657179;'),('21s5nfkep9k06obr1hv5amjoltba6btm','::1',1601659831,_binary '__ci_last_regenerate|i:1601659740;'),('2un097hmb56mpcrcpuvki29un4thfcob','::1',1601802177,_binary '__ci_last_regenerate|i:1601802165;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('36pdg5e7s105ad0vd823lefcvfsqgr3c','::1',1601754087,_binary '__ci_last_regenerate|i:1601754086;'),('3c01vs41ggvh3k3eii6lu469urfi3sdj','::1',1601745216,_binary '__ci_last_regenerate|i:1601745216;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('3m318f55lscbmtjpa2h3ar79jsvgbd65','::1',1601741219,_binary '__ci_last_regenerate|i:1601741218;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('43hpo1l4pn5vejdmpabe944ac8fjkqmb','::1',1601662107,_binary '__ci_last_regenerate|i:1601662107;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('4edg18o387k9qiqehdedarsblba1os6n','::1',1601756900,_binary '__ci_last_regenerate|i:1601756899;'),('50su7ce4lstsg120jf5rp0dctr3v1q59','::1',1601749004,_binary '__ci_last_regenerate|i:1601749004;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('5d0bdt3qb9k4rl5otlh713f3e5dl37ae','::1',1601817945,_binary '__ci_last_regenerate|i:1601817686;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('5qd4qaa2kuhtrs31d85uo6grtaenrce4','::1',1601652817,_binary '__ci_last_regenerate|i:1601652817;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('60acce1k9hbsrgsklic4cg29ne205dns','::1',1601747012,_binary '__ci_last_regenerate|i:1601747012;session_data|a:6:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('671g0lruitldvguiu86vpnos302jkqq3','::1',1601746637,_binary '__ci_last_regenerate|i:1601746637;session_data|a:6:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('685hn2qbbq08v59ctheioh7n7ovoml93','::1',1601649836,_binary '__ci_last_regenerate|i:1601649836;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('6kov3r2l9rus9ns71sh2mf4e9sjnfhim','::1',1601756825,_binary '__ci_last_regenerate|i:1601756825;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('6qprgkq8nupgh2vriike7bjnhk7ut4tk','::1',1601656986,_binary '__ci_last_regenerate|i:1601656986;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('79uh8ppqacmuiekk85tlosnefdisspm7','::1',1601820881,_binary '__ci_last_regenerate|i:1601820881;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('97ebq2dqnpv9iam72i7kf2825emlni56','::1',1601659885,_binary '__ci_last_regenerate|i:1601659885;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('a1jcjsb94d4o3p8kbehal58prl54gm2o','::1',1601650229,_binary '__ci_last_regenerate|i:1601650229;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('blvj9el3bmvjq86pe0oj3l88oto72n46','::1',1601743155,_binary '__ci_last_regenerate|i:1601743104;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('catec5rpjta168pl0kgtjbsvs52lj9jv','::1',1601808762,_binary '__ci_last_regenerate|i:1601808761;'),('cj6r02jd6mkc4eovpjoj840iq262ficd','::1',1601745890,_binary '__ci_last_regenerate|i:1601745890;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('ctshs0q3onq07mjmad9u01o61bbb0q1s','::1',1601745588,_binary '__ci_last_regenerate|i:1601745588;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('gai4oa68lldtsqtkdtc0eecsl5at60qk','::1',1601664260,_binary '__ci_last_regenerate|i:1601664218;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('hl7js6vetuiqaul6939se2h8mkv5tcbr','::1',1601796077,_binary '__ci_last_regenerate|i:1601795841;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('idtl4a0p5d5p4h8n8k4d7gd7s1nlmsv2','::1',1601821128,_binary '__ci_last_regenerate|i:1601820881;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('ikat7vl6q0t5drnjmqhsspdkqcalnvq9','::1',1601746271,_binary '__ci_last_regenerate|i:1601746271;session_data|a:6:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('ikkk6uiuc236mj3ggn1jcthvok0s7ggl','::1',1601663239,_binary '__ci_last_regenerate|i:1601663238;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('j4c6i3v7tq5h3kr7vgptv55tsfb3o27p','::1',1601742304,_binary '__ci_last_regenerate|i:1601742230;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('kvf5u61p73u121022sa43ep5i6c5vcp6','::1',1601663238,_binary '__ci_last_regenerate|i:1601663238;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('n0los0pnchlhgq6ecr4jgavu5oh093f5','::1',1601808550,_binary '__ci_last_regenerate|i:1601808549;'),('npo0pic98hadjoutrj7b20icn7mapgte','::1',1601749987,_binary '__ci_last_regenerate|i:1601749949;'),('ocl2b54hmnb0u9f3sni5mvbfeo7hslh2','::1',1601741218,_binary '__ci_last_regenerate|i:1601741218;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('otrfmo1ifv7t0cbeprkk95v1nd23jdq8','::1',1601744904,_binary '__ci_last_regenerate|i:1601744904;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('p0uc9pj41fmq6oaj3qaiksb9a5njtp5h','::1',1601662627,_binary '__ci_last_regenerate|i:1601662368;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('p98a88qu9p9dntt7mq7hb6k32pqq9o7i','::1',1601744105,_binary '__ci_last_regenerate|i:1601744085;'),('pihfe1e9vhu6d31aqb5mqlrs5q6boj4o','::1',1601661652,_binary '__ci_last_regenerate|i:1601661652;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('pk3uugr6itr7bp151nlnco182eb8i6cn','::1',1601740875,_binary '__ci_last_regenerate|i:1601740875;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('pqvb1of26k9sc5sjlo0neodf06meq5ot','::1',1601659740,_binary '__ci_last_regenerate|i:1601659740;'),('qmbuo0g7ibadg6f63mlrfagmjpn8p5m8','::1',1601645162,_binary '__ci_last_regenerate|i:1601645162;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('r6mc76g64tunll0au78tq3uovugqd90o','::1',1601808355,_binary '__ci_last_regenerate|i:1601808355;'),('rehthm60l6u3em3mhbknfm6239ig0p5u','::1',1601750376,_binary '__ci_last_regenerate|i:1601750137;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('sdjdq0ho9qt9qctj0lue18q45l01bjma','::1',1601657305,_binary '__ci_last_regenerate|i:1601657305;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('sp396vi7uimioacs608r97vlvvgftiad','::1',1601747155,_binary '__ci_last_regenerate|i:1601747012;session_data|a:6:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('ulkq2j0ltg3q8mjbplg0q3sm464ppths','::1',1601749797,_binary '__ci_last_regenerate|i:1601749797;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('uvj99m8fh54v1g5avi7hb2stt21fgs81','::1',1601750137,_binary '__ci_last_regenerate|i:1601750137;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('v60mt4lls74qf5hrr66vc1kudean5t5o','::1',1601808868,_binary '__ci_last_regenerate|i:1601808472;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('v9ehhgla2ps24ngt5kj55nisqnbc9kau','::1',1601749369,_binary '__ci_last_regenerate|i:1601749369;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}'),('vihs1qb3i0kme2vjssrbernkvu11fu16','::1',1601652407,_binary '__ci_last_regenerate|i:1601652407;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('vjnhukprdrgs7p2kaa224fhvpqjgi21d','::1',1601742230,_binary '__ci_last_regenerate|i:1601742230;session_data|a:5:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";}'),('vnrhkh4m8ptofd8t6vnk9dvjldjpafmm','::1',1601803456,_binary '__ci_last_regenerate|i:1601803363;session_data|a:7:{s:8:\"username\";s:5:\"admin\";s:4:\"name\";s:13:\"Administrator\";s:5:\"email\";s:15:\"admin@admin.com\";s:4:\"role\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:11:\"division_id\";s:2:\"11\";s:13:\"division_name\";s:25:\"Digital Business Division\";}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` VALUES (11,'Digital Business Division');
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `division_inventory`
--

DROP TABLE IF EXISTS `division_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `division_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `master_inventory_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_division_inventory_master_inventory_idx` (`master_inventory_id`),
  KEY `fk_division_inventory_division1_idx` (`division_id`),
  CONSTRAINT `fk_division_inventory_division1` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  CONSTRAINT `fk_division_inventory_master_inventory` FOREIGN KEY (`master_inventory_id`) REFERENCES `master_inventory` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division_inventory`
--

LOCK TABLES `division_inventory` WRITE;
/*!40000 ALTER TABLE `division_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `division_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory_order`
--

DROP TABLE IF EXISTS `inventory_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `inventory_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `master_inventory_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `fk_inventory_order_division1_idx` (`division_id`),
  KEY `fk_inventory_order_master_inventory1_idx` (`master_inventory_id`),
  CONSTRAINT `fk_inventory_order_division1` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`),
  CONSTRAINT `fk_inventory_order_master_inventory1` FOREIGN KEY (`master_inventory_id`) REFERENCES `master_inventory` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory_order`
--

LOCK TABLES `inventory_order` WRITE;
/*!40000 ALTER TABLE `inventory_order` DISABLE KEYS */;
INSERT INTO `inventory_order` VALUES (1,11,1,120,'2020-10-04 01:34:02'),(2,11,3,120,'2020-10-04 01:35:34'),(3,11,4,12,'2020-10-04 01:35:47'),(4,11,8,10,'2020-10-04 21:12:52');
/*!40000 ALTER TABLE `inventory_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_inventory`
--

DROP TABLE IF EXISTS `master_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `master_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(100) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `goods_type` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_inventory`
--

LOCK TABLES `master_inventory` WRITE;
/*!40000 ALTER TABLE `master_inventory` DISABLE KEYS */;
INSERT INTO `master_inventory` VALUES (1,'Aramis Granule','Aramis','Food & Baverage',300,'Pack',23000,'2020-10-02 23:04:27',NULL),(2,'Aramis Liquor','Aramis','Food & Baverage',200,'Bottle',25000,'2020-10-02 23:05:06',NULL),(3,'Aramis Easy Bite','Aramis','Food & Baverage',10,'Pack',20000,'2020-10-02 23:49:14',NULL),(4,'Aramis Bundle','Aramis','Food & Baverage',20,'Pack',54000,'2020-10-02 23:51:29',NULL),(6,'Aramis Doang','Aramis','Gula',150,'pcs',23000,'2020-10-04 01:18:26','2020-10-04 01:37:41'),(8,'Kertas HVS','Sinar Dunia','ATK',150,'Pack',48000,'2020-10-04 21:12:40',NULL);
/*!40000 ALTER TABLE `master_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_history`
--

DROP TABLE IF EXISTS `order_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order_history` (
  `id_history` int(11) unsigned zerofill NOT NULL,
  `inventory_order_id_order` int(11) NOT NULL,
  PRIMARY KEY (`id_history`),
  KEY `fk_order_history_inventory_order1_idx` (`inventory_order_id_order`),
  CONSTRAINT `fk_order_history_inventory_order1` FOREIGN KEY (`inventory_order_id_order`) REFERENCES `inventory_order` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_history`
--

LOCK TABLES `order_history` WRITE;
/*!40000 ALTER TABLE `order_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `fk_user_division1_idx` (`division_id`),
  CONSTRAINT `fk_user_division1` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','Administrator','admin@admin.com','$2y$10$NtVX2YLOV3nbuL8H5yYcJ.o3Q3VBKuBV3rfHg2NovHMUEDgM6o8aS',1,1,11);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'inventory_new'
--

--
-- Dumping routines for database 'inventory_new'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-04 21:29:17
