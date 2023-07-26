<?php

date_default_timezone_set('Asia/Tehran');

session_start();

require_once(__DIR__ . '/Core/functions.php');

spl_autoload_register(function ($Name) {
    $Name = str_replace('\\','/',$Name);
    require_once(__DIR__ . "/" . $Name . '.php');
});

$Router = new Core\Router();
$Router->GetRoute();