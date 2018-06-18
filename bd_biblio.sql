-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Jun-2018 às 23:16
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_biblio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autor`
--

DROP TABLE IF EXISTS `tb_autor`;
CREATE TABLE IF NOT EXISTS `tb_autor` (
  `cd_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_autor` varchar(200) NOT NULL,
  `dt_nasc` datetime NOT NULL,
  PRIMARY KEY (`cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nm_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`cd_categoria`, `nm_categoria`) VALUES
(1, 'Romance'),
(2, 'Aventura'),
(3, 'Suspense'),
(4, 'Policial'),
(5, 'Priscila'),
(6, 'doctum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_editora`
--

DROP TABLE IF EXISTS `tb_editora`;
CREATE TABLE IF NOT EXISTS `tb_editora` (
  `cd_editora` int(11) NOT NULL AUTO_INCREMENT,
  `nm_editora` varchar(150) NOT NULL,
  PRIMARY KEY (`cd_editora`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_editora`
--

INSERT INTO `tb_editora` (`cd_editora`, `nm_editora`) VALUES
(14, 'Ok'),
(13, 'Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

DROP TABLE IF EXISTS `tb_livro`;
CREATE TABLE IF NOT EXISTS `tb_livro` (
  `cd_livro` int(11) NOT NULL AUTO_INCREMENT,
  `nm_livro` varchar(250) NOT NULL,
  `cd_categoria` int(11) NOT NULL,
  `cd_editora` int(11) NOT NULL,
  `nr_paginas` int(11) NOT NULL,
  `cd_autor` int(11) DEFAULT NULL,
  `nm_imagem` varchar(50) DEFAULT NULL,
  `isbn_livro` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_livro`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_livro`, `nm_livro`, `cd_categoria`, `cd_editora`, `nr_paginas`, `cd_autor`, `nm_imagem`, `isbn_livro`) VALUES
(1, 'Morte no Nilo', 1, 8, 112, NULL, NULL, '1234523412351'),
(2, 'Deitel', 1, 7, 10000, NULL, NULL, '112223334445566777');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(100) NOT NULL,
  `ds_usuario` varchar(250) NOT NULL,
  `ds_senha` varchar(250) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_usuario`, `ds_senha`, `dt_cadastro`) VALUES
(1, 'Vinicius Andrade Lopes', 'teste@teste.com', '123', '2018-04-26 12:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
