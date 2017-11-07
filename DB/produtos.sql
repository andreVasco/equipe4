-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2017 às 09:03
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
('Teste', 'teste, carro 1\r\n', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/imagem4.object-Single-MEDIA.tmp/04_GClass.jpg', '1800000.00', 'luxo', 13),
('Teste', 'teste', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/imagem4.object-Single-MEDIA.tmp/04_GClass.jpg', '1800000.00', 'luxo', 14),
('Teste5', 'teste', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/A-Class-180.object-Single-MEDIA.tmp/1000x370_destaque_home_classe_a.jpg', '1800000.00', 'luxo', 15),
('Carro ', 'carro', 'http://www2.mercedes-benz.com.br/content/media_library/brasil/mpc_brasil/brazil_models/home_carrossel/bmb-c180-flex.object-Single-MEDIA.tmp/GLA-Banner-Home1000x370.jpg', '130000.00', 'luxo', 16),
('Teste100', 'Testando', 'https://www.mercedes-benz.com.br/resources/media/banners/20160727_088ec838454c4a3c86ccd5222fbc0c4c_capaautos-1.png', '150000.00', 'esportivo', 17);

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
  MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
