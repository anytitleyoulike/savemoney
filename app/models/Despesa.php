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
    public $forma_pgto;

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
     *
     * @var string
     */
    public $data;
    
    public function getSource(){
        return "despesa";
    }
    public function initialize() {
        $this->belongsTo("catId","Categoria","cat_id");
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'desp_id' => 'id', 
            'desp_descricao' => 'descricao', 
            'desp_valor' => 'valor', 
            'desp_forma_pgto' => 'forma_pgto', 
            'desp_usuId' => 'usuId', 
            'desp_catId' => 'catId', 
            'desp_data' => 'data'
        );
    }

}
