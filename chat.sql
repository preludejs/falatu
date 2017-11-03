-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2017 às 16:51
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--
CREATE DATABASE IF NOT EXISTS `chat` DEFAULT CHARACTER SET ascii COLLATE ascii_general_ci;
USE `chat`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `id_de` varchar(200) NOT NULL,
  `id_para` varchar(200) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `id_de`, `id_para`, `mensagem`) VALUES
(1, 'josue', 'annna', 'oi'),
(2, 'josue', 'annna', 'oi'),
(3, 'annna', 'josue', 'fala tu!'),
(4, 'josue', 'annna', 'tu'),
(5, 'josue', 'annna', 'ias'),
(6, 'josue', 'annna', 'asd'),
(7, 'josue', 'annna', 'paso'),
(8, 'annna', 'josue', 'ja'),
(9, 'annna', 'josue', 'ja'),
(10, 'annna', 'josue', 'las'),
(11, 'josue', 'annna', 'oi'),
(12, 'josue', 'annna', 'oi'),
(13, 'annna', 'josue', 'oi'),
(14, 'josue', 'josue', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `user`, `senha`, `foto`, `status`) VALUES
(1, 'Josue Santos', 'josue', '1234', 'img/nophoto_m.gif', 'fala tu'),
(2, 'Anna sei quem e', 'annna', '321', 'img/nophoto_f.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
