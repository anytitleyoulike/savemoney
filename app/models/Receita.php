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
            'rec_id' => 'id', 
            'rec_descricao' => 'descricao', 
            'rec_data' => 'data', 
            'rec_valor' => 'valor', 
            'rec_usuId' => 'usuId'
        );
    }


    public function totalReceitasPorUsuario($usuId) {

        $query = new Phalcon\Mvc\Model\Query("select sum(Receita.valor) as total from Receita
                                                INNER JOIN Usuario on Usuario.usu_id = Receita.usuId
                                                where Usuario.usu_id = :usuId:", $this->getDI());
        
        $result = $query->execute(array("usuId" => $usuId));
        
        foreach ($result as $value) {
            return $value->total;
        }
    }

}
