<?php
class Controller_Poster extends Controller
{

	public function __construct()
	{
            parent::__construct();
            $this->model = new Model_Poster();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('poster_view.php', 'template_view.php', $data);
	}
}