<?php

namespace App\Controllers;

use App\Host\Host;
use App\Models\Courses;
use App\Models\Events;

class MainController extends Host
{
    protected Host $pdo;
    public function __construct()
    {
        $this->pdo = Host::getInstance();
    }
    public function index() 
    {
        require "Views/home.php";
    }
}
