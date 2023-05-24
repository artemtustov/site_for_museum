<?php
class Controller_ekp_grave extends Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Ekp_grave();
	}
	
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('ekp_grave_view.php', 'template_view.php', $data);
	}
}

