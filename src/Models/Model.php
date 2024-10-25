<?php

namespace App\Models;

use App\Host\Host;

class Model extends Host
{
    protected $PDO;
    protected string $table;

    public function __construct()
    {
        $this->PDO = Host::getInstance();
    }

    public function findAll()
    {
        $req = "SELECT * FROM $this->table";
        $result = $this->PDO->prepare($req);
        $result->execute();
        return $result->fetchAll();
    }

    public function find($id)
    {
        $req = "SELECT * FROM $this->table
        WHERE id = :id";
        $result = $this->PDO->prepare($req);
        $result->bindValue(":id", $id);
        $result->execute();
        return $result->fetch(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $req = "DELETE FROM $this->table
        WHERE id = :id";
        $result = $this->PDO->prepare($req);
        $result->bindValue(":id", $id);
        $result->execute();
        return $result->fetch(\PDO::FETCH_OBJ);
    }

    public function insert(array $infos)
    {
        $keys = implode(", ", array_keys($infos)); // implode est une fonction native qui sert à récuperer des elements d'une variable tout en les séparant avec un séparateur (, dans cet exemple)
        $placeholders = ":" . implode(", :", array_keys($infos)); // les 2 points avant le implode sont là parce que sinon le 1er element n'aura pas de : au début

        $req = "INSERT INTO $this->table ($keys)
        VALUES ($placeholders)";
        $result = $this->PDO->prepare($req);

        foreach ($infos as $key => $value) {
            $result->bindValue(":$key", $value);
        }
        $result->execute();
        return $this->PDO->lastInsertId();
    }

    public function update(array $infos, $id)
    {
        $setClause = [];
        foreach ($infos as $key => $value) {
            $setClause[] = "$key = :$key";
        }
        $setClauseStr = implode(", ", $setClause);

        $req = "UPDATE $this->table SET $setClauseStr 
        WHERE id = :id";
        $result = $this->PDO->prepare($req);

        foreach ($infos as $key => $value) {
            $result->bindValue(":$key", $value);
        }
        $result->bindValue(":id", $id);
        $result->execute();
    }
}
