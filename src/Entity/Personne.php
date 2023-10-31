<?php

namespace Isl\PooBoostComposer\Entity;

// class MERE
class Personne
{

    protected $nom;
    protected $prenom;
    protected $adress;


    //setter & getter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setAdress($adress){
        $this->adress = $adress;
    }
    public function getAdress(){
        return $this->adress;
    }

    // autres fonctions
    public function habiteA(){
        return "la  personne ".$this->nom. "habite à ". $this->adress ;
    }
}
