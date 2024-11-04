<?php
use App\Router\Router;
define('ROOT',dirname(__DIR__));
session_start();
require "vendor/autoload.php";

$router = new Router();
$router->start(); 