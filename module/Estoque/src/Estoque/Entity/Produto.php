<?php
namespace Estoque\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produto
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
}