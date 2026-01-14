<?php
class App
{
  private $controller = 'Home';
  private $method = 'index';

  public function load() :void
  {

    $URL = explode("/", $_GET['url'] ?? 'home');
    $filename = "../app/controller/" . ucfirst($URL[0]) . ".Controller.php";
    if (file_exists($filename)) {
      require $filename;
      $this->controller = ucfirst($URL[0]);
    } else {
      $filename = "../app/controller/_404.php";
      require $filename;
      $this->controller = "_404";
    }
    $controller =  new $this->controller;
    call_user_func_array([$controller, $this->method], []);
  }
}
