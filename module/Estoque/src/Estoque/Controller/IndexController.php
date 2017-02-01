<?php
namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		echo 'Bem vindo ao Zend Framework'; exit;
	}
}