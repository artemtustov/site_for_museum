<?php
include "application/core/storage.php";

class Model_Services extends Model
{
	public function get_data()
	{	
		$f=0;
		
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
		//получение id последней записи
		$query = "SELECT id FROM museum.services ORDER BY id DESC LIMIT 1;";
		$db->run($query);
		$db->row();
		$id = $db->data['id'];
		
		// заполнение массива
					
		for($i=$id; $i>0; $i--){
			$p=$f+1;			
			$query = 'SELECT * FROM museum.services WHERE id='.$p.';';
			$db->run($query);
			$db->row();
			$data_array[$f]['Image'] = $db->data['image'];
			$data_array[$f]['Description'] = $db->data['description'];
			$data_array[$f]['Coast'] = $db->data['coast'];
			$f++;
			
		};
		
		$db->close();
		$db->stop();
		unset($db);
		
		return $data_array;
		
	}
}