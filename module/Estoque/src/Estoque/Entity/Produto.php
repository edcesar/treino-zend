<?php
namespace Estoque\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilter;

/**
 * @ORM\Entity(repositoryClass="\Estoque\Entity\Repository\ProdutoRepository")
 */
class Produto implements InputFilterAwareInterface
{
	/**
	 * @ORM\Column(type="integer")
 	 * @ORM\Id
 	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $nome;

	/**
	 * @ORM\Column(type="decimal", scale=2)
	 */
	private $preco;

	/**
	 * @ORM\Column(type="string")
	 */
	private $descricao;

	public function __construct($nome, $preco, $descricao)
	{
		$this->setNome($nome);
		$this->setPreco($preco);
		$this->setDescricao($descricao);
	}

	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setPreco($preco)
	{
		$this->preco = $preco;
	}

	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	public function setInputFilter(InputFilterInterface $inputFilter)
	{
		throw new Exception("Você não deve invocar esse metodo!", 1);
		
	}

	public function getInputFilter()
	{
		$inputFilter = new InputFilter();

		$inputFilter->add([
			'name' => 'nome',
			'required' => true,
			'validators' => [
			    [
			    	'name' => 'StringLength',
			    	'options' => [
			    		'min' => 3,
			    		'max' => 100,
			    	]
			    ],
			],
		]);

		return $inputFilter;
	}

}