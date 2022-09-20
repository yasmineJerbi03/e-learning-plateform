<?php
header('location:../espace.php');
include('../includes/session.php') ;
include('../includes/cours-bd.php') ;
require('../includes/connexion.php');
if(statut()==1)
include('../includes/matiere.php'); 
 ?>