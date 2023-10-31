<?php

use Isl\PooBoostComposer\Entity\Infirmiere;
use Isl\PooBoostComposer\Entity\Personne;

require_once 'vendor/autoload.php'; // permet de CHARGER toutes les classes de src

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicesPOOAdresse_Boost_Composer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    // l'echo devra se trouver DANS la balise <body>
    echo "Hello ma base de données test_poo_adresse_boost";

    $infirmiere1 = new Infirmiere("ADDOUCHE", "A1"); // à l'instanciation de l'objet l'éditeur m'ajoute le use correspondant ici use Isl\PooBoostComposer\Entity\Infirmiere;
    echo "<pre>";
    var_dump($infirmiere1); // on peut faire non pas un echo d'un objet mais bien un var_dump d'un objet
    echo "</pre>";
    echo $infirmiere1->habiteA(); // Méthode de la class mère qui dépend de l'objet ici $infirmiere1

    echo "<br>" . $infirmiere1->aCommeGrade();
    // $personne1 = new Personne(); // dès qu'on place la class Personne en abstract j'obtiens bien une Fatal error Fatal error: Uncaught Error: Cannot instantiate abstract class Isl\PooBoostComposer\Entity\Personne donc abstract fonctionne
    ?>
</body>

</html>