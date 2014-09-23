<?php

class Categoria extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $cat_id;

    /**
     *
     * @var string
     */
    public $cat_nome;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'cat_id' => 'id', 
            'cat_nome' => 'cat_nome'
        );
    }

    public function initialize(){
        $this->hasMany("cat_id", "Despesa","catId");
    }

    public function getSource(){
        return "categoria";
    }

}
