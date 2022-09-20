<?php
function recherche($u,$chaine)
{
$tab = explode(".",$chaine);
for($i=0;$i<count($tab);$i++)
{
if(($tab[$i])==$u) return true;
}
return false;
}


// a_acces() retourne si l'etudiant a acces à une Matiére
function a_acces()
{
    session_start();
    include('connexion.php');
    $reponse =$bd->query("SELECT * FROM personne where nom='".$_SESSION['nom']."' ");
    $entree = $reponse->fetch();
    $id=$entree['id'];
    $reponse =$bd->query("SELECT * FROM matiere where nom='".$_SESSION['matiere']."' and prof='".$_SESSION['ens']."' ");
    $entree1 = $reponse->fetch();
    if(recherche((string)($id),(string)($entree1['acces']))==true) return true ;
    else return false ;

}

?>