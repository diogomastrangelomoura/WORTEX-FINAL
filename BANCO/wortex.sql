-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/01/2019 às 13:17
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wortex`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_admin`
--

CREATE TABLE `cad_admin` (
  `id_admin` int(10) NOT NULL,
  `nome_admin` varchar(99) NOT NULL,
  `sobrenome_admin` varchar(99) NOT NULL,
  `email_admin` varchar(300) NOT NULL,
  `senha_admin` varchar(50) NOT NULL,
  `data_cadastro_admin` date NOT NULL,
  `tipo_acesso_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cad_admin`
--

INSERT INTO `cad_admin` (`id_admin`, `nome_admin`, `sobrenome_admin`, `email_admin`, `senha_admin`, `data_cadastro_admin`, `tipo_acesso_admin`) VALUES
(1, 'Diogo', 'Mastrangelo', 'contato@sisconnection.com.br', '22c14f311a60486b36f79f3bc962be66', '2018-04-20', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_categoria`
--

CREATE TABLE `cad_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(99) NOT NULL,
  `status_categoria` tinyint(1) NOT NULL,
  `descricao_categoria` text NOT NULL,
  `pai_categoria` int(10) NOT NULL,
  `ordem_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cad_categoria`
--

INSERT INTO `cad_categoria` (`id_categoria`, `nome_categoria`, `status_categoria`, `descricao_categoria`, `pai_categoria`, `ordem_categoria`) VALUES
(1, 'ESCOVAS', 1, '', 0, 0),
(2, 'POMADAS', 1, '', 0, 0),
(3, 'LET ME BE', 1, '', 1, 0),
(4, 'PROHALL', 1, '', 1, 0),
(5, 'SHAMPOOS', 1, '', 4, 0),
(6, 'CONDICIONADORES', 1, '', 4, 0),
(7, 'OLEO DE LINHAÇA', 1, '', 3, 0),
(8, 'VEGETAL', 1, '', 7, 0),
(9, 'VEGETAL 2', 1, '', 7, 0),
(10, 'VEGETAL 3', 1, '', 9, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_fotos_produtos`
--

CREATE TABLE `cad_fotos_produtos` (
  `id_foto` int(10) NOT NULL,
  `produto_foto` varchar(99) NOT NULL,
  `imagem_foto` varchar(300) NOT NULL,
  `usuario_foto` int(10) NOT NULL,
  `aguarde_foto` int(1) NOT NULL,
  `principal_foto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_loja`
--

CREATE TABLE `cad_loja` (
  `id_loja` int(10) NOT NULL,
  `nome_loja` varchar(999) NOT NULL,
  `logo_loja` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cad_loja`
--

INSERT INTO `cad_loja` (`id_loja`, `nome_loja`, `logo_loja`) VALUES
(1, 'Loja Teste Wortex', 'logo_loja.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_produtos`
--

CREATE TABLE `cad_produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(99) NOT NULL,
  `sku_produto` varchar(99) NOT NULL,
  `resumo_produto` varchar(300) NOT NULL,
  `preco_normal_produto` double(10,2) NOT NULL,
  `preco_promocional_produto` double(10,2) NOT NULL,
  `preco_custo_produto` double(10,2) NOT NULL,
  `descricao_produto` text NOT NULL,
  `gerenciar_produto` tinyint(1) NOT NULL,
  `quantidade_fixa_produto` tinyint(1) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `ean_produto` varchar(15) NOT NULL,
  `ncm_produto` varchar(12) NOT NULL,
  `peso_produto` double(10,2) NOT NULL,
  `comprimento_produto` double(10,2) NOT NULL,
  `largura_produto` double(10,2) NOT NULL,
  `altura_produto` double(10,2) NOT NULL,
  `url_pagina_produto` varchar(150) NOT NULL,
  `titulo_pagina_produto` varchar(150) NOT NULL,
  `descricao_pagina_produto` varchar(400) NOT NULL,
  `palavras_chave_produto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_relacao_categorias_produtos`
--

CREATE TABLE `cad_relacao_categorias_produtos` (
  `id_relacao` int(10) NOT NULL,
  `id_produto_relacao` int(10) NOT NULL,
  `id_categoria_relacao` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cad_admin`
--
ALTER TABLE `cad_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices de tabela `cad_categoria`
--
ALTER TABLE `cad_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `cad_fotos_produtos`
--
ALTER TABLE `cad_fotos_produtos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Índices de tabela `cad_loja`
--
ALTER TABLE `cad_loja`
  ADD PRIMARY KEY (`id_loja`);

--
-- Índices de tabela `cad_produtos`
--
ALTER TABLE `cad_produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `cad_relacao_categorias_produtos`
--
ALTER TABLE `cad_relacao_categorias_produtos`
  ADD PRIMARY KEY (`id_relacao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cad_admin`
--
ALTER TABLE `cad_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cad_categoria`
--
ALTER TABLE `cad_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cad_fotos_produtos`
--
ALTER TABLE `cad_fotos_produtos`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_loja`
--
ALTER TABLE `cad_loja`
  MODIFY `id_loja` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cad_produtos`
--
ALTER TABLE `cad_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cad_relacao_categorias_produtos`
--
ALTER TABLE `cad_relacao_categorias_produtos`
  MODIFY `id_relacao` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
