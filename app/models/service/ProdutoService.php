<?php
namespace app\models\service;

use app\models\dao\ProdutoDao;
use app\models\validacao\ProdutoValidacao;

class ProdutoService{
    public static function salvar($produto, $campo, $tabela){
        $validacao = ProdutoValidacao::salvar($produto);
        return Service::salvar($produto, $campo, $validacao->listaErros(), $tabela);
    }

    public static function atualizarEstoque($id_produto, $qtde){
        $dao = new ProdutoDao;
        return $dao->atualizaEstoque($id_produto, $qtde);
    }
    
    
}  