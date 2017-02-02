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

	public function cadastrarAction()
	{
		if ($this->request->isPost()) {
			
			$nome = $this->request->getPost('nome');
			$preco = $this->request->getPost('preco');
			$descricao = $this->request->getPost('descricao');

			$produtos = new Produto($nome, $preco, $descricao);

			$entityManager  = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
			$entityManager->persist($produtos);
			$entityManager->flush();

			return $this->redirect()->toUrl('index');
		}

		return new ViewModel();
	}

	public function removerAction()
	{
		return new ViewModel();
	}
}