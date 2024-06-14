-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/06/2024 às 20:14
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
-- Banco de dados: `aprendendo_estoque2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cep` varchar(12) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `ddd` varchar(2) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `foto` varchar(15) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(25) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  `observacao` text DEFAULT NULL,
  `status_cliente` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `endereco`, `numero`, `bairro`, `cidade`, `complemento`, `cep`, `uf`, `ddd`, `celular`, `foto`, `sexo`, `data_nascimento`, `cpf`, `rg`, `email`, `data_cadastro`, `observacao`, `status_cliente`) VALUES
(1, 'Cliente 1', 'Rua das Flores', '123', 'Centro', 'Cidade Y', 'Apto 1', '12345-678', 'SP', '11', '(91) 2345-678', NULL, 'M', '1985-01-15', '526.221.330-81', 'MG-12.345.678', 'cliente1@email.com', '2024-06-13', 'Cliente muito ativo', '1'),
(2, 'Cliente 2', 'Av. Brasil', '456', 'Jardim', 'Cidade X', 'Casa 19', '98765-432', 'RJ', '21', '(92) 1345-678', NULL, 'M', '1990-07-20', '427.783.320-90', 'SP-23.456.748-6', 'cliente2@email.com', '2024-06-11', 'Prefere contato via e-mail', '1'),
(3, 'Cliente 3', 'Praça Central', '789', 'Juliana', 'Cidade Z', 'Casa 10', '54321-210', 'MG', '31', '(93) 1345-678', NULL, 'M', '1982-11-30', '550.217.680-00', 'ES-34.567.890', 'cliente3@email.com', '2024-05-27', 'Cliente VIP', '1'),
(4, 'cliente 4', 'Avenida Paraná', '15', 'Centro', 'Acrelândia', '', '69945-970', 'AC', '', '(74) 95566-5565', NULL, 'M', '1965-01-25', '333.573.550-19', 'AC-58.659.748', 'cliente4@email.com', '2024-06-11', '', '1'),
(5, 'Cliente 5', 'Rua dos Andradas', '65', 'Centro', 'Amaturá', '', '69620-970', 'AM', '', '(65) 95478-8555', NULL, 'F', '1988-06-24', '885.680.110-80', 'AM-87.659.658', 'cliente5@email.com', '2024-06-05', '', '1'),
(6, 'Cliente 6', 'Rua Jerônimo Monteiro', '658', 'Centro', 'Apiacá', '', '29450-970', 'ES', '', '(44) 99999-9999', NULL, 'M', '1955-12-21', '087.305.300-16', 'ES', 'cliente6@email.com', '2024-06-11', '', '1'),
(7, 'Cliente 7', 'Rua Doutor Casemiro da Rocha', '55', 'Centro', 'Cunha', '', '12530-970', 'SP', '', '(12) 99999-9999', NULL, 'F', '2000-06-24', '677.708.380-45', 'SP-55.987.987-5', 'cliente7@email.com', '2024-06-13', '', '1'),
(8, 'Cliente 8', 'Rua Santos Dumont', '457', 'Centro', 'Cordeirópolis', '', '13490-970', 'SP', '', '(16) 77777-7777', NULL, 'M', '1995-05-06', '763.564.320-71', 'SP-58.987.658-8', 'cliente8@email.com', '2024-06-13', '', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data_entrada` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `valor_entrada` decimal(10,2) DEFAULT NULL,
  `qtde_entrada` int(11) NOT NULL,
  `subtotal_entrada` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `entrada`
--

INSERT INTO `entrada` (`id_entrada`, `id_produto`, `data_entrada`, `hora_entrada`, `valor_entrada`, `qtde_entrada`, `subtotal_entrada`) VALUES
(1, 1, '2024-06-01', '08:30:00', 50.00, 10, 500.00),
(2, 2, '2024-06-02', '09:45:00', 25.50, 50, 510.00),
(3, 3, '2024-06-03', '10:15:00', 30.75, 15, 461.25),
(4, 4, '2024-06-04', '11:00:00', 40.00, 5, 200.00),
(5, 5, '2024-06-05', '13:30:00', 60.25, 7, 421.75),
(6, 6, '2024-06-06', '14:00:00', 75.00, 12, 900.00),
(7, 7, '2024-06-07', '15:45:00', 80.50, 8, 644.00),
(8, 8, '2024-06-08', '16:15:00', 55.00, 9, 495.00),
(10, 9, '2024-06-12', '11:16:00', 190.00, 130, 24700.00),
(11, 9, '2024-06-14', '00:14:00', 500.00, 10, 5000.00),
(12, 9, '2024-06-14', '00:18:00', 500.00, 4, 2000.00),
(13, 7, '2024-06-14', '00:21:44', 80.50, 20, 1610.00),
(14, 1, '2024-06-14', '00:41:52', 50.00, 50, 2500.00),
(15, 9, '2024-06-14', '00:45:14', 800.00, 20, 16000.00),
(16, 1, '2024-06-14', '00:54:53', 50.00, 50, 2500.00);

--
-- Acionadores `entrada`
--
DELIMITER $$
CREATE TRIGGER `t_insert_entrada` BEFORE INSERT ON `entrada` FOR EACH ROW BEGIN
    
  DECLARE v_preco DECIMAL(10,2);
  DECLARE v_estoque_atual INT;
  DECLARE v_estoque_maximo INT;
  
  -- Buscar o preço do produto baseado no id_produto
  SELECT preco INTO v_preco
  FROM produto
  WHERE id_produto = NEW.id_produto;
  
  -- Buscar o valor atual de estoque_atual e estoque_maximo
  SELECT estoque_atual, estoque_maximo INTO v_estoque_atual, v_estoque_maximo
  FROM produto
  WHERE id_produto = NEW.id_produto;
  
  -- Verificar se a nova qtde_entrada faz o estoque_atual exceder o estoque_maximo
  IF v_estoque_atual + NEW.qtde_entrada > v_estoque_maximo THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Estoque atual não pode exceder o estoque máximo do produto.';
  END IF;  
  
  -- Atualizar o valor_entrada com o preço do produto
  SET NEW.valor_entrada = v_preco;
  
  -- Atualizar o subtotal_entrada com o valor_entrada vezes qtde_entrada
  SET NEW.subtotal_entrada = NEW.valor_entrada * NEW.qtde_entrada;
  
  -- Atualizar o estoque_atual na tabela produto com o valor de qtde_entrada somado ao valor existente
  UPDATE produto
  SET estoque_atual = estoque_atual + NEW.qtde_entrada
  WHERE id_produto = NEW.id_produto; 
  
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `item`
--

INSERT INTO `item` (`id_item`, `id_produto`, `id_venda`, `qtde`, `valor`, `subtotal`) VALUES
(1, 1, 1, 2, 50.00, 100.00),
(2, 3, 1, 5, 20.25, 100.25),
(3, 2, 2, 2, 75.50, 151.00),
(4, 4, 3, 2, 99.89, 199.78),
(5, 3, 3, 6, 20.25, 121.50),
(6, 5, 4, 2, 35.00, 70.00),
(7, 1, 4, 3, 50.00, 150.00),
(8, 6, 5, 5, 55.75, 278.75),
(9, 7, 6, 1, 65.00, 65.00),
(10, 2, 7, 4, 75.00, 302.00),
(11, 8, 8, 10, 45.30, 453.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `estoque_inicial` int(11) DEFAULT NULL,
  `estoque_atual` int(11) DEFAULT NULL,
  `estoque_minimo` int(11) DEFAULT NULL,
  `estoque_maximo` int(11) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `dtah_ultalt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `estoque_inicial`, `estoque_atual`, `estoque_minimo`, `estoque_maximo`, `data_cadastro`, `dtah_ultalt`) VALUES
(1, 'Produto A', 50.00, 200, 200, 10, 200, NULL, '2024-06-14 00:54:53'),
(2, 'Produto B', 25.50, 50, 50, 10, 100, NULL, '2024-06-14 01:22:13'),
(3, 'Produto C', 30.75, 200, 200, 20, 300, NULL, NULL),
(4, 'Produto D', 40.00, 100, 150, 15, 250, NULL, '2024-06-14 02:09:08'),
(5, 'Produto E ', 60.25, 300, 300, 30, 400, NULL, NULL),
(6, 'Produto F', 75.00, 100, 25, 30, 500, NULL, NULL),
(7, 'Produto G', 80.50, 100, 100, 5, 200, NULL, NULL),
(8, 'Produto H', 55.00, 30, 25, 5, 30, NULL, NULL),
(9, 'Produto I', 800.00, 200, 220, 25, 200, NULL, '2024-06-14 00:45:14'),
(10, 'Produto J', 650.00, 100, 100, 5, 150, '2024-06-14', '2024-06-14 01:09:49'),
(11, 'Produto K', 25.89, 50, 50, 10, 100, '2024-06-14', '2024-06-14 11:14:18');

--
-- Acionadores `produto`
--
DELIMITER $$
CREATE TRIGGER `t_insert_produto` BEFORE INSERT ON `produto` FOR EACH ROW BEGIN
    
  -- grava o estoque_atual com o valor de estoque_inicial
  SET NEW.estoque_atual = NEW.estoque_inicial;
  
   -- Definir a data atual para o campo data_cadastro
  SET NEW.data_cadastro = CURDATE();
  
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t_update_produto` BEFORE UPDATE ON `produto` FOR EACH ROW BEGIN 
    
    -- Não permite atualizar o campo estoque_inicial
    IF NEW.estoque_inicial != OLD.estoque_inicial THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Não é permitido alterar o campo estoque_inicial.';
    END IF;
    
    -- grava a data e hora de atualização do produto
    SET NEW.dtah_ultalt = CURRENT_TIMESTAMP;
        
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `saida`
--

CREATE TABLE `saida` (
  `id_saida` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `data_saida` date DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `valor_saida` decimal(10,2) DEFAULT NULL,
  `qtde_saida` int(11) DEFAULT NULL,
  `subtotal_saida` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `saida`
--

INSERT INTO `saida` (`id_saida`, `id_produto`, `data_saida`, `hora_saida`, `valor_saida`, `qtde_saida`, `subtotal_saida`) VALUES
(1, 1, '2024-06-01', '08:30:00', 55.00, 8, 440.00),
(2, 2, '2024-06-02', '09:45:00', 35.50, 15, 535.50),
(3, 3, '2024-06-03', '10:15:00', 45.75, 10, 457.50),
(4, 4, '2024-06-04', '11:00:00', 25.00, 12, 300.00),
(5, 5, '2024-06-05', '13:30:00', 65.25, 5, 326.25),
(6, 6, '2024-06-06', '14:00:00', 80.00, 6, 480.00),
(7, 7, '2024-06-07', '15:45:00', 70.50, 9, 634.50),
(8, 8, '2024-06-08', '16:15:00', 50.00, 11, 550.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Anderson Siqueira', 'contato@andersonls.com.br', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_venda` date DEFAULT NULL,
  `hora_venda` time DEFAULT NULL,
  `total_venda` decimal(10,2) DEFAULT NULL,
  `finaliza` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `id_cliente`, `data_venda`, `hora_venda`, `total_venda`, `finaliza`) VALUES
(1, 1, '2023-06-10', '10:15:00', 200.50, 'S'),
(2, 2, '2023-06-11', '11:20:00', 151.25, 'S'),
(3, 3, '2023-06-12', '12:30:00', 322.00, 'S'),
(4, 4, '2023-06-13', '14:45:00', 198.90, 'S'),
(5, 5, '2023-06-14', '16:00:00', 275.50, 'S'),
(6, 6, '2023-06-15', '17:05:00', 143.50, 'S'),
(7, 7, '2023-06-16', '18:10:00', 299.75, 'S'),
(8, 8, '2023-06-17', '19:20:00', 452.30, 'S');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`,`id_produto`),
  ADD KEY `fk_entrada_produto1_idx` (`id_produto`);

--
-- Índices de tabela `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `fk_item_venda1_idx` (`id_venda`),
  ADD KEY `fk_item_produto1_idx` (`id_produto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id_saida`),
  ADD KEY `fk_saida_produto1_idx` (`id_produto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `fk_venda_cliente_idx` (`id_cliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `id_saida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_entrada_produto1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_produto1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_item_venda1` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id_venda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `saida`
--
ALTER TABLE `saida`
  ADD CONSTRAINT `fk_saida_produto1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
