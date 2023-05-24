<?php

include "application/core/chek.php";

class Controller_ekp_edit extends Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->model = new Model_Ekp_edit();
	}
	
	function action_index()
	{	
		$chek = new Chek;
		$wt = $chek->try_chek();
                echo $wt;
		if($wt!=1){
                $data = $this->model->get_data($wt);
		$this->view->generate('ekp_edit_view.php', 'template_view.php', $data);
                }
                else  
                {$this->view->generate('access_denied_view.php', 'template_view.php');}
		
	}
}

