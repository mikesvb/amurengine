<?php

use amurengine\core\Controller;

class Controller_Main extends Controller
{
	
	function action_index()
	{
        echo "Главная  страница<br/>";
		$this->view->generate('main_view.php', 'template_view.php');
	}

}


?>