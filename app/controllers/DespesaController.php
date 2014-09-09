<?php

class DespesaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

        $this->view->result = Despesa::find();
    }

    public function addAction()
    {
        $this->view->result = Despesa::find();
        if($this->request->isPost()) {
            $despesa = new Despesa();
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->usuId = 1;

            $despesa->save();
       }
    }

    public function updateAction($despesaId) 
    {     
    	if($this->request->isPost()) {
            $despesaId = $this->request->getPost('id');
            
            $despesa = Despesa::findFirst($despesaId);
            
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->usuId = 1;
            
            $this->view->despesa = $despesa;
            $despesa->update();

        } else {
           $this->view->despesa = Despesa::findFirst($despesaId);
           
        }

        return $this->dispatcher->forward(
            array(
                'action' => 'add'
            ));
    }

    public function removeAction($despesaId) 
    {
        $despesa = Despesa::findFirst($despesaId);
        
        $despesa->delete();

        return $this->dispatcher->forward(
            array(
                'action' => 'add'
            ));
    }

}

