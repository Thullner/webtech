<?php

namespace controllers;

use database\vragen\GebruikerVragen;

class LoginController extends PaginaController
{
    public function index()
    {
        $meldingen = [];
        if (isset($_POST['loginnaam']) && isset($_POST['wachtwoord'])) {
            $loginnaam = $_POST['loginnaam'];
            $wachtwoord = $_POST['wachtwoord'];
            $gebruikersVragen = new GebruikerVragen($this->pdo);
            $gebruiker = $gebruikersVragen->waar('loginnaam', $loginnaam)->verkrijgData();

            if (isset($gebruiker[0])) {
                if ($wachtwoord === $gebruiker[0]['wachtwoord']) {
                    $_SESSION['gebruiker'] = $gebruiker[0];

                    header("Location: $this->rootPath/");
                } else {
                    $meldingen['fout-inlog'] = 'Ongeldig wachtwoord';
                }
            } else {
                $meldingen['fout-inlog'] = 'Onbekende gebruikersnaam';
            }
        }

        $this->bouwPagina('Login', 'login', [
            'meldingen' => $meldingen
        ]);
    }

    public function uitloggen () {
        unset($_SESSION['gebruiker']);
        header("Location: $this->rootPath/");
    }

}
