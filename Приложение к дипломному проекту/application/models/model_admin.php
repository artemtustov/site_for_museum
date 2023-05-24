<?php
// Страница авторизации

include_once "application/core/storage.php";

class Model_Admin extends Model 
{
	public function add_event()
	{
	// Подключение к БД
	$db = new MyDB();
	$db->connect();

	// добавление нового события в афишу
	if(isset($_POST['poster_add']))
		{
		$poster_image = iconv("utf-8", "windows-1251", $_POST['poster_image']);
		$poster_description = iconv("utf-8", "windows-1251", $_POST['poster_description']);
		$query = "INSERT INTO museum.poster (year, month, day, image, description) VALUES('".$_POST['poster_year']."', '".$_POST['poster_month']."', '".$_POST['poster_day']."', '".$poster_image."', '".$poster_description."');";
		$db->run($query);
		$db->row();
		}
	
	//удаление события из афиши
	if(isset($_POST['poster_remove']))
		{
		$query = "DELETE FROM museum.poster WHERE description='".iconv("utf-8", "windows-1251", $_POST['poster_description'])."';";
		$db->run($query);
		$db->row();
		}
		
	
	//добавление услуги
	if(isset($_POST['services_add']))
		{
		$services_image = iconv("utf-8", "windows-1251", $_POST['services_image']);
		$services_description = iconv("utf-8", "windows-1251", $_POST['services_description']);
		$services_coast = iconv("utf-8", "windows-1251", $_POST['services_coast']);
		$query = "INSERT INTO museum.services (image, description, coast) VALUES('".$services_image."', '".$services_description."', '".$services_coast."');";
		$db->run($query);
		$db->row();
		}
	
	//удаление услуги
	if(isset($_POST['services_remove']))
		{
		$query = "DELETE FROM museum.services WHERE description='".iconv("utf-8", "windows-1251", $_POST['services_description'])."';";
		$db->run($query);
		$db->row();
		}	
	
	// выход
	
		
	$db->close();
	$db->stop();
	unset($db);
	}
}
?>



