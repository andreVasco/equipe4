-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2017 às 19:58
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(30) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `enderecoImagem` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `categoria`, `descricao`, `preco`, `enderecoImagem`, `id`) VALUES
('Audi 1', NULL, NULL, NULL, 'https://www.oportunidadeaudi.com.br/images/destaques/Q3_549x330.jpg', 5),
('Audi 2', NULL, NULL, NULL, 'https://www.oportunidadeaudi.com.br/images/destaques/Q7_549x330.jpg', 6),
('Audi 3', NULL, NULL, NULL, 'https://www.oportunidadeaudi.com.br/images/destaques/A3sportback_549x330.jpg', 7),
('Audi 4', NULL, NULL, NULL, 'https://www.oportunidadeaudi.com.br/images/destaques/A4_549x330.jpg', 8),
('Audi 5', NULL, NULL, NULL, 'https://www.oportunidadeaudi.com.br/images/destaques/A3_549x330.jpg', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
