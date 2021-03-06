<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Usuario extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $usu_id;

    /**
     *
     * @var string
     */
    public $nome;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $senha;

    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'usu_id', 
            'nome' => 'nome', 
            'email' => 'email', 
            'senha' => 'senha'
        );
    }

    public function initialize() {
        $this->belongsTo("usu_id","Despesa","id");
        $this->belongsTo("usu_id","Receita","id");
    }

}
