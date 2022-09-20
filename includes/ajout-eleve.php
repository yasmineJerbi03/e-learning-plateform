<?php
session_start();
include('connexion.php');
$reponse =$bd->query("SELECT * FROM personne where nom='".$_SESSION['nom']."' ");
$entree = $reponse->fetch();
$id=$entree['id'];
$reponse =$bd->query("SELECT * FROM matiere where nom='".$_SESSION['matiere']."' and prof='".$_SESSION['ens']."' ");
$entree1 = $reponse->fetch();
$acces=$entree1['acces'].$id.".";
$bd->exec("UPDATE matiere SET acces= '".$acces."' where nom='".$_SESSION['matiere']."' and prof='".$_SESSION['ens']."' ");
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;
?>