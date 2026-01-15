<?php

class Model {
  use Database;

  //cruds
  public function insert(){

  }
  public function getFirst(){

  }
  public function where($data){
    $query = "select * from users where id = :id";
    $res=  $this->query($query,$data);
    echo $res[0]['nom'] ;
    echo $res[0]['prenom'] ;
    echo $res[0]['id'] ;
  }

  public function update(){

  }
  public function delete(){

  }
}
