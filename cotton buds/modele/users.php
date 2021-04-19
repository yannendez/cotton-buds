<?php

class users{
    //attributs
    private int $id;
    private string $nom;
    private string $prenom;
    private string $adresse;

    function __construct(int $id = 0, string $nom, string $prenom, string $adresse=''){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    function getNom() : string {
        return $this->nom;
    }

    function getPrenom() : string {
        return $this->prenom;
    }

    function getAdresse() : string {
        return $this->adresse;
    }

    function getId() : int {
        return $this->id;
    }

    function setAdresse(string $adresse){
        $this->adresse = $adresse;
    }

    function setNom(string $nom){
        $this->nom = $nom;
    }

    function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }
}





?>