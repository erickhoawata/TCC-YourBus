-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2022 às 13:35
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_yourbus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_onibus`
--

CREATE TABLE `tb_onibus` (
  `Placa` varchar(7) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Capacidade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_onibus`
--

INSERT INTO `tb_onibus` (`Placa`, `Modelo`, `Marca`, `Capacidade`) VALUES
('abs2114', 'OF-1721 BlueTec 5', 'Mercedes Bens', '100'),
('absc211', 'OF-1721 BlueTec 5', 'Mercedes Bens', '100');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_onibus`
--
ALTER TABLE `tb_onibus`
  ADD PRIMARY KEY (`Placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
