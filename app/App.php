<?php
namespace app;

use amurengine\core\Main;


final class App extends Main
{
    public function __construct()
    {
        // Обращаемся к конструктору родительского класса
        parent::__construct();
        echo 'Создался новый экземпляр класса из папки "app/"<br>';
    }

}