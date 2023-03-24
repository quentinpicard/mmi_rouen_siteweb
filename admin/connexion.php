<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/style_connexion.css">
    <title>MMI Elbeuf | Connexion</title>
   <?php include ('connect_bdd.php'); ?>
    
</head>
<body>
    <header>
        <div class="left">
            <h1>Connexion administrateur</h1>
            <img src="../asset/img/LOGO_Complet_Blanc.png" alt="Logo MMI">
        </div>
        <div class="right">
            <form action="connect.php" method="post">

                <label for="identifiant">Identifiant </label><br/>
						<input type="text" id="identifiant" name="identifiant" value="<?php session_start();if(isset($_SESSION['identifiant'])){echo $_SESSION['identifiant'];}?>">
						
					</p></br>
                <label for="password">Mot de passe</label> </br>
                <input type="password" name="password" id="password" ></br>
                <input type="submit" value="Connexion" id="bouton">
                <?php
                
                if(isset($_SESSION['erreurco']))
                {
                    echo '<p style="color:red">' . $_SESSION['erreurco'] . "</p>";
                }
			?>
            </form>

            <div class="bg"></div>
        </div>
    </header>
</body>
</html>