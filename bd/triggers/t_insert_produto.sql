DELIMITER $$

USE `aprendendo_estoque2`$$

DROP TRIGGER /*!50032 IF EXISTS */ `t_insert_produto`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `t_insert_produto` BEFORE INSERT ON `produto` 
    FOR EACH ROW BEGIN
    
  -- grava o estoque_atual com o valor de estoque_inicial
  SET NEW.estoque_atual = NEW.estoque_inicial;
  
   -- Definir a data atual para o campo data_cadastro
  SET NEW.data_cadastro = CURDATE();
  
END;
$$

DELIMITER ;