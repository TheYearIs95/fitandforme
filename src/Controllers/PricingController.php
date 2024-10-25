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
        $prices = $this->object->findAll();
        require "Admin/Views/manage-price.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'type'      => $_POST["formula"],
                'session'   => $_POST["session"],
                'price'     => $_POST["price"],
                'user_id'   => "1"
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $description = $_POST["event-description"];
            $infos = [
                'type'      => $_POST["formula"],
                'session'   => $_POST["session"],
                'price'     => $_POST["price"],
                'user_id'   => "1"
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
