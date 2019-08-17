<?php
namespace controllers;

use database\Database;

abstract class PaginaController
{
    protected $pdo;
    protected $rootPath;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getPDO();
        session_start();

        if (isset($_SESSION['gebruiker'])) {
            if (!isset($_SESSION['winkelwagen']['boeken'])) {
                $_SESSION['winkelwagen']['boeken'] = [];
            }
        } else {
            unset($_SESSION['winkelwagen']);
        }

        require '.config.php';

        $this->rootPath = $rootPath;
    }

    protected function bouwPagina(string $paginaNaam, string $paginaBestandsNaam, array $variabelen = [])
    {
        if (isset($_SESSION['gebruiker'])) {
            $gebruiker = $_SESSION['gebruiker'];
        }
        include '.config.php';

        include 'views/componenten/head.php';
        include 'views/componenten/header.php';


        extract($variabelen);
        include "views/$paginaBestandsNaam.php";

    }
}
