<?php

class Orcamento extends \Phalcon\Mvc\Model
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
    public $valor;

    /**
     *
     * @var integer
     */
    public $usuId;

    /**
     *
     * @var integer
     */
    public $catId;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'orc_id' => 'id', 
            'orc_valor' => 'valor', 
            'orc_usuId' => 'usuId', 
            'orc_catId' => 'catId'
        );
    }

    public function initialize() {
        $this->belongsTo("catId","Categoria","cat_id");
        $this->belongsTo("usuId","Usuario", "usu_id");
    }



}
