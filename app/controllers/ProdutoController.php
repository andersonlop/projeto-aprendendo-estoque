<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\ProdutoService;
use app\models\service\MovimentoService;
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

        if($obj->id_produto == null){
            $obj->estoque_inicial = $_POST["estoque_inicial"]; 
        }  

        $obj->estoque_minimo  = $_POST["estoque_minimo"];
        $obj->estoque_maximo  = $_POST["estoque_maximo"]; 
        
      //  i($obj);

       Flash::setForm($obj); 
       $resultado = ProdutoService::salvar($obj, "id_produto", "produto");

    //    if($resultado){
    //     $mov = new stdClass;
    //     $mov->id_produto      = $obj->id_produto;        
    //     $mov->tipo_movimento  = "Estoque Inicial";           
    //     $mov->qtde_movimento  = $obj->estoque_inicial;
    //     $mov->entr_sai        = "I";
    //     MovimentoService::inserir($mov);     
    //     }

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