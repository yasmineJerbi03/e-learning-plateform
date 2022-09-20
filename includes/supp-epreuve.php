<?php 
include('connexion.php');
$bd->exec("DELETE FROM rendus WHERE ep='".$_POST['i']."' ");header('location:'.$_SERVER['HTTP_REFERER']);
?>