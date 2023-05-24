<?php

// родитель для моделей (бизнес-логика)
class Model
{
	public function get_data()
	{
	}
        
        
        public function logout()
        {
            if (isset($_POST['logout']))
		{
                
		setcookie("id", $_COOKIE['id'], time()-60*60*24*30);
		setcookie("hash", $_COOKIE['hash'], time()-60*60*24*30);
                header("Refresh: 0");
		}
        }        
}