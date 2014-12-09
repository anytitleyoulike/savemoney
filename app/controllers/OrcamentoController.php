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
    	
        
        $totalDespesa = $this->calculaTotalDespesas();
        $totalReceita = $this->calculaTotalReceitas();

        $total = $totalDespesa + $totalReceita;

    	$porcentagemDespesa = number_format(($totalDespesa/$total)*100,1);
    	$porcentagemReceita = number_format(($totalReceita/$total)*100,1);
    	
    	$this->view->porcentagemDespesa = $porcentagemDespesa;
    	$this->view->porcentagemReceita = $porcentagemReceita;

        $this->view->totalDespesa = $totalDespesa;
        $this->view->totalReceita = $totalReceita;
        $this->view->balanco = $totalReceita-$totalDespesa;
    }

    public function calculaTotalDespesas() 
    {
        $totalDespesa = Despesa::sum(array(
                "column" => "valor",
                "condition" => "usuId == 2")
        );

        return $totalDespesa;
    }

    public function calculaTotalReceitas() 
    { 
        $totalReceita = Receita::sum(array(
                "column" => "valor",
                "condition" => "usuId == 2")
        );

        return $totalReceita;
    }
}

