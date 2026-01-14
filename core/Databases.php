<?php 


class Database{
  private $host = 'localhost';
  private $user = 'coachpro';
  private $db = 'coachprov3';
  private $password = '1234';

  private function connect() :PDO {

    try {
    	$dsn = "pgsql:host=$this->host;dbname=$this->db;";
    	// make a database connection
    	$pdo = new PDO($dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    	if ($pdo) {
         return $pdo;
    	}

    } catch (PDOException $e) {
    	    die($e->getMessage());
        }

  }

  public function query($query,$data = []){
    $con = $this->connect();
    $stm = $con->prepare($query);
    $check = $stm->execute($data);
    if ($check) {
      $result = $stm->fetchAll(PDO::FETCH_ASSOC); 
      if (is_array($result) && count($result)) {
        return $result;
      }
    }
    //tableau ykon 3amr or else
    return false;

  }
}

