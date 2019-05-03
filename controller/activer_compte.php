<?php

include("../model/utilisateur.php");
$CIN=$_GET['CIN'];
$utilisateur=new utilisateur();
$utilisateur->confirmer_compte($CIN);
?>