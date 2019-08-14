<?php
namespace controllers;

class HomeController extends PaginaController
{
    public function __construct()
    {
        $test = "hasdadasadsllo";
        $this->buildPage('Home', 'home', ['test' => $test]);
    }
}
