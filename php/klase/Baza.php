<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/fitness/php/config.php");

class Baza{

	public $servername="localhost";
	public $username="root";
	public $password="";
	public $dbname="atleticogym";

	public $conn;
	public $error;

	private static $instance=null;

	private function __construct(){

		$this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);

		if(!$this->conn){
			$this->error=$this->conn->connect_error;
			return false;
		}
	}


public static function getInstance(){

	if(is_null(self::$instance)){
		self::$instance=new Baza();
	}

	return self::$instance;
}

private function __clone(){}

public function select($query){

	$select=$this->conn->query($query);
	if($select->num_rows>0){
		return $select;
	}else{
		return false;
	}

}

public function insert($query){
	$insert=$this->conn->query($query);
	if($insert){
		return $insert;
	}else{
		return false;
	}
}

public function update($query){
	$update=$this->conn->query($query);
	if($update){
		return $update;
	}else{
		return false;
	}
}


public function delete($query){
	$delete=$this->conn->query($query);
	if($delete){
		return $delete;
	}else{
		return false;
	}
}

}


?>