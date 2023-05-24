<?php
include "application/core/storage.php";

class Model_Ekp_add extends Model
{
	public function get_data()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->set_db('kpvo_2');
		$db->connect();
		
		// ДОБАВЛЕНИЕ ДАННЫХ
		
		if(isset($_POST['people_add_start']))
		{
		$query = "INSERT INTO kpvo_2.chelovek (№_zachoroneniya, Familiya, Imya, Otchestvo, God_rozhdeniya, Data_vybytiya, Voinskoe_zvanie, Pervonachalno_zachoronen, Voinskaya_chast, Strana_rozhdeniya, Oblast_rozhdeniya, Rajon_rozhdeniya, Naselennyy_punkt, Dom_rozhdeniya, Prizvan_RVK, Dolzhnost, Rodstvenniki) VALUES(
		'{$_POST['people_add_grave_number']}', 
		'{$_POST['people_add_surname']}', 
		'{$_POST['people_add_name']}', 
		'{$_POST['people_add_patronimic']}', 
		'{$_POST['people_add_date_birth']}', 
		'{$_POST['people_add_date_dead']}', 
		'{$_POST['people_add_rank']}', 
		'{$_POST['people_add_origin_grave']}', 
		'{$_POST['people_add_unit']}', 
		'{$_POST['people_add_coutnry_birth']}', 
		'{$_POST['people_add_area_birth']}', 
		'{$_POST['people_add_district_birth']}', 
		'{$_POST['people_add_city_birth']}', 
		'{$_POST['people_add_house_birth']}', 
		'{$_POST['people_add_RVK']}', 
		'{$_POST['people_add_post']}', 
		'{$_POST['people_add_family']}');";
		
		$db->run($query);
		}

		$db->close();
		$db->stop();
		unset($db);
	}
}
