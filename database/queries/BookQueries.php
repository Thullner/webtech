<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 13-8-2019
 * Time: 23:11
 */

namespace database\queries;
use PDO;

class BookQueries extends DatabaseQueries
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'books');
    }
}
