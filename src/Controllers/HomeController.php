<?php

namespace App\Controllers;

use App\Models\Courses;
use App\Models\Events;

class HomeController
{
    private $object;

    public function __construct()
    {
        $this->object = new Courses();
        $this->object = new Events();
    }

    public function index()
    {
        // $courses = $this->object->findAll();
        require "./Views/home.php";
    }
}
