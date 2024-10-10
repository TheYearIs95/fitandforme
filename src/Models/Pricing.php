<?php

namespace App\Models;

class Pricing extends Model
{
    public int $id;
    public int $type;
    public int $session_number;
    public float $price;
    public int $user_id;

    public function __construct($PDO)
    {
        parent::__construct($PDO);
        $this->table = "pricing";
    }
}


