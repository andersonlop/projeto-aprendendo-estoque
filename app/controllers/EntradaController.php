<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\EntradaService;
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
        $obj                  = new stdClass;
        $obj->id_entrada      = null;
        $obj->id_produto      = $_POST["id_produto"];
        $obj->qtde_entrada    = $_POST["qtde_entrada"]; 
      // i($obj);
       
        Flash::setForm($obj); 
        EntradaService::salvar($obj, "id_entrada", "entrada");
        $this->redirect(URL_BASE . "Entrada/Index");
            
    }    
    
}
?>