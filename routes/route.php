<?php

use App\Routes\Routes;

$route = new Routes();

$route->get('/', ['App\Controller\Controller', 'index']);