<?php
namespace Vokuro\Models;

use Phalcon\Mvc\Model;

class Tipossanguineos extends Model
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
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tipossanguineos';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Tipossanguineos[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Tipossanguineos
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
