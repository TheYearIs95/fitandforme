<?php

namespace App\Host;

use PDO;
use PDOException;

class Host extends PDO
{
    private static $instance;
    private const DBHOST = "localhost";
    private const DBUSER = "root";
    private const DBPASS = "";
    private const DBNAME = "fit_andforme";

    public function __construct()
    {
        $_dsn = 'mysql:dbname=' . self::DBNAME . ";host=" . self::DBHOST;
        try {
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf-8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) { //$exception pour pouvoir appeler les methodes propres à la classe PDOException
            die($exception->getMessage());
        }
    }

    public function getInstance():PDO 
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
