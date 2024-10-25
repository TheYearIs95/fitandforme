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
    public function findAll()
    {
        $req = "SELECT $this->table.*, role_name FROM $this->table
        JOIN roles ON roles.id = role";
        $result = $this->PDO->prepare($req);
        $result->execute();
        return $result->fetchAll();
    }
}
