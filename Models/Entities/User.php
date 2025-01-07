<?php
require_once "../../_cnx/connexion.php";
   class User {
    private $id;
    private $nom;
    private $prenom;
    private $email; 
    private $numero; 
    private $password;

    public function __construct($id, $nom, $prenom, $numero, $email, $password) {
      $this->id = $id;
      $this->nom = $nom;
      $this->prenom = $prenom; 
      $this->numero = $numero;
      $this->email = $email;
      $this->password =$password;
   }

   public function getId() { 
      return $this->id;
   }
   public function getNom() { 
      return $this->nom;
   }
   public function getPrenom() { 
      return $this->prenom;
   }
   public function getEmail() { 
      return $this->email;
   }
   public function getNumero() { 
      return $this->numero;
   }
   public function getPassword() { 
      return $this->password;
   }
   public function setId($id){
      $this->id = $id;
   }
   public function setNom($nom){
      $this->nom = $nom;
   }
   public function setPrenom($prenom){
      $this->prenom = $prenom;
   }
   public function setEmail($email){
      $this->email = $email;
   }
   public function setNumero($num){
      $this->numero = $num;
   }
   public function setPassword($pass){
      $this->password = $pass;
   }
   public function logIn(){

   }
   public function logOut(){

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
?>