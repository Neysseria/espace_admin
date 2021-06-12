<?php 
    session_start();
    // Connexion a la base de données
    $bdd = new PDO("mysql:host=localhost;dbname=espace_admin;","root");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Afficher les articles</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items: center;
            flex-direction: column;
        }
        .header{
            background: #212529;
            width: 100%;
            padding: 30px;
            display:flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            font-size: 2em;
            margin-bottom: 50px;
        }
        
        .tableau{
            width:50%;
        }
        table{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <div class="admin">
            <p>Administrateur</p>
        </div>
        <div class="logout">
            <p>Déconnexion</p>
        </div>
    </div>
    <!-- CREATION DU TABLEAU -->
    <div class="tableau">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix (€)</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Ajouter</th>
                    <th scope="col">Modifier</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // Récupération des données de la bdd
                    $req = $bdd->query('SELECT * FROM produits');
                    // On sélectionne toutes les lignes
                    $articles = $req->fetchAll();
                    // Boucle pour chaque éléments du tableau créer une ligne avec id/nom.prix/quantité et les actions
                    foreach($articles as $article): ?>
                    <tr>
                        <td><?= $article['id']; ?></td>
                        <td><?= $article['nom']; ?></td>
                        <td><?= $article['prix']; ?></td>
                        <td><?= $article['quantite']; ?></td>
                        <td><a href="supprimer.php?id=<?= $article['id']; ?>">Supprimer</a></td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
        
    
    
</body>
</html>