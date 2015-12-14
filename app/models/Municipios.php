<?php
namespace Vokuro\Models;

use Phalcon\Mvc\Model;


class Municipios extends Model
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
    public $NOMBRE;

    /**
     *
     * @var integer
     */
    public $ESTADO_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'municipios';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Municipios[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Municipios
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
