<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Flash;
use app\models\service\ClienteService;
use app\models\service\Service;
use stdClass;

class ClienteController extends Controller{  
    
    public function index(){
        $dados["lista"] = Service::lista("cliente"); 
        //i($dados["lista"]);            
        $dados["view"]  = "Cliente/Index";
        $this->load("template", $dados);
    } 

    public function create(){   
        $dados["cliente"] = Flash::getForm();         
        $dados["view"]    = "Cliente/Create";
        $this->load("template", $dados);
    } 

    public function edit($id_cliente){  
        $dados["cliente"] =  Service::get("cliente", "id_cliente", $id_cliente);      
        $dados["view"]    = "Cliente/Create";
        $this->load("template", $dados);
    } 

    public function salvar(){            
        $obj = new stdClass;
        $obj->id_cliente      = $_POST["id_cliente"] ? $_POST["id_cliente"] : null;
        $obj->nome            = $_POST["nome"];
        $obj->endereco        = $_POST["endereco"];
        $obj->bairro          = $_POST["bairro"];
        $obj->numero          = $_POST["numero"];
        $obj->cidade          = $_POST["cidade"];
        $obj->uf              = $_POST["uf"];
        $obj->complemento     = $_POST["complemento"];
        $obj->cep             = $_POST["cep"];
        $obj->celular         = $_POST["celular"];
        $obj->sexo            = $_POST["sexo"];
        $obj->email           = $_POST["email"];
        $obj->data_nascimento = $_POST["data_nascimento"];
        $obj->cpf             = $_POST["cpf"];
        $obj->rg              = $_POST["rg"];
        $obj->data_cadastro   = date('Y-m-d');
        $obj->observacao      = $_POST["observacao"];
        $obj->status_cliente  = "1";

       Flash::setForm($obj); 
       $resultado = ClienteService::salvar($obj, "id_cliente", "cliente");

       if($resultado){
         $this->redirect(URL_BASE . "cliente");
       }else{
         if($obj->id_cliente){
            $this->redirect(URL_BASE . "cliente/edit/" .$obj->id_cliente);
         }else{
            $this->redirect(URL_BASE . "cliente/create");
         }        
       }          
    } 
    
    public function excluir($id_cliente) {
        Service::excluir("cliente", "id_cliente", $id_cliente);
        $this->redirect(URL_BASE . "cliente");
    }
    
 }
?>