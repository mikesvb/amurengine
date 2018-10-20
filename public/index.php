<?php

use amurengine\core\Route;
use amurengine\core\Database;


ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);

define("PATH", $_SERVER['DOCUMENT_ROOT']);
//define('URLSITE', "https://github.com/mikesvb/amurengine");
define("VALID_CMS", 1);

///////////////////////////////////////////////
session_name("SESID");
session_start();

require __DIR__ . '/../vendor/autoload.php';

Route::start();

/*
$inDB   = Database::getInstance();
$info = $inDB->get_table("menu");
print_r($info);*/
?>
