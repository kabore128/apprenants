<?php  
try 
{
     $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; 
     $bdd = new PDO('mysql:host=localhost;dbname=apprenants', 'root', '',
      $pdo_options); } 
      catch (Exception $e)
       {
                  die('Erreur : ' . $e->getMessage()); 
}
?>