-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2017 às 03:51
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oreman`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(20) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `telefone`, `mensagem`) VALUES
('Teste', 'fernandinhasilvaa7@gmail.com', 99427575, 'TESTE'),
('Teste', 'fernandinhasilvaa7@gmail.com', 99427575, 'TESTE'),
('FERNANDA', 'fernandananda95@yahoo.com.br', 99427575, 'TESTE'),
('FERNANDA', 'fernandananda95@yahoo.com.br', 99427575, 'TESTE'),
('Fernanda', 'dev4@codejr.com.br', 327273733, 'Boa noite'),
('Teste', 'dev4@codejr.com.br', 99427575, 'teste'),
('FERNANDA', 'dev4@codejr.com.br', 99427575, 'teste'),
('FERNANDA', 'dev4@codejr.com.br', 99427575, 'teste'),
('FERNANDA', 'fernandananda95@yahoo.com.br', 99427575, 'teste'),
('Teste', 'dev4@codejr.com.br', 99427575, 'teste');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
