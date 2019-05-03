<?php

include("../model/utilisateur.php");

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$CIN=$_POST['CIN'];
$tel=$_POST['tel'];
$dt=$_POST['dt'];
$SF=$_POST['SF'];
$Sexe=$_POST['Sexe'];
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];

//Ajouter un utilisateur
// On crypte le mot de passe
$passe = sha1($password);

$utilisateur=new utilisateur();
$utilisateur->Ajouter_utilisateur($nom,$prenom,$CIN,$tel,$dt,$SF,$Sexe,$email,$login,$passe,$adresse,$ville);

?>