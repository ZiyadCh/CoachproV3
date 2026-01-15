<?php

class Home extends Controller{
  public function index():void{
    //instanciating model that USES database trait
    $mod = new Model;
    $mod->where([':id' => 3]);
    $this->view("home");
  }
}

