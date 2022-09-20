<?php
include('session.php');
    if(isset($_POST['titre']) && isset($_POST['limite']))
    {
        include('connexion.php') ;
            $name = $_FILES['fich']['name'];
            $size = $_FILES['fich']['size'];
            if(!empty ($name) && $size<2097152)
            {
                $reponse =$bd->query("SELECT * FROM cours ");
                $j=($reponse->rowCount())+1;
                $name = $_FILES['fich']['name'];
                $date = date('Y-m-d H:i');
                $prof = $_SESSION['nom'] ;
                $matiere=$_POST['matiere'] ;
                $mess= $_POST['titre'];
                $tmp =$_FILES['fich']['tmp_name'];
                $url = str_replace(" ","",'files/ep/'."$j".$name) ;
                $genre = 1 ;
                $limite=$_POST['limite'] ;
                $bd->exec("INSERT INTO cours (matiere,prof,titre,nom,url,date,limite,genre)
                VALUES('".$matiere ."','".$prof ."','".$mess ."', '".$name ."','".$url ."','".$date ."','".$limite ."','".$genre ."')");
                 chdir("../");
                move_uploaded_file($tmp,$url) ;
            }
            

        }
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
