 <?php

// родительский класс для контроллеров

class Controller {
	
	public $model;
	public $view;
	
	//создание объекта представления
	public function __construct()
	{
            $this->model = new Model();
            $this->view = new View();
            $this->model->logout();
	}
	
	//работа с моделью
	function action_index()
	{
            
	}
}