-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2017 às 13:58
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
('Teste', 'dev4@codejr.com.br', 99427575, 'teste'),
('teste', 'teste@gmail.com', 33333333, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhesproduto`
--

CREATE TABLE `detalhesproduto` (
  `id` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `endereco` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `detalhesproduto`
--

INSERT INTO `detalhesproduto` (`id`, `albumid`, `endereco`) VALUES
(2, 44, 'teste4.jpg'),
(3, 45, 'teste1.jpg'),
(4, 47, 'teste3.jpg'),
(5, 47, 'teste4.jpg'),
(6, 45, 'teste4.jpg'),
(7, 44, 'teste3.jpg'),
(8, 44, 'teste4.jpg'),
(9, 44, 'teste3.jpg'),
(10, 45, 'teste3.jpg'),
(11, 44, 'teste1.jpg'),
(12, 47, 'teste2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `capa` varchar(700) NOT NULL,
  `albumid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `descricao`, `preco`, `categoria`, `capa`, `albumid`) VALUES
('Titulo', 'DescriÃ§Ã£o', '99999999.99', 'luxo', 'teste1.jpg', 44),
('Teste novo', 'teste novo', '77777777.00', 'luxo', 'teste2.jpg', 45),
('teste 4', 'teste4', '99999999.99', 'luxo', 'teste4.jpg', 47),
('teste 4', 'teste 4', '99999999.99', 'esportivo', 'teste3.jpg', 48),
('teste5', 'teste 5', '665.99', 'luxo', 'teste2.jpg', 50),
('Teste', 'teste', '2323.00', 'etc', 'teste4.jpg', 51);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario`, `senha`, `email`, `id`) VALUES
('fernanda', '698dc19d489c4e4db73e28a713eab07b', 'fernandananda95@yahoo.com.br', 12),
('Adm', '80177534a0c99a7e3645b52f2027a48b', 'oreman-motors@gmail.com', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detalhesproduto`
--
ALTER TABLE `detalhesproduto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detalhesproduto`
--
ALTER TABLE `detalhesproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
