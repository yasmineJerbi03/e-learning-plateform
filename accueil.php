<?php
include('includes/session.php'); 
include('includes/utile.php'); 
include ('includes/compteur.php');
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
    <link rel="icon"  href="img/logoo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">


</head>


<body>
    <!-- Preloader  -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->


        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <?php if(!est_connecte()): ?>

            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
    
                        <!-- Logo -->
                        <a class="nav-brand" href="#"><img src="img\logo.png" alt=""></a>
    
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
    
                            <!-- Nav Start -->
                            <div id="a" class="classynav">
                                <ul>
                                    <li ><a href="#">Accueil</a></li>
                                    <li><a href="cours.php">Cours en ligne</a></li>
                                </ul>

    
                                <!-- Register / Login -->
                                <div class="register-login-area">
                                    <a href="register.php" class="btn">Inscription</a>
    
                                    <a type="button" class="btn active" href="formconnexion.php">Connexion</a>
    
                                </div>
    
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
  

    <!-- ##### Background Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/background/background1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Register -->
                    <div class="hero-content text-center">
                        <h2 >Achieve : Un guide Vers le Succés</h2>
                        <a href="register.php" class="btn clever-btn">Commencer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Background Area End ##### -->

    <?php else : ?>

         <!-- ##### Header Area Start ##### -->
  <header class="header-area">
        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="#"><img src="img/logo.png" alt=""></a>

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
                         <!-- Nav Start -->
                         <div id="a" class="classynav">
                            <ul>
                                <li ><a href="#">Accueil</a></li>
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
                    </div>
    </header>

    <!-- ##### Background Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/background/background1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2 >Achieve : Un guide Vers le Succés</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <?php endif ;?>

    <!-- ##### Compteur Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container" style="padding-left: 6cm;">
            <div class="row">
                <!-- Etudiant -->
                <div class="col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter"><?php echo personnes(2);?></span></h2>
                        <h5>Etudiants</h5>
                    </div>
                </div>

                <!-- Enseignants -->
                <div class=" col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter"><?php echo personnes(1);?></span></h2>
                        <h5>Enseignants</h5>
                    </div>
                </div>

                <!-- Cours Disponibles -->
                <div class=" col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter"><?php echo cours()?></span></h2>
                        <h5>Cours</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Compteur End ##### -->
        <?php if ((statut()==1)): ?>
    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Cours En Ligne</h4>
                            <form  method="POST" action="includes/publique.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="text" name="prof" placeholder="<?php echo ucfirst($_SESSION['nom'])?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                    <input type='file' hidden='hidden' id='fich2' name="fich2" >
                                            <label for='fich2' class='bouton' >
                                            <img src='img\iplusb.png'>
                                        </label></br>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 text-center">
                                    <span  id='fichier'></span></br></br>

                                    </div>
                                    <div class="col-12 col-lg-12">
                                            <textarea class="form-control" placeholder="Description : Facultatif " name="desc"></textarea>
                                        </label></br>
                                        </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn clever-btn w-100">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Now Countdown -->
        <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
            <h3>Partager vos Connaissances</h3>
            <p>Ce formulaire est dédié pour ceux qui veulent partager avec nous leurs cours .</p>
            <p>Ces documents seront immédiatement publique après l'accord de l'administrateur</p>        
    </section>
    <!-- ##### Register Now End ##### -->
<?php endif ;?>
    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><p style="font-size:x-large;font-weight:bolder">Achieve</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    


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
    <script>
        document.getElementById('fich2').addEventListener('change', function() {
        document.getElementById("fichier").innerHTML =this.files.length+" fichier prêt à partager";
        });
    </script>
</body>

</html>