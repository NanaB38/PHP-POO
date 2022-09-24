<?php 
require 'Personnage.php';
// ordre important pour heritage 
require 'Archer.php';

$merlin = new Personnage('Merlin');
$lancelot = new Personnage('Lancelot');

$gauvain = new Archer('Gauvain');

$gauvain -> attack($lancelot);

var_dump ($merlin, $lancelot, $gauvain ); 


