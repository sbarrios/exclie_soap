<?php
namespace Vokuro\Models;

use Phalcon\Mvc\Model;

class Pacientes extends Model
{

    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var string
     */
    public $CURP;

    /**
     *
     * @var string
     */
    public $NOMBRE;

    /**
     *
     * @var string
     */
    public $APELLIDO_PATERNO;

    /**
     *
     * @var string
     */
    public $APELLIDO_MATERNO;

    /**
     *
     * @var string
     */
    public $CALLE;

    /**
     *
     * @var string
     */
    public $NUMERO_EXT;

    /**
     *
     * @var string
     */
    public $NUMERO_INT;

    /**
     *
     * @var integer
     */
    public $CODIGO_POSTAL;

    /**
     *
     * @var string
     */
    public $COLONIA;

    /**
     *
     * @var string
     */
    public $TELEFONO_1;

    /**
     *
     * @var string
     */
    public $TELEFONO_2;

    /**
     *
     * @var string
     */
    public $EMAIL;

    /**
     *
     * @var integer
     */
    public $TIPO_SANGUINEO_id;

    /**
     *
     * @var integer
     */
    public $DISCAPACIDAD_id;

    /**
     *
     * @var integer
     */
    public $GRUPO_ETNICO_id;

    /**
     *
     * @var integer
     */
    public $ESTADO_id;

    /**
     *
     * @var integer
     */
    public $MUNICIPIO_id;

    /**
     *
     * @var integer
     */
    public $VIVIENDA_id;

    /**
     *
     * @var string
     */
    public $FECHA_NACIMIENTO;

    /**
     *
     * @var string
     */
    public $FECHA_REGISTRO;

    /**
     *
     * @var integer
     */
    public $SEXO;

    /**
     *
     * @var string
     */
    public $OCUPACION;

    /**
     *
     * @var string
     */
    public $RFC;

    /**
     *
     * @var integer
     */
    public $RELIGION_id;

    /**
     *
     * @var integer
     */
    public $USUARIO_id;

    /**
     *
     * @var string
     */
    public $ESTADO_CIVIL;

    /**
     *
     * @var string
     */
    public $REFERIDO;

    /**
     *
     * @var string
     */
    public $NOMBRE_C;

    /**
     *
     * @var string
     */
    public $IMAGEN;

    /**
     *
     * @var string
     */
    public $DIRECCIONC;

    /**
     *
     * @var string
     */
    public $TELEFONOC;

    /**
     *
     * @var string
     */
    public $APELLIDOPATERNOC;

    /**
     *
     * @var string
     */
    public $APELLIDOMATERNOC;

    /**
     *
     * @var integer
     */
    public $TABAQUISMO;

    /**
     *
     * @var integer
     */
    public $TOXICOMANIAS;

    /**
     *
     * @var integer
     */
    public $ALCOHOLISMO;

    /**
     *
     * @var string
     */
    public $ALERGIAS;

    /**
     *
     * @var integer
     */
    public $AUMENTO_PERDIDA;

    /**
     *
     * @var string
     */
    public $CIRUGIAS;

    /**
     *
     * @var string
     */
    public $AHF;

    /**
     *
     * @var string
     */
    public $ANTECEDENTES_PERSONALES;

    /**
     *
     * @var string
     */
    public $ANTECEDENTES_NP;

    /**
     *
     * @var string
     */
    public $C1;

    /**
     *
     * @var string
     */
    public $C2;

    /**
     *
     * @var string
     */
    public $C3;

    /**
     *
     * @var string
     */
    public $ESCOLARIDAD;

    /**
     *
     * @var string
     */
    public $CARGO;

    /**
     *
     * @var string
     */
    public $COMENTARIOS;

    /**
     *
     * @var string
     */
    public $FECHA_MODIFICACION;

    /**
     *
     * @var string
     */
    public $NOTAS_GENERALES;

    /**
     *
     * @var string
     */
    public $PADECIMIENTO_ACTUAL;

    /**
     *
     * @var integer
     */
    public $SECUENCIAL;

    /**
     *
     * @var integer
     */
    public $DIABETES;

    /**
     *
     * @var integer
     */
    public $CARDIOPATIAS;

    /**
     *
     * @var integer
     */
    public $CANCER;

    /**
     *
     * @var string
     */
    public $OTROS_PAT;

    /**
     *
     * @var string
     */
    public $C4;

    /**
     *
     * @var string
     */
    public $C5;

    /**
     *
     * @var string
     */
    public $C6;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pacientes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pacientes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pacientes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
