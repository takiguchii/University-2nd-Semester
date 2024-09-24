-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: localhost    Database: BIBLIOTECA
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.24.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `AUTORES`
--

DROP TABLE IF EXISTS `AUTORES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `AUTORES` (
  `autor_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `nascionalidade` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`autor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AUTORES`
--

LOCK TABLES `AUTORES` WRITE;
/*!40000 ALTER TABLE `AUTORES` DISABLE KEYS */;
INSERT INTO `AUTORES` VALUES (1,'J.K ROWLING','BRITANICA'),(2,'GEORGE ORWELL','BRITANICO'),(3,'GABRIEL GARCIA MARQUEZ','COLOMBIANO'),(4,'J.K ROWLING','BRITANICA'),(5,'GEORGE ORWELL','BRITANICO'),(6,'GABRIEL GARCIA MARQUEZ','COLOMBIANO'),(7,'J.K ROWLING','BRITANICA'),(8,'GEORGE ORWELL','BRITANICO'),(9,'GABRIEL GARCIA MARQUEZ','COLOMBIANO'),(10,'J.K ROWLING','BRITANICA'),(11,'GEORGE ORWELL','BRITANICO'),(12,'GABRIEL GARCIA MARQUEZ','COLOMBIANO');
/*!40000 ALTER TABLE `AUTORES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LIVROS`
--

DROP TABLE IF EXISTS `LIVROS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LIVROS` (
  `livro_id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `ano_publicacao` int DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `autor_id` int DEFAULT NULL,
  PRIMARY KEY (`livro_id`),
  KEY `autor_id` (`autor_id`),
  CONSTRAINT `LIVROS_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `AUTORES` (`autor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LIVROS`
--

LOCK TABLES `LIVROS` WRITE;
/*!40000 ALTER TABLE `LIVROS` DISABLE KEYS */;
INSERT INTO `LIVROS` VALUES (1,'HARRY POTTER E A PEDRA FILOSOFAL',1997,'FANTASIA',1),(2,'1984',1949,'DISTOPIA',2),(3,'100 ANOS DE SOLIDÃO',1967,'REALISMO MAGICO',3),(4,'HARRY POTTER E A PEDRA FILOSOFAL',1997,'FANTASIA',1),(5,'1984',1949,'DISTOPIA',2),(6,'100 ANOS DE SOLIDÃO',1967,'REALISMO MAGICO',3),(7,'HARRY POTTER E A PEDRA FILOSOFAL',1997,'FANTASIA',1),(8,'1984',1949,'DISTOPIA',2),(9,'100 ANOS DE SOLIDÃO',1967,'REALISMO MAGICO',3),(10,'HARRY POTTER E A PEDRA FILOSOFAL',1997,'FANTASIA',1),(11,'1984',1949,'DISTOPIA',2),(12,'100 ANOS DE SOLIDÃO',1967,'REALISMO MAGICO',3);
/*!40000 ALTER TABLE `LIVROS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIOS`
--

DROP TABLE IF EXISTS `USUARIOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `USUARIOS` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data_inscricao` date DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIOS`
--

LOCK TABLES `USUARIOS` WRITE;
/*!40000 ALTER TABLE `USUARIOS` DISABLE KEYS */;
INSERT INTO `USUARIOS` VALUES (1,'JOAO SILVA ','JOAO@GMAIL.COM','111111','2024-09-17'),(2,'MARIA OLIVEIRA','MARIA@GMAIL.COM','987654321','2024-09-16');
/*!40000 ALTER TABLE `USUARIOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emprestimo`
--

DROP TABLE IF EXISTS `emprestimo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emprestimo` (
  `emprestimo_id` int NOT NULL AUTO_INCREMENT,
  `livro_id` int DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL,
  PRIMARY KEY (`emprestimo_id`),
  KEY `livro_id` (`livro_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`livro_id`) REFERENCES `LIVROS` (`livro_id`),
  CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `USUARIOS` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emprestimo`
--

LOCK TABLES `emprestimo` WRITE;
/*!40000 ALTER TABLE `emprestimo` DISABLE KEYS */;
/*!40000 ALTER TABLE `emprestimo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-23 19:45:30
