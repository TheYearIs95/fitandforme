<?php

namespace App\Controllers;

use App\Models\Pricing;

class PricingController extends MainController
{
    private $object;

    public function __construct()
    {
        $this->object = new Pricing();
    }

    public function index()
    {
        $this->isAutheticated();
        $prices = $this->object->findAll();
        require "Admin/Views/manage-price.php";
    }

    public function create()
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'type'      => $_POST["formula"],
                'session'   => filter_input(INPUT_POST, "session", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'price'     => filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_FLOAT),
                'user_id'   => $_SESSION["auth"]->id
            ];
            $this->object->insert($infos);
            header("location: /pricing");
        }
        $page_title      = "Ajouter session";
        $button_value    = "Ajouter";
        require "Admin/Views/modify-price.php";
    }

    public function update($id)
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'type'      => $_POST["formula"],
                'session'   => filter_input(INPUT_POST, "session", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'price'     => filter_input(INPUT_POST, "price", FILTER_SANITIZE_NUMBER_FLOAT),
                'user_id'   => $_SESSION["auth"]->id
            ];

            $this->object->update($infos, $id);
            header("location: /pricing");
        }
        $page_title     = "Modifier session";
        $button_value   = "Modifier";
        $price          = $this->object->find($id);
        require "Admin/Views/modify-price.php";
    }

    public function delete($id)
    {
        $this->isAutheticated();
        $price = $this->object->find($id);
        $delete = "Voulez vous supprimer la session " . $price->session . " ?";
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            header("location: /pricing"); //pour rediriger l'utilisateur
        } elseif (isset($_POST["cancel"])) {
            header("location: /pricing"); //pour rediriger l'utilisateur s'il clique sur non
        }
        $route = "/pricing";
        require "Admin/Views/delete.php";
    }
}
