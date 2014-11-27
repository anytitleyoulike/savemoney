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
    	
        $totalDespesa = Despesa::sum(array(
                "column" => "valor",
                "condition" => "usuId == 2")
        );
        
        $totalReceita = Receita::sum(array(
                "column" => "valor",
                "condition" => "usuId == 2")
        );

        $total = $totalDespesa + $totalReceita;
        
    	$porcentagemDespesa = number_format(($totalDespesa/$total)*100,1);
    	$porcentagemReceita = number_format(($totalReceita/$total)*100,1);
    	
    	$this->view->porcentagemDespesa = $porcentagemDespesa;
    	$this->view->porcentagemReceita = $porcentagemReceita;

        $this->view->totalDespesa = $totalDespesa;
        $this->view->totalReceita = $totalReceita;
        $this->view->balanco = $totalReceita-$totalDespesa;
    }

    public function testeAction() {
        $a = $this->calculaBalanco();
        var_dump($a);
    }
    public function calculaBalanco() {

        


        $total = $totalDespesa + $totalReceita;
        return $total;

    }
}

