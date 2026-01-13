<?php

class Database{
  private $host;
  private $user;
  private $db;
  private $password;

  private function connect(){

    try {
    	$dsn = "pgsql:host=$host;dbname=$db;";
    	// make a database connection
    	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    	if ($pdo) {
    		echo "Connected to the $db database successfully!";
    	}

    } catch (PDOException $e) {
    	    die($e->getMessage());
        } finally {
      	if ($pdo) {
    		$pdo = null;
    	  }
    } 
  }

  public function query(){

  }

}
