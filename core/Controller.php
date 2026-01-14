<?php

class Controller
{

  public function view($nom)
  {

    $filename = "../app/view/" . $nom . ".view.php";
    if (file_exists($filename)) {
      require $filename;
    } else {
      $filename = "../app/view/404.view.php";
      require $filename;
    }
  }
}
