<?php

return array(
    'router' => array(
        'routes' => array(
            'application' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/[:controller[/:action[/:id]]]',
                    'constraint' => array(
                      'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                      'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                      'id' => '[0-9]*',    
                    ),
                    'defaults' => array(
                    	'__NAMESPACE__' => 'Estoque\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
            ),


            'produtos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/Produtos[/:page]',
                    'constraint' => array(
                      'page' => '[0-9]*',    
                    ),
                    'defaults' => array(
                      '__NAMESPACE__' => 'Estoque\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                        'page' => 1,
                    ),
                ),
            ),


         ),
      ),
	    'controllers' => array(
	        'invokables' => array(
	            'Estoque\Controller\Index' => 'Estoque\Controller\IndexController',
              'Estoque\Controller\Usuario' => 'Estoque\Controller\UsuarioController',
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
      ),
      'view_helpers' => array(
        'invokables' => array(
          'FlashHelper' => 'Estoque\View\Helper\FlashHelper',
          'PaginationHelper' => 'Estoque\View\Helper\PaginationHelper',
          )
        ),
      
	      'doctrine' => array(
          'driver' => array(
            'application_entities' => array(
              'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
              'cache' => 'array',
              'paths' => array(__DIR__ . '/../src/Estoque/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Estoque\Entity' => 'application_entities'
                ),
            ),
            
        ),
          'authentication' => [
              'orm_default' => [
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Estoque\Entity\Usuario',
                'identity_property' => 'email',
                'credential_property' => 'senha',
                'credentialCallable' => function($user ,$senha){
                  return $user->getSenha() == md5($senha);
                }
              ]
            ],
    ),
      
	  
    );