DELIMITER $$

USE `aprendendo_estoque2`$$

DROP TRIGGER /*!50032 IF EXISTS */ `t_insert_saida`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `t_insert_saida` BEFORE INSERT ON `saida` 
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
  
  -- Atualizar o valor_saida com o preço do produto
  SET NEW.valor_saida = v_preco;
  
  -- Atualizar o subtotal_saida com o valor_saida vezes qtde_saida
  SET NEW.subtotal_saida = NEW.valor_saida * NEW.qtde_saida;
  
  -- Atualizar o estoque_atual na tabela produto com o valor de qtde_saida subtraindo ao valor existente
  UPDATE produto
  SET estoque_atual = estoque_atual - NEW.qtde_saida
  WHERE id_produto = NEW.id_produto; 
  
  -- Definir a data e hora atuais
  SET NEW.data_saida = CURDATE();
  SET NEW.hora_saida = CURTIME();
  
END;
$$

DELIMITER ;