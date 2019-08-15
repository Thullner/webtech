<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 13-8-2019
 * Time: 23:11
 */

namespace database\vragen;
use PDO;

class BoekVragen extends DatabaseVragen
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'boeken');
    }
}
