<?php
namespace controllers;

use database\Database;

abstract class PaginaController
{
    protected $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getPDO();
    }

    protected function buildPage(string $pageName, string $pageFileName, array $variables = [])
    {
        include 'config.php';

        include 'views/components/head.php';
        include 'views/components/header.php';


        extract($variables);
        include "views/$pageFileName.php";

        include 'views/components/footer.php';
    }
}
