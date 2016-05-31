CREATE DATABASE  IF NOT EXISTS `minimal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `minimal`;
-- MySQL dump 10.13  Distrib 5.6.24, for linux-glibc2.5 (x86_64)
--
-- Host: 127.0.0.1    Database: minimal
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Visitante` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` longblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_visitante_idx` (`id_Visitante`),
  CONSTRAINT `fk_visitante` FOREIGN KEY (`id_Visitante`) REFERENCES `visitante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email_mailing` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES ('a@a.com'),('agatha@anhembi.com.br'),('andre@anhembi.com.br'),('c@c.com.br'),('ddddddd'),('lorenzo@anhembi.com.br'),('michel@anhembi.com.br'),('news@news.com.br'),('pepito@anhembi.com.br'),('test@mascbook.com.br'),('via@modal.com.br'),('zaca@zaca.com.br');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_galeria`
--

DROP TABLE IF EXISTS `tag_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_galeria` (
  `id_tag` int(11) NOT NULL,
  `id_galeria` int(11) NOT NULL,
  PRIMARY KEY (`id_tag`,`id_galeria`),
  KEY `fk_galeria_idx` (`id_galeria`),
  CONSTRAINT `fk_galeria` FOREIGN KEY (`id_galeria`) REFERENCES `galeria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tag` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_galeria`
--

LOCK TABLES `tag_galeria` WRITE;
/*!40000 ALTER TABLE `tag_galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag_UNIQUE` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (27,'&nbsp'),(5,'Apple Design'),(9,'aquela fita'),(10,'champs'),(31,'cinco'),(28,'cipa'),(16,'datetime'),(38,'delicia'),(35,'dois'),(25,'duas'),(3,'Flat Design'),(37,'galo cego, deus no comando'),(33,'itacolomi'),(44,'jailson'),(41,'laranja'),(34,'lilica'),(43,'macho'),(1,'Material Design'),(4,'Metro Design'),(15,'nada ver'),(30,'nova'),(39,'oco'),(8,'outra fita'),(40,'suco'),(36,'titulo'),(26,'tres'),(24,'uma'),(7,'uma fita'),(42,'urso'),(32,'vai'),(29,'velha');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitante`
--

DROP TABLE IF EXISTS `visitante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailVisitante` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitante`
--

LOCK TABLES `visitante` WRITE;
/*!40000 ALTER TABLE `visitante` DISABLE KEYS */;
INSERT INTO `visitante` VALUES (8,'Andr&eacute; Vasconcelos','andre@anhembi.com.br','202cb962ac59075b964b07152d234b70'),(9,'Agatha','agatha@anhembi.com.br','202cb962ac59075b964b07152d234b70'),(10,'Michel','michel@anhembi.com.br','202cb962ac59075b964b07152d234b70'),(11,'Lorenzo','lorenzo@anhembi.com.br','202cb962ac59075b964b07152d234b70'),(12,'Pepito','pepito@anhembi.com.br','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `visitante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'minimal'
--

--
-- Dumping routines for database 'minimal'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-30 18:49:34
