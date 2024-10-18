<?php
use App\Router\Router;
define('ROOT',dirname(__DIR__));
require "vendor/autoload.php";

$router = new Router();
$router->start(); 