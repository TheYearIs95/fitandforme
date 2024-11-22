<?php

namespace App\Controllers;

use App\Models\Courses;
use App\Models\Time;

class TimeController extends MainController
{
    private $object;

    public function __construct()
    {
        parent::__construct();
        $this->object = new Time();
    }

    public function index()
    {
        $this->isAutheticated();
        $times = $this->object->findAll();
        require "Admin/Views/manage-planning.php";
    }

    public function create()
    {
        $this->isAutheticated();
        $course = new Courses;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $course->id;
            $infos = [
                'day' => filter_input(INPUT_POST, "day", FILTER_SANITIZE_NUMBER_INT),
                'starting-time' => filter_input(INPUT_POST, "starting-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'ending-time'   => filter_input(INPUT_POST, "ending-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'course_id'     => $id,
                'user_id'       => $_SESSION["auth"]->id
            ];
            $this->object->insert($infos);
            header("location: /Time");
        } else {
            $page_title = "Ajouter séance";
            $button_value = "Ajouter";
            $courses = $course->findAll();
            require "Admin/Views/modify-planning.php";
        }
    }

    public function update($id)
    {
        $this->isAutheticated();
        $course = new Courses;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $course->id;
            $infos = [
                'day' => filter_input(INPUT_POST, "day", FILTER_SANITIZE_NUMBER_INT),
                'starting-time' => filter_input(INPUT_POST, "starting-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'ending-time'   => filter_input(INPUT_POST, "ending-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'course_id'     => $id,
            ];
            $this->object->update($infos, $id);
            header("location: /Time");
        }
        $time = $this->object->find($id);
        $courses = $course->findAll();
        $page_title = "Modifier séance";
        $button_value = "Modifier";
        require "Admin/Views/modify-planning.php";
    }

    public function delete($id)
    {
        $this->isAutheticated();
        $time = $this->object->find($id);
        $delete = "Voulez vous supprimer la séance du " . $time->day . " ?";
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            header("location: /time"); //pour rediriger l'utilisateur
        } elseif (isset($_POST["cancel"])) {
            header("location: /time"); //pour rediriger l'utilisateur s'il clique sur non
        }
        $route = "/time";
        require "Admin/Views/delete.php";
    }
}
