<?php
namespace app\models\validacao;

use app\core\Validacao;

class EntradaValidacao{
    public static function salvar($entrada){
        $validacao = new Validacao();
        
        //setando os dados        
        $validacao->setData("id_produto", $entrada->id_produto); 
        $validacao->setData("qtde_entrada", $entrada->qtde_entrada);

       //validar os dados
       $validacao->getData("id_produto")->isVazio(); 
       $validacao->getData("qtde_entrada")->isVazio();       

        return $validacao;
    }
}