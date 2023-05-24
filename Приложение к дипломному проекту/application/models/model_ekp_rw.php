<?php
include "application/core/storage.php";

class Model_Ekp_rw extends Model
{
      
	public function get_data()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->set_db('kpvo_2');
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
		
		$query = "SELECT * FROM kpvo_2.chelovek WHERE kpvo_2.chelovek.id = '".$_POST['people_edit_id']."';";
		$db->run($query);
				
		// заполнение массива
		
		$i = 0;
		
		$db->row();
                
                $data_array[$i]['id'] = $db->data['id'];
		$data_array[$i]['surname'] = $db->data['Familiya'];
		$data_array[$i]['name'] = $db->data['Imya'];
		$data_array[$i]['patronimic'] = $db->data['Otchestvo'];
		$data_array[$i]['date_birth'] = $db->data['God_rozhdeniya'];
		$data_array[$i]['date_dead'] = $db->data['Data_vybytiya'];
		$data_array[$i]['rank'] = $db->data['Voinskoe_zvanie'];
		$data_array[$i]['origin_grave'] = $db->data['Pervonachalno_zachoronen'];
		$data_array[$i]['grave_number'] = $db->data['№_zachoroneniya'];
		$data_array[$i]['unit'] = $db->data['Voinskaya_chast'];
		$data_array[$i]['coutnry_birth'] = $db->data['Strana_rozhdeniya'];
		$data_array[$i]['area_birth'] = $db->data['Oblast_rozhdeniya'];
		$data_array[$i]['city_birth'] = $db->data['Naselennyy_punkt'];
		$data_array[$i]['house_birth'] = $db->data['Dom_rozhdeniya'];
		$data_array[$i]['RVK'] = $db->data['Prizvan_RVK'];
		$data_array[$i]['post'] = $db->data['Dolzhnost'];
		$data_array[$i]['family'] = $db->data['Rodstvenniki'];
		$data_array[$i]['compiler'] = $db->data['Sostavitel'];
		$data_array[$i]['proposition'] = $db->data['Predlozhenie'];
		$data_array[$i]['decision'] = $db->data['Reshenie_RIK'];
                $data_array[$i]['show'] = $db->data['Show'];
                
		return $data_array;
                
                $db->close();
		$db->stop();
		unset($db);
        }
        
        public function ekp_rw_edit()
	{	
		// ПОДКЛЮЧЕНИЕ
		$db = new MyDB();
		$db->set_db('kpvo_2');
		$db->connect();
		
		// ПОЛУЧЕНИЕ ДАННЫХ
                
                if(isset($_POST['surname_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Familiya = '".$_POST['surname_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['name_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Imya = '".$_POST['name_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['patronimic_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Otchestvo = '".$_POST['patronimic_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['date_birth_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET God_rozhdeniya = '".$_POST['date_birth_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
		}
                
                if(isset($_POST['date_dead_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Data_vybytiya = '".$_POST['date_dead_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['rank_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Voinskoe_zvanie = '".$_POST['rank_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['origin_grave_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Pervonachalno_zachoronen = '".$_POST['origin_grave_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['grave_number_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET №_zachoroneniya = '".$_POST['grave_number_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['unit_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Voinskaya_chast = '".$_POST['unit_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['coutnry_birth_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Strana_rozhdeniya = '".$_POST['coutnry_birth_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['area_birth_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Oblast_rozhdeniya = '".$_POST['area_birth_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['city_birth_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Naselennyy_punkt = '".$_POST['city_birth_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['house_birth_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Dom_rozhdeniya = '".$_POST['house_birth_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['RVK_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Prizvan_RVK = '".$_POST['RVK_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['post_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Dolzhnost = '".$_POST['post_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['family_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Rodstvenniki = '".$_POST['family_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                
		}
                
                if(isset($_POST['compiler_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Sostavitel = '".$_POST['compiler_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                }
                
                if(isset($_POST['proposition_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Predlozhenie = '".$_POST['proposition_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                }
                
                if(isset($_POST['decision_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET Reshenie_RIK = '".$_POST['decision_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                }
                
                if(isset($_POST['show_edit_start']))
		{
		$query = "UPDATE kpvo_2.chelovek SET chelovek.Show = '".$_POST['show_edit']."' WHERE id ='".$_POST['people_edit_id']."';";
		$db->run($query);
                }
		
		$db->close();
		$db->stop();
		unset($db);
	}
}

