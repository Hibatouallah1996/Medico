<?php

include("../model/utilisateur.php");

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$CIN=$_POST['cin'];
$tel=$_POST['tel'];
$dt=$_POST['dt'];
$SF=$_POST['SF'];
$Sexe=$_POST['sexe'];
$email=$_POST['email'];
$login=$_SESSION['login'];
$password=$_SESSION['password'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];

//Ajouter un utilisateur
// On crypte le mot de passe
$passe = sha1($password);

$utilisateur=new utilisateur();
$utilisateur->Modifier_utilisateur($nom,$prenom,$CIN,$tel,$dt,$SF,$Sexe,$email,$adresse,$ville);


?>