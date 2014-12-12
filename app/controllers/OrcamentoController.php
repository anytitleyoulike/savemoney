<?php

class OrcamentoController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$total = Despesa::sum(array(
    			"column" => "valor",
    			"condition" => "usuId == 2")
    	);
    	var_dump($total);
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

    public function testeAction() {
        $despesa  = new Despesa();
        $receita = new Receita();

        $totalDespesas = $despesa->totalDespesasPorUsuario($this->session->get('usuId'));
         
        $totalReceitas = $receita->totalReceitasPorUsuario(6);
        
        var_dump($totalReceitas);
    }
}

