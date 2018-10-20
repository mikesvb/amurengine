<?php

namespace amurengine\core;

class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($content_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			// работа с массивом
		}
		*/
		
		include $_SERVER['DOCUMENT_ROOT'].'/../views/'.$template_view;
	}
}

?>