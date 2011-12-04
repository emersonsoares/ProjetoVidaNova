<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
Router::connect('/', array('controller' => 'custom_pages', 'action' => 'index'));
Router::connect('/verses/*', array('controller' => 'custom_pages', 'action' => 'index'));
Router::connect('/agenda', array('controller'=>'calendars'));

Router::connect('/publicacoes', array('controller' => 'posts', 'action' => 'index'));

Router::connect('/sobre_o_projeto_vida_nova', array('controller' => 'custom_pages', 'action' => 'view', 1));
Router::connect('/nossa_localizacao', array('controller' => 'custom_pages', 'action' => 'location'));
Router::connect('/nossa_clinica', array('controller' => 'custom_pages', 'action' => 'view', 3));
Router::connect('/tratamentos', array('controller' => 'custom_pages', 'action' => 'view', 4));

Router::connect('/contate_nos', array('controller' => 'contacts', 'action' => 'index'));

Router::connect('/trust/contacts/*', array('controller' => 'contacts', 'action' => 'index', 'plugin' => 'trust'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
Router::connect('/trust', array('controller' => 'users', 'action' => 'login', 'plugin' => 'trust'));
Router::connect('/admin', array('controller' => 'users', 'action' => 'login', 'plugin' => 'trust'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
