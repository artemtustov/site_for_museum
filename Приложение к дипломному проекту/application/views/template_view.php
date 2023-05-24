<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Музей М.Ф. Шмырёва</title>
	<link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
	<div class="header_container">
	<header>
		<div class="header_left">
		<a href="http://museum.by">
					<img src="images/logo.jpg" width="90" height="90" alt="LOGO">
				</a>
		</div>
		<div class="header_center">
		МУЗЕЙ ГЕРОЯ СОВЕТСКОГО СОЮЗА М.Ф.ШМЫРЁВА
		</div>
		<div class="header_right">
		Время работы: <br>
		Ежедневно, 8:00 - 19:00 <br>
		Телефон: <br>
		 +375 212 26 81 63 <br>
		</div>
	</header>
	</div>
	<nav class="menu_container">
	<ul class="menu">
		<li class="menu_button"><a href="http://museum.by">Музей</a></li>
		<li class="menu_button"><a href="http://museum.by/poster">Афиша</a></li>
		<li class="menu_button"><a href="http://museum.by/services">Услуги</a></li>
		<li class="menu_button"><a href="http://museum.by/gallery">Галерея</a></li>
		<li class="menu_button"><a href="http://museum.by/contacts">Контакты</a></li>
		<li class="menu_button"><a href="">Электронная книга Память</a>
                    <ul class="submenu">
                    <li> <a href="http://museum.by/ekp_search">Поиск погибшего</a> </li>
                    <li> <a href="http://museum.by/ekp_add">Добавление погибшего</a> </li>
                    <li> <a href="http://museum.by/ekp_grave">Поиск захоронения</a> </li>
                    <li> <a href="http://museum.by/ekp_edit">Редактирование</a> </li>
                    </ul>
                </li>
                <li class="menu_button"><a href="#">Моя страница</a>
                    <ul class="submenu">
                        <li> <a href="http://museum.by/login">Вход</a>
                        <li> <a href="http://museum.by/admin">Администрирование</a> </li>
                        <li>
                            <form method="POST">
                            <input name="logout" type="submit" value="Выход">
                            </form>
                    </li>
                    </ul>
                </li>
	</ul>
	</nav>
	<div class="main">
		<div class="main_container">
		<?php include 'application/views/'.$content_view;?>
		</div>
	</div>
	<footer>
		<p> Учреждение культуры "Витебский областной музей героя Советского Союза М.Ф. Шмырёва", 2020 </p>
	</footer>
</body>