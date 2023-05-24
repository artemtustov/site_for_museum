<?php

include "application/core/storage.php";

class Model_Poster extends Model
{
	public function get_data()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
		// получение пяти самых новых событий афиши
		// в будущем будет изменена реализация в СУБД (представление с событиями на ближайшие 90 дней)
		
		$query = "SELECT id FROM museum.poster ORDER BY year DESC, month DESC, day DESC LIMIT 5;";
		$db->run($query);
		$db->row();
		$id = array(0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0);
		$id[0] = $db->data['id'];
		$db->row();
		$id[1] = $db->data['id'];
		$db->row();
		$id[2] = $db->data['id'];
		$db->row();
		$id[3] = $db->data['id'];
		$db->row();
		$id[4] = $db->data['id'];
		
				
		// заполнение массива
		for($i=0; $i<5; $i++) {
			$p=$id[$i];
			$query = 'SELECT * FROM museum.poster WHERE id='.$p.';';
			$db->run($query);
			$db->row();
			$data_array[$i]['Year'] = $db->data['year'];
			$data_array[$i]['Month'] = $db->data['month'];
			$data_array[$i]['Day'] = $db->data['day'];
			$data_array[$i]['Image'] = $db->data['image'];
			$data_array[$i]['Description'] = $db->data['description'];
		};
		
		$db->close();
		$db->stop();
		unset($db);
		
		return $data_array;
		
	}
}