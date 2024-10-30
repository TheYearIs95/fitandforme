<?php

namespace App\Controllers;

use App\Models\Courses;

class CoursesController
{
    private $object;

    public function __construct()
    {
        $this->object = new Courses();
    }

    public function index()
    {
        // $courses = $this->object->findAll();
        require "./Views/cours.php";
    }
}
