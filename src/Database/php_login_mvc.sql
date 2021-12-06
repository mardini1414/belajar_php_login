-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php_login_mvc
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (21,'Toge Ganteng','toge123','$2y$10$waWEQL809i2/FAtkF5BPHe3iFRrX1lgzxOGnEyp15YbYU8ssnNtJO'),(22,'Yanto','yanto123','$2y$10$ZoD4FdaK3GJGDLcX9RAb9.zi4YOXs8yQusPKnWJxfQdgwWj8aOoKm'),(23,'Ilma Selviana','ilma123','$2y$10$kGNyDvUxMBsPX/4eThc7lOWiEl880V/oViyO82v7krpGlrx7Nrc5K'),(24,'Mardini','mardini1414','$2y$10$LUw9a8opc2rMwn49CeukD.iGzNu3oBUNARq3gf2rZS3V2vyvmmQCC'),(27,'kompronk','kompronk14','$2y$10$lxzbi93kHBYliBR0MROmV.gbx7kbVVVcsrVLX3tr/J2yncUQ6ouf6'),(28,'Mariam','mariam123','$2y$10$CInfWYN6TRH7ZSShtwIJkeRnXiOO283ExTKqV.8IysYUlD8NmsBeC'),(35,'My Todo List','todolist123','$2y$10$a2WPKyNY2n6sKUnXs38NWupLlAzrluQPK4s.YoOWilLLJ6QIxU7bC'),(37,'Jubur','jubur123','$2y$10$NOPZjYMdWeiJUUfMOmIQ4OQ82lDRgTnXVm4K3Wg28XRBWgu2cmlji');
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

-- Dump completed on 2021-12-06 19:16:44
