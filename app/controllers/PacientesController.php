<?php
namespace Vokuro\Controllers;

use Vokuro\Forms\PacientesForm;
use Vokuro\Models\Municipios;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Model\Criteria;

/**
 * Display the default index page.
 */
class PacientesController extends ControllerBase
{
	public function initialize()
    {
        if ($this->session->has('auth-identity')) {
            $this->view->setTemplateBefore('private');
            $titulo_cabecera = "Pacientes";
            $sub_titulo = "Agregar Paciente";
            $this->view->setVars(
                array(
                    'titulo'   => $titulo_cabecera,
                    'sub_titulo' => $sub_titulo                
                )
            );
        }
       
       
    }
   
    public function indexAction()
    {   
       
        $this->persistent->conditions = null;
        $this->view->form = new PacientesForm();
        
    }

    public function searchAction()
    {   
        $resData = array();

        $this->view->disable();
        
        $id = $this->request->getPost("estado_id");

        $data = Municipios::find(array(
            "columns"   =>  array("ID, NOMBRE"),
            "conditions"=>  "ESTADO_id = :id:",
            "bind"      =>  array("id"=>$id)
        ));


        foreach ($data as $result) {
            $resData[] = array("ID"=>$result->ID, "NOMBRE"=>$result->NOMBRE);
        }

        echo json_encode($resData);
        
    }
}
