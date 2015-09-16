-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: expocafe_trial
-- ------------------------------------------------------
-- Server version	5.5.44-0+deb8u1

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
-- Table structure for table `auditevent`
--

DROP TABLE IF EXISTS `auditevent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditevent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditevent`
--

LOCK TABLES `auditevent` WRITE;
/*!40000 ALTER TABLE `auditevent` DISABLE KEYS */;
INSERT INTO `auditevent` VALUES (1,'LOGIN',''),(2,'LOGOUT',''),(3,'MENU PRINCIPAL',''),(4,'LISTADO MIS PQRS',''),(5,'NUEVA PQR',''),(6,'VER PQR',''),(7,'BORRAR PQR',''),(8,'MIS DOCUMENTOS ACTUALIZADOS',''),(9,'DOCUMENTOS ACTIVOS',''),(10,'ACTUALIZAR DOCUMENTOS',''),(11,'VER DETALLE DE USUARIO',''),(12,'MODIFICAR USUARIO',''),(15,'VER DOCUMENTO ACTUALIZADO',NULL),(16,'AUDITORIA DEL SISTEMA',NULL);
/*!40000 ALTER TABLE `auditevent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditeventuser`
--

DROP TABLE IF EXISTS `auditeventuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditeventuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `user_event` int(11) NOT NULL,
  `date_event` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `AUDIT_EVENT_USER_fk0` (`user_event`),
  KEY `AUDIT_EVENT_USER_fk1` (`id_event`),
  CONSTRAINT `AUDIT_EVENT_USER_fk0` FOREIGN KEY (`user_event`) REFERENCES `user` (`id`),
  CONSTRAINT `AUDIT_EVENT_USER_fk1` FOREIGN KEY (`id_event`) REFERENCES `auditevent` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditeventuser`
--

LOCK TABLES `auditeventuser` WRITE;
/*!40000 ALTER TABLE `auditeventuser` DISABLE KEYS */;
INSERT INTO `auditeventuser` VALUES (1,11,1,'2015-09-14 17:37:56'),(2,3,1,'2015-09-14 17:39:39'),(3,11,1,'2015-09-14 17:39:42'),(4,3,1,'2015-09-14 17:39:43'),(5,8,1,'2015-09-14 17:47:50'),(6,9,1,'2015-09-14 17:49:45'),(7,9,1,'2015-09-14 17:50:54'),(8,8,1,'2015-09-14 17:50:58'),(9,9,1,'2015-09-14 17:51:27'),(10,8,1,'2015-09-14 17:51:42'),(11,9,1,'2015-09-14 17:53:06'),(12,8,1,'2015-09-14 17:53:08'),(13,9,1,'2015-09-14 17:53:41'),(14,8,1,'2015-09-14 17:53:43'),(15,9,1,'2015-09-14 17:53:49'),(16,8,1,'2015-09-14 17:53:52'),(17,15,1,'2015-09-14 17:54:43'),(18,8,1,'2015-09-14 17:54:48'),(19,8,1,'2015-09-14 17:55:13'),(20,15,1,'2015-09-14 17:55:15'),(21,8,1,'2015-09-14 17:55:16'),(22,8,1,'2015-09-14 17:56:38'),(23,15,1,'2015-09-14 17:56:52'),(24,8,1,'2015-09-14 17:56:55'),(25,8,1,'2015-09-14 17:57:04'),(26,3,1,'2015-09-14 17:57:06'),(27,3,1,'2015-09-14 17:57:22'),(28,3,1,'2015-09-14 17:57:36'),(29,3,1,'2015-09-14 17:57:43'),(30,4,1,'2015-09-14 17:57:51'),(31,4,1,'2015-09-14 17:57:57'),(32,4,1,'2015-09-14 17:57:59'),(33,4,1,'2015-09-14 17:58:02'),(34,6,1,'2015-09-14 17:58:08'),(35,4,1,'2015-09-14 17:58:10'),(36,3,1,'2015-09-14 17:58:13'),(37,8,1,'2015-09-14 17:58:24'),(38,9,1,'2015-09-14 17:58:30'),(39,8,1,'2015-09-14 17:58:40'),(40,3,1,'2015-09-14 17:58:42'),(41,3,1,'2015-09-14 18:22:24'),(42,3,1,'2015-09-14 18:48:45'),(43,3,1,'2015-09-14 18:49:10'),(44,3,1,'2015-09-14 18:50:00'),(45,3,1,'2015-09-14 18:50:00'),(46,3,1,'2015-09-14 18:50:00'),(47,3,1,'2015-09-14 18:50:00'),(48,3,1,'2015-09-14 18:54:34'),(49,3,1,'2015-09-14 18:55:02'),(50,3,1,'2015-09-14 18:55:20'),(51,3,1,'2015-09-14 18:56:12'),(52,3,1,'2015-09-14 19:02:54'),(53,3,1,'2015-09-14 19:03:10'),(54,3,1,'2015-09-14 19:03:11'),(55,3,1,'2015-09-14 19:03:11'),(56,3,1,'2015-09-14 19:04:28'),(57,3,1,'2015-09-14 19:16:04'),(58,3,1,'2015-09-14 19:18:52'),(59,3,1,'2015-09-14 19:24:24'),(60,3,1,'2015-09-14 19:24:37'),(61,3,1,'2015-09-14 19:25:09'),(62,3,1,'2015-09-14 19:25:41'),(63,3,1,'2015-09-14 19:27:06'),(64,3,1,'2015-09-14 19:27:47'),(65,3,1,'2015-09-14 19:27:51'),(66,3,1,'2015-09-14 19:28:19'),(67,3,1,'2015-09-14 19:28:39'),(68,3,1,'2015-09-14 19:29:23'),(69,3,1,'2015-09-14 19:30:03'),(70,3,1,'2015-09-14 19:30:17'),(71,3,1,'2015-09-14 19:39:20'),(72,3,1,'2015-09-14 19:39:29'),(73,3,1,'2015-09-14 19:39:30'),(74,3,1,'2015-09-14 19:46:58'),(75,3,1,'2015-09-14 19:48:25'),(76,3,1,'2015-09-14 19:48:55'),(77,3,1,'2015-09-14 19:58:13'),(78,3,1,'2015-09-15 09:56:58'),(79,3,1,'2015-09-15 09:57:27'),(80,3,1,'2015-09-15 09:58:21'),(81,3,1,'2015-09-15 09:59:35'),(82,3,1,'2015-09-15 10:02:46'),(83,3,1,'2015-09-15 10:14:29'),(84,3,1,'2015-09-15 10:14:31'),(85,3,1,'2015-09-15 10:14:37'),(86,3,1,'2015-09-15 10:15:25'),(87,3,1,'2015-09-15 10:18:52'),(88,3,1,'2015-09-15 10:20:03'),(89,3,1,'2015-09-15 10:26:54'),(90,3,1,'2015-09-15 10:27:06'),(91,3,1,'2015-09-15 10:28:13'),(92,3,1,'2015-09-15 10:29:24'),(93,3,1,'2015-09-15 10:29:45'),(94,3,1,'2015-09-15 11:37:53'),(95,3,1,'2015-09-15 13:21:40'),(96,11,1,'2015-09-15 13:28:07'),(97,12,1,'2015-09-15 13:28:25'),(98,12,1,'2015-09-15 13:28:32'),(99,11,1,'2015-09-15 13:28:32'),(100,3,1,'2015-09-15 13:28:39'),(101,4,1,'2015-09-15 13:28:46'),(102,3,1,'2015-09-15 13:29:39'),(103,4,1,'2015-09-15 13:29:40'),(104,6,1,'2015-09-15 13:29:53'),(105,5,1,'2015-09-15 13:30:36'),(106,4,1,'2015-09-15 13:30:36'),(107,3,1,'2015-09-15 13:33:33'),(108,4,1,'2015-09-15 13:36:07'),(109,6,1,'2015-09-15 13:36:11'),(110,4,1,'2015-09-15 13:36:27'),(111,3,1,'2015-09-15 13:36:28'),(112,8,1,'2015-09-15 13:36:33'),(113,9,1,'2015-09-15 13:37:40'),(114,8,1,'2015-09-15 13:38:20'),(115,3,1,'2015-09-15 13:38:34'),(116,9,1,'2015-09-15 13:39:34'),(117,8,1,'2015-09-15 13:39:36'),(118,15,1,'2015-09-15 13:39:51'),(119,8,1,'2015-09-15 13:40:13'),(120,3,1,'2015-09-15 13:41:23'),(121,3,1,'2015-09-15 13:41:34'),(122,8,1,'2015-09-15 13:42:48'),(123,3,1,'2015-09-15 15:20:25'),(124,3,1,'2015-09-15 15:47:00'),(125,3,1,'2015-09-15 15:48:15'),(126,3,1,'2015-09-15 15:48:38'),(127,3,1,'2015-09-15 15:48:39'),(128,3,1,'2015-09-15 15:48:46'),(129,3,1,'2015-09-15 15:48:46');
/*!40000 ALTER TABLE `auditeventuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_bill` int(11) DEFAULT NULL,
  `client` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BILL_fk0` (`client`),
  CONSTRAINT `BILL_fk0` FOREIGN KEY (`client`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,0,1,'2015-09-14 19:58:16'),(2,0,1,'2015-09-14 22:58:16');
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billdetailitem`
--

DROP TABLE IF EXISTS `billdetailitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billdetailitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bill` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BILL_DETAILS_fk0` (`id_item`),
  KEY `BILL_DETAILS_fk1` (`id_bill`),
  CONSTRAINT `BILL_DETAILS_fk0` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`),
  CONSTRAINT `BILL_DETAILS_fk1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billdetailitem`
--

LOCK TABLES `billdetailitem` WRITE;
/*!40000 ALTER TABLE `billdetailitem` DISABLE KEYS */;
/*!40000 ALTER TABLE `billdetailitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientdocument`
--

DROP TABLE IF EXISTS `clientdocument`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientdocument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_document` int(11) NOT NULL,
  `document_path_adjunt` text NOT NULL,
  `state` int(11) NOT NULL,
  `date` date NOT NULL,
  `client` int(11) NOT NULL,
  `observation` text,
  PRIMARY KEY (`id`),
  KEY `CLIENT_DOCUMENTS_fk2` (`state`),
  KEY `CLIENT_DOCUMENTS_fk0` (`client`),
  KEY `CLIENT_DOCUMENTS_fk1` (`id_document`),
  CONSTRAINT `CLIENT_DOCUMENTS_fk2` FOREIGN KEY (`state`) REFERENCES `statedocument` (`id`),
  CONSTRAINT `CLIENT_DOCUMENTS_fk0` FOREIGN KEY (`client`) REFERENCES `user` (`id`),
  CONSTRAINT `CLIENT_DOCUMENTS_fk1` FOREIGN KEY (`id_document`) REFERENCES `document` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientdocument`
--

LOCK TABLES `clientdocument` WRITE;
/*!40000 ALTER TABLE `clientdocument` DISABLE KEYS */;
INSERT INTO `clientdocument` VALUES (14,1,'C:\\xampp\\htdocs\\EXPOCAFECAKE\\app\\webroot\\data\\documents\\clients\\2\\9.pdf',1,'2015-09-12',2,'Ok todo bien'),(15,1,'C:\\xampp\\htdocs\\EXPOCAFECAKE\\app\\webroot\\data\\documents\\clients\\2\\exportdata (9).pdf',3,'2015-09-15',2,'Ok todo bien!');
/*!40000 ALTER TABLE `clientdocument` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `document_path_adjunt` text NOT NULL,
  `active` text NOT NULL,
  `date` date NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document`
--

LOCK TABLES `document` WRITE;
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
INSERT INTO `document` VALUES (1,'CAMARA COMERCIO','C:\\xampp\\htdocs\\EXPOCAFECAKE\\app\\webroot\\data\\documents\\exportdata.pdf','1','0000-00-00','0');
/*!40000 ALTER TABLE `document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'CONSULTA PERMANENCIA',1000,'2015-09-14 18:44:06'),(2,'CONSULTA PESOS INGRESO CAFE',2000,'2015-09-14 18:44:03'),(3,'CONSULTA CAFE EMBALAJE',2500,'2015-09-14 18:42:53'),(4,'CONSULTA INVENTARIOS DE INSUMOS',3500,'2015-09-14 18:45:03');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pqr`
--

DROP TABLE IF EXISTS `pqr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_located` text NOT NULL,
  `id_client` int(11) NOT NULL,
  `description` text,
  `body` longtext,
  `state` int(11) NOT NULL,
  `reply` longtext,
  `date_create` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PQR_fk0` (`id_client`),
  KEY `pqr_fk1` (`type`),
  KEY `pqr_fk2` (`state`),
  CONSTRAINT `pqr_fk2` FOREIGN KEY (`state`) REFERENCES `statepqr` (`id`),
  CONSTRAINT `PQR_fk0` FOREIGN KEY (`id_client`) REFERENCES `user` (`id`),
  CONSTRAINT `pqr_fk1` FOREIGN KEY (`type`) REFERENCES `typepqr` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pqr`
--

LOCK TABLES `pqr` WRITE;
/*!40000 ALTER TABLE `pqr` DISABLE KEYS */;
INSERT INTO `pqr` VALUES (1,1,'Nombre 1','a6dbd568cd',1,'Descripcion 1','Cuerpo 1',1,NULL,'2015-09-14'),(3,3,'NOMBRE PQR 3','daae49a69a',1,'PQR PARA CONTESTAR NECESITAD DE RECURSO','CUERPO PQR 3',1,NULL,'2015-09-14'),(6,1,'NOMBRE PQR','f2a642e003',2,'DESCRIPCION PQR','CUERPO PQR',3,'asasd','2015-09-14'),(7,1,'NOMBRE PQR','5122d62c2e',2,'DESCRIPCION PQR','CUERPO PQR',1,NULL,'2015-09-14'),(8,3,'NOMBRE 443','2f0dd640cb',2,'DESCRIPCION ASD','',1,NULL,'2015-09-14'),(9,3,'NOMBRE 1','bf248946aa',2,'DESCRIPCION 1','CUERPO 1',2,'Esta ok todo','2015-09-15');
/*!40000 ALTER TABLE `pqr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'COLABORADOR',''),(2,'CLIENTE','Descripción Rol Cliente');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statedocument`
--

DROP TABLE IF EXISTS `statedocument`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statedocument` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statedocument`
--

LOCK TABLES `statedocument` WRITE;
/*!40000 ALTER TABLE `statedocument` DISABLE KEYS */;
INSERT INTO `statedocument` VALUES (1,'POR ACTUALIZAR',''),(2,'RECHAZADO',''),(3,'ACEPTADO','');
/*!40000 ALTER TABLE `statedocument` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statepqr`
--

DROP TABLE IF EXISTS `statepqr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statepqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statepqr`
--

LOCK TABLES `statepqr` WRITE;
/*!40000 ALTER TABLE `statepqr` DISABLE KEYS */;
INSERT INTO `statepqr` VALUES (1,'ABIERTA',''),(2,'EN PROCESO',''),(3,'RECHAZADO',''),(4,'COMPLETADA','');
/*!40000 ALTER TABLE `statepqr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typepqr`
--

DROP TABLE IF EXISTS `typepqr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typepqr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typepqr`
--

LOCK TABLES `typepqr` WRITE;
/*!40000 ALTER TABLE `typepqr` DISABLE KEYS */;
INSERT INTO `typepqr` VALUES (1,'PETICION',''),(2,'QUEJA',''),(3,'RECURSO','');
/*!40000 ALTER TABLE `typepqr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nit` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `date_access` date DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `name` text,
  `email` text,
  `ip_remote_server` text,
  PRIMARY KEY (`id`),
  KEY `USER_fk0` (`id_rol`),
  CONSTRAINT `USER_fk0` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'123','juan','2015-09-11',1,'FEDERACION NACIONAL DE CAFETEROS','micorreo@cafedecolombia.com',''),(2,'234234','asdasd','2015-09-12',2,'TERESITA','teresita@micafesito.com',''),(3,'23123','asdasd','2015-09-12',1,'TRILLADORA LA BUENA','labuena@latrilladoralabuena.com',''),(5,'22222','$2a$10$JW8CiplK5O.3Hh.Nq1eBS.jagfffUgdinjyHgH7USEyUjX32O4Goi','2015-09-15',1,'JUAN DAVID','juan@hotmail.com','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-15 20:40:49
