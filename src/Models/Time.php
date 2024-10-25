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

    public function __construct()
    {
        parent::__construct();
        $this->table = "time";
    }

    public function findAll()
    {
        $req = "SELECT $this->table.*, courses.title FROM $this->table
        JOIN courses ON courses.id = time.course_id";
        $result = $this->PDO->prepare($req);
        $result->execute();
        return $result->fetchAll();
    }
}
