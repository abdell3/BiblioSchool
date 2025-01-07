<?php 

 class Réservation {
    private int $id;
    private string $reference;
    private string $description;
    private string $dateDebut;
    private string $dateFin;



    public function __construct($id, $reference, $description, $dateDebut, $dateFin){
        $this->id = $id;
        $this->reference = $reference;
        $this->description = $description;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
    }

    public function getId(): int {
        return $this->id;
    }
    public function getReference(): string {
        return $this->reference;
    }
    public function getDescription(): string {
        return $this->description;
    }
    public function getDateDebut(): string {
        return $this->dateDebut;
    }
    public function getDateFin(): string {
        return $this->dateFin;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setReference($reference) {
        $this->reference = $reference;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }
    
 }





?>