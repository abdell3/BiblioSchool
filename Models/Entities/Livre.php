<?php 
require_once '../../_cnx/connexion.php';
  class Livre  
  {
    private $id;
    private $titre;
    private $auteur;
    private $description;
    private $langue;
    private $etat;
    private $annee_publication;
    private $image_url;
    private $connexion;


    public function __construct($id, $titre, $auteur, $description, $langue, $etat, $annee_publication, $image_url){
      $this->id = $id;
      $this->titre = $titre;
      $this->auteur = $auteur;
      $this->description = $description;
      $this->langue = $langue;
      $this->etat = $etat;
      $this->annee_publication = $annee_publication;
      $this->image_url = $image_url;
      
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
        return $this->annee_publication;
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
    public function setAnneePub($annee_publication){
        $this->annee_publication = $annee_publication;
    }
    public function getImage(){
        return $this->image_url;
    }
    public function setImageUrl($image_url){
        $this->image_url = $image_url;
    }
    public function getLivre() {
        $sql = "SELECT * FROM livres";
        try {
            $stmt = $this->connexion->query($sql);
            return $stmt;
        } catch (PDOException $e) {
            echo "Erreur de requête: " . $e->getMessage();
            return null;
        } 
      }
    public function __toString(){
        return "". $this->getId() ."";
    }
    public function creerLivre ($titre, $auteur, $description, $langue, $etat, $annee_pulication, $image_url){
        
        $sql = "INSERT INTO Livres (titre, auteur, description, langue, etat, annee_pulication, image_url) VALUES (:titre, :auteur, :description, :langue,:etat,:annee_pulication,:image_url)";
        // $this->connexion = null;
        try {
            // if (!$this->connexion) {
            //     throw new Exception("La connexion à la base de données est manquante.");
            // }
            var_dump($this->connexion);
            $stmt = $this->connexion->prepare($sql);
    
            
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':auteur',$auteur);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':langue', $langue);
            $stmt->bindParam(':etat', $etat);
            $stmt->bindParam(':annee_pulication', $annee_pulication);
            $stmt->bindParam(':image_url', $image_url);
    
            
            if ($stmt->execute()) {
                return true;
            }
            return false;
        } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
            return false;
        }
    
        // $this->titre = $titre;
        // $this->auteur = $auteur;
        // $this->description = $description;
        // $this->langue = $langue;
        // $this->etat = $etat;
        // $this->anneePublication = $anneePublication;
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