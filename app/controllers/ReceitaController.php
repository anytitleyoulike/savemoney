<?php

class ReceitaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    	$this->view->result = Receita::findByUsuId($this->session->get('usuId'));
    }

    public function addAction()
    {
        
        $this->view->result = Receita::find();
        
        if($this->request->isPost()) {
            $receita = new Receita();
            $receita->descricao = $this->request->getPost('descricao');
            $receita->valor = $this->request->getPost('valor');
            $receita->data = date('Y-m-d');    
            $receita->usuId = $this->session->get('usuId');

            $receita->save();

            $response = new \Phalcon\Http\Response();
            $response->redirect('receita/index');
            $response->send();
       }
    }

    public function updateAction($receitaId) 
    {     
    	if($this->request->isPost()) {
            $receitaId = $this->request->getPost('id');
            
            $receita = Receita::findFirst($receitaId);
            
            $receita->descricao = $this->request->getPost('descricao');
            $receita->valor = $this->request->getPost('valor');
            $receita->usuId = $this->session->get('usuId');
            
            $this->view->receita = $receita;
            $receita->update();

            $response = new \Phalcon\Http\Response();
            $response->redirect('receita/index');
            $response->send();

        } else {
           $this->view->receita = Receita::findFirst($receitaId);
           
        }
    }


    public function removeAction($receitaId) 
    {
        $receita = Receita::findFirst($receitaId);
        
        $receita->delete();

        $response = new \Phalcon\Http\Response();
        $response->redirect('receita/index');
        $response->send();
    }

}

