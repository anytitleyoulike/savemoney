<?php

class UsuarioController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function addAction() 
    {
    	if($this->request->isPost()) {
	    	$newUser = new Usuario();

	    	$newUser->nome = $this->request->getPost('nome');
	    	$newUser->senha = $this->request->getPost('senha');
	    	$newUser->email = $this->request->getPost('email');
	    	
	    	$newUser->save();
	    }
    }
}

