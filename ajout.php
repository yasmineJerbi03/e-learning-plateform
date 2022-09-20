<?php
//error_reporting(0);
include('includes/session.php') ;
include('includes/cours-bd.php') ;
require('includes/connexion.php'); 
include('includes/utile.php');
if(!est_connecte() || (statut()!=0)) header('location:accueil.php') ;
$pos = strripos($_SERVER['HTTP_REFERER'],"/");
$u = substr($_SERVER['HTTP_REFERER'],$pos+1,strlen($_SERVER['HTTP_REFERER']));
$u1 = substr($_SERVER['PHP_SELF'],$pos+1,strlen($_SERVER['PHP_SELF']));

if((statut()==0) && (($u!="notification.php"))) header('location:notification.php') ;


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
                                <li><a href="cours.php">Cours en Ligne</a></li>
                                <li><a href="notification.php">Mon Espace</a></li>
                                <li><a <?php  if(notification()==0):?> href="#"<?php else: ?> href="notification.php" <?php endif; ?> ><i class="fa fa-bell"><?php if(notification()!=0) echo "<sup class='badge badge-danger'>".notification()."</sup>"; ?></i>&nbsp;&nbsp;</a></li>

                            </ul>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (est_connecte() && statut()!=0) echo $_SESSION['nom']; else echo "Administrateur";?></a>
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
                       </header></br>
                        <!-- Nav End -->
                       </header> </br>

                       <?php
                      
                       echo "<div class='container ajout' ></br>";
                        $reponse =$bd->query('SELECT * FROM specialite order by categorie');
                        echo " <form action='' method='Post'>
                        <select class='custom-select' name='list' required>
                        <option value=''>Choisir l'emplacement du cours</option>";
                        while ($entree = $reponse->fetch()) 
                        {
                            $cat = str_replace(" ",":::-",$entree['categorie']) ;
                            $specialite = str_replace(" ",":::-",$entree['nom']) ;
                            echo "<option value=".$cat."*".$specialite.">".$entree['nom']."<span> ( ".$entree['categorie']." ) </span></option>";
                            
                        }
                        echo "</select></br></br>
                        <textarea class='form-control' placeholder='Il est impératif de mentionner le Sujet des Cours partagés' name='desc' required></textarea></br>
                                <div class='button3'>
                            <button type='submit' class='btn btn-sm btn-success ' name='ajout'>Ajouter</button></div>
                            </form>

    
                        </div> ";
                        if(isset ($_POST['url']) && isset($_POST['prof']) && isset($_POST['u']))
                        { $_SESSION['url']=$_POST['url'];
                        $_SESSION['prof']=$_POST['prof']; $_SESSION['u']=$_POST['u'];  }
                        $prof=$_SESSION['prof']; $id= $_SESSION['u'];
                        $url=$_SESSION['url'];
                        if(isset($_POST['list']))
                        {
                            $tab = explode("*", $_POST['list']);
                            $rep = $bd->exec("INSERT INTO public (url,prof,categorie,matiere,sujet)
                            VALUES('".$url."','".$prof."','".$tab[0]."','".$tab[1]."','".$_POST['desc']."')");
                            $bd->exec("DELETE FROM demande WHERE id='".$id."'");
                            
                        }


                       ?>
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