<?php
function format($date)
{
    $occ = strrpos($date,":");
    $date_formate = substr($date,0,$occ) ;
    return($date_formate);
}
function extension($cours)
{
    $pos = stripos($cours,".");
    $ext  = substr($cours,$pos+1,strlen($cours));
    return $ext ;

}

function compte()
{    if (statut()==0) return "Administrateur";
    if (statut()==1) return "Enseignant";
    if (statut()==2) return "Etudiant";

}
function notification()
{
    include('includes/connexion.php');
    $reponse =$bd->query("SELECT * FROM demande");
    return ($reponse->rowCount());
}


?>