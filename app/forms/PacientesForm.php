<?php
namespace Vokuro\Forms;

use Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
    Phalcon\Forms\Element\Email as Emailfield,
    Phalcon\Forms\Element\Check,
    Phalcon\Forms\Element\Select,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email,
    Vokuro\Models\Estados,
    Vokuro\Models\Municipios,
    Vokuro\Models\Dependencias,
    Vokuro\Models\Discapacidades,
    Vokuro\Models\nivelessocioeconomicos,
    Vokuro\Models\Religiones,
    Vokuro\Models\Viviendas,
    Vokuro\Models\Gruposetnicos,
    Vokuro\Models\Tipossanguineos;
    

class PacientesForm extends Form
{
    public function initialize($entity = null, $options = null)
    {
        $email = new Emailfield('email', array(
            'placeholder' => 'Ingrese e-mail válido'
        ));
        $email->setLabel('E-Mail');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'Correo es obligatorio'
            )),
            new Email(array(
                'message' => 'Correo no válido'
            ))
        ));

        $this->add($email);

        //Nombre del paciente
         $nombre = new Text('nombre');
        $nombre->setLabel('Nombre');


        $nombre->addValidator(
		    new PresenceOf(
		        array(
		            'message' => 'Nombre es obligatorio'
		        )
		    )
		);

		$this->add($nombre);

		//Apellido Paterno del paciente
        $apellido_paterno = new Text('apellido_paterno');
        $apellido_paterno->setLabel('Apellido Paterno');
        $apellido_paterno->addValidator(
		    new PresenceOf(
		        array(
		            'message' => 'Apellido Paterno es obligatorio'
		        )
		    )
		);

		$this->add($apellido_paterno);
       
       //Apellido Materno del paciente
        $apellido_materno = new Text('apellido_materno');
        $apellido_materno->setLabel('Apellido Materno');
        
		$this->add($apellido_materno);

		//Fecha de Nacimiento del paciente
        $fecha_nacimiento = new Text('fecha_nacimiento');
        $fecha_nacimiento->setLabel('Fecha Nacimiento');
        
		$this->add($fecha_nacimiento);

		//Ocupacion del paciente
        $ocupacion = new Text('ocupacion');
        $ocupacion->setLabel('Ocupación');
        
		$this->add($ocupacion);

		//Telefono del paciente
        $telefono = new Text('telefono');
        $telefono->setLabel('Teléfono');
        
		$this->add($telefono);

		//Calle del paciente
        $calle = new Text('calle');
        $calle->setLabel('Calle');
        
		$this->add($calle);

		//Numero exterior del paciente
        $numero_ext = new Text('numero_ext');
        $numero_ext->setLabel('Num. Exterior');
        
		$this->add($numero_ext);

		//Numero interior del paciente
        $numero_int = new Text('numero_int');
        $numero_int->setLabel('Num. Interior');
        
		$this->add($numero_int);

		//Colonia del paciente
        $colonia = new Text('colonia');
        $colonia->setLabel('Colonia');
        
		$this->add($colonia);

		//Codigo Postal del paciente
        $codigo_postal = new Text('codigo_postal');
        $codigo_postal->setLabel('Codigo Postal');
        
		$this->add($codigo_postal);

		//CURP del paciente
        $curp = new Text('curp');
        $curp->setLabel('CURP');
        
		$this->add($curp);

		//RFC del paciente
        $rfc = new Text('rfc');
        $rfc->setLabel('RFC');
        
		$this->add($rfc);

		//Persona que refiere del paciente
        $referido = new Text('referido');
        $referido->setLabel('Persona Refiere');
        
		$this->add($referido);

		//nombre de contacto del paciente
        $nombre_c = new Text('nombre_c');
        $nombre_c->setLabel('Nombre');
        
		$this->add($nombre_c);

		//Apellido paterno de contacto del paciente
        $apellidopaternoc = new Text('apellidopaternoc');
        $apellidopaternoc->setLabel('Apellido Paterno');
        
		$this->add($apellidopaternoc);

		//Apellido materno de contacto del paciente
        $apellidomaternoc = new Text('apellidomaternoc');
        $apellidomaternoc->setLabel('Apellido Materno');
        
		$this->add($apellidomaternoc);

		//Direccion de contacto del paciente
        $direccionc = new Text('direccionc');
        $direccionc->setLabel('Dirección');
        
		$this->add($direccionc);

		//Teléfono de contacto del paciente
        $telefonoc = new Text('telefonoc');
        $telefonoc->setLabel('Teléfono');
        
		$this->add($telefonoc);

		//Estados
		
		$this->add(
            new Select(
                "Estados",
                Estados::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )

            )
        );

        //Municipios
		
		$this->add(
            new Select(
                "Municipios",
                Municipios::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

       

        //Sexo

        $this->add(
		    new Select(
		        "Sexo",
		        array(
		        	'1' => 'Femenino',
		            '2'  => 'Masculino'
		        )
		    )
		);

		//Estado Civil
       

        $this->add(
		    new Select(
		        "Estado Civil",
		        array(
		            '1' => 'Casado (a)',
		            '2'  => 'Soltero'
		        )
		    )
		);

		//Niveles Socio-economicos
		
		$this->add(
            new Select(
                "Niveles Socioeconomicos",
                nivelessocioeconomicos::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )

                )
            )
        );

        //Religiones
		
		$this->add(
            new Select(
                "Religiones",
                Religiones::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

         //Discapacidades
		
		$this->add(
            new Select(
                "Discapacidades",
                Discapacidades::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

        //Grupos Etnicos
		
		$this->add(
            new Select(
                "Grupos Etnicos",
                Gruposetnicos::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

        //Grupos Sanguineos
		
		$this->add(
            new Select(
                "Tipo Sangre",
                Tipossanguineos::find(['order'=>'ID DESC']),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

         //Tipo Vivienda
		
		$this->add(
            new Select(
                "Vivienda",
                Viviendas::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBRE'
                    )
                )
            )
        );

		//Dependencias
		
		$this->add(
            new Select(
                "Dependencia",
                Dependencias::find(),
                array(
                    'using' => array(
                        'ID',
                        'NOMBREDEPENDENCIA'
                    )
                )
            )
        );

    }
}