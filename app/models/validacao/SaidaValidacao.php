<?php
namespace app\models\validacao;

use app\core\Validacao;

class SaidaValidacao{
    public static function salvar($saida){
        $validacao = new Validacao();
        
        //setando os dados        
        $validacao->setData("id_produto", $saida->id_produto); 
        $validacao->setData("qtde_saida", $saida->qtde_saida);

       //validar os dados
       $validacao->getData("id_produto")->isVazio(); 
       $validacao->getData("qtde_saida")->isVazio();       

        return $validacao;
    }
}