-- MariaDB dump 10.19-11.3.0-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: apartaments
-- ------------------------------------------------------
-- Server version	11.3.0-MariaDB

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
-- Table structure for table `apartamentos`
--

DROP TABLE IF EXISTS `apartamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apartamentos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titol` varchar(255) DEFAULT NULL,
  `Preu_Alta` decimal(10,2) DEFAULT NULL,
  `Preu_Baixa` decimal(10,2) DEFAULT NULL,
  `Temporades` varchar(255) DEFAULT NULL,
  `Longitud` decimal(9,6) DEFAULT NULL,
  `Latitud` decimal(8,6) DEFAULT NULL,
  `N_Habitacions` int(11) DEFAULT NULL,
  `Metres_Quadrats` int(11) DEFAULT NULL,
  `Descripcio` text DEFAULT NULL,
  `Adreca_Postal` varchar(255) DEFAULT NULL,
  `Serveis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartamentos`
--

LOCK TABLES `apartamentos` WRITE;
/*!40000 ALTER TABLE `apartamentos` DISABLE KEYS */;
INSERT INTO `apartamentos` VALUES
(11,'Apartament 1',50.00,30.00,'Alta',2.962342,42.269897,6,250,'Descrpicio de apartament 1','17600','Wifi,Piscina'),
(12,'Apartament 2',60.00,40.00,'Baixa',2.963465,42.269564,8,250,'Descrpicio de apartament 2','17600','Wifi,Piscina'),
(13,'Apartament 3',70.00,45.00,'Baixa',2.969876,42.269845,5,170,'Descripicio de apartament 3','17600','Wifi,Piscina'),
(22,'Apartament 4',50.00,30.00,'Baixa',2.963465,42.269853,5,190,'Descripcio de apartament 7','17600','Wifi,Piscina');
/*!40000 ALTER TABLE `apartamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserva` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Usuari` int(11) DEFAULT NULL,
  `ID_Apartament` int(11) DEFAULT NULL,
  `Data_Entrada` date DEFAULT NULL,
  `Data_Sortida` date DEFAULT NULL,
  `Preu_Per_Dia` decimal(10,2) DEFAULT NULL,
  `n_persones` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Usuari` (`ID_Usuari`),
  KEY `ID_Apartament` (`ID_Apartament`),
  CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`ID_Usuari`) REFERENCES `users` (`ID`),
  CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`ID_Apartament`) REFERENCES `apartamentos` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` VALUES
(8,7,11,'2023-11-10','2023-11-15',50.00,6),
(10,7,11,'2023-11-10','2023-11-15',50.00,6);
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serveis_i_extres`
--

DROP TABLE IF EXISTS `serveis_i_extres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serveis_i_extres` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_del_servei_o_extra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serveis_i_extres`
--

LOCK TABLES `serveis_i_extres` WRITE;
/*!40000 ALTER TABLE `serveis_i_extres` DISABLE KEYS */;
/*!40000 ALTER TABLE `serveis_i_extres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tancat`
--

DROP TABLE IF EXISTS `tancat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tancat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Inici` date DEFAULT NULL,
  `Data_Final` date DEFAULT NULL,
  `ID_Apartament` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Apartament` (`ID_Apartament`),
  CONSTRAINT `tancat_ibfk_1` FOREIGN KEY (`ID_Apartament`) REFERENCES `apartamentos` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tancat`
--

LOCK TABLES `tancat` WRITE;
/*!40000 ALTER TABLE `tancat` DISABLE KEYS */;
/*!40000 ALTER TABLE `tancat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporada`
--

DROP TABLE IF EXISTS `temporada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporada` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Inici` date DEFAULT NULL,
  `Data_Final` date DEFAULT NULL,
  `Es_Temporada_Baixa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporada`
--

LOCK TABLES `temporada` WRITE;
/*!40000 ALTER TABLE `temporada` DISABLE KEYS */;
/*!40000 ALTER TABLE `temporada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Cognoms` varchar(255) DEFAULT NULL,
  `Telefon` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Card` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'marcos','munoz','123456721','marcos@gmail.com','1234567890987964','yugurto','1234','gestor'),
(4,'adria','jofre','123456789','jofre@gmail.com','1234567898765475','jofre','1234','admin'),
(7,'pedro','Garcia','123454368','pepe@gmail.com','1234567890987676','Pepito','1234','usuari'),
(8,'Joan','Perez','373827532','joan@gmail.com','1234567898708641','Bellingham','1234','gestor'),
(9,'Roberto','Perez','4567895743','roberto@gmail.com',NULL,'Roberto','1234',NULL);
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

-- Dump completed on 2023-11-10 19:29:21
