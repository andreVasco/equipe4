-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2017 às 08:42
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhesproduto`
--

CREATE TABLE `detalhesproduto` (
  `id` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `endereco` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `capa` varchar(500) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `albumid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `descricao`, `capa`, `preco`, `categoria`, `albumid`) VALUES
('Teste', 'teste, carro 1\r\n', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/imagem4.object-Single-MEDIA.tmp/04_GClass.jpg', '1800000.00', 'luxo', 13),
('Teste', 'teste', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/imagem4.object-Single-MEDIA.tmp/04_GClass.jpg', '1800000.00', 'luxo', 14),
('Teste5', 'teste', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/A-Class-180.object-Single-MEDIA.tmp/1000x370_destaque_home_classe_a.jpg', '1800000.00', 'luxo', 15),
('Carro ', 'carro', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/bmb-c180-flex.object-Single-MEDIA.tmp/GLA-Banner-Home1000x370.jpg', '130000.00', 'luxo', 16),
('Teste100', 'Testando', 'https://www.mercedes-benz.com.br/resources/media/banners/20160727_088ec838454c4a3c86ccd5222fbc0c4c_capaautos-1.png', '150000.00', 'esportivo', 17);

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
('Adm', 'adm123', 'oreman-motors@gmail.com', 1),
('fernanda', '698dc19d489c4e4db73e28a713eab07b', 'fernandananda95@yahoo.com.br', 12),
('teste2', '698dc19d489c4e4db73e28a713eab07b', 'oreman-motors@gmail.com', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detalhesproduto`
--
ALTER TABLE `detalhesproduto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albumid` (`albumid`);

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
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `detalhesproduto`
--
ALTER TABLE `detalhesproduto`
  ADD CONSTRAINT `detalhesproduto_ibfk_1` FOREIGN KEY (`albumid`) REFERENCES `produtos` (`albumid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
