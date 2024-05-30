<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\Service;
use stdClass;

class ProdutoController extends Controller{
    
    public function index(){
        $dados["lista"] = Service::lista("produto");                   
        $dados["view"]  = "Produto/Index";
        $this->load("template", $dados);
    }

    public function create(){   
        $dados["produto"] = Flash::getForm();         
        $dados["view"]    = "Produto/Index";
        $this->load("template", $dados);
    } 

    public function edit($id_produto){ 
        $dados["lista"]   = Service::lista("produto");  
        $dados["produto"] =  Service::get("produto", "id_produto",$id_produto);      
        $dados["view"]    = "Produto/Index";
        $this->load("template", $dados);
    } 

    public function salvar(){            
        $obj = new stdClass;
        $obj->id_produto      = $_POST["id_produto"] ? $_POST["id_produto"] : null;
        $obj->nome            = $_POST["nome"];
        $obj->preco           = $_POST["preco"];
        $obj->estoque_inicial = $_POST["estoque_inicial"];
        $obj->estoque_atual   = $_POST["estoque_atual"];
        $obj->estoque_minimo  = $_POST["estoque_minimo"];
        $obj->estoque_maximo  = $_POST["estoque_maximo"];       

       Flash::setForm($obj); 
       $resultado = ProdutoService::salvar($obj, "id_produto", "produto");

       if($resultado){
         $this->redirect(URL_BASE . "produto");
       }else{
         if($obj->id_produto){
            $this->redirect(URL_BASE . "produto/edit/" .$obj->id_produto);
         }else{
            $this->redirect(URL_BASE . "produto/Index");
         }        
       }          
    } 
    
    public function excluir($id_produto) {
        Service::excluir("produto", "id_produto", $id_produto);
        $this->redirect(URL_BASE . "produto");
    }
    
}

?>