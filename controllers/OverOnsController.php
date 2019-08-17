<?php

namespace controllers;

use database\Database;

class OverOnsController extends PaginaController
{
    public function index(){
        $this->bouwPagina('Over ons', 'over-ons');
    }
}
