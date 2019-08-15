<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 6-6-2019
 * Time: 16:24
 */

namespace database\vragen;

use PDO;

class DatabaseVragen
{
    protected $table;
    private $pdo;
    private $sql = '';

    public function __construct(PDO $pdo, string $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    public function vind($id){
        $dbData = $this->pdo->query("SELECT * FROM $this->table WHERE id = $id;");
        $data = $dbData->fetch();
        return $data;
    }

    public function alles(){
        $dbData = $this->pdo->prepare("SELECT * FROM $this->table;");
        $dbData->execute();
        $data = $dbData->fetchAll();;
        return $data;
    }

    public function waar(string $kolom, string $id){
        if ($this->sql === '') {
            $this->sql = "WHERE $kolom = $id";
        } else {
            $this->sql .= " AND $kolom = $id";
        }

        return $this;
    }

    public function voerSqlUit(){
        $dbData = $this->pdo->prepare("SELECT * FROM $this->table $this->sql;");
        $dbData->execute();
        $data = $dbData->fetchAll();;
        return $data;
    }


    public function opslaan($dataObject){
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
