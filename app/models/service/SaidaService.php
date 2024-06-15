<?php
namespace app\models\service;

use app\models\validacao\SaidaValidacao;

class SaidaService{
    public static function salvar($saida, $campo, $tabela){
        $validacao = SaidaValidacao::salvar($saida);

        return Service::salvar($saida, $campo, $validacao->listaErros(), $tabela);

    }
    
}  