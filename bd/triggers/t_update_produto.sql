DELIMITER $$

USE `aprendendo_estoque2`$$

DROP TRIGGER /*!50032 IF EXISTS */ `t_update_produto`$$

CREATE
    /*!50017 DEFINER = 'root'@'localhost' */
    TRIGGER `t_update_produto` BEFORE UPDATE ON `produto` 
    FOR EACH ROW BEGIN 
    
    -- Não permite atualizar o campo estoque_inicial
    IF NEW.estoque_inicial != OLD.estoque_inicial THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Não é permitido alterar o campo estoque_inicial.';
    END IF;
    
    -- grava a data e hora de atualização do produto
    SET NEW.dtah_ultalt = CURRENT_TIMESTAMP;
        
  END;
$$

DELIMITER ;