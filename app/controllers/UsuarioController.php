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
	    	$newUser->senha = md5($this->request->getPost('senha'));
	    	$newUser->email = $this->request->getPost('email');
	    	
	    	$newUser->save();
	    }
    }


    public function loginAction()
    {
    	$email = $this->request->getPost('email');
    	$senha = $this->request->getPost('senha');

    	$user = Usuario::findFirstByEmail($email);

    	if($user) {
    		if(md5($senha) == $user->senha) {
    		
    			$this->session->set('usuId', $user->usu_id);
    			$this->session->set('usu_nome', $user->nome);
    			
	    		$this->dispatcher->forward(array(
	            		"controller" => "despesa",
	            		"action" => "index"
				));
    		} 

    	}
    }


    public function logoutAction()
    {
        
        $this->session->destroy();

		$response = new \Phalcon\Http\Response();
        $response->redirect('usuario/login');
        $response->send();
    }


    public function testeUserAction(){
    	$email = $this->request->getPost('email');
    	$senha = $this->request->getPost('senha');
    	$user = Usuario::findFirstByEmail($email);
    	var_dump($email);
    	if($user) {
    		if(md5($senha) == $user->senha) {

    			$this->session->set('usuId', $user->usu_id);
    			$this->session->set('usu_nome', $user->nome);
    		} 
    		var_dump("tem usuario" . $this->session->get('usuId'));
    	}
    }
}

