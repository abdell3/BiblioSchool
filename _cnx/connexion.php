<?php
 
//  $host = 'localhost';   
//  $dbname = 'biblioSchool'; 
//  $username = 'root'; 
//  $password = ''; 
 
//  try {
//      $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  } catch (PDOException $e) {
//      echo "Connection échouée : " . $e->getMessage();
//  }
 
 
  
$host = "localhost"; 
$username = "root";   
$password = "";      
$dbname = "biblioschool";  


class Connexion{
    private $hostname = "localhost" ; 
    private $username = "root" ;   
    private $password = "" ;      
    private $dbname = "biblioschool" ; 
    private $connexion;

    public function __construct($host, $username, $password, $dbname, $connnexion){
        $this->hostname = $host ;
        $this->username = $username ;
        $this->password = $password ;
        $this->dbname = $dbname ;
        $this->connexion = $connnexion ;
    }
    public function connect(){
        $this->connexion = null;
        try {
            $this->connexion= new PDO('mysql:host='. $this->hostname . ';dbname='.$this->dbname 
             , $this->username, $this->password);
            
            
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        } catch (PDOException $e) {
            echo'Erreur de connexion: ' . $e->getMessage();
        }
        return $this->connexion;
    }
}

?>