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
    // Vérifie que l'utilisateur est authentifié avant d'accéder à la page
    $this->isAutheticated();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Appel de la méthode pour télécharger l'image
        $this->uploadImage("event-image");

        // Récupération et nettoyage des données du formulaire
        $infos = [
            'title'     => filter_input(INPUT_POST, "event-title", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'text'      => filter_input(INPUT_POST, "event-description", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            'image'     => $_FILES["event-image"]['name'],
            'user_id'   => $_SESSION["auth"]->id
        ];

        // Insertion des données dans la base de données
        $this->object->insert($infos);

        // Redirection vers la page des événements si c'est ok
        header("location: /event");
    }
    $page_title     = "Ajouter évènement";
    $button_value   = "Ajouter";

    // Inclusion de la vue modify-event
    require "Admin/Views/modify-event.php";
}


    public function update($id)
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $description = filter_input(INPUT_POST, "event-description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $infos = [
                'title'     => filter_input(INPUT_POST, "event-title", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'      => $description,
            ];
            if (!empty($_FILES["event-image"])) {
                $this->uploadImage("event-image");
                $infos['image'] = $_FILES["event-image"]['name'];
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
