<?php
// Première Classe 
require 'Personnage.php';

$merlin = new Personnage("Merlin");
//affiche les informations structurées d'une variable, y compris son type et sa valeur.
// pour accéder à ce qui est à l'intérieur de l'objet : $merlin -> $life 
// var_dump ($merlin -> shout()); 

$merlin -> regenerate2();
//créer une nouvelle var name car pas de val par défaut
// $merlin -> name = "Merlin";


// on construit ici le nom au lieu de faire $lancelot -> name
$lancelot = new Personnage("Lancelot");
// var_dump ($lancelot -> dead()); 
//donne false 


//10 points de vie passés en param 

// 84 vies 
$merlin -> attack($lancelot);
if ($lancelot->dead()) {
    echo 'Lancelot est mort...';
}
else {
    echo 'Lancelot a survécu avec ' . $lancelot->life . ' points de vie !';
}

$merlin -> setName('Merlin l Enchanteur');


var_dump ($merlin); 
var_dump ($lancelot); 

var_dump ($lancelot-> regenerate2(4)); 

