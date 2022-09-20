<?php
include('connexion.php');
{
    session_start();
    $bd->exec("UPDATE rendus SET note= '".$_POST['note']."' where ep='".$_SESSION['ep']."' and etudiant='".$_POST['et']."' ");
    $bd->exec("UPDATE rendus SET remarque= '".$_POST['remarque']."' where ep='".$_SESSION['ep']."'  and etudiant='".$_POST['et']."' ");
    $direction = $_SERVER['HTTP_REFERER'];
    header('location:'.$direction) ;

}  
?>