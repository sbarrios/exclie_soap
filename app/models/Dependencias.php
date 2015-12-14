<?php
namespace Vokuro\Models;

use Phalcon\Mvc\Model;


class Dependencias extends Model
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
    public $NOMBREDEPENDENCIA;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dependencias';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dependencias[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dependencias
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
