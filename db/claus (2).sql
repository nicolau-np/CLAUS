-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Maio-2021 às 20:06
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `claus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produto` text NOT NULL,
  `valor` int(11) NOT NULL,
  `estado` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `id_user`, `id_produto`, `valor`, `estado`) VALUES
(3, 2, '5', 3500, 'on'),
(4, 2, '6', 125000, 'on'),
(5, 2, '5', 3500, 'on'),
(6, 3, '5', 3500, 'on'),
(7, 3, '6', 125000, 'on'),
(8, 4, '6', 125000, 'vist'),
(9, 4, '5', 3500, 'vist'),
(10, 4, '6', 125000, 'vist'),
(11, 4, '5', 3500, 'vist'),
(12, 4, '5', 3500, 'vist'),
(13, 4, '5', 3500, 'vist'),
(14, 4, '5', 3500, 'vist'),
(15, 4, '6', 125000, 'vist'),
(16, 1, '8', 500000, 'on');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produto` text NOT NULL,
  `valor` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `descricao` text NOT NULL,
  `foto` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantidade` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `valor`, `categoria`, `descricao`, `foto`, `data`, `quantidade`, `estado`) VALUES
(7, 'Chinelas Havaianas', 2500, 'Vestuário', '                                                                                                                                                                                                 nada de mais namda de menos\r\n                                                                                                                                                                                                                                ', 'system_applications_address_book_13034.png', '2021-05-14 22:11:10', NULL, 'on'),
(8, 'Computadores da Aplle', 500000, 'Aparelhos Electrónicos', '                                                                                                                                nenhuma de momento\r\n                                                                                                                                            ', 'system_preferences_settings_mac_apple_2621.png', '2021-05-14 22:14:45', NULL, 'on'),
(9, 'CPU BENG', 200000, 'Aparelhos Electrónicos', '                                                                nenhuma\r\n                                                                                    ', 'blue_pc_system_equipment_12563.png', '2021-05-14 22:24:21', NULL, 'on'),
(10, 'Mouse', 5800, 'Aparelhos Electrónicos', '                                                                nenhuma de momento                                                                                    ', 'system_mouse_15838.png', '2021-05-15 07:25:12', NULL, 'on');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicidades`
--

CREATE TABLE `publicidades` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicidades`
--

INSERT INTO `publicidades` (`id`, `foto`, `title`, `descricao`, `estado`) VALUES
(1, '10687062_640304846090865_5407662410646124805_n.jpg', 'Novos cremes', 'Fique atento na nossa Loja                       ', 'on'),
(2, 'animated.jpg', 'Nada de +', '                                                                        muito bom a nova publicidade                                                                                    ', 'on'),
(3, 'log.png', 'Moon 2k19 Sistema de Gestao', '                                                                        Nova publicidade   de claus loja E-Store                                                                                ', 'on'),
(4, 'logo.png', 'jmpla em movmento', 'muita novidade da jmpla', 'on');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sms` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sms`
--

INSERT INTO `sms` (`id`, `nome`, `email`, `sms`, `data`, `estado`) VALUES
(1, 'Marcolino Somba', 'girabairro2020@gmail.com', 'jd;gln godfjgdf gofjdhng dfohjdf hdfjoh', '2021-05-14 21:00:10', 'off'),
(2, 'Esmeralda Viti', 'kcleusio@gmail.com', 'Bom dia preciso muito dos vossos serviços', '2021-05-14 21:00:10', 'off'),
(3, 'Fernando Polo', 'mario@gmail.com', 'golo muito bom bjgjbnknb', '2021-05-14 21:00:10', 'off'),
(4, 'Manda Chuva', 'admin@girabairro.ao', 'preciso de alguns servicos', '2021-05-14 21:00:10', 'off'),
(5, 'Martins Hugo', 'mario@gmail.com', 'bom dia boa noite poessoa', '2021-05-14 21:03:39', 'off');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `user` text NOT NULL,
  `senha` text NOT NULL,
  `nivel_acesso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `user`, `senha`, `nivel_acesso`) VALUES
(1, 'junior', 'isi@gmail.com', 'junior', '12345', 'normal_user'),
(2, 'Administrador', 'isi@gmail.com', 'admin', '123', 'admin'),
(3, 'Raphael', 'raphael@gmail.com', 'fe', '123', 'normal_user'),
(4, 'Magno Afonso', 'mr1Normaliii@gmail.com', 'nicolau-np', '1234', 'normal_user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `publicidades`
--
ALTER TABLE `publicidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `publicidades`
--
ALTER TABLE `publicidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
