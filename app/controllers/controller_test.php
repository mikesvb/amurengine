<?php

use amurengine\core\Controller;
//use app\models\ModelTest;

class Controller_Test extends Controller
{
	
	function action_index()
	{
        echo "тестовая страницо";

	}


    function action_add()
	{
        echo "Добавление чего-либо";
        $info = new \app\models\ModelTest();
        echo $info->get_data();
	}
}


?>