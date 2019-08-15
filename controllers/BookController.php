<?php
namespace controllers;

use database\Database;
use database\vragen\BoekVragen;

class BookController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
        $bookQueries = new BoekVragen($this->pdo);
        $books = $bookQueries->all();

        $this->bouwPagina('Boeken', 'books', ['books' => $books]);
    }
}
