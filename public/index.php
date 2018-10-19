<?php

error_reporting(E_ALL);       // устанавливает уровень отслеживаемых ошибок интерпретатором php
ini_set('display_errors', 1); // дает команду интерпретатору php выводить все отслеживаемые ошибки в браузере
// автозагрузчик классов
require __DIR__ . '/../vendor/autoload.php';


$app = new app\App();

echo $app->getFramework();
?>