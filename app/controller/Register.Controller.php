<?php

class Register extends Controller{

  public function index():void {
    $this->view("auth/register");
  }

  public function register():void{
    // models/user.php uses the trait Model that USES database trait
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $user = new User($_POST['nom'],$_POST['prenom'],$_POST['role'],$_POST['email'],$_POST['password']);
      $user->signup();
     //insert role id
     switch ($_POST['role']) {
      case 'coach':
          $coach = new Coach($user->id);
          $coach->insertUserId();
        break;
      case 'sportif':
          $sportif = new Sportif($user->id);
          $sportif->insertUserId();
        break;
      }
        //redirect to login
      $this->view("auth/login");
    }
  }
}
