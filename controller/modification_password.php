<?php
include("../model/utilisateur.php");

$password=$_POST['password'];
$email=$_SESSION['email'];
$passe = sha1($password);
$utilisateur=new utilisateur();
$utilisateur->update_password($passe,$email);

?>