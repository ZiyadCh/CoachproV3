<?php

class Home extends Controller{
  public function index(){
    $mod = new Model;
    $mod->test();
    $this->view("home");
  }
}

