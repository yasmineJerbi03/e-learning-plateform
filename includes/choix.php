<?php
    include('connexion.php') ;
    $reponse =$bd->query("SELECT * FROM demande order by id desc");
    $i=0 ;
    if(($reponse->rowCount())==0) echo "<h1 class='text-muted' style='text-align:center;margin-top:5cm'>Aucun cours à visualiser pour le moment</h1>";
    {while ($entree = $reponse->fetch()) 
    {
       echo"
       <form action='includes/choix.php' method='POST'>
       <div class='regular-page-area '>
       <div class='container' style='padding-left:10%;'>
           <div class='row'>
               <div class='col-10'>
                   <div class='page-content'>";
                       echo "<a href=".$entree['url']." target='_blank'>".$entree['prof']." a partagé un document : ".$entree['nom']."</a>";
                       if($entree['commentaire']!="") echo "<p>".$entree['commentaire']."</p></br></br>";
                       else echo "</br></br></br>";
                       echo "<button type='submit'  class='btn btn-sm btn-danger pull-left choice padd'  name='cancel$i'>Refuser</button></form>
                      <form action='ajout.php' method='POST'><button type='submit' class='btn btn-sm btn-success pull-right choice' name='agree$i'>Accepter</button></a>
  </span>                                                                            
                   </div>
               </div>
           </div>
       </div>
   </div> </br>" ;
   echo "<input type='hidden' name='url' value='".$entree['url']."'/>";
   echo "<input type='hidden' name='prof' value='".$entree['prof']."'/>";
   echo "<input type='hidden' name='u' value='".$entree['id']."'/></form>";

   if(isset($_POST['cancel'.($i)])) { echo $id ;$bd->exec("DELETE FROM demande WHERE id='".$entree['id']."'"); header('location:../notification.php');}

   $i = $i+1;
          
  } }
 ?>

