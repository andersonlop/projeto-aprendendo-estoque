<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\SaidaService;
use app\models\service\MovimentoService;
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
        $produto             = Service::get("produto","id_produto",$_POST["id_produto"]);     
        $obj                 = new stdClass;
        $obj->id_saida       = null;
        $obj->id_produto     = $_POST["id_produto"];
        $obj->qtde_saida     = $_POST["qtde_saida"]; 
        $obj->valor_saida    = $produto->preco;
        $obj->subtotal_saida = $obj->qtde_saida * $obj->valor_saida;
        $obj->data_saida     = hoje();
        $obj->hora_saida     = agora();  

     // i($obj);
       
        Flash::setForm($obj); 
        
        // inserindo movimento de saida de produto
        $id_saida = SaidaService::salvar($obj, "id_saida", "saida");
        if($id_saida){
            $mov = new stdClass;
            $mov->id_produto      = $obj->id_produto;
            $mov->id_saida        = $id_saida;
            $mov->tipo_movimento  = "Saída Avulsa";           
            $mov->qtde_movimento  = $obj->qtde_saida;
            $mov->entr_sai        = "S";
            MovimentoService::inserir($mov);     
        }
        $this->redirect(URL_BASE . "Saida/Index");
            
    }    
    
}
?>