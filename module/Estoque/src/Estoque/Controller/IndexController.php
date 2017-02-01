<?php
namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$msg = 'Bem vindo ao Zend Framework!'; 


		$viewParans = array('msg' => $msg);


		return new ViewModel($viewParans);


	}
}