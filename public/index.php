<?php

use Framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

$routes = require '../routes.php';


App::get('router')->redirect($_SERVER['REQUEST_URI']);

