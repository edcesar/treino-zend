<?php
namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Estoque\Entity\Produto;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$entityManager  = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
		$repositorio = $entityManager->getRepository('Estoque\Entity\Produto');

		$produtos = $repositorio->findAll();

		$viewParans = array('produtos' => $produtos);

		return new ViewModel($viewParans);
	}
}