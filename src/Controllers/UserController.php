<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    private $object;

    public function __construct()
    {
        $this->object = new Users();
    }

    public function index()
    {
        $users = $this->object->findAll();
        require "Admin/Views/manage-user.php"; 
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'firstname' => $_POST["firstname"],
                'lastname' => $_POST["lastname"],
                'email' => $_POST["email"],
                'role' => $_POST["role"],
                'password' => $_POST["password"]
            ];
            $this->object->insert($infos);
            // header("location:");
        } else {
            // require "view modify-user";
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'firstname' => $_POST["firstname"],
                'lastname' => $_POST["lastname"],
                'email' => $_POST["email"],
                'role' => $_POST["role"],
                'password' => $_POST["password"]
            ];
            $this->object->update($infos, $id);
            // header("location:")
        }
        $user = $this->object->find($id);
        // require "view modify-user";
    }

    public function delete($id)
    {
        $user = $this->object->find($id);
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            // header("location:") pour rediriger l'utilisateur
        } elseif (isset($_POST["cancel"])) {
            // header("location:") je redirige l'utilisateur s'il clique sur non
        }
        // require "view delete";
    }

    public function login()
    {
        require "Admin/Views/login.php";
    }
}
