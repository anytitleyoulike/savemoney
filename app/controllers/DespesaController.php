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
        
        $this->view->categoria = Categoria::find();

            $dao = new DespesaDao();
        
        if($this->request->isPost()) {
            $despesa = new Despesa();
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->data = date('Y-m-d');    
            $despesa->catId = $this->request->getPost('categoria');
            $despesa->forma_pgto = $this->request->getPost('forma_pgto');
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
            $despesa->forma_pgto = $this->request->getPost('forma_pgto');
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
    public function testeJsAction() {
        $this->view->teste = "meu  valor";
    }

    public function despesasPorCategoriaAction($categoria = false)
    {
        if($categoria) {
            $result = Despesa::query()
                ->where("cat_nome = :categoria:")
                ->innerjoin("Categoria")
                ->bind(array("categoria" => $categoria))
                ->execute();

            $this->view->condition = true;
            $this->view->result = $result;
        } else {
            
            $query = new Phalcon\Mvc\Model\Query("select Categoria.cat_nome,Categoria.cat_id, sum(Despesa.valor) as total from Despesa
                                                 INNER JOIN Categoria
                                                 group by cat_nome
                                                 order by total DESC", $this->getDI());
            
            $result = $query->execute();
            $this->view->condition = $categoria;
            $this->view->result = $result;
        }
            
    }

    public function despesasPorFormaPagamentoAction($pagamento = false) 
    {
        if($pagamento) {
            $result = Despesa::query()
                ->where("forma_pgto = :pagamento:")
                ->bind(array("pagamento" => $pagamento))
                ->execute();


            $this->view->result = $result;
            $this->view->condition = true;

        } else {
            // $query = new Phalcon\Mvc\Model\Query("select sum(Despesa.valor) as total from Despesa
            //                                      group by Despesa.forma_pgto
            //                                      order by total DESC", $this->getDI());

            $result = Despesa::sum(array(
                "column" => "valor",
                "group" => "forma_pgto")
            );
            
          $this->view->result = $result;
          $this->view->condition = false;
        }
    }

}

