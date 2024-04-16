<?php

$user="root"; //nom d'utilisateur
$mdp=""; //mot de passe d'utilisateur
$db="site_web_réstaurant"; //nom de bd
$server="localhost"; //nom de serveur

// assurer la connection de la base
$link=mysqli_connect($server,$user, $mdp,$db);
?>