-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 01:18
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medic`
--
CREATE DATABASE IF NOT EXISTS `medic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `medic`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadministracao`
--

CREATE TABLE `tbadministracao` (
  `id` int(11) NOT NULL,
  `nomePaciente` varchar(100) NOT NULL,
  `nomeMedicamento` varchar(100) NOT NULL,
  `dataAdmin` datetime NOT NULL,
  `dose` varchar(100) NOT NULL,
  `dataRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadministracao`
--

INSERT INTO `tbadministracao` (`id`, `nomePaciente`, `nomeMedicamento`, `dataAdmin`, `dose`, `dataRegistro`) VALUES
(1, 'pedro', 'omeprazol', '2032-12-31 00:00:00', '20 litros por dia', '2024-12-03 21:17:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbenfermeiro`
--

CREATE TABLE `tbenfermeiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `COREN` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbenfermeiro`
--

INSERT INTO `tbenfermeiro` (`id`, `nome`, `COREN`, `usuario`, `senha`) VALUES
(1, 'cleber', '0202', 'clebindasilva02', 'bomdia12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmedico`
--

CREATE TABLE `tbmedico` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `especialidade` varchar(25) NOT NULL,
  `CRM` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmedico`
--

INSERT INTO `tbmedico` (`id`, `nome`, `especialidade`, `CRM`, `usuario`, `senha`) VALUES
(1, 'Dr Alaor', 'Pediatra', '29292', 'alaor123', '12345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpaciente`
--

CREATE TABLE `tbpaciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `leito` varchar(25) NOT NULL,
  `dataNascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpaciente`
--

INSERT INTO `tbpaciente` (`id`, `nome`, `leito`, `dataNascimento`) VALUES
(1, 'joao', '22', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbreceita`
--

CREATE TABLE `tbreceita` (
  `id` int(11) NOT NULL,
  `nomePaciente` varchar(100) NOT NULL,
  `nomeMedicamento` varchar(60) NOT NULL,
  `dataAdmin` datetime NOT NULL,
  `dose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbreceita`
--

INSERT INTO `tbreceita` (`id`, `nomePaciente`, `nomeMedicamento`, `dataAdmin`, `dose`) VALUES
(1, 'pedro', 'omeprazol', '2032-12-31 00:00:00', '20 litros por dia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadministracao`
--
ALTER TABLE `tbadministracao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbenfermeiro`
--
ALTER TABLE `tbenfermeiro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbreceita`
--
ALTER TABLE `tbreceita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadministracao`
--
ALTER TABLE `tbadministracao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbenfermeiro`
--
ALTER TABLE `tbenfermeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbreceita`
--
ALTER TABLE `tbreceita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
