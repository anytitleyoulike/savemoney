<?php

class FormaPgto extends \Phalcon\Mvc\Model
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
    public $tipo;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'pgto_id' => 'id', 
            'pgto_tipo' => 'tipo'
        );
    }

    public function initialize(){
        $this->hasMany("id", "Despesa","forma_pgto");
    }


}
