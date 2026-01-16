<?php

class Login extends Controller
{
  public function index()
  {
    $this->view("auth/login");
  }

  public function login(): void
  {
    // models/user.php uses the trait Model that USES database trait
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $user = new User(null, null, null, $_POST['email'], $_POST['password']);
      $row =  $user->login($_POST['email'], $_POST['password']);
      $password = $row['password'];
      
      //verification
      if (password_verify($_POST['password'], $password)) {
        //check role
        if ($row['role'] == 'sportif') {
          //sesion
          $_SESSION['id'] = $row['id'];
          $_SESSION['nom'] = $row['nom'];
          $_SESSION['prenom'] = $row['prenom'];
          $this->view("/sportif/Dashboard");
          //refirect
        } elseif ($row['role'] == 'coach') {
          //sesion
          $_SESSION['id'] = $row['id'];
          $_SESSION['nom'] = $row['nom'];
          $_SESSION['prenom'] = $row['prenom'];
          $this->view("/coach/Dashboard");
          //   header("location: ../pages/dashboard.coach.php");
        }
      } else {
        echo "not";

      }
    }
  }
}
