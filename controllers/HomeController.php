<?php

namespace controllers;

use database\Database;
use database\vragen\AuteurVragen;
use database\vragen\GenreVragen;
use database\vragen\BoekVragen;

class HomeController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);

    }

    public function index()
    {

        $boekVragen = new BoekVragen($this->pdo);
        $auteurVragen = new AuteurVragen($this->pdo);
        $genreVragen = new GenreVragen($this->pdo);


        if (isset($_GET['auteurId']) && $_GET['auteurId'] !== '') {
            $boekVragen->waar('auteurId', $_GET['auteurId']);
        }

        if (isset($_GET['genreId']) && $_GET['genreId'] !== '') {
            $boekVragen->waar('genreId', $_GET['genreId']);
        }

        $auteurs = $auteurVragen->alles();
        $genres = $genreVragen->alles();
        $boeken = $boekVragen->voerSqlUit();

        $this->bouwPagina('Home', 'home', [
            'genres' => $genres,
            'boeken' => $boeken,
            'auteurs' => $auteurs
        ]);

    }
}
