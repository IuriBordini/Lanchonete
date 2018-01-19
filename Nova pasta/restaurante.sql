-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2018 às 23:47
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hamburgue`
--

CREATE TABLE `hamburgue` (
  `id` int(11) NOT NULL,
  `sabor` varchar(100) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `preco` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `sabor` varchar(100) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `preco` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`id`, `sabor`, `tamanho`, `preco`) VALUES
(1, 'calabresa', '30cm', '30.00'),
(2, 'calabresa', '35cm', '34.00'),
(3, 'calabresa', '40cm', '37.00'),
(4, 'frango com catupiry', '30cm', '31.00'),
(5, 'frango com catupiry', '35cm', '34.00'),
(6, 'frango com catupiry', '40cm', '39.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcombo`
--

CREATE TABLE `tbcombo` (
  `id` int(11) NOT NULL,
  `combo` varchar(100) NOT NULL,
  `preco` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrefrigerante`
--

CREATE TABLE `tbrefrigerante` (
  `id` int(11) NOT NULL,
  `sabor` varchar(100) NOT NULL,
  `preco` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hamburgue`
--
ALTER TABLE `hamburgue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcombo`
--
ALTER TABLE `tbcombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbrefrigerante`
--
ALTER TABLE `tbrefrigerante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hamburgue`
--
ALTER TABLE `hamburgue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbcombo`
--
ALTER TABLE `tbcombo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbrefrigerante`
--
ALTER TABLE `tbrefrigerante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
