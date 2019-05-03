<?php
include('../model/utilisateur.php');
$id_utilisateur=$_GET['id_utilisateur'];

$user=new utilisateur();
$user->AfficherProfile($id_utilisateur);

?>