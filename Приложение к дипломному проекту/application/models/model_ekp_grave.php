<?php
include "application/core/storage.php";

class Model_Ekp_grave extends Model
{
	public function get_data()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->set_db('kpvo_2');
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
		
		if(isset($_POST['grave_search_start']))
		{
		$query = "SELECT * FROM kpvo_2.zachoronenie JOIN kpvo_2.rayon ON kpvo_2.zachoronenie.Rayon = kpvo_2.rayon.id WHERE kpvo_2.zachoronenie.Nomer = '"
                        .$_POST['gave_search_number']."' or kpvo_2.zachoronenie.Naselennyy_punkt like '"
                        .$_POST['gave_search_location']."';";
		$db->run($query);
				
		// заполнение массива
		
		$i = 0;
		
		while($db->row()){
			$data_array[$i]['Number'] = $db->data['Nomer'];
			$data_array[$i]['Area'] = $db->data['Oblast'];
			$data_array[$i]['District'] = $db->data['nazvanie'];
			$data_array[$i]['City'] = $db->data['Naselennyy_punkt'];
			$data_array[$i]['Known_passport'] = $db->data['Izvestnych_passport'];
			$data_array[$i]['Unknown_passport'] = $db->data['Neizvestnyvh_passport'];
			$data_array[$i]['Total_passport'] = $db->data['Vsego_passport'];
			$data_array[$i]['Known_database'] = $db->data['Izvestnych_baza'];
			$data_array[$i]['Unknown_database'] = $db->data['Neizvestnych_baza'];
			$data_array[$i]['Total_database'] = $db->data['Vsego_baza'];
			
			$i++;
		};
		
		return $data_array;
		
		};
		
		$db->close();
		$db->stop();
		unset($db);
		
		
		
	}
}

