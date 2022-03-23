CREATE DATABASE  IF NOT EXISTS `gsp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gsp`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: gsp
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `salariomes` double DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'hjjjjj',55555,1),(2,'TÃ©cnico MÃ©dio de 3Â° Classe',49,1),(3,'TÃ©cnico Superior',23,1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcao`
--

DROP TABLE IF EXISTS `funcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcao` (
  `idfuncao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcao`
--

LOCK TABLES `funcao` WRITE;
/*!40000 ALTER TABLE `funcao` DISABLE KEYS */;
INSERT INTO `funcao` VALUES (1,'jhhhjhhjh','2013-10-28',1),(2,'MÃ©dico','2013-12-16',1),(3,'Escrivao','2013-12-16',1);
/*!40000 ALTER TABLE `funcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponto`
--

DROP TABLE IF EXISTS `ponto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponto` (
  `idponto` int(11) NOT NULL,
  `falta` varchar(45) DEFAULT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idponto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponto`
--

LOCK TABLES `ponto` WRITE;
/*!40000 ALTER TABLE `ponto` DISABLE KEYS */;
/*!40000 ALTER TABLE `ponto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'asdasdasdsadas','wwerewr','2013-10-28',1),(2,'Planeamento','pla','2013-12-16',1),(3,'EstatÃ­sticas','est','2013-12-16',4);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccao`
--

DROP TABLE IF EXISTS `seccao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccao` (
  `idseccao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idseccao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccao`
--

LOCK TABLES `seccao` WRITE;
/*!40000 ALTER TABLE `seccao` DISABLE KEYS */;
INSERT INTO `seccao` VALUES (3,'sadasdasdas','2013-10-28',1,1),(4,'ImpressÃ£o','2013-12-16',2,4);
/*!40000 ALTER TABLE `seccao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `nomepai` varchar(45) DEFAULT NULL,
  `nomemae` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `datanascimento` varchar(45) DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL,
  `banco` varchar(45) DEFAULT NULL,
  `conta` varchar(45) DEFAULT NULL,
  `iban` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'fernando joao','pooppopo','oiiooiio','Masculino','Huila','09/09/1989','Solteiro',3,3,1,'923834744','Viana','fe@fe.com',NULL,'000209081LA098',NULL,'334444','4444444444442'),(2,'cris jose','hdgfhg','shghgdsgdhg','Masculino','Luanda','09/09/1989','Solteiro',3,2,1,'923947620','hgshdgg','ggadf@hgzhxzg.com',NULL,'000107031LA031','yasya','98980','00909099'),(3,'Edson Patricio','Tomas','Tabita','Masculino','Luanda','20/09/1989','Casado',3,3,1,'923947620','Golf 1','estatistica@gmail.com',NULL,'000107030LA030','BFA','9898009199','9899876762565'),(6,'Laila Liole','Liole','Liola','Feminino','Benguela','09/09/1989','Casado',3,1,1,'923947620','Golf 1','estatistica@gmail.com','9a8f09271c37b0e7b651dd13602edcb1.jpg','000107030LA030','BFA','76324763','9899876762565');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilizador` (
  `idutilizador` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `stuto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idutilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizador`
--

LOCK TABLES `utilizador` WRITE;
/*!40000 ALTER TABLE `utilizador` DISABLE KEYS */;
INSERT INTO `utilizador` VALUES (1,'fe','cebdd715d4ecaafee8f147c2e85e0754','Activo'),(4,'edson','cd4fbce046c46f107e45ae0ddd0db7d3','Activo'),(5,'cris','e10adc3949ba59abbe56e057f20f883e','Desactivo'),(6,'nosde','72bdd35aae7e5ebb1f61d086e4df8e30','Activo');
/*!40000 ALTER TABLE `utilizador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agregado_familiar`
--

DROP TABLE IF EXISTS `agregado_familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agregado_familiar` (
  `idagregado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `tipoparentesco` varchar(45) DEFAULT NULL,
  `datanascimento` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idagregado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agregado_familiar`
--

LOCK TABLES `agregado_familiar` WRITE;
/*!40000 ALTER TABLE `agregado_familiar` DISABLE KEYS */;
/*!40000 ALTER TABLE `agregado_familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapa_funcionario`
--

DROP TABLE IF EXISTS `mapa_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapa_funcionario` (
  `idmapafuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `datainicio` varchar(45) DEFAULT NULL,
  `datafim` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `obs` varchar(45) DEFAULT NULL,
  `idmapaferias` int(11) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmapafuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapa_funcionario`
--

LOCK TABLES `mapa_funcionario` WRITE;
/*!40000 ALTER TABLE `mapa_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `mapa_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transferencia`
--

DROP TABLE IF EXISTS `transferencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transferencia` (
  `idtransferencia` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtransferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transferencia`
--

LOCK TABLES `transferencia` WRITE;
/*!40000 ALTER TABLE `transferencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `transferencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario_funcao`
--

DROP TABLE IF EXISTS `funcionario_funcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario_funcao` (
  `idfuncionario` int(11) NOT NULL,
  `idfuncao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario_funcao`
--

LOCK TABLES `funcionario_funcao` WRITE;
/*!40000 ALTER TABLE `funcionario_funcao` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario_funcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `efectividade`
--

DROP TABLE IF EXISTS `efectividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `efectividade` (
  `idefectividade` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(45) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `ficheiro` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idefectividade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `efectividade`
--

LOCK TABLES `efectividade` WRITE;
/*!40000 ALTER TABLE `efectividade` DISABLE KEYS */;
INSERT INTO `efectividade` VALUES (1,'Janeiro',2014,'230339_20140111_Faltas.xls','2014-01-11',1),(2,'Outubro',2013,'144556_20140112_Faltas.xls','2014-01-12',1),(3,'Dezembro',2013,'151951_20140117_Faltas.xls','2014-01-17',1);
/*!40000 ALTER TABLE `efectividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapa_ferias`
--

DROP TABLE IF EXISTS `mapa_ferias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapa_ferias` (
  `idmapaferias` int(11) NOT NULL AUTO_INCREMENT,
  `ano` int(11) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmapaferias`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapa_ferias`
--

LOCK TABLES `mapa_ferias` WRITE;
/*!40000 ALTER TABLE `mapa_ferias` DISABLE KEYS */;
INSERT INTO `mapa_ferias` VALUES (1,2014,'2014-01-10',1),(2,2015,'2014-01-10',1),(3,2016,'2014-01-10',1);
/*!40000 ALTER TABLE `mapa_ferias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacao` (
  `idnotificacao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnotificacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacao`
--

LOCK TABLES `notificacao` WRITE;
/*!40000 ALTER TABLE `notificacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario_seccao`
--

DROP TABLE IF EXISTS `funcionario_seccao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario_seccao` (
  `idfuncionario` int(11) NOT NULL,
  `idseccao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idseccao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario_seccao`
--

LOCK TABLES `funcionario_seccao` WRITE;
/*!40000 ALTER TABLE `funcionario_seccao` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario_seccao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processamento`
--

DROP TABLE IF EXISTS `processamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processamento` (
  `idprocessamento` int(11) NOT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprocessamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processamento`
--

LOCK TABLES `processamento` WRITE;
/*!40000 ALTER TABLE `processamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `processamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `efectividade_funcionario`
--

DROP TABLE IF EXISTS `efectividade_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `efectividade_funcionario` (
  `idefectividade` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `diastrabalho` int(11) DEFAULT NULL,
  `horastrabalho` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idefectividade`,`idfuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `efectividade_funcionario`
--

LOCK TABLES `efectividade_funcionario` WRITE;
/*!40000 ALTER TABLE `efectividade_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `efectividade_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `iddocumento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `caminho` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'Bilhete de Identidade','130630_20140110_project.txt','2014-01-10',6,1),(3,'Diploma','131655_20140110_SAC-Planfleto.jpg','2014-01-10',6,1);
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-17 16:40:30
