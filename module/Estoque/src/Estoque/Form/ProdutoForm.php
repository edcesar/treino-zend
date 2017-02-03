<?php
namespace Estoque\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class ProdutoForm extends Form
{
	private $add;

	public function __construct()
	{
		parent::__construct('formProduto');	

		# Validação do nome
		$this->add([
		    'type' => 'Text',
		    'name' => 'nome',
		    'attributes' => [
		    	'id' => 'nome',
		    	'class' => 'form-control',
		    	'placeholder' => 'Digite o nome do produto',
		    	'alt' => 'Digite o nome do produto',
		    ]	
		]);


		# Validação do preço
		$this->add([
 		    'type' => 'number',
 		    'name' => 'preco',
 		    'attributes' => [
 		        'id' => 'preco',
 		        'class' => 'form-control',
 		        'placeholder' => 'Digite o preço do produto',
 		        'alt' => 'Digite o preço do produto',
 		    ]	
		]);

		# Validação da descrição
		$this->add([
 		    'type' => 'Textarea',
 		    'name' => 'descricao',
 		    'attributes' => [
 		        'id' => 'descricao', 
 		        'class' => 'form-control',
 		        'placeholder' => 'Digite a descrição do produto',
 		        'alt' => 'Digite a descrição do produto',
 		    ]	
		]);
	}
}