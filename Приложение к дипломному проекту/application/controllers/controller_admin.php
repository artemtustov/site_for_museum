<?php

include "application/core/chek.php";

class Controller_admin extends Controller
{
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Admin();
		
	}
		
	function action_index()
	{	
		$chek = new Chek;
		$wt = $chek->try_chek();
		if($wt!=1){
		$this->view = new View();
		$this->view->generate('admin_view.php', 'template_view.php');
		}
		else  
            {$this->view->generate('access_denied_view.php', 'template_view.php');}
		$this->model->add_event();
	}
}