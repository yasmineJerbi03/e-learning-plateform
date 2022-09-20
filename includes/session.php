<?php  
session_start() ;

function authentification()
{
    include('connexion.php');

   if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['connexion']))
   {
        $util =$_POST['email'] ;
        $reponse =$bd->query("SELECT mdp FROM personne WHERE email= '" . $util . "' ");
       $entree = $reponse->fetch() ;

       $pass = $_POST['mdp'] ;     $hpass= $entree['mdp'];
        if(password_verify($pass,$hpass))
        {
    
                //redirection vers l'espace utilisateur
                session_set_cookie_params(1209600);
                session_start() ;
                $_SESSION['utilisateur'] = $_POST['email'];
                chdir("../");
                header("location:accueil.php");
    
        }
       else 
       { return(true) ;
           }

}}
function est_connecte()
{
    if(isset($_SESSION['utilisateur']))
    return true ;
}

function statut()
{
    require('connexion.php') ;
    if(est_connecte()){
    $utilisateur =$_SESSION['utilisateur'] ;
    $reponse =$bd->query("SELECT * FROM personne WHERE email= '" . $utilisateur . "' ");
    while ($entree = $reponse->fetch()) 
    {
        $_SESSION['nom']=$entree['nom'] ;
        $_SESSION['statut'] =$entree['statut'] ;
    }
if($_SESSION['statut']==0)
  return 0 ;
  if($_SESSION['statut']==1)
  return 1 ;
  if($_SESSION['statut']==2)
  return 2 ;}
}   
?>