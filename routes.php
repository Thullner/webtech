<?php

use controllers\BevestigingsController;
use controllers\OverOnsController;
use controllers\HomeController;
use controllers\LoginController;
use controllers\RegistreerController;
use controllers\WinkelwagenController;

switch ($requestWithOutBase) {

    case '/over-ons' :
        new OverOnsController();
        break;
    case '/login' :
        new LoginController($database);
        break;
    case '/registreer' :
        new RegistreerController($database);
        break;
    case '/winkelwagen' :
        $winkelwagenController = new WinkelwagenController($database);
        $winkelwagenController->index();
        break;
    case '/bevestiging':
        $bevestiginsController = new BevestigingsController($database);
        $bevestiginsController->index();
        break;
    case '/' || '/?'  :
        $home = new HomeController($database);
        $home->index();
        break;

//    case (preg_match('/boek\/*/', $requestWithOutBase) ? true : false):
//        new BookController();
//        break;
}
