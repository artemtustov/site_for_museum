<?php

class Controller_gallery extends Controller
{
	function action_index()
	{	
		
		$this->view = new View();
		$this->view->generate('404_view.php', 'template_view.php');
		
	}
}