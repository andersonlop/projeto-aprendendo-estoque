<?php
namespace app\models\service;

use app\models\validacao\EntradaValidacao;

class EntradaService{
    public static function salvar($entrada, $campo, $tabela){
        $validacao = EntradaValidacao::salvar($entrada);

        return Service::salvar($entrada, $campo, $validacao->listaErros(), $tabela);

    }
    
}  