<?php
namespace app\models\service;

class MovimentoService{
    public static function inserir($mov){
        try {

            $mov->data_movimento = hoje();
            $mov->hora_movimento = agora();
            $id_movimento = Service::inserir(objToArray($mov),"movimento");
            
            if($id_movimento){
                if($mov->entr_sai == "S"){
                    ProdutoService::atualizarEstoque($mov->id_produto, -$mov->qtde_movimento);
                } else if($mov->entr_sai == "E"){
                    ProdutoService::atualizarEstoque($mov->id_produto, $mov->qtde_movimento);
                } // else if($mov->entr_sai == "I"){
                //     ProdutoService::atualizarEstoque($mov->id_produto, $mov->estoque_atual);
                // }
            } 
            
        } catch (\Exception $e) {
            // Tratar exceção ou lançar uma nova, conforme necessário
            throw new \Exception("Erro ao inserir movimento: " . $e->getMessage());
        }
    }    
}  