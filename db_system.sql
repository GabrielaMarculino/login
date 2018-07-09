-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 09/07/2018 às 05:04
-- Versão do servidor: 5.5.57-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `db_system`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_client`
--

CREATE TABLE IF NOT EXISTS `tb_client` (
  `cd_code` int(3) NOT NULL AUTO_INCREMENT,
  `nm_client` varchar(80) NOT NULL,
  `cd_cpf` varchar(11) NOT NULL,
  `nr_rg` varchar(15) NOT NULL,
  `nr_phone` varchar(13) DEFAULT NULL,
  `nm_email` varchar(80) NOT NULL,
  `cd_zip` int(8) NOT NULL,
  PRIMARY KEY (`cd_code`),
  UNIQUE KEY `cd_cpf` (`cd_cpf`),
  UNIQUE KEY `nm_email` (`nm_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `tb_client`
--

INSERT INTO `tb_client` (`cd_code`, `nm_client`, `cd_cpf`, `nr_rg`, `nr_phone`, `nm_email`, `cd_zip`) VALUES
(1, 'carlossssdadadada', '123456789', '9874563215', '35945825', 'ololo@ololoko', 11706390),
(2, 'goiaba branca', '32145698758', '74125896336', '35946874', 'kakaka@kakaka', 11740000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
