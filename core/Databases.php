<?php 


trait Database{
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

  public function fetch(string $query, array $data = []): array
{
    $con = $this->connect();
    $stm = $con->prepare($query);
    $stm->execute($data);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

public function execute(string $query, array $data = []): int
{
    $con = $this->connect();
    $stm = $con->prepare($query);
    $stm->execute($data);
    return $stm->rowCount();
}

public function insert(string $query, array $data = []): int
{
    $con = $this->connect();
    $stm = $con->prepare($query);
    $stm->execute($data);
    return (int)$con->lastInsertId();
}

  public function query($query,$data = []):array{
    $con = $this->connect();
    $stm = $con->prepare($query);
    $check = $stm->execute($data);
    if ($check) {
      $result = $stm->fetchAll(PDO::FETCH_ASSOC); 
      if (is_array($result) && count($result)) {
        if ($result === "0") {
          return $con->lastInsertId();
        }
        return $result;
      }
    }

  }
}

