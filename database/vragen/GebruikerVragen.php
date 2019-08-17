<?php

namespace database\vragen;

use PDO;

class GebruikerVragen extends DatabaseVragen
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'gebruikers');
    }

    public function registreren($gebruiker)
    {
        $dbData = $this->pdo->prepare("INSERT INTO gebruikers (loginnaam, voornaam, achternaam, wachtwoord) 
                  VALUES ('$gebruiker[loginnaam]', '$gebruiker[voornaam]', '$gebruiker[achternaam]', '$gebruiker[wachtwoord]')");
        $dbData->execute();
        return $gebruiker;

    }
}
