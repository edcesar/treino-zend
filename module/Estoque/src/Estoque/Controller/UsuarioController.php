<?php
namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsuarioController extends AbstractActionController
{
	public function indexAction()
	{
		return new ViewModel();
	}

	public function loginAction()
	{
		if ($this->request->isPost()) {
			
			$dados = $this->request->getPost();

		    $authService = $this->getServiceLocator()->get('Zend\Authentication\AuthenticationService');

		    $authAdapter = $authService->getAdapter();

		    $authAdapter->setIdentityValue($dados['email']);

		    $authAdapter->setCredentialValue($dados['password']);
    		
		    $authResult =  $authAdapter->authenticate();
		   
		    if ($authResult->isValid()) {
		    	return $this->redirect()->toUrl('/Index/cadastrar');
		    }
		    
		    $this->flashMessenger()->addErrorMessage('Não lhe reconheci. Seu E-mail e senha foram digitados corretamente?');

		    return $this->redirect()->toUrl('/Usuario/index');

		} else {
			return $this->redirect()->toUrl('/Usuario/index');
		}
	}
}