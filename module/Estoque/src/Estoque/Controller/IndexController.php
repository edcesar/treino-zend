<?php
namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$produtos = [];

		$produtos[] = ['nome' =>'Playstation 4', 'preco' => '2700', 'descricao' => 'Video Game da Sony'];
		$produtos[] = ['nome' =>'Xbox 360', 'preco' => '2500', 'descricao' => 'Video game da Microsoft'];
		$produtos[] = ['nome' =>'Nitendo Wii', 'preco' => '1500', 'descricao' => 'Video game da Nitendo'];


		$viewParans = array('produtos' => $produtos);


		return new ViewModel($viewParans);


	}
}