<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Style/style.css">
	<title>Connexion en cours..</title>
</head>
<body>

	<?php
        session_start();
        include ('connect_bdd.php');
        
        $users = $bdd->prepare("SELECT * FROM admin");
        $users->execute();
        $utilisateur = $users->fetchAll();        

        var_dump($_POST);

        
        $compteOK=false;
        $_SESSION['identifiant']=$_POST['identifiant'];
        foreach($utilisateur as $users){
            if($users['identifiant']==$_POST["identifiant"])
            {   

                $_SESSION['identifiant']=$_POST['identifiant'];
                if( $users['password'] == SHA1($_POST['password'] ) )
                {
                    $_SESSION['id']=session_id();
                    $_SESSION['id_admin']=$users['id_admin'];
                    $_SESSION['erreurco']="";
                    $compteOK=true;
                    header("Location: admin.php");
                }
                else 
                {
                    $_SESSION['identifiant']=($_POST['identifiant']);
                    $_SESSION['erreurco']="Mauvais Mot de passe";
                    header("Location: connexion.php");
                }
            }
            else
            {
                $_SESSION['erreurco']="Cet identifiant n'existe pas";
            }
        }
        if (!$compteOK)
            header("Location: connexion.php");


    
	?>

</body>
</html>