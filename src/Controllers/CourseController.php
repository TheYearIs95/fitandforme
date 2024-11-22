<?php

namespace App\Controllers;

use App\Models\Courses;
use App\Models\Time;

class CourseController extends MainController
{
    private $object;

    public function __construct()
    {
        parent::__construct();
        $this->object = new Courses();
    }

    public function index()
    {
        $this->isAutheticated();
        $courses = $this->object->findAll();
        require "Admin/Views/manage-course.php";
    }

    public function create()
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->uploadImage("event-image");
            $infos = [
                'title'     => filter_input(INPUT_POST, "course-name", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'      => filter_input(INPUT_POST, "course-description", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'image'     => $_FILES["course-image"]['name'],
                'user_id'   => $_SESSION["auth"]->id
            ];
            $id = $this->object->insert($infos);

            $infos = [
                'day'           => filter_input(INPUT_POST, "day", FILTER_SANITIZE_NUMBER_INT),
                'starting_time' => filter_input(INPUT_POST, "starting-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'ending_time'   => filter_input(INPUT_POST, "ending-time", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'course_id'     => $id,
                'user_id'       => $_SESSION["auth"]->id
            ];
            $time = new Time();
            $time->insert($infos);
            header("location: /course/index");
        }
        $page_title = "Ajouter cours";
        $button_value = "Ajouter";
        require "Admin/Views/modify-course.php";
    }

    public function update($id)
    {
        $this->isAutheticated();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $description = filter_input(INPUT_POST, "course-description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $infos = [
                'title'     => filter_input(INPUT_POST, "course-name", FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                'text'      => $description,
                'user_id'   => $_SESSION["auth"]->id
            ];

            if (!empty($_POST["course-image"])) {
                $infos['image'] = $_FILES["course-image"]['name'];
            }
            $this->object->update($infos, $id);
            header("location: /course");
        }
        $page_title = "Modifier cours";
        $button_value = "Modifier";
        $course = $this->object->find($id);
        $description = $course->text;
        require "Admin/Views/modify-course.php";
    }

    public function delete($id)
    {
        $this->isAutheticated();
        $course = $this->object->find($id);
        $delete = "Voulez vous supprimer le cours " . $course->title . " ?";
        if (isset($_POST["confirm"])) {
            $this->object->delete($id);
            header("location: /course"); //pour rediriger l'utilisateur
        } elseif (isset($_POST["cancel"])) {
            header("location: /course"); //pour rediriger l'utilisateur s'il clique sur non
        }
        $route = "/course";
        require "Admin/Views/delete.php";
    }
}
