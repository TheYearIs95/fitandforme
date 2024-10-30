<?php

namespace App\Controllers;

class PlanningController
{
    private $object;

    public function __construct()
    {
        // $this->object = new Contact();
    }

    public function index()
    {
        // $courses = $this->object->findAll();
        require "./Views/planning.php";
    }
}
