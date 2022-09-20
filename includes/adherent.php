<?php
    //liste des adhérents pour chaque Matiére
    require('connexion.php');
    $reponse =$bd->query("SELECT * FROM matiere WHERE nom='".$_SESSION['matiere']."' and prof='".$_SESSION['nom']."' ");
    $entree = $reponse->fetch();
    $acces = $entree['acces'];
    $tab = explode(".",$acces);
    echo "<ul class='list-group list-group-flush'>";
    for($j=0;$j<count($tab);$j++)
        {
            $reponse =$bd->query("SELECT * FROM personne WHERE id='".$tab[$j]."'  ");
            $entree = $reponse->fetch();
            echo "<li class='list-group-item'>".$entree['nom']."&nbsp;&nbsp;<span class='text-muted'> ".$entree['email']." </span></li>";

        }
    
    echo "</ul>"; 
?>