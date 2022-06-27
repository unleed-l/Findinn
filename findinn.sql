-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: findinn
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acomodacao`
--

DROP TABLE IF EXISTS `acomodacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acomodacao` (
  `id_acomodacao` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_cidade` int NOT NULL,
  `cep` varchar(8) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(3) NOT NULL,
  `complemento` varchar(90) DEFAULT NULL,
  `valor_diaria` decimal(10,0) NOT NULL,
  `imagem_principal` varchar(255) NOT NULL,
  `imagem_secundaria` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `capacidade` varchar(45) NOT NULL,
  `id_tipo_acomodacao` int NOT NULL,
  `id_adicional_acomodacao` int NOT NULL,
  PRIMARY KEY (`id_acomodacao`),
  KEY `fk_acomodacao_usuario` (`id_usuario`),
  KEY `fk_acomodacao_cidade1` (`id_cidade`),
  KEY `fk_acomodacao_tipo_acomodacao1` (`id_tipo_acomodacao`),
  KEY `fk_acomodacao_adicional_acomodacao1` (`id_adicional_acomodacao`),
  CONSTRAINT `fk_acomodacao_adicional_acomodacao1` FOREIGN KEY (`id_adicional_acomodacao`) REFERENCES `adicional_acomodacao` (`id_adicional_acomodacao`),
  CONSTRAINT `fk_acomodacao_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id_cidade`),
  CONSTRAINT `fk_acomodacao_tipo_acomodacao1` FOREIGN KEY (`id_tipo_acomodacao`) REFERENCES `tipo_acomodacao` (`id_tipo_acomodacao`),
  CONSTRAINT `fk_acomodacao_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acomodacao`
--

LOCK TABLES `acomodacao` WRITE;
/*!40000 ALTER TABLE `acomodacao` DISABLE KEYS */;
INSERT INTO `acomodacao` VALUES (1,1,1,'123','1','12','1',500,'https://viajento.files.wordpress.com/2020/01/museu-nautico-da-bahia-salvador-brasil-forte-de-santo-antonio-da-barra.jpg',NULL,'sla','5',1,1);
/*!40000 ALTER TABLE `acomodacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adicional_acomodacao`
--

DROP TABLE IF EXISTS `adicional_acomodacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adicional_acomodacao` (
  `id_adicional_acomodacao` int NOT NULL AUTO_INCREMENT,
  `cozinha` int NOT NULL,
  `jacuzzi` int NOT NULL,
  `refrigerador` int NOT NULL,
  `wifi` int NOT NULL,
  `ar` int NOT NULL,
  `alarme` int NOT NULL,
  `detector` int NOT NULL,
  PRIMARY KEY (`id_adicional_acomodacao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adicional_acomodacao`
--

LOCK TABLES `adicional_acomodacao` WRITE;
/*!40000 ALTER TABLE `adicional_acomodacao` DISABLE KEYS */;
INSERT INTO `adicional_acomodacao` VALUES (1,1,0,0,0,1,0,0);
/*!40000 ALTER TABLE `adicional_acomodacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anuncio`
--

DROP TABLE IF EXISTS `anuncio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anuncio` (
  `id_anuncio` int NOT NULL AUTO_INCREMENT,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `anunciocol` varchar(45) DEFAULT NULL,
  `id_acomodacao` int NOT NULL,
  PRIMARY KEY (`id_anuncio`),
  KEY `fk_anuncio_acomodacao1` (`id_acomodacao`),
  CONSTRAINT `fk_anuncio_acomodacao1` FOREIGN KEY (`id_acomodacao`) REFERENCES `acomodacao` (`id_acomodacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncio`
--

LOCK TABLES `anuncio` WRITE;
/*!40000 ALTER TABLE `anuncio` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cartao`
--

DROP TABLE IF EXISTS `cartao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cartao` (
  `id_cartao` int NOT NULL AUTO_INCREMENT,
  `titular` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `vencimento` date NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id_cartao`),
  KEY `fk_cartao_usuario1` (`id_usuario`),
  CONSTRAINT `fk_cartao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cartao`
--

LOCK TABLES `cartao` WRITE;
/*!40000 ALTER TABLE `cartao` DISABLE KEYS */;
INSERT INTO `cartao` VALUES (1,'uendel','123','2022-06-27','123',1);
/*!40000 ALTER TABLE `cartao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidade` (
  `id_cidade` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `estado_id_estado` int NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `fk_cidade_estado1` (`estado_id_estado`),
  CONSTRAINT `fk_cidade_estado1` FOREIGN KEY (`estado_id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` VALUES (1,'Salvador',1);
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `id_estado` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `id_pais` int NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `fk_estado_pais1` (`id_pais`),
  CONSTRAINT `fk_estado_pais1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Bahia',1);
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locacao`
--

DROP TABLE IF EXISTS `locacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locacao` (
  `id_locacao` int NOT NULL,
  `data_inicio` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `check_in` tinyint DEFAULT NULL,
  `multa` decimal(10,0) DEFAULT NULL,
  `id_acomodacao` int NOT NULL,
  `id_usuario` int NOT NULL,
  `cartao_id_cartao` int NOT NULL,
  PRIMARY KEY (`id_locacao`),
  KEY `fk_locacao_acomodacao1` (`id_acomodacao`),
  KEY `fk_locacao_usuario1` (`id_usuario`),
  KEY `fk_locacao_cartao1` (`cartao_id_cartao`),
  CONSTRAINT `fk_locacao_acomodacao1` FOREIGN KEY (`id_acomodacao`) REFERENCES `acomodacao` (`id_acomodacao`),
  CONSTRAINT `fk_locacao_cartao1` FOREIGN KEY (`cartao_id_cartao`) REFERENCES `cartao` (`id_cartao`),
  CONSTRAINT `fk_locacao_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locacao`
--

LOCK TABLES `locacao` WRITE;
/*!40000 ALTER TABLE `locacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `locacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pais` (
  `id_pais` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Brasil');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_acomodacao`
--

DROP TABLE IF EXISTS `tipo_acomodacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_acomodacao` (
  `id_tipo_acomodacao` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_acomodacao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_acomodacao`
--

LOCK TABLES `tipo_acomodacao` WRITE;
/*!40000 ALTER TABLE `tipo_acomodacao` DISABLE KEYS */;
INSERT INTO `tipo_acomodacao` VALUES (1,'Casa');
/*!40000 ALTER TABLE `tipo_acomodacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `locatario` tinyint DEFAULT NULL,
  `anfitriao` tinyint DEFAULT NULL,
  `id_pais` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_pais1` (`id_pais`),
  CONSTRAINT `fk_usuario_pais1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'uendel','88888','uendel@gmail.com','2400hiper','88888',0,0,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-27 12:02:46
