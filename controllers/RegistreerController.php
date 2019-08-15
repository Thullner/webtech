<?php
/**
 * Created by PhpStorm.
 * User: msthu
 * Date: 14-8-2019
 * Time: 17:16
 */

namespace controllers;

use database\Database;

class RegistreerController extends PaginaController
{
    public function __construct(Database $database)
    {
        parent::__construct($database);
        $this->bouwPagina('Registreer', 'registreer');
    }
}
