//<?php 

// MYSQL
class MyDB
{
	var $dblogin ="root";
	var $dbpass ="12345";
	var $db ="museum";
	var $dbhost ="localhost";
	
	var $link;
	var $query;
	var $err;
	var $result;
	var $data;
	var $fetch;
	
	function connect() {
		$this->link = mysqli_connect($this->dbhost, $this->dblogin, $this->dbpass);
		mysqli_select_db($this->link, $this->db);
		mysqli_query($this->link, 'SET NAMES utf8');
	}
	
	function set_db($db) {
		$this->db = $db;
	}
	
	function close() {
		mysqli_close($this->link);
	}
	
	function run($query) {
		$this->query = $query;
		$this->result = mysqli_query($this->link, $this->query);
		$this->err = mysqli_error($this->link);
	}
	
	function row() {
		$this->data = mysqli_fetch_assoc($this->result);
		if ($this->data != NULL) return true; 
		else return false;
	}
	
		
	
/*	function fetch() {
		while ($this->data = mysqli_fetch_assoc($this->result)) {
			$this->fetch = $this->data;
			return $this->fetch;
		}
	}
*/	
	function stop() {
		unset($this->data);
		unset($this->result);
		//unset($this->fetch);
		unset($this->err);
		unset($this->query);
	}
}
	