<?php

namespace App\Models;

class Courses extends Model
{
    public int $id;
    public string $title;
    public string $text;
    public string $image;
    public int $user_id;
    public int $time_id;

    public function __construct()
    {
        parent::__construct();
        $this->table = "courses";
    }
}