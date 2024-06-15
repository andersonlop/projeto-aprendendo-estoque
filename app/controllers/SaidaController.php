<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\SaidaService;
use app\models\service\Service;
use stdClass;

class SaidaController extends Controller{
    
    public function index(){
        $dados["lista"] = Service::getRel(["saida", "produto"],["joinCampo" =>"id_produto"]); 
        $dados["produtos"] = Service::lista("produto");                         
        $dados["view"]  = "Saida/Index";
        $this->load("template", $dados);
    }    

    public function salvar(){        
        $obj                = new stdClass;
        $obj->id_saida      = null;
        $obj->id_produto    = $_POST["id_produto"];
        $obj->qtde_saida    = $_POST["qtde_saida"];

     // i($obj);
       
        Flash::setForm($obj); 
        SaidaService::salvar($obj, "id_saida", "saida");
        $this->redirect(URL_BASE . "Saida/Index");
            
    }    
    
}
?>