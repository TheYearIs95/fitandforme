<?php

namespace App\Controllers;

use App\Host\Host;

class MainController extends Host
{
    protected Host $pdo;
    public function __construct()
    {
        $this->pdo = Host::getInstance();
    }
    public function index() 
    {}
}
