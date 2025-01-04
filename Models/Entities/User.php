<?php
   class User {
    private $id;
    private $nom;
    private $prenom;
    private $email; 
    private $numero; 
   //  private $emailVerified;
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
    
   






   }
?>