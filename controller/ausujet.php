<?php
include("../model/utilisateur.php");


$sujet=$_POST['sujet'];
$description=$_POST['description'];

$utilisateur=new utilisateur();
$utilisateur->contacterprofil($sujet,$description,$_SESSION['email']);

?>