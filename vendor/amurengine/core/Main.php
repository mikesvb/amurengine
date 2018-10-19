<?php

namespace amurengine\core;

abstract class Main{

    protected $config = [];

    /**
     * Функция конструкт
     */
    public function __construct()
    {
        echo 'Создался новый экземпляр класса из папки "vendor/amerengine/core/"<br>';
    }

    /**
     * Возврат конфига
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Это финальный метод.
     * Его нельзя переопределить в дочернем классе.
     */
    final public function getFramework()
    {
        return 'AmurEngineProject';
    }
}


?>