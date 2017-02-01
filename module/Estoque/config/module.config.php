<?php

return array(
    'router' => array(
        'routes' => array(
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/app',
                    'defaults' => array(
                    	'__NAMESPACE__' => 'Estoque\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),
         ),
      ),
	    'controllers' => array(
	        'invokables' => array(
	            'Estoque\Controller\Index' => 'Estoque\Controller\IndexController'
	        ),
	    ),
	    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/Estoque/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
    );