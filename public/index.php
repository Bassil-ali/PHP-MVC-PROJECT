<?php

use secheater\Http\Route;
use secheater\Http\Request;
use secheater\Http\Response;


require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';


$route = new Route(new Request,new Response);

var_dump($route);
