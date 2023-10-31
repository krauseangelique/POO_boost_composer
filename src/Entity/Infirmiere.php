<?php 
namespace Isl\PooBoostComposer\Entity;

// class fille
final class Infirmiere extends Personne {
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
    //setter & getter
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
    public function getGrade()
    {
        return $this->grade;
    }

    // methodes
    public function aCommeGrade(){
        return $this->nom." à comme grade ".$this->grade;
    }

    // on va surcharger protected function habiteA() de la class mère en modifiant sa visibilité en public pour pouvoir avoir accès dans le programme principale . Et dans la méthode public function habiteA(){ je return parent::habiteA() donc qui fait appel à la méthode du parent}
    public function habiteA()
    {
        return parent::habiteA();
    }
}