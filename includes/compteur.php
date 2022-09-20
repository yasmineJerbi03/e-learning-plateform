<?php
function personnes($statut)
{
    include('connexion.php') ;
    $reponse =$bd->query("SELECT * FROM personne WHERE statut='".$statut."'");
    return($reponse->rowCount()) ; 

}
function cours()
{
    include('connexion.php') ;
    $reponse =$bd->query('SELECT * FROM public');
    return($reponse->rowCount()) ; 
}
?>