<?php

class Model {

  protected $table = "users";

  use Database;

  //cruds
  public function insert($data):void {
    $keys = array_keys($data);
    $query = "insert into $this->table (".implode(",",$keys).") values(:".implode(",:",$keys).")";
    echo $query;
    $this->query($query,$data);
  }
  public function where($data):array|bool {
    $query = "select * from $this->table where id = :id";
    $res=  $this->query($query,$data);
    echo $res[0]['nom'] ;
    echo $res[0]['prenom'] ;
    echo $res[0]['id'] ;
    return $res;
  }

  public function update():void {

  }
  public function delete($data):void {
    $query = "delete from $this->table where id = :id";
    $this->query($query,$data);
    echo $query;
  }
}
