<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 6-6-2019
 * Time: 16:24
 */

namespace database\queries;

use PDO;

class DatabaseQueries
{

    protected $table;
    private $pdo;

    public function __construct(PDO $pdo, string $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    public function find($id){
        $dbData = $this->pdo->query("SELECT * FROM $this->table WHERE id = $id;");

        $data = [];
        while ($row = $dbData->fetch()){
            $data[] = $row;
        };
        return $data;
    }

    public function all(){
        $dbData = $this->pdo->query("SELECT * FROM $this->table;");
        $data = [];
        while ($row = $dbData->fetch()){
            $data[] = $row;
        };
        return $data;
    }

    public function store($dataObject){
        $columns = implode(",", array_keys($dataObject));
        $values = implode(",", array_keys($dataObject));
        $dbStatement = $this->pdo->prepare("INSERT INTO $this->table ($columns) VALUES ($values);");
        $dbStatement->execute();
    }

    public function update($dataObject, $id){
        $columns = implode(",", array_keys($dataObject));
        $values = implode(",", array_keys($dataObject));
        $dbStatement = $this->pdo->prepare("UPDATE $this->table SET WHERE id = $id;");
        $dbStatement->execute();
    }

    public function delete($id){
        $dbStatement = $this->pdo->prepare("DELETE FROM $this->table WHERE id === $id");
        $dbStatement->execute();
    }
}
