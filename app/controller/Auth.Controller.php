<?php

class Auth extends Controller{
  public function index(){
    //instanciating model that USES database trait
    $mod = new Model;
    $arr = [];
    $arr['nom'] = 'ziyad';
    $arr['prenom'] = 'ziyad';
    $arr['role'] = 'coach';
    $arr['email'] = 'ziyad';
    $arr['prenom'] = 'ziyad';
    $mod->insert($arr);
    $this->view("home");
  }
}
