<?php

namespace amurengine\core;

class Controller {
	
	public $model;
	public $view;
	
	function __construct()
	{
		$this->view = new View();//обращение к классу вью, для вывода содержимого
	}
	
	function action_index()
	{
        
	}
}

?>