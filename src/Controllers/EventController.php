<?php

namespace App\Controllers;

use App\Models\Events;

class EventController extends MainController
{
    private $object;

    public function __construct()
    {
        $this->object = new Events();
    }

    public function index()
    {
        $this->isAutheticated();
        $events = $this->object->findAll();
        require "Admin/Views/manage-event.php";
    }

    public function create()
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $infos = [
                'title'     => $_POST["event-title"],
                'text'      => $_POST["event-description"],
                'image'     => $_POST["event-image"],
                'user_id'   => "1"
            ];
            $this->object->insert($infos);
            header("location: /event");
        }
        $page_title     = "Ajouter évènement";
        $button_value   = "Ajouter";
        require "Admin/Views/modify-event.php";
    }

    public function update($id)
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $description = $_POST["event-description"];
            $infos = [
                'title'     => $_POST["event-title"],
                'text'      => $description,
                'user_id'   => "1"
            ];
            if (!empty($_POST["event-image"])) {
                $infos['image'] = $_POST["event-image"];
            }
            $this->object->update($infos, $id);
            header("location: /event");
        }
        $page_title     = "Modifier évènement";
        $button_value   = "Modifier";
        $event          = $this->object->find($id);
        $description    = $event->text;
        require "Admin/Views/modify-event.php";
    }

    public function delete($id)
    {
        $this->isAutheticated();
        $event = $this->object->find($id);
        $delete = "Voulez vous supprimer l'évènement " . $event->title . " ?";
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            header("location: /event");
        } elseif (isset($_POST["cancel"])) {
            header("location: /event"); //pour rediriger l'utilisateur s'il clique sur non
        }
        $route = "/event";
        require "Admin/Views/delete.php";
    }
}
