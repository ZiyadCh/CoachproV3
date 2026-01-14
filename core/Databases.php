<?php 

class Database{
  private $host = 'localhost';
  private $user = 'coachpro';
  private $db = 'coachprov3';
  private $password = '1234';

  private function connect(){

    try {
    	$dsn = "pgsql:host=$this->host;dbname=$this->db;";
    	// make a database connection
    	$pdo = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    	if ($pdo) {
    		echo "Connected to the  database successfully!";
         return $pdo;
    	}

    } catch (PDOException $e) {
    	    die($e->getMessage());
        }

  }

  public function query($query,$data = []){

    $con = $this->connect();
    $stm = $con->prepare($query);
    $stm->execute($data);

  }
}

