<?php

require('C:\xampp\htdocs\savemoney\app\dao\DespesaDao.php');


class DespesaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

        $this->view->result = Despesa::findByUsuId(2);
    }

    public function addAction()
    {
        
        $this->view->result = Despesa::find();
        $this->view->categoria = Categoria::find();

            $dao = new DespesaDao();
        
        if($this->request->isPost()) {
            $despesa = new Despesa();
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->data = date('Y-m-d');    
            $despesa->catId = $this->request->getPost('categoria');
            $despesa->usuId = 2;
            
            $dao->addDespesa($despesa);
       }
    }

    public function updateAction($despesaId) 
    {     
    	if($this->request->isPost()) {
            $despesaId = $this->request->getPost('id');
            
            $despesa = Despesa::findFirst($despesaId);
            
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->catId = $this->request->getPost('categoria');
            
            $despesa->usuId = 2;
            
            $this->view->despesa = $despesa;
            $despesa->update();
            
            $response = new \Phalcon\Http\Response();
            $response->redirect('despesa/index');
            $response->send();

        } else {
           $this->view->despesa = Despesa::findFirst($despesaId);
           $this->view->categoria = Categoria::find();
        }
    }

    public function removeAction($despesaId) 
    {
        $despesa = Despesa::findFirst($despesaId);
        
        $despesa->delete();

        return $this->dispatcher->forward(
            array(
                'action' => 'index'
            ));
    }

    public function despesasPorCategoriaAction(){
        $query = new Phalcon\Mvc\Model\Query("select cat_nome,c.id as cat_id, sum(valor) as total from Despesa d
                                             inner join Categoria c on d.catId = c.id
                                             group by cat_nome", $this->getDI());
        
        $result = $query->execute();
        $this->view->result = $result;

        foreach ($result as $value) {
            echo $value->cat_nome . " " . $value->total . "<br>";
            
        }
            
    }

}

