-- MySQL dump 10.13  Distrib 5.5.38, for osx10.6 (i386)
--
-- Host: localhost    Database: symfony
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `Avis`
--

DROP TABLE IF EXISTS `Avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_vin` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `titre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Avis`
--

LOCK TABLES `Avis` WRITE;
/*!40000 ALTER TABLE `Avis` DISABLE KEYS */;
INSERT INTO `Avis` VALUES (4,1,1,2009,'Tres bon vin !','j\'ai vraiment apprecié le gout fruité de ce vin savoureux agreble',2),(5,4,1,2012,'Excellent','j\'ai adoré',3),(6,2,2,1998,'Peu apprecié !','pas agreable',4);
/*!40000 ALTER TABLE `Avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Caracteristique`
--

DROP TABLE IF EXISTS `Caracteristique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Caracteristique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Caracteristique`
--

LOCK TABLES `Caracteristique` WRITE;
/*!40000 ALTER TABLE `Caracteristique` DISABLE KEYS */;
INSERT INTO `Caracteristique` VALUES (1,'Fruité'),(2,'Doux'),(3,'Brute');
/*!40000 ALTER TABLE `Caracteristique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CaracteristiqueVins`
--

DROP TABLE IF EXISTS `CaracteristiqueVins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CaracteristiqueVins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_vin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CaracteristiqueVins`
--

LOCK TABLES `CaracteristiqueVins` WRITE;
/*!40000 ALTER TABLE `CaracteristiqueVins` DISABLE KEYS */;
INSERT INTO `CaracteristiqueVins` VALUES (1,1,1),(2,2,1),(3,2,2);
/*!40000 ALTER TABLE `CaracteristiqueVins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cepage`
--

DROP TABLE IF EXISTS `Cepage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cepage`
--

LOCK TABLES `Cepage` WRITE;
/*!40000 ALTER TABLE `Cepage` DISABLE KEYS */;
INSERT INTO `Cepage` VALUES (1,'Chardonnay'),(2,'Sauvignon'),(3,'Viognier');
/*!40000 ALTER TABLE `Cepage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CepageVins`
--

DROP TABLE IF EXISTS `CepageVins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CepageVins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_cepage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CepageVins`
--

LOCK TABLES `CepageVins` WRITE;
/*!40000 ALTER TABLE `CepageVins` DISABLE KEYS */;
INSERT INTO `CepageVins` VALUES (1,1,1),(2,2,3),(3,3,1);
/*!40000 ALTER TABLE `CepageVins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Favoris`
--

DROP TABLE IF EXISTS `Favoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Favoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_vin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Favoris`
--

LOCK TABLES `Favoris` WRITE;
/*!40000 ALTER TABLE `Favoris` DISABLE KEYS */;
INSERT INTO `Favoris` VALUES (1,1,2),(2,2,3),(3,3,3);
/*!40000 ALTER TABLE `Favoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User2`
--

DROP TABLE IF EXISTS `User2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User2`
--

LOCK TABLES `User2` WRITE;
/*!40000 ALTER TABLE `User2` DISABLE KEYS */;
INSERT INTO `User2` VALUES (1,'user1','user1','user1@gmail.com'),(2,'user2','user2','user2@gmail.com');
/*!40000 ALTER TABLE `User2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Version`
--

DROP TABLE IF EXISTS `Version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `versionNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Version`
--

LOCK TABLES `Version` WRITE;
/*!40000 ALTER TABLE `Version` DISABLE KEYS */;
/*!40000 ALTER TABLE `Version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Vins`
--

DROP TABLE IF EXISTS `Vins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `domaine` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `couleur` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `aoc` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vins`
--

LOCK TABLES `Vins` WRITE;
/*!40000 ALTER TABLE `Vins` DISABLE KEYS */;
INSERT INTO `Vins` VALUES (1,'Aixtra','Provence et Corse','Cellier Saint-Louis','Rosé','Beaujolais'),(2,'Coteaux Varois','Provence',' Château de L’Escarelle','Blanc','Bordeaux'),(3,'Aloxe Corton','Bourgogne et Beaujolais','Château de Meursault','Rouge','Chablis'),(4,'Banyuls','Languedoc-Roussillon','Clos de Paulilles','Blanc','Banyuls'),(5,'Banyuls','Languedoc-Roussillon','Coume Del Mas','Blanc','Banyuls'),(6,'Banyuls','Languedoc-Roussillon','Domaine de la Casa Blanca','Rouge','Banyuls'),(7,'Béarn','Sud-Ouest','Domaine Larribère','Rouge','Béarn'),(8,'Bergerac','Sud-Ouest','Casanova des Conti','Rouge','Bergerac'),(9,'1769','Provence et Corse','Clos Venturi','Rosé','Corse'),(10,'Ajaccio','Provence et Corse','Clos d\'Alzeto ','Rosé','Ajaccio'),(11,'Aloxe Corton','Bourgogne et Beaujolais','Château de Meursault','Rouge','Aloxe Corton'),(12,'Alsace Clos du Val d\'Eléon','Alsace','Domaine Marc Kreydenweiss','Blanc','Alsace'),(13,'Bordeaux','Bordeaux','Château Busqueyron','Blanc','Bordeaux'),(14,'Barriques','Bordeaux','Château La France','Rouge','Bordeaux Superieur'),(15,'Barsac Madame','Bordeaux','Château Coutet','Blanc','Barsac');
/*!40000 ALTER TABLE `Vins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user1','user1','user1@gmail.com','user1@gmail.com',1,'hm3isrca4i04wcs0c40w4sgcw8csgwk','PQfehKIB3oDEqwFER9u078bTHABRyhzOI8cguaI9rsLv+OaPdTGgwCRDAkaVhQ63qPd3k7XUng2Qr9VKVEPBkA==','2015-03-12 15:10:12',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(2,'user2','user2','user2@gmail.com','user2@gmail.com',1,'chdrgr5an4g880o8o4c0kow8wo44ok4','qgwrHJm3xplF30EInuH1us/7vS9YjB2hOn62ly3u+y0o/YILmq0IQCIn3fHfQ9Pvg9hVAPozRwbuG1k2UTxNAw==','2015-03-12 15:10:23',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(3,'user3','user3','user3@gmail.com','user3@gmail.com',1,'6yhmy9i4cscgoowsokocoo4wkkoswsg','dPYiGLqScaHEEbs47xv28cikS2RA7Eh/iSSL+aJiii2a5OaGQ0Vd9kkiEgWN2ceLjzmQ6TG1PcW/T/SNada1oQ==','2015-03-12 15:10:35',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(4,'user4','user4','user4@gmail.com','user4@gmail.com',1,'a4wotg3rdt4o8csc04osksc0gs4o4cs','CNCI5BUqU6PXi+aNItaN3ImduEidj/jnDxQoIdfOVQXnmMFerGatj9+RvFOX9oWbk4dGor6+97NDSlsI+mV2bQ==','2015-03-12 17:30:41',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(5,'user5','user5','user5@gmail.com','user5@gmail.com',1,'bas9p0qjflcscwoccgwso8gsco0k0kg','9Hw+gblgbz8lJAoj2oXj8AKSqBLJ8q0P0xOs0PTd6GcL3c+dL940EDe8LqXjS3k80gZsBFrsPIiDJrEnvkL8Vg==','2015-03-12 17:37:16',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL),(6,'user6','user6','user6@gmail.com','user6@gmail.com',1,'hszw1a5o8iogs4ws44kgc4kwgscggso','MFS5XYnHhG8tk8cMhGWfJmwyKVm2lZHiBkbresa12MnSvF7bZJYajh6Gnp0Z55+UCh2+NZ8nl5MtBQMxt1LEWA==','2015-03-12 17:38:46',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-13 14:53:11
