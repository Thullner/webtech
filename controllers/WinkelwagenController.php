<?php

namespace controllers;


use database\Database;
use database\vragen\AuteurVragen;
use database\vragen\BoekVragen;

class WinkelwagenController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
    }

    public function index()
    {
        if (isset($_POST['leegWinkelwagen'])) {
            $_SESSION['winkelwagen']['boeken'] = [];
        }

        $meldingen = [];

        if (isset($_POST['boekId']) && isset($_POST['voegToe'])) {

            $boekId = $_POST['boekId'];
            $voegToe = $_POST['voegToe'];

            $boekVragen = new BoekVragen($this->pdo);
            $boek = $boekVragen->vind($boekId);

            $gereserveerdeBoeken = $_SESSION['winkelwagen']['boeken'][$boekId];

            if ($voegToe < 0 || $gereserveerdeBoeken < $boek['aantal']) {
                $_SESSION['winkelwagen']['boeken'][$boekId] += $voegToe;
            } else {
                $meldingen['fout-voorraad'] = $boek;
            }

            if ($_SESSION['winkelwagen']['boeken'][$boekId] < 1) {
                unset($_SESSION['winkelwagen']['boeken'][$boekId]);
            }
        }

        $aantalBoekenPerBoek = $_SESSION['winkelwagen']['boeken'];


        $boekVragen = new BoekVragen($this->pdo);
        $auteurVragen = new AuteurVragen($this->pdo);

        $boeken = [];

        $totaalPrijs = 0;

        foreach ($aantalBoekenPerBoek as $boekId => $aantal) {
            $boek = $boekVragen->vind($boekId);
            $boek['aantal'] = $aantal;
            $auteur = $auteurVragen->vind($boek['auteurId']);
            $boek['auteurVoornaam'] = $auteur['voornaam'];
            $boek['auteurAchternaam'] = $auteur['achternaam'];
            $boek['totaalPrijs'] = $aantal * $boek['prijs'];
            $totaalPrijs += $boek['totaalPrijs'];

            $boeken[$boekId] = $boek;
        }


        $this->bouwPagina('Winkelwagen', 'winkelwagen', [
            'aantalBoekenPerBoek' => $aantalBoekenPerBoek,
            'boeken' => $boeken,
            'totaalPrijs' => $totaalPrijs,
            'meldingen' => $meldingen
        ]);
    }
}
