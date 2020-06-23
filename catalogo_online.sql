-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2020 às 21:18
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogo_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(30) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cidade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `login`, `senha`, `idade`, `email`, `rua`, `numero`, `estado`, `sexo`, `cidade`) VALUES
('Maria carmela', 'mari', '123', '2002-01-29', 'maria@com', 'Centro', '45', 'SP', 'Feminino', 'Cruzeiro'),
('Usuario Root', 'admin', 'admin', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
