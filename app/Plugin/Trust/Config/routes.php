<?php

Router::connect('/trust', array('controller' => 'users', 'action' => 'login', 'plugin' => 'trust'));