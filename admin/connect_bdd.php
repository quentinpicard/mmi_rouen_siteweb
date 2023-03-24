<?php
/* Cette connexion permet de travailler en local avec XAMPP si vous le souhaitez  */
      try {
        $bdd = new PDO( "mysql:host=localhost;dbname=admin_iut" , 'root' , '') ;
      } 
      catch ( Exception $e )
      {
       die ( 'Erreur : ' . $e->getMessage ( ) ) ;
      }
   
  ?>