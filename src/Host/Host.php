<?php

namespace App\Host;

use PDO;
use PDOException;

class Host extends PDO
{
    private static $instance;
    private const DBHOST = "localhost"; // Adresse du serveur de base de données
    private const DBUSER = "root";      // Nom d'utilisateur pour se connecter à la base
    private const DBPASS = "";          // Mot de passe (ici vide en local et sur Windows)
    private const DBNAME = "fit_andforme"; // Nom de la base de données

    public function __construct()
    {
        // Définir la chaîne DSN pour la connexion
        $_dsn = 'mysql:dbname=' . self::DBNAME . ";host=" . self::DBHOST;
        try {
            // Appeler le constructeur parent pour établir la connexion
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            // Configurer l'encodage des caractères pour éviter les problèmes avec UTF-8
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf-8');

            // Définir le mode de récupération des résultats sous forme d'objets
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            // Activer les exceptions pour gérer les erreurs de façon propre
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            // Afficher le message d'erreur si la connexion échoue
            die($exception->getMessage());
        }
    }

    public function getInstance(): PDO
    {
        // Retourner une seule instance pour optimiser les ressources (pattern Singleton)
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}



