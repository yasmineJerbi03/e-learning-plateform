<?php

    try {
        $bd = new PDO('mysql:host=localhost;dbname=e-learning;charset=utf8','root','');
        
        }
        catch(Exception $e)
        {
            die('ERREUR'.$e->getMessage());
        }
       
?>

