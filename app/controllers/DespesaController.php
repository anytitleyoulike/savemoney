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


    public function addDespesaAction()
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
           $this->view->pagamento = FormaPgto::find();
        }
    }
    
  

    public function despesasPorCategoriaAction($categoria = false) {
        if($categoria) {
        $result = Despesa::query()
                ->innerjoin("Categoria")
                ->innerjoin("Usuario")
                ->where("cat_nome = :categoria: AND usu_id = 2")
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

            foreach ($result as $value) {
                   $totalGasto += $value->total;
            }

            $this->view->condition = false;
            $this->view->result = $result;
            $this->view->totalGasto = $totalGasto;
        }

    }

    public function removeAction($despesaId) 
    {
        $despesa = Despesa::findFirst($despesaId);
    
        $despesa->delete();

        $response = new \Phalcon\Http\Response();
        $response->redirect('despesa/index');
        $response->send();

    }
    
 
    public function despesasPorFormaPagamentoAction($pagamento = false) 
    {
        if($pagamento) {
            $result = Despesa::query()
                ->innerjoin("FormaPgto")
                ->where("tipo = :pagamento: AND usu_id = 2")
                ->bind(array("pagamento" => $pagamento))
                ->execute();


            $this->view->result = $result;
            $this->view->condition = true;

        } else {
             $query = new Phalcon\Mvc\Model\Query("select FormaPgto.tipo,FormaPgto.id, sum(Despesa.valor) as total from Despesa
                                                 INNER JOIN FormaPgto
                                                 group by tipo
                                                 order by total DESC", $this->getDI());
            
            $result = $query->execute();

            //acumula o montante de cada categoria e gera um resultado total.
            foreach ($result as $value) {
                   $totalGasto += $value->total;
            }

            $this->view->result = $result;
            $this->view->totalGasto = $totalGasto;
            $this->view->condition = false;
        }
    }
    public function testeAction() {
          $query = new Phalcon\Mvc\Model\Query("select FormaPgto.tipo,FormaPgto.id, sum(Despesa.valor) as total from Despesa
                                                 INNER JOIN FormaPgto
                                                 group by tipo
                                                 order by total DESC", $this->getDI());
            
            $result = $query->execute();

            foreach ($result as $value) {
                  var_dump($value->total);
            }

    }
}

