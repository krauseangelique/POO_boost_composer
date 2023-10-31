<?php 
namespace Isl\PooBoostComposer\Entity;

// class fille
class Infirmiere extends Personne {
    // je lui indique les attributs qui lui sont propres
    private $grade;
    private $typeDeTravail; // à domicile, à l'hopital, à la maison de repos

    // constructeur
    // Quels sont les champs que je veux rendre obligatoires à l'instantiation d'un nouvel objet
    public function __construct($nom, $grade)
    {
        $this->nom = $nom;
        $this->grade = $grade;

    }
}