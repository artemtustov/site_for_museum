//<?php 

// Класс подключения к базе данных через ODBC.
class MyDB
{
	// логин, проль, база данных, имя подключения
	var $dblogin ="root";
	var $dbpass ="12345";
	var $db ="museum";
	var $dbdsn ="db_museum";
	
	var $link;
	var $query;
	var $err;
	var $result;
	var $data;
	var $fetch;
	
	// подключение к базе
	function connect() {
		$this->link = odbc_connect($this->dbdsn, $this->dblogin, $this->dbpass);
	}
	
	// закрытие соединения
	function close() {
		odbc_close($this->link);
	}
	
	// запуск SQL запроса на выполнение
	function run($query) {
		$this->query = $query;
		$this->result = odbc_exec($this->link, $this->query);
		$this->err = odbc_error($this->link);
	}
	
	// получение строки из запроса в массив
	function row() {
		$this->data = odbc_fetch_array($this->result);
	}
	
	// аналогично
	function next_resalt() {
		$this->data = odbc_next_result($this->resalt);
	}
	
	// очистка пременных
	function stop() {
		unset($this->data);
		unset($this->result);
		unset($this->err);
		unset($this->query);
	}
}