<?php 

class Tags
{
    private $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }
    public function getName(){
        return $this->nom;
    }
    public function setName($nom){
        $this->nom = $nom;
    }


    public function createTags(){

    }
    public function deleteTags($nom){


    }
}








?>