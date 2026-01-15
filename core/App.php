<?php
class App
{
  private $controller = '';
  private $method = '';

  public function load() :void
  {

    //slect method
    //the method name being the first / in the url after public
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
    //instance controller
    $controller =  new $this->controller;
    //select method 
    //the method name being the second / in the url
    if (!empty($URL[1])) {
      if (method_exists($controller,$URL[1])) {
        $this->method = $URL[1];
      }
    }
    call_user_func_array([$controller, $this->method], []);
  }
}
