<?php 
    // Pour sécuriser la page on déclare la session
    session_start();
    // Si la session n'est pas déclarée on redirige vers la page de connexion
    if(!$_SESSION["mdp"]){
        header("Location:connexion.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="articles.php">Afficher les articles</a>
</body>
</html>