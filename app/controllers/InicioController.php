<?php
namespace Vokuro\Controllers;

/**
 * Display the default inicio page.
 */
class InicioController extends ControllerBase
{

    public function initialize()
    {
       $this->view->setTemplateBefore('private');

        $titulo_cabecera = "Inicio";
        $sub_titulo = "Dashboard";
        $this->view->setVars(
            array(
                'titulo'   => $titulo_cabecera,
                'sub_titulo' => $sub_titulo                
            )
        );
    }

     public function indexAction()

    {
       
    }


}
