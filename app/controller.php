<?php 

class controller{

	protected $db;

	public function __construct() {
		try {
		
			$this->db = new PDO("mysql:host=localhost;dbname=dbwebb4", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
	
		}

  	}

}