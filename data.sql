-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

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
-- Table structure for table `Uzytkownicy`
--

DROP TABLE IF EXISTS `Uzytkownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Uzytkownicy` (
  `ID_Uzytk` varchar(0) DEFAULT NULL,
  `login` varchar(0) DEFAULT NULL,
  `haslo` varchar(0) DEFAULT NULL,
  `data_utworzenia` varchar(0) DEFAULT NULL,
  `admin` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Uzytkownicy`
--

LOCK TABLES `Uzytkownicy` WRITE;
/*!40000 ALTER TABLE `Uzytkownicy` DISABLE KEYS */;
/*!40000 ALTER TABLE `Uzytkownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzialy`
--

DROP TABLE IF EXISTS `dzialy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzialy` (
  `ID_Dzialu` varchar(0) DEFAULT NULL,
  `Nazwa_Dzialu` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzialy`
--

LOCK TABLES `dzialy` WRITE;
/*!40000 ALTER TABLE `dzialy` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzialy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jezyki`
--

DROP TABLE IF EXISTS `jezyki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jezyki` (
  `ID_Jezyka` varchar(0) DEFAULT NULL,
  `Nazwa_jezyka` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jezyki`
--

LOCK TABLES `jezyki` WRITE;
/*!40000 ALTER TABLE `jezyki` DISABLE KEYS */;
/*!40000 ALTER TABLE `jezyki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slowa`
--

DROP TABLE IF EXISTS `slowa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slowa` (
  `ID_Slowa` varchar(0) DEFAULT NULL,
  `ID_Dzialu` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slowa`
--

LOCK TABLES `slowa` WRITE;
/*!40000 ALTER TABLE `slowa` DISABLE KEYS */;
/*!40000 ALTER TABLE `slowa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tlumaczeniaUzytkownik`
--

DROP TABLE IF EXISTS `tlumaczeniaUzytkownik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tlumaczeniaUzytkownik` (
  `id_tlumaczenia` varchar(0) DEFAULT NULL,
  `ID_Uzytk` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tlumaczeniaUzytkownik`
--

LOCK TABLES `tlumaczeniaUzytkownik` WRITE;
/*!40000 ALTER TABLE `tlumaczeniaUzytkownik` DISABLE KEYS */;
/*!40000 ALTER TABLE `tlumaczeniaUzytkownik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tlumaczenie`
--

DROP TABLE IF EXISTS `tlumaczenie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tlumaczenie` (
  `id_tlumaczenia` varchar(0) DEFAULT NULL,
  `ID_Slowa` varchar(0) DEFAULT NULL,
  `ID_Jezyka` varchar(0) DEFAULT NULL,
  `tlumaczenie` varchar(0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tlumaczenie`
--

LOCK TABLES `tlumaczenie` WRITE;
/*!40000 ALTER TABLE `tlumaczenie` DISABLE KEYS */;
/*!40000 ALTER TABLE `tlumaczenie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-22 15:20:25
