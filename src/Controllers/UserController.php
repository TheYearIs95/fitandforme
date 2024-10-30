<?php

namespace App\Controllers;

use App\Models\Users;

class UserController extends MainController
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
                'lastname'  => $_POST["lastname"],
                'email'     => $_POST["email"],
                'role'      => $_POST["role"],
                'password'  => $_POST["password"]
            ];
            $this->object->insert($infos);
            header("location: /user");
        }
        $page_title     = "Ajouter utilisateur";
        $button_value   = "Ajouter";
        require "Admin/Views/modify-user.php";
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'firstname' => $_POST["firstname"],
                'lastname'  => $_POST["lastname"],
                'email'     => $_POST["email"],
                'role'      => $_POST["role"],
                'password'  => $_POST["password"]
            ];
            $this->object->update($infos, $id);
            header("location: /user");
        }
        $user = $this->object->find($id);
        $page_title     = "Modifier utilisateur";
        $button_value   = "Modifier";
        require "Admin/Views/modify-user.php";
    }

    public function delete($id)
    {
        $user = $this->object->find($id);
        $delete = "Voulez vous supprimer l'utilisateur' " . $user->firstname . " " . $user->lastname . " ?";
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            header("location: /user"); //pour rediriger l'utilisateur
        } elseif (isset($_POST["cancel"])) {
            header("location: /user"); //pour rediriger l'utilisateur s'il clique sur non
        }
        $route = "/user";
        require "Admin/Views/delete.php";
    }

    public function login()
    {
        // if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //     $errors = [];
        // }
        header("location: /login");
        // $login = $this->object->find();
    }

    public function logout()
    {

    }
}
