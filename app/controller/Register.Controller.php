<?php

class Register extends Controller{
  public function register():void{
    // models/user.php uses the trait Model
    //model that USES database trait
    $user = new User;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user->insert();
    }
    $this->view("auth/register");
  }
}
