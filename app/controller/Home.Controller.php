<?php

class Home extends Controller{
  public function index():void{
    //instanciating model that USES database trait
    $mod = new Model;
    $arr = [];
    $arr['id'] = '3';
    $mod->delete($arr);
    $this->view("home");
  }
}

