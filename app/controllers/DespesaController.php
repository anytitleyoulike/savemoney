<?php


class DespesaController extends \Phalcon\Mvc\Controller
{


    public function indexAction()
    {
        $this->view->result = Despesa::findByUsuId($this->session->get('usuId'));
    }


    public function addAction()
    {
        
        $this->view->categoria = Categoria::find();
        
        
        $id = $this->session->get('usuId');
        $this->view->id = $id;

        if($this->request->isPost()) {
            
            $despesa = new Despesa();
            
            $despesa->descricao = $this->request->getPost('descricao');
            $despesa->valor = $this->request->getPost('valor');
            $despesa->data = date('Y-m-d');    
            $despesa->catId = $this->request->getPost('categoria');
            $despesa->forma_pgto = $this->request->getPost('forma_pgto');
            $despesa->usuId = $this->session->get('usuId');
            
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
            $despesa->catId = $this->request->getPost('categoria');
            $despesa->forma_pgto = $this->request->getPost('forma_pgto');
            $despesa->usuId = $this->session->get('usuId');
            
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
        
        $id = $this->session->get('usuId');
        $despesa = new Despesa();
        
        if($categoria) {

            $result = $despesa->despesasPorCategoria($categoria, $id);

            $this->view->condition = true;
            $this->view->result = $result;
        
        } else {

            $result = $despesa->totalDespesasPorCategoria($id);

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
                ->innerjoin("Usuario")
                ->where("tipo = :pagamento: AND usu_id = 2")
                ->bind(array("pagamento" => $pagamento))
                ->execute();


            $this->view->result = $result;
            $this->view->condition = true;

        } else {
             $query = new Phalcon\Mvc\Model\Query("select FormaPgto.tipo,FormaPgto.id, sum(Despesa.valor) as total from Despesa
                                                 INNER JOIN FormaPgto
                                                 INNER JOIN Usuario
                                                 where usu_id = 2
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
          $usuid = $this->session->get('usuId');
            
            // $a = Despesa::find(array(
            //     "conditions" => "id = :oi:",
            //     "bind" => array("oi" => 18)
            // ));

    }
}

