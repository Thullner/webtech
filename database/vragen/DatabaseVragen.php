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
    protected $pdo;
    private $sql = '';

    public function __construct(PDO $pdo, string $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    public function vind($id){
        $dbData = $this->pdo->prepare("SELECT * FROM $this->table WHERE id = $id;");
        $dbData->execute();
        $data = $dbData->fetch();
        return $data;
    }

    public function alles(){
        $dbData = $this->pdo->prepare("SELECT * FROM $this->table;");
        $dbData->execute();
        $data = $dbData->fetchAll();;
        return $data;
    }

    public function waar(string $kolom, $value){

        if (!is_numeric($value)) {
            $value = "'" . $value . "'";
        }

        if ($this->sql === '') {
            $this->sql = "WHERE $kolom = $value";
        } else {
            $this->sql .= " AND $kolom = $value";
        }

        return $this;
    }

    public function verkrijgData(){
        $dbData = $this->pdo->prepare("SELECT * FROM $this->table $this->sql;");
        $dbData->execute();
        $data = $dbData->fetchAll();;
        return $data;
    }

}
