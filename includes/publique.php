<?php
include('../includes/session.php');
include('../includes/connexion.php') ;
        $prof=$_SESSION['nom'] ;
        $msg=$_POST['desc'] ;

            $name = $_FILES['fich2']['name'];
            $size =  $_FILES['fich2']['size'];
            if(!empty($name) && $size<2097152)
            {
                $reponse =$bd->query("SELECT * FROM demande ");
                $j=($reponse->rowCount())+1;
                $tmp =$_FILES['fich2']['tmp_name'];
                $url2 = str_replace(" ","","files/demande/"."$j".$name);
                $bd->exec("INSERT INTO demande (nom,prof,url,commentaire)
                VALUES('".$name ."','".$prof ."','".$url2 ."','".$msg ."')");
                chdir("../");
                move_uploaded_file($tmp,$url2) ;
            }
            

header('location:../accueil.php')

?>