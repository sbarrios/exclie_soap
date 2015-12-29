<?php
namespace Vokuro\Controllers;

use Phalcon\Tag as Tag;

class AgendaController extends ControllerBase
{
    
    public function initialize()
    {
        if ($this->session->has('auth-identity')) {
            
            $this->view->setTemplateBefore('private');
            
            $titulo_cabecera = "Agenda";
            $sub_titulo = "Citas Médicas";
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
    	
    	//$this->view->disableLevel(View::LEVEL_MAIN_LAYOUT);


        

    }

}

