<?php
//Ajout des Cours Par L'Administrateur
include('session.php');
include('connexion.php') ;

$name = $_FILES['cours']['name'];
$size = $_FILES['cours']['size'];
    if(!empty($name) && $size<2097152) 
             {
                $reponse =$bd->query("SELECT * FROM public ");
                $j=($reponse->rowCount())+1;
                $proprietaire = "Achieve" ;
                $specialite=$_SESSION['specialite'] ;
                $sujet = $_POST['sujet'];
                $categorie=$_SESSION['categorie'] ;
                $tmp =$_FILES['cours']['tmp_name'];
                $url = str_replace(" ","",'files/demande/'."$j".$name) ;
                $bd->exec("INSERT INTO public (url,prof,categorie,matiere,sujet)
                VALUES('".$url ."','".$proprietaire ."','".$categorie ."', '".$specialite ."','".$sujet ."')");
                 chdir("../");
                move_uploaded_file($tmp,$url) ;
             }
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
