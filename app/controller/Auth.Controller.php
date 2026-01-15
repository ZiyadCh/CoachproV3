<?php

class Auth extends Controller{
  public function index():void{
    // models/user.php uses the trait Model
    //model that USES database trait
    $user = new User;
    $arr = [];
    $arr['nom'] = 'ziyad';
    $arr['prenom'] = 'ziyad';
    $arr['role'] = 'coach';
    $user->insert($arr);
    $this->view("home");
  }
}
