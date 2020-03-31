-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 31/03/2020 às 05:19
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pesquisaajax`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `valor` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `garagem` int(5) NOT NULL,
  `banheiro` int(5) NOT NULL,
  `quarto` int(5) NOT NULL,
  `fotodir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `cidade`, `estado`, `valor`, `garagem`, `banheiro`, `quarto`, `fotodir`, `created`, `modified`) VALUES
(1, 'Atibaia', 'SP', '100.000,00', 2, 3, 4, '1cf34e856c68b6bbd62112725b9fe188', '2020-03-30 23:02:36', '2020-03-30 23:02:36'),
(2, 'Campinas -', 'SP', '80.000,00', 5, 4, 3, '8f7b885539bb0e98bd3b940f1ab1ae2b', '2020-03-30 23:59:02', '2020-03-30 23:59:02'),
(3, 'Bragança Paulista', 'SP', '550.000,00', 2, 2, 1, '670eb1164790bb2e4a1e7f5ad1e5ccc7', '2020-03-31 00:02:30', '2020-03-31 00:02:30'),
(4, 'Extrema', 'MG', '1.550.000,00', 5, 5, 6, '0f0a5f0a37734d66f3097796359942b9', '2020-03-31 00:03:54', '2020-03-31 00:03:54'),
(6, 'Recife', 'PE', '500.000,00', 3, 4, 3, '98c65822bd3cedd35173e8455a384adb', '2020-03-31 00:14:58', '2020-03-31 00:14:58');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
