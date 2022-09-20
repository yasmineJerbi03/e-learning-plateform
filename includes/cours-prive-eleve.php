<?php
function format($date)
{
    $occ = strrpos($date,":");
    $date_formate = substr($date,0,$occ) ;
    return($date_formate);
}

function get_id($id)
{
    require('includes/connexion.php') ;
    $reponse =$bd->query("SELECT * FROM rendus where ep='".$id."' and  etudiant='".$_SESSION['nom']."' ");
    if ($reponse->rowCount()==1)
    { return false; }

   else return true;


}
function get_url()
{
    require('includes/connexion.php') ;
    $reponse =$bd->query("SELECT * FROM rendus where ep='".$id."' ");
    if ($reponse->rowCount()==1)
    { return false; }

   else return true;


}
function url_rendu($id)
{
    include('connexion.php');
    $reponse =$bd->query("SELECT * FROM rendus WHERE ep= '" . $id . "' ");
    $entree=$reponse->fetch();
    return ($entree['url']);

}
    require('includes/connexion.php') ;
    $utilisateur = $_SESSION['nom'] ;
    $reponse =$bd->query("SELECT * FROM matiere where id='".$_GET['id']."' ");
    $entree = $reponse->fetch();
    $prof= $entree['prof'];
    $_SESSION['ens']=$prof;
    $reponse =$bd->query("SELECT * FROM cours order by date desc ");
    $i=0;
    while ($entree = $reponse->fetch()) 
     { if(($entree['prof']==$prof) && ($entree['matiere']==$_SESSION['matiere'] )) {
        echo"<div class='regular-page-area '>
        <div class='container' style='padding-left:10%;'>
            <div class='row'>
                <div class='col-10'>";
                if($entree['genre']==0) echo "<div class='page-content' >";
                if($entree['genre']==1) echo "<div class='page-content'  style='border:solid #CF3868'>";
                                   echo" <a href=".$entree['url']." target='_blank'><h6>".ucfirst($prof)."";
                        if($entree['genre']==0) echo " a partagé un nouveau document : ".
                             $entree['titre']."  </h6></a>
                            <small class ='text-muted'>".format($entree['date'])."</small> <a class='pull-right' href=".$entree['url']." 
                            download><span><img src='img/telechargement.png'/></span></a>";
                        else echo "a lancé une nouvelle epreuve : ".
                        $entree['titre']."  </h6>
                       <small class ='text-muted'>".format($entree['date'])."  </small></br><small class ='text-muted'> Date Limite :".format($entree['limite'])."</small>
                       <a class='pull-right' href=".$entree['url']." 
                        download><span><img src='img/telechargement.png'/></span></a>";
                        if(($entree['genre']==1) && get_id($entree['id']) )echo"</br><small class='text-muted'><u><a data-toggle='collapse' href='#supp$i'>Envoyer Votre Compte Rendu</a></u></small>";
                        if(($entree['genre']==1) && !get_id($entree['id']) )echo"<small class='text-muted'><form method='POST' action='includes/supp-epreuve.php'><input type='hidden' name='i' value=".$entree['id']."><a target='_blank' href='".url_rendu($entree['id'])."' class='btn btn-sm btn-outline-secondary'>Compte Rendu</a>&nbsp;&nbsp;<button class='btn btn-sm btn-outline-secondary'type='submit'><b>x</b></button></form></small>";
                        {
                            $reponse2 =$bd->query("SELECT * FROM rendus where ep='".$entree['id']."' and etudiant='".$_SESSION['nom']."'");
                            $entree2=$reponse2->fetch();
                            if($entree2['note']!="") echo "<b style='color:#CF3868'>Noté : ".$entree2['note']."</b>";
                            if($entree2['remarque']!="") echo "<b style='color:#CF3868'> (Rq:  ".$entree2['remarque']." )<b>";


                        }
                        if($entree['genre']==1) echo "<div class='collapse mx-auto' id='supp$i'>
                        <form  method='POST' action='includes/rendu.php' enctype='multipart/form-data'>
                                <div class='row'>
                                    <input type='file' hidden='hidden' id='fich$i' name='fich$i' >
                                            <label for='fich$i' class='mx-auto'>
                                            <img src='img\download.png'>
                                        </label></br>
                                    <div class='col-12 '>
                                        <input type='hidden' value='".$entree['id']."' name='ep'/>
                                        <input type='hidden' value='".$i."' name='rec'/>
                                        <button type='submit' class='btn btn-sm btn-outline-secondary btn-block ' name='submit$i'>Envoyer</button>
                                    </div>
                                </div></div>
                            </form>
                        </div>";
                        echo" </div>
                                                                               
                    </div>
                </div>
               
            </div>
        </div>
    </div> </br>" ;


}
            
$i=$i+1;
  
}
?>
