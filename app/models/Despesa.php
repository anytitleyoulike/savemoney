<?php

class Despesa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $descricao;

    /**
     *
     * @var string
     */
    public $valor;

    /**
     *
     * @var string
     */
    public $data;

    /**
     *
     * @var integer
     */
    public $usuId;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'desp_id' => 'id', 
            'desp_descricao' => 'descricao', 
            'desp_valor' => 'valor', 
            'desp_data' => 'data', 
            'desp_usuId' => 'usuId'
        );
    }

}
