-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 14-Out-2013 às 18:05
-- Versão do servidor: 5.5.27
-- versão do PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `gsp`
--
CREATE DATABASE IF NOT EXISTS `gsp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gsp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

CREATE TABLE IF NOT EXISTS `notificacao` (
  `idnotificacao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnotificacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagregado_familiar`
--

CREATE TABLE IF NOT EXISTS `tbagregado_familiar` (
  `idagregado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `tipoparentesco` varchar(45) DEFAULT NULL,
  `datanascimento` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idagregado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE IF NOT EXISTS `tbcategoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `salariomes` double DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdepartamento`
--

CREATE TABLE IF NOT EXISTS `tbdepartamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdocumento`
--

CREATE TABLE IF NOT EXISTS `tbdocumento` (
  `iddocumento` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `caminho` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddocumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='		';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbefectividade`
--

CREATE TABLE IF NOT EXISTS `tbefectividade` (
  `idefectividade` int(11) NOT NULL AUTO_INCREMENT,
  `datacriado` varchar(45) DEFAULT NULL,
  `diastrabalho` int(11) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idefectividade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncao`
--

CREATE TABLE IF NOT EXISTS `tbfuncao` (
  `idfuncao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario`
--

CREATE TABLE IF NOT EXISTS `tbfuncionario` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario_funcao`
--

CREATE TABLE IF NOT EXISTS `tbfuncionario_funcao` (
  `idfuncionario` int(11) NOT NULL,
  `idfuncao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionario_seccao`
--

CREATE TABLE IF NOT EXISTS `tbfuncionario_seccao` (
  `idfuncionario` int(11) NOT NULL,
  `idseccao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idseccao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbponto`
--

CREATE TABLE IF NOT EXISTS `tbponto` (
  `idponto` int(11) NOT NULL,
  `falta` varchar(45) DEFAULT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idponto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprocessamento`
--

CREATE TABLE IF NOT EXISTS `tbprocessamento` (
  `idprocessamento` int(11) NOT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idprocessamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbseccao`
--

CREATE TABLE IF NOT EXISTS `tbseccao` (
  `idseccao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idseccao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtransferencia`
--

CREATE TABLE IF NOT EXISTS `tbtransferencia` (
  `idtransferencia` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtransferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbutilizador`
--

CREATE TABLE IF NOT EXISTS `tbutilizador` (
  `idutilizador` int(11) NOT NULL AUTO_INCREMENT,
  `nomeutilizador` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idutilizador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
