<h1>Услуги</h1>
<p>
Уточнить информацию по оказываемым услугам вы можете по телефону +375 212 263168.
</p>
<p>
<table>
<tr><td></td><td><center>Услуга</center></td><td>Стоимость</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td><img src="/images/'.$row['Image'].'" width="192" height="108" ></td><td>'.$row['Description'].'</td><td>'.$row['Coast'].'</td></tr>';
	}
	
?>
</table>
</p>