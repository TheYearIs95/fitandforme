<?php

namespace App\Controllers;

use App\Models\Events;

class EventsController
{
    private $object;

    public function __construct()
    {
        $this->object = new Events();
    }

    public function index()
    {
        // $courses = $this->object->findAll();
        require "./Views/evenements.php";
    }
}
