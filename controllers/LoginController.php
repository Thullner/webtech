<?php
namespace controllers;

use database\Database;

class LoginController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
        $this->bouwPagina('Login', 'login');
    }
}
