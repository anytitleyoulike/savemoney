<?php

class OrcamentoController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->result = Orcamento::findByUsuId($this->session->get('usuId'));
    }	

    public function addAction() {

        $this->view->categoria = Categoria::find();
        $this->view->orcamento = Orcamento::findByUsuId($this->session->get('usuId'));


        if($this->request->isPost()) {
            $orcamento = new Orcamento();
            $orcamento->valor = $this->request->getPost('valor');
            $orcamento->catId = $this->request->getPost('categoria');
            $orcamento->usuId = $this->session->get('usuId');
        
            $orcamento->save();
        }
    }


    public function updateAction($orcamentoId) 
    {     
        if($this->request->isPost()) {
            $orcamentoId = $this->request->getPost('id');
            
            $orcamento = Orcamento::findFirst($orcamentoId);
            
            $orcamento->valor = $this->request->getPost('valor');
            $orcamento->catId = $this->request->getPost('categoria');
            $orcamento->usuId = $this->session->get('usuId');
            
            $this->view->orcamento = $orcamento;
            $orcamento->update();

            $response = new \Phalcon\Http\Response();
            $response->redirect('orcamento/index');
            $response->send();

        } else {
           $this->view->orcamento = Orcamento::findFirst($orcamentoId);
           $this->view->categoria = Categoria::find();
           
        }
    }


    public function removeAction($orcamentoId) 
    {
        $orcamento = Orcamento::findFirst($orcamentoId);
    
        $orcamento->delete();

        $response = new \Phalcon\Http\Response();
        $response->redirect('orcamento/index');
        $response->send();

    }

    public function testeAction() {
        $categoria = Categoria::find();
        $orcamento = Orcamento::findByUsuId($this->session->get('usuId'));


        // for($i=0; $i < sizeof($orcamento); $i++) {
        //     for($k=0; $k < sizeof($categoria); $k++) {
        //         if($orcamento[$i]->catId == $categoria[$k]->cat_id) {
                    
        //         } else {
                    
        //         }

        //     }
        // }
    
    }


    public function balancoAction() 
    {
    	
        $despesa = new Despesa();
        $receita = new Receita();

        $totalDespesas = $despesa->totalDespesasPorUsuario($this->session->get('usuId'));
         
        $totalReceitas = $receita->totalReceitasPorUsuario($this->session->get('usuId'));

        // montante total do usuário para calculo da porcentagem
        $total = $totalDespesas + $totalReceitas;

    	$porcentagemDespesa = number_format(($totalDespesas/$total)*100,1);
    	$porcentagemReceita = number_format(($totalReceitas/$total)*100,1);
    	
    	$this->view->porcentagemDespesa = $porcentagemDespesa;
    	$this->view->porcentagemReceita = $porcentagemReceita;

        $this->view->totalDespesas = $totalDespesas;
        $this->view->totalReceitas = $totalReceitas;
        $this->view->balanco = $totalReceitas-$totalDespesas;
    }

//     public function testeAction() {
//         $despesa  = new Despesa();
//         $receita = new Receita();

//         $totalDespesas = $despesa->totalDespesasPorUsuario($this->session->get('usuId'));
         
//         $totalReceitas = $receita->totalReceitasPorUsuario(6);
        
//         var_dump($totalReceitas);
//     }
}

