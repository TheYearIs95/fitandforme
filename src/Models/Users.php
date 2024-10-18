<?php

namespace App\Models;

class Users extends Model
{
    public int $id;
    public string $role;
    public string $name;
    public string $email;
    public string $password;

    public function __construct()
    {
        parent::__construct();
        $this->table = "users";
    }
}
