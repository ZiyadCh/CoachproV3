<?php

class Home extends Controller{
  public function index():void{
    //instanciating model that USES database trait
    $arr = [];
    $arr['id'] = '3';
    echo "index";
    //$mod->delete($arr);
    $this->view("home");
  }

  public function edit():void{
    echo "edit";
    $this->view("home");
  }
}

