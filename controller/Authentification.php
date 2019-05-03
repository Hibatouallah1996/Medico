<?php
include('../model/utilisateur.php');
$login=$_POST['login'];
$password=$_POST['password'];

$pass = sha1($password);

$utilisateur=new utilisateur();
$utilisateur->authentification($login,$pass);


?>