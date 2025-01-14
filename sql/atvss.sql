/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.6.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: atvss
-- ------------------------------------------------------
-- Server version	11.6.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `Aktivnost`
--

DROP TABLE IF EXISTS `Aktivnost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Aktivnost` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nastavnik` varchar(100) DEFAULT NULL,
  `predmet` varchar(100) DEFAULT NULL,
  `studijski_program` varchar(10) DEFAULT NULL,
  `tip_obaveze` varchar(100) DEFAULT NULL,
  `datum_vreme` varchar(100) DEFAULT NULL,
  `broj_prijavljenih` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Aktivnost`
--

LOCK TABLES `Aktivnost` WRITE;
/*!40000 ALTER TABLE `Aktivnost` DISABLE KEYS */;
INSERT INTO `Aktivnost` (nastavnik, predmet, studijski_program, tip_obaveze, datum_vreme, broj_prijavljenih) VALUES
('nikola.p','Matematika 1','SRT','Kolokvijum','2025-01-15 10:00:00',30),
('nikola.p','Elektrotehnika','KOT','Kolokvijum','2025-01-20 14:00:00',25),
('nikola.p','Elektrotehnika','KOT','Kolokvijum','2025-01-20 15:00:00',25),
('maja.j','TK Sistemi','MKT','Usmeni deo ispita','2025-01-18 09:00:00',20),
('maja.j','AI Sistemi','ITS','Pismeni deo ispita','2025-01-22 11:00:00',35),
('marko.s','Programiranje','SRT','Kolokvijum','2025-01-16 12:00:00',40),
('marko.s','Baze podataka','ITS','Kolokvijum','2025-01-19 13:00:00',28),
('ana.t','Računarske mreže','SRT','Kolokvijum','2025-01-25 09:00:00',20),
('ana.t','Napredni OS','KOT','Odbrana lab vežbi','2025-01-27 11:00:00',22),
('jelena.k','Programski Alati','ITS','Kolokvijum','2025-01-29 10:00:00',18),
('jelena.k','Algoritmi','SRT','Odbrana lab vežbi','2025-02-01 15:00:00',25);
/*!40000 ALTER TABLE `Aktivnost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Nastavnik`
--

DROP TABLE IF EXISTS `Nastavnik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nastavnik` (
  `korisnicko` varchar(50) DEFAULT NULL,
  `lozinka` varchar(255) DEFAULT NULL,
  `puno_ime` varchar(100) DEFAULT NULL,
  `dat_rodj` varchar(100) DEFAULT NULL,
  `titula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Nastavnik`
--

LOCK TABLES `Nastavnik` WRITE;
/*!40000 ALTER TABLE `Nastavnik` DISABLE KEYS */;
INSERT INTO `Nastavnik` VALUES
('nikola.p','$2y$10$hBbWEudbkLroc.YdTs5r0u4wmGCvmagToAdpyWmABtBmWVyMOaXaC','Nikola Petrović','1995-05-12','Asistent'),
('maja.j','$2y$10$JDlIrqwawsLqBDbvGqIWg.6p9MLoVJkvyDsPBmXHsa.mxEN.gknmu','Maja Jovanović','1980-08-25','Profesor'),
('marko.s','$2y$10$25TWJdobfuU66jFJlO.QueWsYPEmPKqVekuqWzn6oap/8eMpP0z1e','Marko Stojković','1975-11-05','Profesor'),
('ana.t','$2y$10$zjAObbn6cTDcwh9PogyT9eYoJkCsn8lW2zbRLRZbS/SkQZ020kAq2','Ana Tomić','1998-02-17','Saradnik u nastavi'),
('jelena.k','$2y$10$QTvxA1koLLsnF3KY3RL4X.dYuRrqNhRORbCa5X2QJKqWhzT4aQG.e','Jelena Krstić','1992-03-10','Asistent');
/*!40000 ALTER TABLE `Nastavnik` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-01-08 16:58:33
