-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Nov-2017 às 20:42
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
(13, 53, 'det3.jpg'),
(14, 53, 'det3.2.jpg'),
(15, 53, 'det3.1.jpg'),
(16, 56, 'det5.1.jpg'),
(17, 56, 'det5.2.jpg'),
(18, 57, 'det7.1.jpg'),
(19, 57, 'det7.3.jpg'),
(20, 57, 'det7.jpg');

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
('Teste 1', 'Maecenas ipsum velit, consectetuer eu, lobortis ut, dictum at, dui. In rutrum. Sed ac dolor sit amet purus malesuada congue. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Suspendisse sagittis ultrices augue. Mauris metus.', '10000000.00', 'luxo', 'teste1.jpg', 52),
('Teste 2', 'Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien. Fusce tellus odio, dapibus id, fermentum quis, suscipit id, erat. Fusce aliquam vestibulum ipsum. Aliquam erat volutpat. Pellentesque sapien. Cras elementum. Nulla', '99999999.99', 'Esportivo', 'teste3.jpg', 53),
('Teste 3', 'Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede. Nulla accumsan,', '99999999.99', 'Luxo', 'teste2.jpg', 54),
('Teste 4', 'Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi.', '99999999.99', 'Novos', 'teste4.jpg', 55),
('Teste 5', 'Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat. Maecenas', '99999999.99', 'luxo', 'teste5.jpg', 56),
('Teste 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aliquam erat volutpat. Nunc auctor. Mauris pretium quam et urna. Fusce nibh. Duis risus.', '99999999.99', 'Esportivo', 'teste6.jpg', 57);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
