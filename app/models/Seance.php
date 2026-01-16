<?php 

class Seance{
  use Model;
    protected $id;
    protected $coach_id;
    protected $date;
    protected $heure;
    protected $duree;
    protected $statut;

  //construct
     public function __construct($coach_id, $date, $heure, $duree, $statut)
    {
        $this->coach_id = $coach_id;
        $this->date = $date;
        $this->heure = $heure;
        $this->duree = $duree;
        $this->statut = $statut;
    }
  //getter
     public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }
  public function ajouter(){

    $arr = [];
    $arr['date'];
    $arr['heure'];
    $arr['duree'];
    $arr['statut'];

    $this->insert($arr);
  }
}
