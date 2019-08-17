<?php
namespace controllers;

use database\Database;

abstract class PaginaController
{
    protected $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getPDO();
        session_start();

        if (!isset($_SESSION['winkelwagen']['boeken'])) {
            $_SESSION['winkelwagen']['boeken'] = [];
        }
    }

    protected function bouwPagina(string $paginaNaam, string $paginaBestandsNaam, array $variabelen = [])
    {
        include '.config.php';

        include 'views/componenten/head.php';
        include 'views/componenten/header.php';


        extract($variabelen);
        include "views/$paginaBestandsNaam.php";

    }
}
