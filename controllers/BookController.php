<?php
namespace controllers;

use database\Database;
use database\queries\BookQueries;

class BookController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
        $bookQueries = new BookQueries($this->pdo);
        $books = $bookQueries->all();

        $this->buildPage('Boeken', 'books', ['books' => $books]);
    }
}
