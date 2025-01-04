<?php 
  require_once "User.php";
  require_once "../../_cnx/connexion.php";

  class Admin extends User
  {
    public function __construct($id, $nom, $prenom, $numero, $email, $password){
        parent::__construct($id, $nom, $prenom, $numero, $email, $password);
    }

}




?>