<?php
namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao{
    public static function salvar($produto){
        $validacao = new Validacao();
        
        //setando os dados
        $validacao->setData("nome", $produto->nome); 
       
        //validar os dados
       // $validacao->getData("nome")->isVazio()->isMinimo(5);    
      

        return $validacao;
    }
}