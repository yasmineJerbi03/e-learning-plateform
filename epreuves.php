<?php include('includes/session.php') ; include('includes/connexion.php') ; include('includes/utile.php');
if(statut()!=1) header('location:accueil.php');
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Achieve</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logoo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">


</head>

<body>

     <!-- Preloader -->

     <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!--fin Prloader -->
   
    <!-- ##### Header Area Start ##### -->
  <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="accueil.php"><img src="img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div></div>

                         <!-- Nav Start -->
                         <div id="a" class="classynav">
                            <ul>
                                <li ><a href="accueil.php">Accueil</a></li>
                                <li><a href="cours.php">Cours en ligne</a></li>
                                <li><a  href="espace.php" > Mon Espace&nbsp;&nbsp;</a></li>

                            </ul>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nom'] ?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a type="submit" href="includes/deconnexion.php"class="dropdown-item"  name="deconnexion">Déconnexion</a>
                
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img\divers\profile.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                       </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### epreuves ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/etudiantback.jpg);">
        <h3>Epreuves </h3>
    </div>

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <?php
                 $reponse =$bd->query("SELECT * FROM cours where id='".$_GET['id']."' ");
                 $entree = $reponse->fetch();
                 $titre = $entree['titre'];
                 $reponse =$bd->query("SELECT * FROM rendus where ep='".$_GET['id']."' ");
                 while($entree = $reponse->fetch())
                 {
                 // Epreuve 
                 echo" <div class='col-12 col-md-6 col-lg-4' >
                    <div class='single-popular-course mb-100 wow fadeInUp' data-wow-delay='250ms' style='border:solid #B0C4DE'>
                        <div class='course-content'>
                            <a href='".$entree['url']."' target='_blank'><h6 style='color:blue'>".ucwords($titre)."</h6> </a>
                            <div class='meta d-flex align-items-center'>
                                <a href='#'>".ucfirst($entree['etudiant'])."</a>
                                <span><i class='fa fa-circle' aria-hidden='true'></i></span>
                                <a href='#'>".format($entree['date'])."</a>
                            </div>";
                                if($entree['note']=="" && $entree['remarque']=="")
                                echo"<form action='includes/note.php' method='POST'>
                                <span><small>Accorder Une Note : </small></span></br>
                                <div class='row'>
                                <div class='col-3'>
                                <input type='text' class='form-control form-control-sm' name='note'/>
                                <input type='hidden' value='".$entree['etudiant']."' name='et'/>
                                </div> 
                                <div class='col-7'>
                                <textarea class='form-control form-control-sm' rows='1' placeholder='Remarque' name='remarque'></textarea>
                                </div>
                                <button type='submit'  class='btn btn-outline-success btn-sm' ><small><i class='fa fa-check fa-xs'></i></small></button></form>";  
                                else
                                echo "<span>Epreuve Notée</span></br>
                                <div class='row'>
                                <div class='col-4'>
                                <input type='text' class='form-control form-control-sm' name='note' value='".$entree['note']."' readonly/>
                                <input type='hidden' value='".$entree['etudiant']."' name='et'/>
                                </div> ";
                                
                               echo" </div>
                        </div>
                    </div>
                </div> ";
                 }
                ?>

               

                </div>

        </div>
    </section>
    <!-- ##### Popular Course Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="accueil.php"><p style="font-size: xx-large;font-weight: bolder;">Achieve</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php
$_SESSION['ep']=$_GET['id'];
?>
    
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>