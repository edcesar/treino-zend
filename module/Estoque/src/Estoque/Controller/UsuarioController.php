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
			
		} else {
			return $this->redirect()->toUrl('/Usuario/index');
		}
	}
}