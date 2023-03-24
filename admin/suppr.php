<?php 

session_start(); 

// if(!isset($_SESSION["user_id"])) {
//     header("Location: index.html");
//         exit;
//     }



try {
    $bdd = new PDO( "mysql:host=localhost;dbname=admin_iut" , 'root' , '') ;
  } 
  catch ( Exception $e )
  {
   die ( 'Erreur : ' . $e->getMessage ( ) ) ;
  }


  //Suppr 

  $suppr_dev=$_POST["suppr_dev"];
  $suppr_crea=$_POST["suppr_crea"];



//supprimer


if (isset($suppr_dev) ) {

// prend la photo de la bdd et la met dans la variable images 

    $data=$bdd -> prepare("SELECT `Images` FROM `stud_dev` WHERE  Titres=:Titres ");
    $data->execute(array(':Titres' =>$suppr_dev));
    $result = $data->rowCount();
    if ($result > 0) {
        $vaccinations = $data->fetchAll();
        $image=array(); //Mon Tableau Titres en entier 
    
       foreach ($vaccinations as $vaccination ) {
          $image[]=$vaccination['Images'];
          }


          $image=implode("", $image);
            //suprime l'image du dossier


              if (file_exists($image)) {
                      unlink($image);
                      echo "<br>Image has been deleted successfully.";
                      header("Location: admin.php");

                 } else {
                    echo "<br>Error: Image not found for dev.";
                 }
          }else{
         echo "";
            }   
    
//suprime tout de la bdd

    $sqlDeleteQuery = "DELETE FROM stud_dev WHERE Titres=:Titres" ;
    $supprimerdessin = $bdd->prepare ( $sqlDeleteQuery ) ;
    $supprimerdessin->execute ( array (
    'Titres' => $suppr_dev)) ;
    

} 

if (isset($suppr_crea) ) {


// prend la photo de la bdd et la met dans la variable images 

$data=$bdd -> prepare("SELECT `Images` FROM `stud_crea` WHERE  Titres=:Titres ");
$data->execute(array(':Titres' =>$suppr_crea));
$result = $data->rowCount();
if ($result > 0) {
    $vaccinations = $data->fetchAll();
    $image=array(); //Mon Tableau Titres en entier 

   foreach ($vaccinations as $vaccination ) {
      $image[]=$vaccination['Images'];
      }


      $image=implode("", $image);
        //suprime l'image du dossier
      echo"$image";

          if (file_exists($image)) {
                  unlink($image);
                  echo "<br>Image has been deleted successfully.";
                  header("Location: admin.php");
             } else {
                echo "<br>Error: Image not found for crea.";
             }
      }else{
     echo "";
        }   



//suprime tout de la bdd
    $sqlDeleteQuery = "DELETE FROM stud_crea WHERE Titres=:Titres" ;
    $supprimertatouage = $bdd->prepare ( $sqlDeleteQuery ) ;
    $supprimertatouage->execute ( array (
    'Titres' => $suppr_crea)) ;

} 



?>