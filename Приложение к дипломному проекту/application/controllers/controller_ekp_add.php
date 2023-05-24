<?php

include "application/core/chek.php";

class Controller_ekp_add extends Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Ekp_add();
	}
	
	function action_index()
	{	
            $data = $this->model->get_data();
            $this->view->generate('ekp_add_view.php', 'template_view.php', $data);
	}
}