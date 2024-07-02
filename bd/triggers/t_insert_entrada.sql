DELIMITER $$

USE `aprendendo_estoque2`$$

DROP TRIGGER /*!50032 IF EXISTS */ `t_insert_entrada`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `t_insert_entrada` BEFORE INSERT ON `entrada` 
    FOR EACH ROW BEGIN
    
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
  -- IF v_estoque_atual + NEW.qtde_entrada > v_estoque_maximo THEN
   -- SIGNAL SQLSTATE '45000'
 --   SET MESSAGE_TEXT = 'Estoque atual não pode exceder o estoque máximo do produto.';
 -- END IF;  
  
  -- Atualizar o valor_entrada com o preço do produto
  SET NEW.valor_entrada = v_preco;
  
  -- Atualizar o subtotal_entrada com o valor_entrada vezes qtde_entrada
  SET NEW.subtotal_entrada = NEW.valor_entrada * NEW.qtde_entrada;
  
  -- Atualizar o estoque_atual na tabela produto com o valor de qtde_entrada somado ao valor existente
  UPDATE produto
  SET estoque_atual = estoque_atual + NEW.qtde_entrada
  WHERE id_produto = NEW.id_produto; 
  
  -- Definir a data e hora atuais
  SET NEW.data_entrada = CURDATE();
  SET NEW.hora_entrada = CURTIME();
  
END;
$$

DELIMITER ;