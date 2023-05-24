<?php
// Скрипт проверки прав администратора, вствлять в админские модели

include_once "application/core/storage.php";

class Chek
{
	public function try_chek()
	{
		if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))

		{   
			//подключение к базе данных
			$db = new MyDB();
			$db->connect();
			
			$query = "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1";
			$db->run($query);
			$db->row();


			if(($db->data['user_hash'] !== $_COOKIE['hash']) or ($db->data['user_id'] !== $_COOKIE['id']))	
			{
				return 1; //false
			}
			else
			{
				return $db->data['user_login'];
			}
		}
		else
		{
			return 1;
		}
	}
}
?>
