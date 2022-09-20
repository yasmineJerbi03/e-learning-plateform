<?php
include('acces.php');
$reponse =$bd->query("SELECT id FROM personne where nom= '".$_SESSION['nom']."'  ");
$entree = $reponse->fetch();
$etudiant=$entree['id'];
$reponse =$bd->query("SELECT * FROM matiere");
  while ($entree = $reponse->fetch()) 
 {
     if(recherche($etudiant,$entree['acces']))
     {
    $id = $entree['id']; 
    $matiere = $entree['nom'] ;
     echo "<div class='col-12 col-lg-6'>
     <div class='single-blog-area mb-100 wow fadeInUp' data-wow-delay='250ms'>
         <img style='width:1000px;height:300px'src='img/fond1.png' alt=''>
         <div class='blog-content'>
             <a href='matiere.php?id=$id' class='blog-headline'>
                 <h3 class='hero-content text-center'>".ucwords($matiere)."</h3>
                 <h6 class='hero-content text-center'>Enseignant : ".ucwords($entree['prof'])."</h6>

             </a>
         </div>
     </div>
 </div>";
     }
 }


?>