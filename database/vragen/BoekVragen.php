<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 13-8-2019
 * Time: 23:11
 */

namespace database\vragen;
use http\Exception;
use PDO;

class BoekVragen extends DatabaseVragen
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'boeken');
    }

    public function verminderAantalBoekenMet (int $bookId,int $aantalBoeken){
        $boek = $this->vind($bookId);
        $nieuwAantalBoeken = $boek['aantal'] - $aantalBoeken;

        if ($nieuwAantalBoeken < 0) {
            throw new \Exception('Te weinig boeken in de voorraad voor deze bestelling');
        }

        $dbData = $this->pdo->prepare("UPDATE boeken SET aantal = $nieuwAantalBoeken WHERE id = $bookId;");
        $dbData->execute();

        return $nieuwAantalBoeken;
    }
}
