<?php
namespace Estoque\View\Helper; 

use Zend\View\Helper\AbstractHelper;

class FlashHelper extends AbstractHelper
{
	public function __invoke()
	{
		 echo $this->view->flashMessenger()->render('default', ['alert', 'alert-info']);
         echo $this->view->flashMessenger()->render('error', ['alert', 'alert-danger']);
         echo $this->view->flashMessenger()->render('success', ['alert', 'alert-success']);
       
	}
}