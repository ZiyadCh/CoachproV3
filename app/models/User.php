<?php

class User
{

  //using model from ../core/Models.php
  use Model;

  protected   $id;
  protected $nom;
  protected $prenom;
  protected $email;
  protected $role;
  protected $passwordHash;

  protected $table = "users";
  //getter
  public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

  public function __construct($nom, $prenom, $role, $email, $password)
  {
    $this->nom      = $nom;
    $this->prenom   = $prenom;
    $this->role     = $role;
    $this->email    = $email;
    $this->passwordHash = $password;
  }

  public function signup(): void
  {
    $arr = [];
    $arr['nom']      = $this->nom;
    $arr['prenom']   = $this->prenom;
    $arr['role']     = $this->role;
    $arr['email']    = $this->email;
    $arr['password'] = password_hash($this->passwordHash, PASSWORD_DEFAULT);

    $this->id = $this->insert($arr);
  }

  public function login($email,$password){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $arr = [];
      $arr['email'] = $email;
     $row = $this->whereEmail($arr);
      return $row;
    }
  }

}
