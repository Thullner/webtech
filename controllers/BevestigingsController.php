<?php

namespace controllers;

use database\Database;
use database\vragen\BoekVragen;

class BevestigingsController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
    }

    public function index()
    {
        $aantalBoekenPerBoek = $_SESSION['winkelwagen']['boeken'];

        $boekVragen = new BoekVragen($this->pdo);

        $totaalAantalBoeken = 0;
        $totalePrijs = 0;
        $meldingen = [];

        foreach ($aantalBoekenPerBoek as $boekId => $aantal) {
            $boek = $boekVragen->vind($boekId);

            try {
                $boekVragen->verminderAantalBoekenMet($boekId, $aantal);
            } catch (\Exception $exception){
                $meldingen['fout-voorraad'][] = $boek;
                continue;
            }
            $totaalAantalBoeken += $aantal;
            $totalePrijs += $aantal * $boek['prijs'];
        }

        $_SESSION['winkelwagen']['boeken'] = [];
        $this->bouwPagina('Bevestiging', 'bevestiging', [
            'totaalAantalBoeken' => $totaalAantalBoeken,
            'totalePrijs' => $totalePrijs,
            'meldingen' => $meldingen
        ]);
    }

    public function verwerkBestelling()
    {

    }
}
