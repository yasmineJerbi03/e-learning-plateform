        <?php include('includes/session.php') ; include('includes/connexion.php') ;
        if(statut()==0 || !est_connecte()) header('location:accueil.php');
        $id = $_GET['id'];
        $reponse =$bd->query("SELECT * FROM matiere WHERE id= '" . $id . "' ");
        $entree = $reponse->fetch() ;
        $matiere = $entree['nom'];
         error_reporting(0);
          $_SESSION['matiere']=$matiere;
          if(statut()==2) $_SESSION['ens']=$entree['prof'];

        ?>
        <!DOCTYPE html>
                <html lang='en'>
                
                <head>
                    <meta charset='UTF-8'>
                    <meta name='description' content=''>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->
                
                    <!-- Title -->
                    <title>Achieve</title>
                
                    <!-- Favicon -->
                    <link rel='icon' href='img/logoo.png'>
                
                    <!-- Stylesheet -->
                    <link rel='stylesheet' href='style.css'>
                    <link rel='stylesheet' href='style1.css'>
                    <link rel='stylesheet' href='style2.css'>

                
                </head>
                
                <body>
                 <!-- Preloader  --> 
                <div id="preloader">
                    <div class="spinner"></div>
                </div>

                    <!-- ##### Header Area Start ##### -->
                    <header class='header-area'>
                        <!-- Navbar Area -->
                        <div class='clever-main-menu'>
                            <div class='classy-nav-container breakpoint-off'>
                                <!-- Menu -->
                                <nav class='classy-navbar justify-content-between' id='cleverNav'>
                
                                    <!-- Logo -->
                                    <a class='nav-brand' href='accueil.php'><img src='img/logo.png' alt=''></a>
                
                                    <!-- Navbar Toggler -->
                                    <div class='classy-navbar-toggler'>
                                        <span class='navbarToggler'><span></span><span></span><span></span></span>
                                    </div>
                
                                    <!-- Menu -->
                                    <div class='classy-menu'>
                
                                        <!-- Close Button -->
                                        <div class='classycloseIcon'>
                                            <div class='cross-wrap'><span class='top'></span><span class='bottom'></span></div>
                                        </div>
                                        <div></div>
                
                                         <!-- Nav Start -->
                                         <div id='a' class='classynav'>
                                            <ul>
                                                <li ><a href='accueil.php'>Accueil</a></li>
                                                <li><a href='cours.php'>Cours en ligne</a></li>
                                                <li><a href='espace.php'>Mon Espace&nbsp;&nbsp;</a></li>
                                            </ul>
                
                
                                            <!-- Register / Login -->
                
                                            <!-- Register / Login -->
                                            <div class='login-state d-flex align-items-center'>
                                                <div class='user-name mr-30'>
                                                    <div class='dropdown'>
                                                        <a class='dropdown-toggle' href='#' role='button'  data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><?php if (est_connecte()) echo $_SESSION['nom'];?></a>
                                                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userName'>
                                                            <a class='dropdown-item' href='profile.php'>Profile</a>
                                                            <a class='dropdown-item' href='includes/deconnexion.php'>Déconnexion</a>
                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='userthumb'>
                                                    <img src='img/divers/profile.jpg' alt=''>
                                                </div>
                                            </div>
                
                                        </div>
                                        <!-- Nav End -->
                                       </header>
                                       <!-- ##### Breadcumb Area Start ##### -->
                    <div class='breadcumb-area'>
                
                        <!-- ##### Catagory Area Start ##### -->
                        <div class='clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400' style='background-color:#CF3868;'>
                            <div class='blog-details-headline'>
                                <h3><?php echo $matiere ; ?></h3>
                                <?php
                                    include('includes/acces.php');
                                    if ((!a_acces()) && (statut()==2)) 
                                    echo " <form action='includes/ajout-eleve.php' method='POST'><div class='mx-auto'><button type='submit' class='btn btn-outline-secondary  ' name='acces'>Accéder au Cours</button></div></form>";

                            ?>
                                <?php if(statut()==1):?>
                                <div class='mx-auto'><a href="includes/supp-mat.php" style="margin-left: 26%;" class='btn btn-secondary btn-sm ' name='supp'><small>Supprimer Le Groupe</small></a></div>
                                <div class='text-center'><small class='text-muted' >La suppression du groupe est définitive</small></div>
                                <?php endif; ?>
                            </div>

                            
                        </div>
                        <!-- ##### Catagory Area End ##### -->
                        <?php if(statut()==1): ?>
                        <div class='container'>
                            <div class='row justify-content-center'>
                                <!-- Post A Comment -->
                                <div class='col-12 col-lg-6'>
                                    <div class='post-a-comments mb-70' style='margin-top: 0.5cm;'>
                                        <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix1'><h5 style='color: black;'><i class='fa fa-user' aria-hidden='true'></i>&nbsp;&nbsp;Ajouter des Etudiants</h5></button>
                                        <div class='collapse' id='choix1'>
                                                <div class='form-group'>
                                                Lien du cours :
                                                <input type='text' class='form-control form-control-sm' value='<?php echo "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']?>'>  </div>
                                            </div>
                    
                                        
                                        <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix2'
                                        ><h5><i class='fa fa-folder' aria-hidden='true'></i>&nbsp;&nbsp; Ajouter un cours</h5></button>
                                       
                                        <div class='collapse' id='choix2'>
                                            <form class='md-form' id='formfichier' method='POST' action='includes/documents.php' enctype='multipart/form-data'>
                                                <input type='file' hidden='hidden' id='fich1' name='fich1' >
                                                    <label for='fich1' class="bouton"><img src='img/download.png'>
        
                                                </label>
                                                <div class='text-center'>
                                                <span  id='fichier1'></span></br></br></div>
                                                <div>
                                            <input type='text' class='form-control' placeholder='Donner un titre' name='titre1' required>
                                          </div>                                  
                                          <input class='form-control' type='text' name ='matiere' value ='<?php echo $matiere?>' placeholder='<?php echo $matiere?>' readonly>
            
                                          <div  class="bouton">
                                                    <button  type='submit' class='btn btn-outline-secondary btn-sm'>Envoyer</button>
                                                </div>
                                              </form>
                                            </div>
                    
                                        <button type='button' class='btn btn-light btn-lg btn-block' data-toggle='collapse' href='#choix3'><h5 style='color: black;'><i class='fa fa-users ' aria-hidden='true'></i>&nbsp;&nbsp; Adhérents</h5></button>
                    
                                        <div class='collapse' id='choix3'>
                                                        <?php
                                                         include('includes/adherent.php');
                                                         ?>
                                            
                                            </div>
                    
                                        <button type='button' class='btn btn-btn btn-secondary btn-lg btn-block' data-toggle='collapse' href='#choix4'
                                        ><h5><i class='fa fa-file' aria-hidden='true' multiple></i>&nbsp;&nbsp;Lancer Un Devoir</h5></button>
                    
                                        <div class='collapse' id='choix4'>
                                            <form class='md-form' id='formfichier' method='POST' action='includes/epreuves.php' enctype='multipart/form-data'>
                                                <input type='file' hidden='hidden' id='fich' name='fich' >
                                                    <label for='fich' class="bouton"><img src='img/download.png'>
        
                                                </label>
                                                <div class='text-center'>
                                                <span  id='fichier'></span></br></br></div>
                                                <div>
                                                <div>
                                            <input type='text' class='form-control' placeholder='Donner un titre' name='titre' required>
                                          </div> 
                                          <input class='form-control' type='text' name ='matiere' value ='<?php echo $matiere?>' placeholder='<?php echo $matiere?>' readonly>
        
                                          <div>
                                            <p>Date Limite : </p>
                                            <input type='datetime-local'  class='form-control' name='limite' required>
                                          </div> 
                                                <div  class="bouton">
                                                <button type='submit' class='btn btn-outline-secondary btn-sm'>Envoyer</button>
                                                </div></form>
                                            </div>                
                                    </div>
                                </div></div></div><?php endif;?>
                            </div></br>
                                <?php
                                       if(statut()==1) include('includes/cours-prive.php');
                                     ?>            
                                       <?php if((statut()==2) && (a_acces()))  include('includes/cours-prive-eleve.php');?>
            
                               <!-- ##### Footer Area Start ##### -->
                <footer class='footer-area' style='margin-top:8cm'>
                    <!-- Top Footer Area -->
                    <div class='top-footer-area'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-12'>
                                    <!-- Footer Logo -->
                                    <div class='footer-logo'>
                                        <a href='accueil.php'><p style='font-size: xx-large;font-weight: bolder;'>Achieve</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                                    <!-- ##### Footer Area End ##### -->
            
                <!-- ##### All Javascript Script ##### -->
                <!-- jQuery-2.2.4 js -->
                <script src='js/jquery/jquery-2.2.4.min.js'></script>
                <!-- Popper js -->
                <script src='js/bootstrap/popper.min.js'></script>
                <!-- Bootstrap js -->
                <script src='js/bootstrap/bootstrap.min.js'></script>
                <!-- All Plugins js -->
                <script src='js/plugins/plugins.js'></script>
                <!-- Active js -->
                <script src='js/active.js'></script>
                <script >
                document.getElementById('fich').addEventListener('change', function() {
                document.getElementById('fichier').innerHTML =this.files.length+' fichier prêt à partager';
                });
                document.getElementById('fich1').addEventListener('change', function() {
                document.getElementById('fichier1').innerHTML =this.files.length+' fichier prêt à partager';
                });
                </script>
        
                
            </body>
            
            </html>