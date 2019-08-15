<?php

namespace database\vragen;
use PDO;

class AuteurVragen extends DatabaseVragen
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'auteurs');
    }
}
