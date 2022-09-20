<?php
include('../includes/session.php');
    if(isset($_POST['titre1']))
    {
        include('../includes/connexion.php') ;
            $name = $_FILES['fich1']['name'] ;
            $size = $_FILES['fich1']['size'];
            if(!empty($name) && $size<2097152)
            {
                $reponse =$bd->query("SELECT * FROM cours ");
                $j=($reponse->rowCount())+1;
                $date = date('Y-m-d H:i');
                $prof = $_SESSION['nom'] ;
                $mess= $_POST['titre1'];
                $tmp =$_FILES['fich1']['tmp_name'];
                $url = str_replace(" ","",'files/cp/'."$j".$name) ;
                $matiere=$_POST['matiere'] ;
                $genre=0;
                $bd->exec("INSERT INTO cours (matiere,prof,titre,nom,url,date,genre)
                VALUES('".$matiere ."','".$prof ."','".$mess ."', '".$name ."','".$url ."','".$date ."','".$genre ."')");
                chdir("../");
                move_uploaded_file($tmp,$url) ;
            }
            
        }
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>
