<?php

use controllers\OverOnsController;
use controllers\BookController;
use controllers\HomeController;
use controllers\LoginController;
use controllers\RegistreerController;
use controllers\WinkelwagenController;

switch ($requestWithOutBase) {
    case '/'  :
        new HomeController();
        break;
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
        new WinkelwagenController($database);
        break;
    case '/setup' : {
        $database->setupDatabase();
        break;
    }

//    case (preg_match('/boek\/*/', $requestWithOutBase) ? true : false):
//        new BookController();
//        break;
}
