<?php
class Controller_Services extends Controller
{

	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Services();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('services_view.php', 'template_view.php', $data);
	}
}