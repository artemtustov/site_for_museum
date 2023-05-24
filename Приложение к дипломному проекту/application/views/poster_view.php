<h1>Афиша</h1>
<p>Уточнить информацию о планируемых мероприятиях вы можете по телефону +375 212 263168.</p>
<p>
<table>
<tr><td>Год</td><td>Месяц</td><td>День</td><td></td><td><center>Мероприятие</center></td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Month'].'</td><td>'.$row['Day'].'</td><td>'.$row['Image'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>