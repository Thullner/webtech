<?php

use controllers\BevestigingsController;
use controllers\BoekController;
use controllers\OverOnsController;
use controllers\HomeController;
use controllers\LoginController;
use controllers\RegistreerController;
use controllers\WinkelwagenController;

switch ($requestWithOutBase) {

    case '/over-ons' :
        $overOnsController = new OverOnsController($database);
        $overOnsController->index();
        break;
    case '/login' :
        $loginController = new LoginController($database);
        $loginController->index();
        break;
    case '/registreer' :
        $registreerController = new RegistreerController($database);
        $registreerController->index();
        break;
    case '/winkelwagen' :
        $winkelwagenController = new WinkelwagenController($database);
        $winkelwagenController->index();
        break;
    case '/bevestiging':
        $bevestiginsController = new BevestigingsController($database);
        $bevestiginsController->index();
        break;
    case '/uitloggen':
        $loginController = new LoginController($database);
        $loginController->uitloggen();
        break;
    case (preg_match('/boek\/*/', $requestWithOutBase) ? true : false):
        $boekController = new BoekController($database);
        $boekId = str_replace('/boek/', '', $requestWithOutBase);
        $boekController->index($boekId);
        break;
    case '/' || '/?'  :
        $home = new HomeController($database);
        $home->index();
        break;
}
