<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 14-8-2019
 * Time: 17:16
 */

namespace controllers;

use database\Database;
use database\vragen\GebruikerVragen;

class RegistreerController extends PaginaController
{
    public function index()
    {
        $meldingen = [];

        if (isset($_POST['loginnaam']) && isset($_POST['wachtwoord']) &&
            isset($_POST['voornaam']) && isset($_POST['achternaam'])) {
            $loginnaam = $_POST['loginnaam'];

            $gebruikersVragen = new GebruikerVragen($this->pdo);
            $gebruikerInDB = $gebruikersVragen->waar('loginnaam', $loginnaam)->verkrijgData();
            if (isset($gebruikerInDB[0])) {
                $meldingen['fout-registreer'] = 'Deze gebruikersnaam is niet beschikbaar';
            } else {

                $nieuweGebruiker = [
                    'loginnaam' => $loginnaam,
                    'wachtwoord' => $_POST['wachtwoord'],
                    'voornaam' => $_POST['voornaam'],
                    'achternaam' => $_POST['achternaam']
                ];

                $_SESSION['gebruiker'] = $gebruikersVragen->registreren($nieuweGebruiker);
                header("Location: $this->rootPath/");

            }

        }

        $this->bouwPagina('Registreer', 'registreer', [
            'meldingen' => $meldingen
        ]);
    }
}
