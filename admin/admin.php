
<?php 

include ('connect_bdd.php');

session_start();


     



?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin </title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="../asset/style/style4.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  
</div>
<div class="rerun"><a href="">Retour à l'accueil</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Ajouter</h1>



    <form action="upload.php" method="post" enctype="multipart/form-data" id="form_upload">
      <div class="input-container">

      <label style="color:black;" for="type_crea">Choisie le type de création :</label><br><br><br><br>
      <select required name="type_crea" id="type_crea">
                        <option value="">--Choisie ICI--</option>
                        <option value="dev">Développement Web</option>
                        <option value="num">Création Numérique</option>
                    </select>
        
                    <br><br>
      <div class="input-container">
      <label style="color:black;" for="#{label}">Titre de la création :</label><br><br>
      <input type="#{type}" id="#{label}" name="titre" required="required"minlength="1" maxlength="25" />
        <div class="bar"></div>
      </div>
      <div class="input-container"> 
      <label style="color:black;" for="#{label}">Nom de l'élève :</label><br><br>
      <input type="#{type}" id="#{label}" name="nom" required="required"minlength="1" maxlength="25" />
        <div class="bar"></div>
      </div>
  
      <div class="input-container">

      <label style="color:black;margin-left:-65px;" for="textarea">Explication de la création :</label><br>
      </div>
      <div class="footer"><a href="#"></a>
      <textarea id="textarea" required name="textarea"rows="5" cols="30"placeholder="Voici ou tu place le texte."></textarea><br><br>
      
      <div class="input-container">
      <p style="color:black;" for="nomFichier">Indiquez un fichier image (png ou jpeg) à téléverser : </p>
    </div>

    <input type="file" name="nomFichier" id="nomFichier" form="form_upload" required accept="image/jpeg image/png" >
        
      <div class="button-container">
        <button type="submit"  form="form_upload" ><span>Ajouter</span></button>
      </div>
    </div>
    </form>
  </div>


  
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Supprimer
      <div class="close"></div>
    </h1>
    <form  action="suppr.php" method="post" enctype="multipart/form-data" id="form_suppr">
      <div class="input-container">
      <br>
        <label for="suppr_crea">Choisie l'element à supprimer :</label><br><br><br>


        <?php


  if(isset($_SESSION['identifiant']) && sha1(isset($_SESSION['password']))){


        $data=$bdd -> prepare("SELECT `Titres` FROM `stud_dev` ");
        $data -> execute();
        $vaccinations = $data -> fetchAll();

        $Titres_dev=array(); //Mon Tableau Titres en entier 

        foreach ($vaccinations as $vaccination ) {
          $Titres_dev[]=$vaccination['Titres'];
        }

        echo '<select name="suppr_dev" id="suppr_dev">';
        echo '<option value="">Travaux dev</option>';
        foreach ($Titres_dev as $Titres_dev) {
          echo '<option value="'.$Titres_dev.'">'.$Titres_dev.'</option>';
        }

        echo '</select>';
        ?>
        <br><br><br><br><br><br>
        <?php


        $data=$bdd -> prepare("SELECT `Titres` FROM `stud_crea` ");
        $data -> execute();
        $vaccinations = $data -> fetchAll();

        $Titres_crea=array(); //Mon Tableau Titres en entier 

        foreach ($vaccinations as $vaccination ) {
          $Titres_crea[]=$vaccination['Titres'];
        }





        echo '<select name="suppr_crea" id="suppr_crea">';
        echo '<option value="">Travaux crea</option>';
            $i=1;
        foreach ($Titres_crea as $Titres_crea) {
            $i++;
          echo '<option value="'.$Titres_crea.'">'.$Titres_crea.'</option>';
        }

        echo '</select>';
        echo "non";

}
else{
  header('location:admin.php');
}

?>
<br><br><br><br><br><br>


      </div>
    
      <div class="button-container">
        <button type="submit"  form="form_suppr" ><span>Supprimer</span></button>
      </div>
    </form>
  </div>
</div>


<!-- partial -->
<script src='https://code.jquery.com/jquery-3.5.1.js'></script><script  src="../asset/js/script4.js"></script>

</body>
</html>
<!-- partial -->


</body>
</html>
