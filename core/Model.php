<?php

trait Model
{

  use Database;

  //cruds
  //
  //inserer donne
  public function insert($data)
  {
    $keys = array_keys($data);
    $query = "insert into $this->table (" . implode(",", $keys) . ") values(:" . implode(",:", $keys) . ")";
    return  $this->query('insert',$query, $data);
  }

  //get by id
  public function whereId($data): array|bool
  {
    $query = "select * from $this->table where id = :id";
    $res =  $this->query('fetch',$query, $data);
    //return
    return $res[0];
  }
  //get by email
  public function whereEmail($data)
  {
    $query = "select * from $this->table where email = :email";
    $res =  $this->query('fetch',$query, $data);
    //return
    return $res[0];
  }

  //update donne
  public function update(): void {}
  //supprimer donne
  public function delete($data): void
  {
    $query = "delete from $this->table where id = :id";
    $this->query($query, $data);
  }
}
