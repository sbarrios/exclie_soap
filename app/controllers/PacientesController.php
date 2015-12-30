<?php
namespace Vokuro\Controllers;

use Phalcon\Tag;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Vokuro\Forms\PacientesForm;
use Vokuro\Models\Pacientes;
use Vokuro\Models\Municipios;

/**
 * Vokuro\Controllers\PacientesController
 * CRUD to manage pacientes
 */
class PacientesController extends ControllerBase
{
    /**
     * Default action. Set the private (authenticated) layout (layouts/private.volt)
     */
	public function initialize()
    {
      if ($this->session->has('auth-identity')) {
            
            $this->view->setTemplateBefore('private');
            
            $titulo_cabecera = "Pacientes";
            $sub_titulo = "Alta de Paciente";
            $this->view->setVars(
                array(
                    'titulo'   => $titulo_cabecera,
                    'sub_titulo' => $sub_titulo                
                )
            );
        }
    }

    /**
     * Default action, shows the search form
     */
    public function indexAction()
    {
        
        $this->view->form = new PacientesForm();
    }

    public function searchAction()
    {   
        $this->view->disable();

        $resData = array();

        $id = $this->request->getPost("estado_id");

        // $data = Municipios::find(array(
        //     "columns"   =>  array("ID, NOMBRE"),
        //     "conditions"=>  "ESTADO_id = :id:",
        //     "bind"      =>  array("id"=>$id)
        // ));

        $data = Municipios::find(array("is_active = 1","ESTADO_id = ".$id));


        foreach ($data as $result) {
            $resData[] = array("ID"=>$result->ID, "NOMBRE"=>$result->NOMBRE);
        }

        echo json_encode(array('data'=>$resData));
        exit;
    }
         
        
}
