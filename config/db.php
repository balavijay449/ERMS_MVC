<?php

class Dbc{
	public $db;
	public function __construct(){
		session_start();
		$this->db = new mysqli("localhost", "root", "", "erms") or die("connection error");
	}
}

$dbc = new Dbc;
?>