<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\EntradaService;
use app\models\service\MovimentoService;
use app\models\service\Service;
use stdClass;

class EntradaController extends Controller{
    
    public function index(){
        $dados["lista"] = Service::getRel(["entrada", "produto"],["joinCampo" =>"id_produto"]); 
        $dados["produtos"] = Service::lista("produto");                         
        $dados["view"]  = "Entrada/Index";
        $this->load("template", $dados);
    }    

    public function salvar(){ 
        $produto               = Service::get("produto","id_produto",$_POST["id_produto"]);     
        $obj                   = new stdClass;
        $obj->id_entrada       = null;
        $obj->id_produto       = $_POST["id_produto"];
        $obj->qtde_entrada     = $_POST["qtde_entrada"]; 
        $obj->valor_entrada    = $produto->preco;
        $obj->subtotal_entrada = $obj->qtde_entrada * $obj->valor_entrada;
        $obj->data_entrada     = hoje();
        $obj->hora_entrada     = agora();      
       
        Flash::setForm($obj); 
       $id_entrada = EntradaService::salvar($obj, "id_entrada", "entrada");
       
       // inserindo movimento de entrada de produto
        if($id_entrada){
            $mov = new stdClass;
            $mov->id_produto     = $obj->id_produto;
            $mov->id_entrada     = $id_entrada;
            $mov->tipo_movimento = "Entrada Avulsa";           
            $mov->qtde_movimento  = $obj->qtde_entrada;
            $mov->entr_sai       = "E";
            MovimentoService::inserir($mov);     
        }
        $this->redirect(URL_BASE . "Entrada/Index");            
    }    
    
}
?>