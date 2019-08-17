<?php
namespace controllers;

use database\Database;
use database\vragen\BoekVragen;

class BoekController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);

    }

    public function index ($boekId){
        $bookQueries = new BoekVragen($this->pdo);
        $boek = $bookQueries->vind($boekId);

        if (!$boek) {
            header("Location: $this->rootPath/");
        }

        $this->bouwPagina('Boek', 'boek', ['boek' => $boek]);
    }
}
