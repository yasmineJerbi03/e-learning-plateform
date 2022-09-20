<?php
//error_reporting(0);
include('includes/session.php') ;
require('includes/connexion.php');
require('includes/utile.php');

if(!est_connecte()) header('location:accueil.php') ?>
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
    <link rel="stylesheet" href="profile.css">


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
                                <li><a href="cours.php">Cours en ligne</a></li>
                                <?php if(statut()!=0):?><li><a href="espace.php" >Mon Espace</a></li> <?php else: ?><li><a  href="notification.php">Mon Espace</a></li>  <?php endif; ?>
                                <?php if(notification()==0 && statut()==0):?>
                                    <li><a href="#"><i class="fa fa-bell">&nbsp;</i></a></li>
                                <?php elseif(notification()!=0 && statut()==0): ?>
                                    <li><a href="notification.php"><i class="fa fa-bell"><sup class='badge badge-danger'><?php echo notification()?></sup>&nbsp;</i></a></li> 
            
            

                                <?php endif;?>
                            </ul>
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
                       </header> </br></br>
        <!-- ##### Header Area End ##### -->
            <div class="container1" >
            <img src="img/utilisateur.png" class="user"/></br></br>
            <h6 id='inf'>Informations</h6>

          <table>
            <tr class="row1">
              <td class="t">Compte</td>
              <td class="b"><?php echo compte()?></td>

            </tr>
            <tr>
              <td class="t">Adresse E-mail</td>
              <td class="b"><?php echo $_SESSION['utilisateur']?></td>

            </tr ><tr class="row1">
              <td class="t">Nom d'Utilisateur</td>
              <td class="b"><?php echo ucfirst($_SESSION['nom']) ?></td>

            </tr>
          </table>
      </div>
        </br></br></br></br>

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
</footer><!-- ##### Footer Area Start ##### -->



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



