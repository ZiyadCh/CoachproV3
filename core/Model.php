<?php

trait Model {

  use Database;

  //cruds
  //
  //inserer donne
  public function insert($data):void {
    $keys = array_keys($data);
    $query = "insert into $this->table (".implode(",",$keys).") values(:".implode(",:",$keys).")";
    echo $query;
    $this->query($query,$data);
  }

  //trouver donne
  public function where($data):array|bool {
    $query = "select * from $this->table where id = :id";
    $res=  $this->query($query,$data);
    //exemple affichage
    //echo $res[0]['nom'] ;
    //echo $res[0]['prenom'] ;
    //echo $res[0]['id'] ;
    //return
    return $res;
  }

  //update donne
  public function update():void {

  }
  //supprimer donne
  public function delete($data):void {
    $query = "delete from $this->table where id = :id";
    $this->query($query,$data);
    echo $query;
  }
}
