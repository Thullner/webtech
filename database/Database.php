<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 6-6-2019
 * Time: 13:46
 */

namespace database;

use PDO;

class Database
{

    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct($hostname, $dbname, $username, $password)
    {
        $this->hostname = $hostname;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $this->setupConnection();
    }

    public function getPDO () {
        return $this->pdo;
    }

    private function setupConnection(){
        $this->pdo = new PDO(
            "mysql:host=$this->hostname;dbname=$this->dbname",
            $this->username,
            $this->password);
    }

    public function setupDatabase(){
        $create_tables_sql = file_get_contents('database/setup/maak_tabellen_aan.sql');

        try {

            $stmt = $this->pdo->prepare($create_tables_sql);
            $stmt->execute();

        }
        catch (PDOException $e)
        {
            echo'no';
            echo $e->getMessage();
            die();
        }
    }


}
