<?php
namespace controllers;


class WinkelwagenController extends PaginaController
{
    public function __construct()
    {
        $this->buildPage('Winkelwagen', 'winkelwagen');
    }
}
