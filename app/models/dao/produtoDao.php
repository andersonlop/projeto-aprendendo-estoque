<?php
namespace app\models\dao;
use app\core\Model;

class ProdutoDao extends Model{
    public function atualizaEstoque($id_produto, $qtde){
       $sql = " UPDATE produto 
                    SET estoque_atual = estoque_atual + ($qtde) 
                    WHERE id_produto = $id_produto
                ";
       $this->db->query($sql);
    }    
}
?>