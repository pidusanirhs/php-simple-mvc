<?php

use App\Core\Router;
use App\Core\Request;

require('vendor/autoload.php');
require('core/appbootstrap.php');

Router::load('routes.php')->direct(Request::getUri(), Request::method());
