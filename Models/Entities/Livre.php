<?php 
  require_once "../../_cnx/connexion.php";
  class Livre  
  {
    private $id;
    private $titre;
    private $auteur;
    private $description;
    private $langue;
    private $etat;
    private $anneePub;


    public function __construct($id, $titre, $auteur, $description, $langue, $etat, $anneePub){
      $this->id = $id;
      $this->titre = $titre;
      $this->auteur = $auteur;
      $this->description = $description;
      $this->langue = $langue;
      $this->etat = $etat;
      $this->anneePub = $anneePub;
    } 
    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
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
    public function setTitre($titre){
        $this->titre = $titre;
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
    public function creerLivre ($titre, $auteur, $description, $langue, $etat, $anneePublication){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->description = $description;
        $this->langue = $langue;
        $this->etat = $etat;
        $this->anneePublication = $anneePublication;
        echo "Livre '{$this->titre}' créé avec succès.\n";
    }
    public function modifierLivre($titre = null, $auteur = null, $description = null, $langue = null, $etat = null, $anneePublication = null){
        if ($titre) $this->titre = $titre;
        if ($auteur) $this->auteur = $auteur;
        if ($description) $this->description = $description;
        if ($langue) $this->langue = $langue;
        if ($etat) $this->etat = $etat;
        if ($anneePublication) $this->anneePublication = $anneePublication;
        echo "Livre '{$this->titre}' modifié avec succès.\n";
    }
    public function deletLivre(){
        echo "Livre '{$this->titre}' supprimé avec succès.\n";
    }
    public static function ajouterLivre($livre){
        echo "Livre '{$livre->getTitre()}' ajouté à la collection.\n";
    }

   

  

  }

//   $livre1 = new Livre("1", "la boite à merveille", "Ahmed Sefrioui", "un bon livre qui raconte une histoire reelle", "Francais", "disponible", 2000);
//   echo '<pre>';
//   print_r($livre1);
//   echo '</pre>';
?>