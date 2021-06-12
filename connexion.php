<?php

    session_start();

    if(isset($_POST["valider"])){
       if(!empty($_POST["pseudo"]) && !empty($_POST["mdp"])){
            $pseudo_par_defaut = "admin";
            $mdp_par_defaut = "admin1234";

            $pseudo_saisi = htmlspecialchars($_POST["pseudo"]);
            $mdp_saisi = htmlspecialchars($_POST["mdp"]);

            if($pseudo_saisi === $pseudo_par_defaut && $mdp_saisi === $mdp_par_defaut){
                $_SESSION["mdp"] = $mdp_saisi;
                header("Location: index.php");
            }else{
                echo "Votre mot de passe ou pseudo est incorrect";
            }
       }else{
           echo "Veuillez compléter tous les champs";
       }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace connexion admin</title>
    <style>
        .connexion{
            width:250px;
            background: #E1FAF9;
            color:white;
            border-radius: 20px;
        }
        .bandeau{
            background: #0A2239;
            text-align:center;
            border-radius: 20px 20px 0px 0px;
        }
        .connexion form{
            text-align:center;
            padding: 20px 0px;
            color: black;
        }
        .connexion form input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="connexion">
        <div class="bandeau">
            <h1>Connexion</h1>
        </div>
        <form action="" method="POST">
            <p>Pseudo</p>
            <input type="text" name="pseudo">
            <br>
            <p>Mot de passe</p>
            <input type="password" name="mdp">
            <br>
            <input type="submit" name="valider">
        </form>
    </div>
    
</body>
</html>