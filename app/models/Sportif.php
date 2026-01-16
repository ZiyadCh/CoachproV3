<?php

class Sportif
{

  //using model from ../core/Models.php
  use Model;

  public $user_id;

  protected $table = "sportifs";

  public function __construct($id)
  {
    $this->user_id = $id;
  }
  public function insertUserId(){
    $arr = [];
    $arr['user_id']   = $this->user_id;
    $this->insert($arr);
  }
}
