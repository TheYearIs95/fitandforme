<?php

namespace App\Router;

use App\Controllers\MainController;

class Router
{
    public function start()
    {
        // Récupère l'URI actuelle
        $uri = $_SERVER['REQUEST_URI'];

        // Supprime le '/' final si nécessaire et redirige avec un code 301
        if (!empty($uri) && $uri != '/' && $uri[-1] === "/") {
            $uri = substr($uri, 0, -1);
            http_response_code(301);
            header('Location: ' . $uri);
        }

        // Transforme l'URL en paramètres sous forme d'un tableau
        $params = isset($_GET['url']) ? explode('/', $_GET['url']) : [''];

        if ($params[0] != '') {
            // Détermine le contrôleur à partir du premier paramètre
            $controller = "\\App\\Controllers\\" . ucfirst(array_shift($params)) . 'Controller';
            $controller = new $controller;

            // Récupère l'action ou utilise 'index' par défaut
            $action = isset($params[0]) ? array_shift($params) : 'index';

            if (method_exists($controller, $action)) {
                // Exécute l'action avec ou sans paramètres
                $controller->$action(...$params);
            } else {
                // Retourne une erreur 404 si l'action n'existe pas
                http_response_code(404);
                echo 'Page introuvable';
            }
        } else {
            // Charge le contrôleur et l'action par défaut
            $controller = new MainController;
            $controller->index();
        }
    }
}
