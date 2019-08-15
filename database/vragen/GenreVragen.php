<?php

namespace database\vragen;
use PDO;

class GenreVragen extends DatabaseVragen
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'genres');
    }
}
