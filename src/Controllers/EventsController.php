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
        require "./Views/evenements.php";
    }
}
