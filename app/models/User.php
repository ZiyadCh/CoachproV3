<?php

class User {

  //using model from ../core/Models.php
  use Model; 

  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $role;

  protected $table = "users";
  protected $columns = [
    'nom',
    'prenom',
    'email',
    'role',
  ];

  public function signup():void{
    $arr = [];
    $arr['nom'] = $this->nom;
    $arr['prenom'] = $this->prenom;
    $arr['role'] = $this->role;
    $arr['email'] = $this->email;
    $this->insert($arr);
  }
}
