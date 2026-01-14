<?php

class Model extends Database{
  //just testing
  public function test():void{
    $query = 'select * from users';
    $result = $this->query($query);
    //print each row
    foreach($result as $row){
    print_r($row['nom']) ;
    } 
  }
}
