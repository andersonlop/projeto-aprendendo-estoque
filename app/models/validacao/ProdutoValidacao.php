<?php
namespace app\models\validacao;

use app\core\Validacao;

class ProdutoValidacao{
    public static function salvar($produto){
        $validacao = new Validacao();
        
        //setando os dados
        $validacao->setData("nome", $produto->nome); 
        $validacao->setData("preco", $produto->preco);

        if($produto->id_produto == null){
             $validacao->setData("estoque_inicial", $produto->estoque_inicial);  
        }   
          
        $validacao->setData("estoque_minimo", $produto->estoque_minimo);
        $validacao->setData("estoque_maximo", $produto->estoque_maximo);
       
        //validar os dados
       $validacao->getData("nome")->isVazio()->isMinimo(3); 
       $validacao->getData("preco")->isVazio();
       
        if($produto->id_produto == null){
            $validacao->getData("estoque_inicial")->isVazio(); 
        }   

       $validacao->getData("estoque_minimo")->isVazio();
       $validacao->getData("estoque_maximo")->isVazio();  
      

        return $validacao;
    }
}