<?php

use amurengine\core\Controller;

class Controller_404 extends Controller
{
	
	function action_index()
	{
        echo "нет страницы";
		//$this->view->generate('404_view.php', 'template_view.php');
	}

}


?>