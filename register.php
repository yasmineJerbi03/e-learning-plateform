<?php
include('includes/session.php'); 
if(est_connecte()) header('location:accueil.php');
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


</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Navbar Area -->
            <div class="clever-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cleverNav">
    
                        <!-- Logo -->
                        <a class="nav-brand" href="accueil.php"><img src="img\logo.png" alt=""></a>
    
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
                                    <li ><a href="accueil.php">Accueil</a></li>
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
        <!-- ##### Header Area End ##### -->
  <div class="container" id='register'>
    <h1 class='titre' >Inscription</h1>
          <form action="register.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nom">Nom d'Utilisateur</label>
              <input type="text" class="form-control form-control-sm" name="nom" required value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ;?>">
              <?php
              include ("includes/inscription.php") ;
              if (inscription()=="a") echo "<p style='color:red;'>Nom d'utilisateur non disponible</p>" ;
              ?>
            </div>
            <div class="form-group">
              <label for="email">Adresse E-mail</label>
              <input type="email" class="form-control form-control-sm" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email'] ;?> ">
              <?php
              if (inscription()=="b") echo "<p style='color:red;'>Ce Compte existe déja</p>" ;
              ?>
            </div>
            <div class="form-group">
              <label for="mdp">Mot de Passe</label>
              <input type="password" class="form-control form-control-sm" name="mdp" required>
              <?php if (inscription()=="c")
              echo "<p style='color:red;'>Mot de Passe trop Court</p>" ;
              ?>
            </div>
            <hr>
            <p>Vous Visiter Le Site en tant que : </p>
            <div class="custom-control custom-radio">
              <input type="radio" id="etudiant" name="statut" class="custom-control-input" value="2" required <?php if(isset($_POST['statut']) && $_POST["statut"]=="2")   echo "checked=\"checked\"" ?>>
              <label class="custom-control-label" for="etudiant">Etudiant</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="enseignant" name="statut" class="custom-control-input" value="1" <?php if(isset($_POST['statut']) && $_POST["statut"]=="1")   echo "checked=\"checked\"" ?>>
              <label class="custom-control-label" for="enseignant">Enseignant</label>
            </div></br>
            <button type="submit" id='submit' class="btn btn-outline-secondary btn-lg btn-block">S'inscrire</button>
            <a id='quest' href="formconnexion.php">Vous avez déja un compte ?</a>
          </form>
      </div>

    </div>
  </div>

</div></br>

 <!-- ##### Footer Area Start ##### -->
 <footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="accueil.php"><p class='site' style="font-size: xx-large;font-weight: bolder;">Achieve</p></a>
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



