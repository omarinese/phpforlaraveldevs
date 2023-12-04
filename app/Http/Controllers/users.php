<?php
use Framework\App;

$users = App::get('database')->selectAll('users');

//$greeting = greet();
//require 'app/index.php';
require '../resources/views/users.blade.php';