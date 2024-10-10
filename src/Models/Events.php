<?php

namespace App\Models;

class Events extends Model
{
    public int $id;
    public string $title;
    public string $text;
    public string $image;
    public int $user_id;

    public function __construct($PDO)
    {
        parent::__construct($PDO);
        $this->table = "events";
    }
}

