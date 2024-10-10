<?php

namespace App\Models;

class Time extends Model
{
    public int $id;
    public int $day;
    public string $starting_hour;
    public string $ending_hour;
    public int $user_id;
    public int $course_id;

    public function __construct($PDO)
    {
        parent::__construct($PDO);
        $this->table = "time";
    }
}
