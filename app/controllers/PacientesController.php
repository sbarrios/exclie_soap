<?php
namespace Vokuro\Controllers;

use Vokuro\Forms\PacientesForm;

/**
 * Display the default index page.
 */
class PacientesController extends \Phalcon\Mvc\Controller
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
}
