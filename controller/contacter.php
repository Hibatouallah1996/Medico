<?php

include("../model/utilisateur.php");

$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];


$utilisateur=new utilisateur();
$utilisateur->contacter($nom,$email,$message);

?>