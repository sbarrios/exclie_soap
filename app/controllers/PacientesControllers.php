<?php
namespace Vokuro\Controllers;

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
        
    }
}
