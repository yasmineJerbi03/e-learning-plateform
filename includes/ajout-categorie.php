<?php
  include('connexion.php') ;
  if(isset($_POST['domaine']))
  {
 
          $domaine= $_POST['domaine'];
          $tmp =$_FILES['img']['tmp_name'];
          $name = $_FILES['img']['name'];
          $ext  = extension($name);
          $reponse =$bd->query("SELECT * FROM domaine where nom = '".$domaine."' ");
          if(($reponse->rowCount())==0)
          {
              if(($ext=="jpeg") || ($ext=="jpg") || ($ext=="png"))
              {
                  $url = str_replace(" ","",'files/categorie/'.$name) ;
                  $bd->exec("INSERT INTO domaine (nom,url)
                  VALUES('".$domaine ."','".$url ."')");
                  chdir('../');
                  move_uploaded_file($tmp,$url) ;
              }
              else
              {
                  $bd->exec("INSERT INTO domaine (nom)
                  VALUES('".$domaine ."')");
  
              }
          }
          
  }    
$reponse =$bd->query("SELECT * FROM domaine");
  while ($entree = $reponse->fetch()) 
 {
    $id = $entree['id']; 
    $matiere = $entree['nom'] ;
     echo "
     <div  class='single-catagories bg-img cat' style='background-image: url(".$entree['url'].");'>
         <a href='categorie.php?id=$id?sec=gt874jh$matiere[0]hhjuy54'>
             <h6 >".$entree['nom']."</h6>
         </a>
     </div>
     
     ";
 }



?>