<?php
//error_reporting(0);
include('includes/session.php') ;
include('includes/cours-bd.php') ;
require('includes/connexion.php');
if(statut()==0 || !est_connecte()) header('location:accueil.php') ?>

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
                                <li><a <?php if(statut()==1):?> href="#" <?php elseif (statut()==2): ?>href="#" <?php else: ?> href="notification.php" <?php endif; ?> >Mon Espace&nbsp;&nbsp;</a></li>

                            </ul>


                            <!-- Register / Login -->

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte()) echo $_SESSION['nom'];?></a>
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
                       </header> </br>
                       <!-- ##### Hero Area Start ##### -->
    <?php if(statut()==1): ?>
    <section class="hero-area bg-img bg-overlay-2by5 espace" style="background-color:#000080">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2 class='titre'>Le Bon Enseignant Fait Le Bon Eleve</h2>
                        <button  class="btn clever-btn " data-toggle="collapse" href="#creation" >Créer un Groupe</button>

                    </div>
                    <div class="collapse  mx-auto cours2" id="creation">
                            <form action="redirection/redirection-espace.php" method="POST">
                                    <input type="text" class="form-control" placeholder="Donner un titre pour la Matiére" name="matiere" required>
                                    <button type="submit" class="btn btn-warning btn-lg button" aria-hidden="true" ><b>Ajouter</b></button>
                              </form>
                        
                        </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- ##### Hero Area End ##### -->
    <?php elseif(statut()==2): ?>
    <!-- ##### Hero Area Start ##### -->
  <section class="hero-area bg-img bg-overlay-2by2" style="background-image:url(img/fond.png)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2 style="font-family:candara">Mes Cours</h2>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- ##### Hero Area End ##### -->
    <?php endif; ?>

              
    <!--espace prof-->


    <section class="blog-area blog-page section-padding-100" >

        <div class="row">
            <!-- Single Blog Area -->
           <?php
           if(statut()==1)
           include('includes/matiere.php');
           if(statut()==2) include('includes/matiere-eleve.php');
  
            ?> 
         
            </div>


        
        
                
</section>
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

</div>
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
