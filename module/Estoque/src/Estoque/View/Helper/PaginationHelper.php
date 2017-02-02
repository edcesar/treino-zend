<?php
namespace Estoque\View\Helper;

use Zend\View\Helper\AbstractHelper;

class PaginationHelper extends AbstractHelper
{
	private $url;
	private $totalProdutos;
	private $qtdPagina;

	public function __invoke($produtos, $qtdPagina, $url)
	{
		$this->totalProdutos = $produtos->count();
		$this->qtdPagina = $qtdPagina;
		$this->url = $url;

		return $this->gerarPaginacao();
	}

	private function gerarPaginacao()
	{
		$totalPaginas = ceil($this->totalProdutos / $this->qtdPagina);

		if ($totalPaginas == 1) {
			return;
		}
		$html = '<ul class="nav nav-pills">'; 
		
		$contador = 0;
		while ($contador < $totalPaginas) {

			$html .= "<li><a href=\"{$this->url}\\{$contador}\">{$contador}</a></li>";
			
			$contador++;
		}

		$html .= '</ul>';

		return $html;
	}
}