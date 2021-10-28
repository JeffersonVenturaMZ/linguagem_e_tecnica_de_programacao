-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2021 às 21:25
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ads20212`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcargos`
--

CREATE TABLE `tbcargos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcargos`
--

INSERT INTO `tbcargos` (`id`, `nome`) VALUES
(1, 'Adm'),
(2, 'Caixa'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `id_tbPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`id`, `usuario`, `senha`, `id_tbPessoa`) VALUES
(1, 'jefferson', '12345', 1),
(2, 'brenodm', '12345', 2),
(3, 'joaovp', '12345', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpessoa`
--

CREATE TABLE `tbpessoa` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `id_tbpessoa_tbcargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpessoa`
--

INSERT INTO `tbpessoa` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `pais`, `id_tbpessoa_tbcargo`) VALUES
(1, 'Jefferson', 'Ventura', 'jefferson', '12345', 'Brasil', 1),
(2, 'Breno', 'Madrilles', 'brenodm', '12345', 'Brasil', 2),
(3, 'JoÃ£o Vitor', 'Paiva', 'joaovp', '12345', 'Brasil', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcargos`
--
ALTER TABLE `tbcargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbLogin_FK` (`id_tbPessoa`);

--
-- Índices para tabela `tbpessoa`
--
ALTER TABLE `tbpessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcargos`
--
ALTER TABLE `tbcargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbpessoa`
--
ALTER TABLE `tbpessoa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD CONSTRAINT `tbLogin_FK` FOREIGN KEY (`id_tbPessoa`) REFERENCES `tbpessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
