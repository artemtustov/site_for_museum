<p>На данной странице Вы можете отдактировать или удалить запись Электронной 
    Книги Память Витебской области. Воспользуйтесь поиском, чтобы найти нужную 
    запись. Для редактирования или удаления записи воспользуйтесь соответствующей
    кнопой в разделе "Результат поиска."
</p>

<div class="people_search">
		<form method="POST">
                <fieldset>
                    <legend>Поиск</legend>
		Номер захоронения<input name="people_search_number" type="text" style=position:absolute;left:30%;><br>
		<br>
		Фамилия <input name="people_search_surname" type="text" style=position:absolute;left:30%;><br>
		<br>
		Имя <input name="people_search_name" type="text" style=position:absolute;left:30%;><br>
		<br>
		Отчество <input name="people_search_patronimic" type="text" style=position:absolute;left:30%;><br>
		<br>
		Год рождения <input name="people_search_year" type="text" style=position:absolute;left:30%;><br>
		<br>
		<input name="people_search_start" type="submit" value="Искать">
		</fieldset>
		</form>
	</div>

<table border="1" style="border-collapse: collapse" class="ekp_table">	
	<tr>
		<td>№ захоронения</td>
		<td>Фамилия</td>
		<td>Имя</td>
		<td>Отчество</td>
		<td>Год рождения</td>
		<td>Дата гибели</td>
		<td>Звание</td>
		<td>Место первоначального<br>захоронения</td>
		<td>Место захоронения</td>
		<td>BЧ</td>
		<td>Место рождения</td>
		<td>РВК</td>
		<td>Должность</td>
		<td>Родственники</td>
                <td></td>
                <td></td>
	</tr>
		
<?php
	foreach($data as $row)
	{
		echo '<tr>
		<td>'.$row['grave_number'].'</td>
		<td>'.$row['surname'].'</td>
		<td>'.$row['name'].'</td>
		<td>'.$row['patronimic'].'</td>
		<td>'.$row['date_birth'].'</td>
		<td>'.$row['date_dead'].'</td>
		<td>'.$row['rank'].'</td>
		<td>'.$row['origin_grave'].'</td>
		<td>'.$row['grave_area'].'<br>'.$row['grave_district'].'<br>'.$row['grave_city'].'</td>
		<td>'.$row['unit'].'</td>
		<td>'.$row['coutnry_birth'].'<br>'.$row['area_birth'].'<br>'.$row['city_birth'].'<br>'.$row['house_birth'].'</td>
		<td>'.$row['RVK'].'</td>
		<td>'.$row['post'].'</td>
		<td>'.$row['family'].'</td>
                <td> 
                <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="hidden" name="people_edit_id" value="'.$row['id'].'">
                <input name="people_edit_start" type="submit" value="Редактировать">
                </form></td>
                <td><form method="POST"> 
                <input type="hidden" name="people_delete" value="'.$row['id'].'">
                <input name="people_delete_start" type="submit" value="Удалить">
                </form></td>
		</tr>';
	}	
?>

</table>

