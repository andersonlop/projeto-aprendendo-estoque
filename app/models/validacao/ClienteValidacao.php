<?php
namespace app\models\validacao;

use app\core\Validacao;

class ClienteValidacao{
    public static function salvar($cliente){
        $validacao = new Validacao();
        
        //setando os dados
        $validacao->setData("nome",$cliente->nome);
        $validacao->setData("email",$cliente->email);
        $validacao->setData("cpf",$cliente->cpf);
        $validacao->setData("endereco",$cliente->endereco);
        $validacao->setData("numero",$cliente->numero);
        $validacao->setData("bairro",$cliente->bairro);
        $validacao->setData("cidade",$cliente->cidade);
        $validacao->setData("cep",$cliente->cep);
        $validacao->setData("uf",$cliente->uf);

        //validar os dados
        $validacao->getData("nome")->isVazio()->isMinimo(5);
        $validacao->getData("email")->isVazio();
        $validacao->getData("cpf")->isVazio()->isCPF();
        $validacao->getData("endereco")->isVazio();
        $validacao->getData("numero")->isVazio();
        $validacao->getData("bairro")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("uf")->isVazio();

        return $validacao;
    }
}