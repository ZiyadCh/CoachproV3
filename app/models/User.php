<?php

class User {

  //using model from ../core/Models.php
  use Model; 

  protected $table = "users";
  protected $columns = [
    'nom',
    'prenom',
    'email'
  ];
}
