<?php

namespace App\Controllers;

// use App\Models\Contact;

class ContactController
{
    // private $object;

    public function __construct()
    {
        // $this->object = new Contact();
    }

    public function index()
    {
        // $courses = $this->object->findAll();
        require "./Views/contact.php";
    }
}
