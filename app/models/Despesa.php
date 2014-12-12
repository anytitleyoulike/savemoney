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
     * @var integer
     */
    public $forma_pgto;

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
        $this->belongsTo("forma_pgto","FormaPgto","id");
        $this->belongsTo("usuId","Usuario", "usu_id");
    }
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


    public function despesasPorCategoria($categoria, $usuId) {

        $result = Despesa::query()
                ->innerjoin("Categoria")
                ->innerjoin("Usuario")
                ->where("cat_nome = :categoria: AND usu_id = :id:")
                ->bind(array("categoria" => $categoria,
                             "id" => $usuId))
                ->execute();

        return $result;
    }

    public function totalDespesasPorCategoria($usuId) 
    {
        $query = new Phalcon\Mvc\Model\Query("select Categoria.cat_nome,Categoria.cat_id, sum(Despesa.valor) as total from Despesa
                                                INNER JOIN Categoria
                                                INNER JOIN Usuario
                                                where usu_id = :usuId:
                                                group by cat_nome
                                                order by total DESC", $this->getDI());
            
        return  $query->execute(array("usuId" => $usuId));
    }

    public function despesasPorFormaPagamento($pagamento, $usuId) 
    {
        $result = Despesa::query()
                ->innerjoin("FormaPgto")
                ->innerjoin("Usuario")
                ->where("tipo = :pagamento: AND usu_id = :id:")
                ->bind(array("pagamento" => $pagamento, "id" => $usuId))
                ->execute();

        return $result;
    }

    public function totalDespesasPorFormaPagamento($usuId) 
    {
        $query = new Phalcon\Mvc\Model\Query("select FormaPgto.tipo,FormaPgto.id, sum(Despesa.valor) as total from Despesa
                                                 INNER JOIN FormaPgto
                                                 INNER JOIN Usuario
                                                 where usu_id = :usuId:
                                                 group by tipo
                                                 order by total DESC", $this->getDI());
            
        return $query->execute(array("usuId" => $usuId));
    }

}
