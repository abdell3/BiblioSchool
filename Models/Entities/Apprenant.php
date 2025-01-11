<?php
require_once "User.php";
require_once("..\_cnx\connexion.php");

class Apprenant extends User
{
    private $role;
    public function __construct($id, $nom, $prenom, $numero, $email, $password, $role){
     parent::__construct($id, $nom, $prenom, $numero, $email, $password);
     $this->role = $role;
    }

}





?>