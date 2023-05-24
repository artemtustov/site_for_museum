<?php

class Controller_contacts extends Controller
{
	function action_index()
	{	
		
		$this->view = new View();
		$this->view->generate('404_view.php', 'template_view.php');
		
	}
}