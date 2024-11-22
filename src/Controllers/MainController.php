<?php

namespace App\Controllers;

use App\Host\Host;
use App\Models\Courses;
use App\Models\Events;

class MainController extends Host
{
    protected Host $pdo;
    public function __construct()
    {
        $this->pdo = Host::getInstance();
    }
    public function index()
    {
        require "Views/home.php";
    }

    public function isAutheticated()
    {
        if (!isset($_SESSION['auth'])) {
            header('location: /user/login');
        }
    }

    public function extensionVerify($name)
    {
        $extensions = [".jpg",".jpeg","webp", ".png"];
        $imageExtension = strrchr($name, ".");
        if (in_array($imageExtension, $extensions)) {
            return true;
        }
        return false;
    }

    public function uploadImage($imageInput)
    {
        if ($this->extensionVerify($_FILES[$imageInput]['name'])) {
            move_uploaded_file($_FILES[$imageInput]['tmp_name'], 'Public/img/'.$_FILES[$imageInput]['name']);
        }
    }
}
