<?php

use database\Database;

include '.config.php';
require 'database/Database.php';

$database = new Database($mysqlHostname, $mysqlDbname, $mysqlUsername, $mysqlPassword);

function __autoload($Class)
{
    $Class = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, __DIR__ . DIRECTORY_SEPARATOR . $Class . '.php');
    require_once($Class);
}

$request = $_SERVER['REQUEST_URI'];
$requestWithOutBase = substr($request, strlen($rootPath));

require 'routes.php';
