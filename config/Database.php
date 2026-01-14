<?php

class Database{
  private $host = 'localhost';
  private $user = 'postgres';
  private $db = 'coachprov3';
  private $password = 'pstgrs';

  private function connect(){

    try {
    	$dsn = "pgsql:host=$this->host;dbname=$this->db;";
    	// make a database connection
    	$pdo = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    	if ($pdo) {
    		echo "Connected to the $db database successfully!";
        return $pdo;
    	}

    } catch (PDOException $e) {
    	    die($e->getMessage());
        } finally {
      	if ($pdo) {
    		$pdo = null;
    	  }
    } 

  }

  public function query($query,$data = []){

    $con = $this->connect();
    $stm = $con->prepare($query);
    $stm->execute();

  }
}
