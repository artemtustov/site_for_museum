<?php
include "application/core/storage.php";

class Model_Ekp_search extends Model
{
	public function get_data()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->set_db('kpvo_2');
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
		
		if(isset($_POST['people_search_start']))
		{
		$query = "SELECT * FROM kpvo_2.all WHERE (kpvo_2.all.Familiya like '".$_POST['people_search_surname']."' or kpvo_2.all.Imya like '".$_POST['people_search_name']."' or kpvo_2.all.Otchestvo like '".$_POST['people_search_patronimic']."') and kpvo_2.all.Show = 'Yes' ORDER BY id DESC;";
		$db->run($query);
				
		// заполнение массива
		
		$i = 0;
		
		while($db->row()){
			$data_array[$i]['surname'] = $db->data['Familiya'];
			$data_array[$i]['name'] = $db->data['Imya'];
			$data_array[$i]['patronimic'] = $db->data['Otchestvo'];
			$data_array[$i]['date_birth'] = $db->data['God_rozhdeniya'];
			$data_array[$i]['date_dead'] = $db->data['Data_vybytiya'];
			$data_array[$i]['rank'] = $db->data['Voinskoe_zvanie'];
			$data_array[$i]['origin_grave'] = $db->data['Pervonachalno_zachoronen'];
			$data_array[$i]['grave_number'] = $db->data['№_zachoroneniya'];
			$data_array[$i]['grave_area'] = $db->data['Oblast'];
			$data_array[$i]['grave_district'] = $db->data['Rayon'];
			$data_array[$i]['grave_city'] = $db->data['Naselennyy_punkt'];
			$data_array[$i]['unit'] = $db->data['Voinskaya_chast'];
			$data_array[$i]['coutnry_birth'] = $db->data['Strana_rozhdeniya'];
			$data_array[$i]['area_birth'] = $db->data['Oblast_rozhdeniya'];
			$data_array[$i]['city_birth'] = $db->data['Naselennyy_punkt_chel'];
			$data_array[$i]['house_birth'] = $db->data['Dom_rozhdeniya'];
			$data_array[$i]['RVK'] = $db->data['Prizvan_RVK'];
			$data_array[$i]['post'] = $db->data['Dolzhnost'];
			$data_array[$i]['family'] = $db->data['Rodstvenniki'];
			$data_array[$i]['compiler'] = $db->data['Sostavitel'];
			$data_array[$i]['proposition'] = $db->data['Predlozhenie'];
			$data_array[$i]['decision'] = $db->data['Reshenie_RIK'];
			$i++;
		};
		
		return $data_array;
		
		};
		
		$db->close();
		$db->stop();
		unset($db);
		
		
		
	}
}