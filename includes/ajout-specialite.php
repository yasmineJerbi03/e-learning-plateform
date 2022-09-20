<?php
include('connexion.php') ;
if(isset($_POST['specialite']))
{
        $specialite= $_POST['specialite'];
        $categorie = $_SESSION['categorie'];
        $tmp =$_FILES['img']['tmp_name'];
        $name = $_FILES['img']['name'];
        $ext  = extension($name);
        $reponse =$bd->query("SELECT * FROM specialite WHERE categorie= '" . $_SESSION['categorie'] . "' and nom= '" . $specialite . "' ");
        if($reponse->rowCount()==0)
        {
            if(($ext=="jpeg") || ($ext=="jpg") || ($ext=="png"))
            {
                $url = str_replace(" ","",'files/specialite/'.$name) ;
                $bd->exec("INSERT INTO specialite (nom,categorie,url)
                VALUES('".$specialite ."','".$categorie ."','".$url ."')");
                chdir('../');
                move_uploaded_file($tmp,$url) ;
            }
            else
            {
                $url="0";
                $bd->exec("INSERT INTO specialite (nom,categorie,url)
                VALUES('".$specialite ."','".$categorie ."','".$url ."')");

            }
        }
    }
       
        
$reponse =$bd->query("SELECT * FROM specialite WHERE categorie= '" . $_SESSION['categorie'] . "' ");
  while ($entree = $reponse->fetch()) 
 {
    $cat=$_SESSION['categorie']; 
    $id = $entree['id']; 
     echo "<!-- Single Popular Course -->
     <div class='col-12 col-md-4 col-lg-4'>
        <div class='single-popular-course mb-100 wow fadeInUp' data-wow-delay='250ms'>";
        if (($entree['url'])!="0") echo " <img src=".$entree['url']." style='height:4.6cm' alt=''";
        else echo " <img src='img/books.png' style='height:4.6cm' alt=''";
            echo "<!-- Course Content -->
            <div class='course-content'>
                <a href='specialite.php?id=$id?sec=$cat[3]sed4th'><h4 class='text-center'>".ucfirst($entree['nom'])."</h4></a>
                <a href='#' ><p class='text-center'>".ucfirst($_SESSION['categorie'])."</p></a>
            </div>
           
            <!-- Seat Rating Fee -->
        </div>
    </div>
     ";
 }



?>