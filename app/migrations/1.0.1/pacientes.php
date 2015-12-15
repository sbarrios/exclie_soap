<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PacientesMigration_101
 */
class PacientesMigration_101 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('pacientes', array(
                'columns' => array(
                    new Column(
                        'ID',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        )
                    ),
                    new Column(
                        'CURP',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'ID'
                        )
                    ),
                    new Column(
                        'NOMBRE',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'CURP'
                        )
                    ),
                    new Column(
                        'APELLIDO_PATERNO',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'NOMBRE'
                        )
                    ),
                    new Column(
                        'APELLIDO_MATERNO',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'APELLIDO_PATERNO'
                        )
                    ),
                    new Column(
                        'CALLE',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'APELLIDO_MATERNO'
                        )
                    ),
                    new Column(
                        'NUMERO_EXT',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'CALLE'
                        )
                    ),
                    new Column(
                        'NUMERO_INT',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'NUMERO_EXT'
                        )
                    ),
                    new Column(
                        'CODIGO_POSTAL',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'NUMERO_INT'
                        )
                    ),
                    new Column(
                        'COLONIA',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'CODIGO_POSTAL'
                        )
                    ),
                    new Column(
                        'TELEFONO_1',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'COLONIA'
                        )
                    ),
                    new Column(
                        'TELEFONO_2',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'TELEFONO_1'
                        )
                    ),
                    new Column(
                        'EMAIL',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'TELEFONO_2'
                        )
                    ),
                    new Column(
                        'TIPO_SANGUINEO_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'EMAIL'
                        )
                    ),
                    new Column(
                        'DISCAPACIDAD_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'TIPO_SANGUINEO_id'
                        )
                    ),
                    new Column(
                        'GRUPO_ETNICO_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'DISCAPACIDAD_id'
                        )
                    ),
                    new Column(
                        'ESTADO_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'GRUPO_ETNICO_id'
                        )
                    ),
                    new Column(
                        'MUNICIPIO_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'ESTADO_id'
                        )
                    ),
                    new Column(
                        'VIVIENDA_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'MUNICIPIO_id'
                        )
                    ),
                    new Column(
                        'FECHA_NACIMIENTO',
                        array(
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'VIVIENDA_id'
                        )
                    ),
                    new Column(
                        'FECHA_REGISTRO',
                        array(
                            'type' => Column::TYPE_DATE,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'FECHA_NACIMIENTO'
                        )
                    ),
                    new Column(
                        'SEXO',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'FECHA_REGISTRO'
                        )
                    ),
                    new Column(
                        'OCUPACION',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'SEXO'
                        )
                    ),
                    new Column(
                        'RFC',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 255,
                            'after' => 'OCUPACION'
                        )
                    ),
                    new Column(
                        'RELIGION_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'RFC'
                        )
                    ),
                    new Column(
                        'USUARIO_id',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'RELIGION_id'
                        )
                    ),
                    new Column(
                        'ESTADO_CIVIL',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'USUARIO_id'
                        )
                    ),
                    new Column(
                        'REFERIDO',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'ESTADO_CIVIL'
                        )
                    ),
                    new Column(
                        'NOMBRE_C',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'REFERIDO'
                        )
                    ),
                    new Column(
                        'IMAGEN',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'NOMBRE_C'
                        )
                    ),
                    new Column(
                        'DIRECCIONC',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'IMAGEN'
                        )
                    ),
                    new Column(
                        'TELEFONOC',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'DIRECCIONC'
                        )
                    ),
                    new Column(
                        'APELLIDOPATERNOC',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'TELEFONOC'
                        )
                    ),
                    new Column(
                        'APELLIDOMATERNOC',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'APELLIDOPATERNOC'
                        )
                    ),
                    new Column(
                        'TABAQUISMO',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'APELLIDOMATERNOC'
                        )
                    ),
                    new Column(
                        'TOXICOMANIAS',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'TABAQUISMO'
                        )
                    ),
                    new Column(
                        'ALCOHOLISMO',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'TOXICOMANIAS'
                        )
                    ),
                    new Column(
                        'ALERGIAS',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'ALCOHOLISMO'
                        )
                    ),
                    new Column(
                        'AUMENTO_PERDIDA',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'ALERGIAS'
                        )
                    ),
                    new Column(
                        'CIRUGIAS',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'AUMENTO_PERDIDA'
                        )
                    ),
                    new Column(
                        'AHF',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'CIRUGIAS'
                        )
                    ),
                    new Column(
                        'ANTECEDENTES_PERSONALES',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'AHF'
                        )
                    ),
                    new Column(
                        'ANTECEDENTES_NP',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'ANTECEDENTES_PERSONALES'
                        )
                    ),
                    new Column(
                        'C1',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'ANTECEDENTES_NP'
                        )
                    ),
                    new Column(
                        'C2',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'C1'
                        )
                    ),
                    new Column(
                        'C3',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'C2'
                        )
                    ),
                    new Column(
                        'ESCOLARIDAD',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'C3'
                        )
                    ),
                    new Column(
                        'CARGO',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'ESCOLARIDAD'
                        )
                    ),
                    new Column(
                        'COMENTARIOS',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'CARGO'
                        )
                    ),
                    new Column(
                        'FECHA_MODIFICACION',
                        array(
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'COMENTARIOS'
                        )
                    ),
                    new Column(
                        'NOTAS_GENERALES',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'FECHA_MODIFICACION'
                        )
                    ),
                    new Column(
                        'PADECIMIENTO_ACTUAL',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'NOTAS_GENERALES'
                        )
                    ),
                    new Column(
                        'SECUENCIAL',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'PADECIMIENTO_ACTUAL'
                        )
                    ),
                    new Column(
                        'DIABETES',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'SECUENCIAL'
                        )
                    ),
                    new Column(
                        'CARDIOPATIAS',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'DIABETES'
                        )
                    ),
                    new Column(
                        'CANCER',
                        array(
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'CARDIOPATIAS'
                        )
                    ),
                    new Column(
                        'OTROS_PAT',
                        array(
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'CANCER'
                        )
                    ),
                    new Column(
                        'C4',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'OTROS_PAT'
                        )
                    ),
                    new Column(
                        'C5',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'C4'
                        )
                    ),
                    new Column(
                        'C6',
                        array(
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'C5'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('ID')),
                    new Index('IDX_15EAFAF2E17BA5C4', array('TIPO_SANGUINEO_id')),
                    new Index('IDX_15EAFAF2E69063BB', array('DISCAPACIDAD_id')),
                    new Index('IDX_15EAFAF259130E16', array('GRUPO_ETNICO_id')),
                    new Index('IDX_15EAFAF24D3F186E', array('ESTADO_id')),
                    new Index('IDX_15EAFAF25B29107A', array('MUNICIPIO_id')),
                    new Index('IDX_15EAFAF29A0387EA', array('VIVIENDA_id')),
                    new Index('IDX_15EAFAF2AC21DCDF', array('RELIGION_id')),
                    new Index('IDX_15EAFAF246001C2B', array('USUARIO_id'))
                ),
                'options' => array(
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '9241',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_unicode_ci'
                ),
            )
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
