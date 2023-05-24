<?php
class Controller_ekp_rw extends Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Ekp_rw();
	}
	
	function action_index()
	{	
                $this->model->ekp_rw_edit();
                $data = $this->model->get_data();
                
		$this->view->generate('ekp_rw_view.php', 'template_view.php', $data);
                
	}
}

