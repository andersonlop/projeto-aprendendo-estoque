<?php
namespace app\models\validacao;

use app\core\Validacao;

class ClienteValidacao{
    public static function salvar($cliente){
        $validacao = new Validacao();
        
        //setando os dados
        $validacao->setData("nome",$cliente->nome);
        $validacao->setData("email",$cliente->email);
       // $validacao->setData("cpf",$cliente->cpf);

        //validar os dados
        $validacao->getData("nome")->isVazio()->isMinimo(5);
        $validacao->getData("email")->isVazio();
       // $validacao->getData("cpf")->isVazio()->isCPF();

        return $validacao;
    }
}