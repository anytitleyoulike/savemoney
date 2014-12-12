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
        
        $usuId = $this->session->get('usuId');
        $despesa = new Despesa();
        
        if($categoria) {

            $result = $despesa->despesasPorCategoria($categoria, $usuId);

            $this->view->condition = true;
            $this->view->result = $result;
        
        } else {

            $result = $despesa->totalDespesasPorCategoria($usuId);

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
        $usuId = $this->session->get('usuId');
        $despesa = new Despesa();

        if($pagamento) {
            
            $result = $despesa->despesasPorFormaPagamento($pagamento, $usuId);


            $this->view->result = $result;
            $this->view->condition = true;

        } else {
             
            $result = $despesa->totalDespesasPorFormaPagamento($usuId);
            
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

