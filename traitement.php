<?php

include "cnx.php";

if (isset($_GET["nom"])  &&  isset($_GET["adresse"]) && isset($_GET["phone"]) && isset($_GET["email"]) && isset($_GET["message"])  ) 
// $_GET["nom"] => get : le am Method; nom : am l name dans form sur html
{
    $nom= $_GET ["nom"];
    $adress= $_GET["adresse"];
    $telephone= $_GET["phone"];
    $email= $_GET["email"];
    $message= $_GET["message"];


    $req= mysqli_query($link, "insert into contact (nom,adress,telephone,email,message) values ('$nom', '$adress', '$telephone', '$email', '$message')" );

}
// teste de la connection
if($link)
{

    echo "Merci Beaucoup $nom";
}else
{
    die (mysqli_connect_error());
}

?>