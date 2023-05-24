<?php
class Controller_ekp_search extends Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Ekp_search();
	}
	
	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('ekp_search_view.php', 'template_view.php', $data);
	}
}