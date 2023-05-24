<?php
// Страница авторизации



include_once "application/core/storage.php";

class Model_Login extends Model 
{
	public function try_login()
	{
		// Подключение к БД
		$db = new MyDB();
		$db->connect();

		if(isset($_POST['submit']))
		{
			// Вытаскиваем из БД запись, у которой логин равняеться введенному
			$query = "SELECT user_id, user_password FROM users WHERE user_login='".$_POST['login']."' LIMIT 1";
			$db->run($query);
			$db->row();

			// Сравниваем пароли
			if($db->data['user_password'] === $_POST['password'])

			{
				// "Случайное" число, будет добавлена шифрация
				$hash = "1534354385134";

				// Записываем в БД новый хеш авторизации 
				$query = "UPDATE users SET user_hash='".$hash."' WHERE user_id='".$db->data['user_id']."'";
				$db->run($query);
        
				// Ставим куки
				setcookie("id", $db->data['user_id'], time()+60*60*24*30);
				setcookie("hash", $hash, time()+60*60*24*30);
 
				// Переадресация на панель администрирования
				header("Location: http://museum.by/admin"); 
				exit();
			}

			else
			{
				echo "Вы ввели неправильный логин/пароль";
				//TO DO Сделать заглушку
			}
		}
		
		$db->close();
		$db->stop();
		unset($db);
	}
}

?>



