<?php
function inscription()
{
    require('includes/connexion.php') ;
    if(isset($_POST['email']) && isset($_POST['mdp']) &&  $_POST['nom'] && isset($_POST['statut']))
{
        if(isset ($_POST['mdp']) && strlen($_POST['mdp'])<8)
        return "c" ;
         $requete2 = $bd -> prepare('SELECT * FROM personne where email=:email ') ;
         $requete2->execute(array('email'=>$_POST['email'])) ;
         if(($requete2->rowCount())!=0)
         { 
            return "b" ;
         }
         $requete1 = $bd -> prepare('SELECT * FROM personne where nom=:nom ') ;
         $requete1->execute(array('nom'=>$_POST['nom'])) ;
         if(($requete1->rowCount())!=0)
         {
        return "a" ;}
        else
        {
         session_start() ;
         $pass = $_POST['mdp'];
         $hpass= password_hash($pass, PASSWORD_BCRYPT);

        $requete3 = $bd->prepare('INSERT INTO personne (email,mdp,nom,statut)
        VALUES(:email, :mdp, :nom, :statut)');
        $requete3->execute(array('email' => $_POST['email'],'mdp' => $hpass,
        'nom' => $_POST['nom'], 'statut' => $_POST['statut']));
            
           
        $_SESSION['utilisateur'] = $_POST['email'] ;
        header("location:accueil.php");

    }
       }
}

?>