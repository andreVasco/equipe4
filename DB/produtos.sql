-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2017 às 05:11
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
('Mercedez', 'Olha este carro', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/welcome-screen.object-Single-MEDIA.tmp/1000x370_EMB-redux.jpg', '0.00', '', 1),
('Mercedez 2', 'carrão', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/A-Class-180.object-Single-MEDIA.tmp/1000x370_destaque_home_classe_a.jpg', '0.00', '', 2),
('Mercedez 3', 'esse carro é foda', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/imagem4.object-Single-MEDIA.tmp/04_GClass.jpg', '0.00', '', 3),
('Carro ', 'skjdhsak', 'https://abrilexame.files.wordpress.com/2016/09/size_960_16_9_bugatti_veyron_grand_sport.jpg?quality=70&strip=info&w=920', '1000.00', 'teste', 4),
('teste', 'teste', 'http://www.elhombre.com.br/wp-content/uploads/2014/09/hyundai-genesis-el-hombre.jpg', '500000.00', 'esportivo', 5),
('teste', 'teste', 'http://www.elhombre.com.br/wp-content/uploads/2014/09/hyundai-genesis-el-hombre.jpg', '500000.00', 'esportivo', 6),
('Teste3', 'teste', 'https://blog.caranddriver.com/wp-content/uploads/2016/05/2017-Nissan-GT-R-NISMO-PLACEMENT-626x382.jpg', '300000.00', 'luxo', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`albumid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
