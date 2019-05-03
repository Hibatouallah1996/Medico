<?php
include("../model/utilisateur.php");

$email=$_POST['email'];


$utilisateur=new utilisateur();
$utilisateur->initialisation_password($email);

?>