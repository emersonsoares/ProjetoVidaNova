<?php
App::uses('AppController', 'Controller');

class TrustAppController extends AppController {

    public $components = array('Auth', 'Session', 'DebugKit.Toolbar');
    public $helpers = array('Html', 'Form', 'Session', 'Thumbnail', 'Time', 'TinyMce');
    
    function beforeFilter() {
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'plugin' => 'trust');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'plugin' => 'trust');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'index', 'plugin' => 'trust');
    }

}

?>
