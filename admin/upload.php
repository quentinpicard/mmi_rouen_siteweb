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



  //ajout 
  
  $textarea=$_POST["textarea"];
  $titre=$_POST["titre"];
  $nom=$_POST["nom"];

echo"<pre>";
print_r($_FILES);
echo"</pre>";


$type_crea=$_POST['type_crea'];
$type=$_FILES['nomFichier']['type'];
$nom_tmp=$_FILES['nomFichier']['tmp_name'];
$size=$_FILES['nomFichier']['size'];
define ('SITE_ROOT', realpath(dirname(__FILE__)));

switch ($type){
    case 'image/jpeg';
        $nom_upload="image".time().".jpeg";
        break;
    case 'image/png';
        $nom_upload="image".time().".png";
        break;
    case 'image/gif';
        $nom_upload="image".time().".gif";
        break;
    default:
        $nom_upload="";
        break;
}

if($nom_upload!=""){
 
    if($size<5097152){
//  Tatouage    
        if($type_crea == 'num') {

            if(move_uploaded_file($nom_tmp, SITE_ROOT."/img/crea/".$nom_upload)) {

                $image="img/crea/".$nom_upload;
                $date = date('d/m/Y');

                $sqlInsertQuery = "INSERT INTO stud_crea( Titres, Descriptions, Images, Dates,Nom  ) VALUES ( :Titres , :Descriptions , :Images, :Dates,:Nom )" ; 
                $NewUser = $bdd->prepare ( $sqlInsertQuery ) ;
                $NewUser ->execute ( array (
                'Titres' => $titre ,
                'Descriptions' => $textarea,
                'Images' => $image,
                'Dates' => $date,
                'Nom' => $nom
                 ));

                header('Location: admin.php');
            }
            else {
                echo"<h1>une erreur est survenue lors du téléversement</h1>";
             }
        }     
//  Tableau                               
        if($type_crea == 'dev'){
            
            if(move_uploaded_file($nom_tmp, SITE_ROOT."/img/dev/".$nom_upload)) {

                $image="img/dev/".$nom_upload;
                $date = date('d/m/Y');

                $sqlInsertQuery = "INSERT INTO stud_dev( Titres, Descriptions, Images, Dates,Nom ) VALUES ( :Titres , :Descriptions , :Images, :Dates,:Nom )" ; 
                $NewUser = $bdd->prepare ( $sqlInsertQuery ) ;
                $NewUser ->execute ( array (
                'Titres' => $titre ,
                'Descriptions' => $textarea,
                'Images' => $image,
                'Dates' => $date,
                'Nom' => $nom
                 ));


                 header('Location: admin.php');
            }
            else {
                echo"<h1>une erreur est survenue lors du téléversement</h1>";
             }

        }



}
    else{
        echo"<h1>erreur, le fichier est trop lourd !</h1>";}   
}
else{
    echo"<h1>Le type du fichier n'est pas valide </h1>";
}




?>