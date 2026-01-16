<?php
class SeanceC extends Controller{
  public function index(){
    $this->view("creeSeance");
  }
  public function creer(){
    $this->view("/seance/creeSeance");
  }
  public function newSeance(){
    $seance = new Seance($_SESSION['id'],$_POST['date'],$_POST['heure'],$_POST['duree'],'disponible');
    $seance->ajouter();
  }
}
