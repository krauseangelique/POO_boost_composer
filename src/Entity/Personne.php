<?php

namespace Isl\PooBoostComposer\Entity;

// class MERE
abstract class Personne
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

    // autres fonctions Si c'est mit en protected dans la mère alors dans la fille ce ne sera plus accessible sauf si on SURCHARGE la méthode dans le fichier fille
    protected function habiteA(){
        return "la  personne ".$this->nom. " habite à ". $this->adress ;
    }
}
