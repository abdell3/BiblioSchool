<?php 
  require_once "../../_cnx/connexion.php";
  class Livre  
  {
    private $id;
    private $title;
    private $auteur;
    private $description;
    private $langue;
    private $etat;
    private $anneePub;


    public function __construct($id, $title, $auteur, $description, $langue, $etat, $anneePub){
      $this->id = $id;
      $this->title = $title;
      $this->auteur = $auteur;
      $this->description = $description;
      $this->langue = $langue;
      $this->etat = $etat;
      $this->anneePub = $anneePub;
    } 
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getDescription(){
    return $this->description;
    }
    public function getLangue(){
        return $this->langue;
    }
    public function getEtat(){
        return $this->etat;
    }
    public function getAnneePub(){
        return $this->anneePub;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setLangue($langue){
        $this->langue = $langue;
    }
    public function setEtat($etat){
        $this->etat = $etat;
    }
    public function setAnneePub($anneePub){
        $this->anneePub = $anneePub;
    }
    public function __toString(){
        return "". $this->getId() ."";
    }
    public function creerLivre (){

    }
    public function modifierLivre(){

    }
    public function deletLivre(){

    }
    public function ajouterLivre(){

    }

   

  

  }

//   $livre1 = new Livre("1", "la boite à merveille", "Ahmed Sefrioui", "un bon livre qui raconte une histoire reelle", "Francais", "disponible", 2000);
//   echo '<pre>';
//   print_r($livre1);
//   echo '</pre>';
?>