<?php

class DespesaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

        $this->view->teste = "teste";
    }

    public function addAction()
    {
    	
        $this->view->result = Despesa::findByUsuId(1);
        if($this->request->isPost()) {
            $despesa = new Despesa();
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->usuId = 1;

            $despesa->save();
    		echo "despesa adicionada";
    	} else {
    		echo "else";
    	}


    }
    public function updateAction($despesaId) {
         
    	if($this->request->isPost()) {
            $this->view->teste = $this->request->getPost('id');
            // $despesa = Despesa::findFirst($despesaId);
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->usuId = 1;
            
            $this->view->despesa = $despesa;
            // $despesa->update();
            
        } else {
           $this->view->despesa = Despesa::findFirst($despesaId);
           
        }
    }

}

