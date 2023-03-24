<?php 

try {
    $bdd = new PDO( "mysql:host=localhost;dbname=admin_iut" , 'root' , '') ;
  } 
  catch ( Exception $e )
  {
   die ( 'Erreur : ' . $e->getMessage ( ) ) ;
  }
?>
<!doctype html>
<html><html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Dessin | L'ange</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/solid.css'>
<link rel="stylesheet" href="../asset/style/style2.css">
<link rel="stylesheet" href="../asset/style/styleport.css" >



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" >

<script src="https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    </head>

    <body>


        





<!-- #Menu -->



<nav>
    <div class="logo"><a href="../index.html"><img id="logo" src="../asset/img/logo-mmi.png" alt=""></a></div>
    <ul>
      <li><a style="font-family: 'Outfit', sans-serif;" href="../index.html" title="Page d'accueil">Accueil</a></li>
      <li><a style="font-family: 'Outfit', sans-serif;" href="../asset/page/formation.html">MMI en détail</a></li>
      <li><a style="font-family: 'Outfit', sans-serif;"href="../asset/page/departement.html">Département</a></li>
      <li><a style="font-family: 'Outfit', sans-serif;"href="projet etudiant.php">Projets étudiants</a></li>
      <li><a style="font-family: 'Outfit', sans-serif;"href="../asset/page/temoignages.html">Témoignages</a>
    </li>
    </ul>

    <div class="burger-container">
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div class="menu">
      <div class="menu-close">
        <span></span>
        <span></span>
      </div>
      <div class="text">
      <a href="../index.html">Accueil</a>
      <a href="../asset/page/formation.html">MMI en détail</a>
      <a href="../asset/page/departement.html">Département</a>
      <a href="projet etudiant.php">Projets étudiants</a>
      <a href="../asset/page/temoignages.html">Témoignages</a>
      </div>
    </div>
  </nav>
<header>
  <div class="headline">
    <img src="../asset/img/photo/bg_projet_etu.jpg" alt="image de fond header">
    <div class="inner">
      <h1 style="  font-family: 'Outfit', sans-serif;">PROJETS ÉTUDIANTS </h1>
      <p style='font-family: "Quicksand", sans-serif;'>Les meilleures créations de nos étudiants</p>
    </div>
  </div>
</header>

<div id="button">
<button id="b1" title="bouton tout"> Tout</button>
<button id="b2" title="bouton développement web"> Développement Web </button>
<button id="b3" title="bouton création numérique"> Création Numérique </button>
</div>








<!-- #Header -->

<!-- #Main -->
<main class="flexbox-col2">

 
<div id="top"></div>
<section class="gallery">
	<div class="row">
    <ul class="ul">
      <a  cursor-class="arrow" href="#" class="close"></a>
     
      <?php 

// recup les id des dev






$data=$bdd -> prepare("SELECT id_dev FROM `stud_dev`");
$data -> execute();
$vaccinatios = $data -> fetchAll();

$id_dev=array();

foreach ($vaccinatios as $vaccinatio ) {
  $id_devmax[]=$vaccinatio['id_dev'];

}


// recup les id des crea

$data=$bdd -> prepare("SELECT id_crea FROM `stud_crea`");
$data -> execute();
$vaccinatios = $data -> fetchAll();

$id_crea=array();

foreach ($vaccinatios as $vaccinatio ) {
  $id_creamax[]=$vaccinatio['id_crea'];

}




// set up ouverture et lectur du dossier dev
$i=0;
$files = array();
if ($dossier = opendir("img/dev")){
    while(($fichier = readdir($dossier)) !== false){
       if($fichier != "." & $fichier != "..")
       {
            $files[] = $fichier;
       }
    }
}




$files = array_reverse($files);

foreach($files as $fichier){


      $data = $bdd->prepare("SELECT Titres FROM `stud_dev` WHERE Images=:Images");
      $data->execute(array(':Images' => "img/dev/".$fichier   ));
      $vaccinatios = $data->fetchAll();

        $Titres=array();
        
        foreach ($vaccinatios as $vaccinatio ) {
        $Titres[]=$vaccinatio['Titres'];
        }

        $Titres = implode(',', $Titres);

    echo "   <li class='effet space_block dev' id='dev'>
    <a  cursor-class='arrow' class='image' href='#$i'>
      <img  src='img/dev/$fichier ' alt='$Titres'>
    </a>
  </li>"  ;
  $i++;
}




// set up ouverture et lectur du dossier crea
$i2=+$i;
$files2 = array();
if ($dossier = opendir("img/crea")){
    while(($fichier2 = readdir($dossier)) !== false){
       if($fichier2 != "." & $fichier2 != "..")
       {
            $files2[] = $fichier2;
       }
    }
}


$files2 = array_reverse($files2);


//les boite de projet
foreach($files2 as $fichier2){

          $data = $bdd->prepare("SELECT Titres FROM `stud_crea` WHERE Images=:Images");
          $data->execute(array(':Images' => "img/crea/".$fichier2   ));
          $vaccinatios = $data->fetchAll();

            $Titres=array();
            
            foreach ($vaccinatios as $vaccinatio ) {
            $Titres[]=$vaccinatio['Titres'];
            }

            $Titres = implode(',', $Titres);

    echo "   <li class='effet space_block crea' id='crea' >
    <a  cursor-class='arrow' class='image' href='#$i2'>
      <img  src='img/crea/$fichier2 ' alt='$Titres'>
    </a>
  </li>"  ;
  $i2++;
}




?>



    </ul>
</div>

<!-- 
SOLUTION ICI -->




     <?php 

//set up du panneau d'affichage quand on clqiue sur les photos dev


$data=$bdd -> prepare("SELECT `id_dev`, `Titres`, `Descriptions`, `Images` FROM `stud_dev` ");
$data -> execute();
$vaccinations = $data -> fetchAll();

$id_dev=array(); //Mon id_tatouage Image en entier 
$Titres=array(); //Mon Tableau Titres en entier 
$Descriptions=array(); //Mon Descriptions Image en entier 
$Images=array(); //Mon Tableau Image en entier 

foreach ($vaccinations as $vaccination ) {
  $id_dev[]=$vaccination['id_dev'];
  $Titres[]=$vaccination['Titres'];
  $Descriptions[]=$vaccination['Descriptions'];
  $Images[]=$vaccination['Images'];
}

$files = array();
if ($dossier = opendir("img/dev")){
    while(($fichier = readdir($dossier)) !== false){
       if($fichier != "." & $fichier != "..")
       {
            $files[] = $fichier;
       }
    }
}


$files = array_reverse($files);
$i2=0;
foreach($files as $fichier){

  $data=$bdd -> prepare("SELECT `Dates`, `Nom`, `Titres`,`Descriptions` FROM `stud_dev` Where Images=:Images ");
  $data->execute(array(':Images' => "img/dev/".$fichier   ));
  $vaccinations = $data -> fetchAll();

  $Dates=array(); //Mon Tableau Image en entier 
  $Nom=array(); //Mon Tableau Image en entier 
  $Titres=array(); //Mon Tableau Image en entier 
  $Descriptions=array(); //Mon Tableau Image en entier 


  foreach ($vaccinations as $vaccination ) {
    $Dates[]=$vaccination['Dates'];
    $Nom[]=$vaccination['Nom'];
    $Titres[]=$vaccination['Titres'];
    $Descriptions[]=$vaccination['Descriptions'];
  }
  $Dates = implode(',', $Dates);
  $Titres = implode(',', $Titres);
  $Nom = implode(',', $Nom);
  $Descriptions = implode(',', $Descriptions);


  echo " 
  <div id='$i2' class='port'>

  <div class='row'>
    <div class='description'>
      <h1 style=' font-weight:800;'>$Titres</h1> 
      <p style='margin-top:30px;font-weight:500; font-size:21px;'>$Descriptions</p>
    </div> <div class=' descriptionimg' >
          <img style=' width: 500px;height: auto;' src='img/dev/$fichier ' alt='$Titres'><p> <strong>Dates :</strong> $Dates <br> <strong> Par :</strong> $Nom</p>
          </div></div>
      </div> ";


 
    $i2++;
}




//set up du panneau d'affichage quand on clqiue sur les photos crea

$data=$bdd -> prepare("SELECT `id_crea`, `Titres`, `Descriptions`, `Images` FROM `stud_crea` ");
$data -> execute();
$vaccinations = $data -> fetchAll();

$id_crea=array(); //Mon id_tatouage Image en entier 
$Titres2=array(); //Mon Tableau Titres en entier 
$Descriptions2=array(); //Mon Descriptions Image en entier 
$Images=array(); //Mon Tableau Image en entier 

foreach ($vaccinations as $vaccination ) {
  $id_crea[]=$vaccination['id_crea'];
  $Titres2[]=$vaccination['Titres'];
  $Descriptions2[]=$vaccination['Descriptions'];
  $Images[]=$vaccination['Images'];
}

$files2 = array();
if ($dossier = opendir("img/crea")){
    while(($fichier2 = readdir($dossier)) !== false){
       if($fichier2 != "." & $fichier2 != "..")
       {
            $files2[] = $fichier2;
       }
    }
}


$files2 = array_reverse($files2);
$i3=+$i2;
foreach($files2 as $fichier2){

      $data=$bdd -> prepare("SELECT `Dates`,`Nom`, `Titres`,`Descriptions` FROM `stud_crea` Where Images=:Images ");
      $data->execute(array(':Images' => "img/crea/".$fichier2   ));
      $vaccinations = $data -> fetchAll();

      $Dates=array(); //Mon Tableau Image en entier 
  $Nom=array(); //Mon Tableau Image en entier 
  $Titres=array(); //Mon Tableau Image en entier 
  $Descriptions=array(); //Mon Tableau Image en entier 


  foreach ($vaccinations as $vaccination ) {
    $Dates[]=$vaccination['Dates'];
    $Nom[]=$vaccination['Nom'];
    $Titres[]=$vaccination['Titres'];
    $Descriptions[]=$vaccination['Descriptions'];
  }
  $Dates = implode(',', $Dates);
  $Titres = implode(',', $Titres);
  $Nom = implode(',', $Nom);
  $Descriptions = implode(',', $Descriptions);


  echo " 
  <div id='$i3' class='port'>

  <div class='row'>
    <div class='description'>
      <h1 style='font-weight:800;'>$Titres</h1> 
      <p style='margin-top:30px;font-weight:500; font-size:21px;'>$Descriptions</p>
    </div> <div class=' descriptionimg' >
          <img style=' width: 500px;height: auto;' src='img/crea/$fichier2 ' alt='$Titres'><p>Dates: $Dates <br> Par $Nom</p>
          </div></div>
      </div> ";


 
    $i3++;
}




?>


        
      





</section> <!-- / projects -->


    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../asset/js/scriptport.js"></script>

  
</main> 
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>
<script  src="../asset/js/script.js"></script>
<script  src="../asset/js/index.js"></script>


<script>
  

      let creaDonnee = document.querySelectorAll(".crea");
      let devDonnee = document.querySelectorAll(".dev");
      let b1 = document.getElementById("b1");
      let b2 = document.getElementById("b2");
      let b3 = document.getElementById("b3");

      document.getElementsByTagName("button")[0].addEventListener("click",function(){
        console.log("Tout");
        creaDonnee.forEach(function(creaDonnees) {
          creaDonnees.style.display="flex";
        });
        devDonnee.forEach(function(devDonnees) {
          devDonnees.style.display="flex";
        });
        b1.style.background="#4611d0";
        b1.style.color="white";
        b2.style.background="white";
        b2.style.color="#4611d0";
        b3.style.background="white";
        b3.style.color="#4611d0";
      });


     
      document.getElementsByTagName("button")[1].addEventListener("click",function(){
        console.log("Dev");
        console.log(devDonnee);
        creaDonnee.forEach(function(creaDonnees) {
          creaDonnees.style.display="none";
        });
        devDonnee.forEach(function(devDonnees) {
          devDonnees.style.display="flex";
        });
        b1.style.background="white";
        b1.style.color="#4611d0";
        b2.style.background="#4611d0";
        b2.style.color="white";
        b3.style.background="white";
        b3.style.color="#4611d0"
      });
     
      document.getElementsByTagName("button")[2].addEventListener("click",function(){
        console.log("Crea");
        console.log(creaDonnee);
        creaDonnee.forEach(function(creaDonnees) {
          creaDonnees.style.display="flex";
        });
        devDonnee.forEach(function(devDonnees) {
          devDonnees.style.display="none";
        });
        b1.style.background="white";
        b1.style.color="#4611d0";
        b2.style.background="white";
        b2.style.color="#4611d0";
        b3.style.background="#4611d0";
        b3.style.color="white"
      })

      const burger = document.querySelector('.burger');
const menu = document.querySelector('.menu');
const quitte = document.querySelector('.menu-close');
burger.addEventListener('click', () => {
  // Toggle de la classe "active" sur le burger
  burger.classList.toggle('active');
  // Toggle de l'affichage du menu déroulant
  menu.classList.toggle('active');
});

quitte.addEventListener('click', () => {
  // Toggle de la classe "active" sur le burger
  burger.classList.remove('active');
  // Toggle de l'affichage du menu déroulant
  menu.classList.remove('active');
});




</script>
</body>
</html>

    