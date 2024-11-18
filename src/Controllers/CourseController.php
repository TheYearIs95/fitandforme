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
            $infos = [
                'title' => $_POST["course-name"],
                'text' => $_POST["course-description"],
                'image' => $_POST["course-image"],
                'user_id' => "1"
            ];
            $id = $this->object->insert($infos);

            $infos = [
                'day' => $_POST["day"],
                'starting_time' => $_POST["starting-time"],
                'ending_time' => $_POST["ending-time"],
                'course_id' => $id,
                'user_id' => "1"
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

            $description = $_POST["course-description"];

            $infos = [
                'title' => $_POST["course-name"],
                'text' => $description,
                'user_id' => "1"
            ];

            if (!empty($_POST["course-image"])) {
                $infos['image'] = $_POST["course-image"];
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
