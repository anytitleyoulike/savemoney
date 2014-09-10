<?php

class Receita extends \Phalcon\Mvc\Model
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
    public $data;

    /**
     *
     * @var string
     */
    public $valor;

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
            'id' => 'id', 
            'descricao' => 'descricao', 
            'data' => 'data', 
            'valor' => 'valor', 
            'usuId' => 'usuId'
        );
    }

}
