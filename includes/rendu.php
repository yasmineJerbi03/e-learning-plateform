<?php
    include('session.php');
    $rec = $_POST['rec'];
    $name = $_FILES['fich'.$rec]['name'];
    if(!empty($name) && $size<2097152)  
    {
        $size = $_FILES['fich'.$rec]['size'];
        include('connexion.php') ;
        $reponse =$bd->query("SELECT * FROM rendus ");
        $j=($reponse->rowCount())+1;
        $date = date('Y-m-d H:i');
        $etudiant = $_SESSION['nom'];
        $prof = $_SESSION['ens'] ;
        $matiere=$_SESSION['matiere'] ;
        $tmp =$_FILES['fich'.$rec]['tmp_name'];
        $name = $_FILES['fich'.$rec]['name'];
        $url = str_replace(" ","",'files/rendu/'."$j".$name);
        $bd->exec("INSERT INTO rendus (etudiant,date,matiere,prof,fich,url,ep)
        VALUES('".$etudiant ."','".$date ."','".$matiere ."', '".$prof ."', '".$name ."', '".$url ."', '".$_POST['ep'] ."')");
         chdir("../");
        move_uploaded_file($tmp,$url) ;

    }      
$direction = $_SERVER['HTTP_REFERER'];
header('location:'.$direction) ;

?>