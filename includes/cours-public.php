<?php
function image($cours)
{
    $pos = stripos($cours,".");
    $ext  = substr($cours,$pos+1,strlen($cours));
    if (strpos($ext,"avi")!==false || strpos($ext,"mp4")!==false  || strpos($ext,"flv")!==false  || strpos($ext,"mov")!==false ) return ("img/ext/video.png");
    if (strpos($ext,"png") !==false || strpos($ext,"jpg") !==false || strpos($ext,"jpeg") !==false || strpos($ext,"gif")!==false) return ("img/ext/image.png");
    if (strpos($ext,"docx")!==false ) return ("img/ext/docx.png");
    if (strpos($ext,"pptx")!==false ) return ("img/ext/pptx.png");
    if (strpos($ext,"pdf") !==false) return ("img/ext/pdf.png");
    else return ("img/ext/document.png");


}
    require('connexion.php') ;
    session_start();
    $reponse =$bd->query("SELECT * FROM public ");
    $i=0;
    while ($entree = $reponse->fetch()) 
     {
         $categorie = str_replace(":::-"," ",$entree['categorie']);
         $specialite = str_replace(":::-"," ",$entree['matiere']);
         if(($categorie==$_SESSION['categorie']) && ($specialite==$_SESSION['specialite'] ) ) {
        echo"
        <form action='includes/cours-public.php' method='POST'>
        <div class='regular-page-area '>
        <div class='container' style='padding-left:10%;'>
            <div class='row'>
                <div class='col-10'>";
                 echo "<div class='page-content' >
                    <img src='".image($entree['url'])."' class='pull-left image' />
                    <a href=".$entree['url']." target='_blank'><h6>&nbsp;&nbsp; ".
                             $entree['sujet']."  </h6></a>
                            <small class ='text-muted'>&nbsp;&nbsp&nbsp;Propriétaire : ".ucfirst($entree['prof'])."</small>";
                        ucfirst($entree['sujet'])."  </h6>";
                        if($_SESSION['staut']==0) echo "<button style='margin-top:-0.5cm' type='submit' name='supprimer$i' class='btn close' > 
                        <span aria-hidden='true'>x</span> 
                    </button>       "; 
                    echo"</form>
</div>

                    </div>
                </div>

            </div>
        </div>
    </div> </br>" ;
    if(isset($_POST['supprimer'.($i)])) {
        if(strcmp($entree['prof'],"Achieve")!=0)
        {
        $c = $entree['categorie'] ;
         $s = $entree['matiere'] ;
        }
        else 
        {
            $c = $_SESSION['categorie'] ;
            $s = $_SESSION['specialite'] ;
        }
        $bd->exec("DELETE FROM public WHERE id='".$entree['id']."' AND categorie='".$c."' AND matiere='".$s."' AND sujet='".$entree['sujet']."'");header('location:'.$_SERVER['HTTP_REFERER']);}
    $i=$i+1;


}
     
   
}
?>