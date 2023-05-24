<h1>Панель администрирования</h1>
<p>
Добро пожаловать в панель администрирования сайта. С помощью данной панели Вы можете добавить или удалить событие из афиши, а также услугу из списка услуг.
</p>

<div class="poster_edit";>

	<p>Добавление нового события:</p>

	<div class="poster_add";>
		<form method="POST">
		Год <input name="poster_year" type="text"><br>
		<br>
		Месяц <input name="poster_month" type="text"><br>
		<br>
		День <input name="poster_day" type="text"><br>
		<br>
		Изображение <input name="poster_image" type="text"><br>
		<br>
		Описание <input name="poster_description" type="text"><br>
		<br>
		<input name="poster_add" type="submit" value="Добавить">
		</form>
	</div>

	<p>Удалить событие:</p>

	<div class="poster_remove";>
		<form method="POST">
		Описание <input name="poster_description" type="text"><br>
		<br>
		<input name="poster_remove" type="submit" value="Удалить">
		</form>
	</div>

</div>

<p></p>

<div class="services_edit">

	<p>Добавление новой услуги:</p>

	<div class="services_add";>
		<form method="POST">
		Изображение <input name="services_image" type="text"><br>
		<br>
		Описание <input name="services_descriptipon" type="text"><br>
		<br>
		Стоимость <input name="services_coast" type="text"><br>
		<br>
		<input name="services_add" type="submit" value="Добавить">
		<br>
		</form>
	</div>

	<p>Удалить услугу:</p>

	<div class="services_remove";>
		<form method="POST">
		Описание <input name="services_description" type="text"><br>
		<br>
		<input name="services_remove" type="submit" value="Удалить">
		</form>
	</div>
</div>

<p></p>