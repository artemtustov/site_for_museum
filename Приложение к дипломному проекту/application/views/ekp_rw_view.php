<p>Редактирование данных</p>

<table border="1" style="border-collapse: collapse" class="ekp_table">	
	<tr>
		<td>№ захоронения</td>
                <td><?php echo $data[0]['grave_number'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="grave_number_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Фамилия</td>
                <td><?php echo $data[0]['surname'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input name="surname_edit" type="text" >
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="surname_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Имя</td>
                <td><?php echo $data[0]['name'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="name_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="name_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
		<td>Отчество</td>
                <td><?php echo $data[0]['patronimic'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="patronimic_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="patronimic_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Год рождения</td>
                <td><?php echo $data[0]['date_birth'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="date_birth_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="date_birth_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Дата гибели</td>
                <td><?php echo $data[0]['date_dead'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="date_dead_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="date_dead_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Звание</td>
                <td><?php echo $data[0]['rank'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="rank_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="rank_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Место первоначального<br>захоронения</td>
                <td><?php echo $data[0]['origin_grave'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="origin_grave_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="origin_grave_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>BЧ</td>
                <td><?php echo $data[0]['unit'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="unit_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="unit_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Страна рождения</td>
                <td><?php echo $data[0]['coutnry_birth'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="coutnry_birth_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="coutnry_birth_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Облась рождения</td>
                <td><?php echo $data[0]['area_birth'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="area_birth_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="area_birth_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Город рождения</td>
                <td><?php echo $data[0]['city_birth'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="city_birth_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="city_birth_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Дом рождения</td>
                <td><?php echo $data[0]['house_birth'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="house_birth_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="house_birth_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>РВК</td>
                <td><?php echo $data[0]['RVK'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="RVK_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="RVK_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Должность</td>
                <td><?php echo $data[0]['post'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="post_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="post_edit_start" type="submit" value="Изменить">
                </form> </td>
        </tr>
        <tr>
		<td>Родственники</td>
                <td><?php echo $data[0]['family'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="family_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="family_edit_start" type="submit" value="Изменить">
                </form> </td>
	</tr>
        <tr>
		<td>Составитель</td>
                <td><?php echo $data[0]['compiler'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="compiler_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="compiler_edit_start" type="submit" value="Изменить">
                </form> </td>
	</tr>
        <tr>
		<td>Предложение по увековечению</td>
                <td><?php echo $data[0]['proposition'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="proposition_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="proposition_edit_start" type="submit" value="Изменить">
                </form> </td>
	</tr>
        <tr>
		<td>Решение РИК</td>
                <td><?php echo $data[0]['decision'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="decision_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="decision_edit_start" type="submit" value="Изменить">
                </form> </td>
	</tr>
        <tr>
		<td>Видимый</td>
                <td><?php echo $data[0]['show'] ?></td>
                <td> <form action="http://museum.by/ekp_rw" method="POST"> 
                <input type="text" name="show_edit">
                <input type="hidden" name="people_edit_id" value="<?php echo $data[0]['id'] ?>">
                <input name="show_edit_start" type="submit" value="Изменить">
                </form> </td>
	</tr>
</table>

