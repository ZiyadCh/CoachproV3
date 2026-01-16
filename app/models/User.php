<?php

class User
{

  //using model from ../core/Models.php
  use Model;

  public $id;
  protected $nom;
  protected $prenom;
  protected $email;
  protected $role;
  protected $passwordHash;

  protected $table = "users";
  //protected $columns = [
  // 'nom',
  // 'prenom',
  // 'email',
  // 'role',
  //];

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
    $arr['password'] = password_hash($this->password, PASSWORD_DEFAULT);

    $this->id = $this->insert($arr);
  }
}
