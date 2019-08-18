<?php
namespace controllers;

use database\Database;
use database\vragen\AuteurVragen;
use database\vragen\BoekVragen;
use database\vragen\GenreVragen;

class BoekController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);

    }

    public function index ($boekId){
        $boekVragen = new BoekVragen($this->pdo);
        $auteurVragen = new AuteurVragen($this->pdo);
        $genreVragen = new GenreVragen($this->pdo);
        $meldingen = [];

        $boek = $boekVragen->vind($boekId);
        $auteur = $auteurVragen->vind($boek['auteurId']);
        $genre = $genreVragen->vind($boek['genreId']);

        if (!$boek) {
            header("Location: $this->rootPath/");
        }

        if (isset($_POST['boekId'])) {
            if (!isset($_SESSION['gebruiker'])) {
                header("Location: $this->rootPath/login");
            }

            $gereserveerdeBoeken = 1;

            if (isset($_SESSION['winkelwagen']['boeken'][$boekId])){
                $gereserveerdeBoeken += $_SESSION['winkelwagen']['boeken'][$boekId];
            }

            if ($gereserveerdeBoeken > $boek['aantal']) {
                $meldingen['fout-voorraad'] = $boek;
            } else {
                if (isset($_SESSION['winkelwagen']['boeken'][$boekId])) {
                    $_SESSION['winkelwagen']['boeken'][$boekId]++;
                    $meldingen['boek-toegevoegd'] = $boek;
                } else {
                    $_SESSION['winkelwagen']['boeken'][$boekId] = 1;
                    $meldingen['boek-toegevoegd'] = $boek;
                }
            }
        }

        $this->bouwPagina('Boek', 'boek', [
            'boek' => $boek,
            'auteur' => $auteur,
            'genre' => $genre,
            'meldingen' => $meldingen
        ]);
    }
}
