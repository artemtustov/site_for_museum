<h1>Электронная книга Память Витебской области</h1>
<p>Музей ведет работу по созданию базы данных уроженцев Витебской области, погибших в годы Великой Отечественной войны. Также создется база данных 
красноармейцев, партизан и мирных жителей, погибших и похороненных на территории Витебской области.
</p>

<div class="people_search";>
		<form method="POST">
		<fieldset>
		Номер захоронения<input name="gave_search_number" type="text" style=position:absolute;left:30%;><br>
		<br>
		Населенный пункт <input name="gave_search_location" type="text" style=position:absolute;left:30%;><br>
		<br>
		<input name="grave_search_start" type="submit" value="Искать">
		</fieldset>
		</form>
	</div>

<table border="1" style="border-collapse: collapse" class="ekp_table">		
	<tr>
		<td>№ захоронения</td>
		<td>Область</td>
		<td>Район</td>
		<td>Наеленный пункт</td>
		<td>Известных по паспорту</td>
		<td>Незвестных по паспорту</td>
		<td>Всего по паспорту</td>
		<td>Известных в базе</td>
		<td>Неизвестных в базе</td>
		<td>Всего в базе</td>
	</tr>
		
<?php
	foreach($data as $row)
	{
		echo '<tr>
		<td>'.$row['Number'].'</td>
		<td>'.$row['Area'].'</td>
		<td>'.$row['District'].'</td>
		<td>'.$row['City'].'</td>
		<td>'.$row['Known_passport'].'</td>
		<td>'.$row['Unknown_passport'].'</td>
		<td>'.$row['Total_passport'].'</td>
		<td>'.$row['Known_database'].'</td>
		<td>'.$row['Unknown_database'].'</td>
		<td>'.$row['Total_database'].'</td>
		</tr>';
	}	
?>

</table>

