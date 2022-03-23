-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 17-Out-2013 às 17:26
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
-- Estrutura da tabela `agregado_familiar`
--

CREATE TABLE IF NOT EXISTS `agregado_familiar` (
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
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `salariomes` double DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
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
-- Estrutura da tabela `efectividade`
--

CREATE TABLE IF NOT EXISTS `efectividade` (
  `idefectividade` int(11) NOT NULL AUTO_INCREMENT,
  `datacriado` varchar(45) DEFAULT NULL,
  `diastrabalho` int(11) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idefectividade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE IF NOT EXISTS `funcao` (
  `idfuncao` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriado` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
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
-- Estrutura da tabela `funcionario_funcao`
--

CREATE TABLE IF NOT EXISTS `funcionario_funcao` (
  `idfuncionario` int(11) NOT NULL,
  `idfuncao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idfuncao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_seccao`
--

CREATE TABLE IF NOT EXISTS `funcionario_seccao` (
  `idfuncionario` int(11) NOT NULL,
  `idseccao` int(11) NOT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfuncionario`,`idseccao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estrutura da tabela `ponto`
--

CREATE TABLE IF NOT EXISTS `ponto` (
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
-- Estrutura da tabela `processamento`
--

CREATE TABLE IF NOT EXISTS `processamento` (
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
-- Estrutura da tabela `seccao`
--

CREATE TABLE IF NOT EXISTS `seccao` (
  `idseccao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` date DEFAULT NULL,
  `iddepartamento` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idseccao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transferencia`
--

CREATE TABLE IF NOT EXISTS `transferencia` (
  `idtransferencia` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `datacriacao` varchar(45) DEFAULT NULL,
  `idfuncionario` int(11) DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtransferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE IF NOT EXISTS `utilizador` (
  `idutilizador` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `stuto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idutilizador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`idutilizador`, `username`, `password`, `stuto`) VALUES
(1, 'fe', 'cebdd715d4ecaafee8f147c2e85e0754', 'ACTIVO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
