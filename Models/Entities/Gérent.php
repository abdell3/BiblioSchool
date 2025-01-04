<?php 

require_once "User.php" ;
require_once "../../_cnx/connexion.php";

class Gérent extends User
{
    public function __construct($id, $nom, $prenom, $numero, $email, $password){
        parent::__construct($id, $nom, $prenom, $numero, $email, $password);
    }
    public function validReservation(){

    }
    public function rejeterReservation(){

    }
    




}



?>