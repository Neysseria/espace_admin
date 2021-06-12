<?php 
    session_start();
    
    // Connexion a la base de données
    $bdd = new PDO("mysql:host=localhost;dbname=espace_admin;","root");

    // Si id est non null et n'est pas vide
    if(isset($_GET['id']) && !empty($_GET['id'])){

        // Stock dans une variable l'id 
        $getid = $_GET['id'];
        $recupArticle = $bdd->prepare('SELECT * FROM produits WHERE id=?');
        $recupArticle->execute(array($getid));
        if($recupArticle->rowCount() >0){

            // Supprimer l'article correspondant à l'id selectionné
            $suppArticle = $bdd->prepare('DELETE FROM produits WHERE id=?');
            $suppArticle->execute(array($getid));

            // Redirige la page vers articles
            header('Location:articles.php');
        }else{
            echo "Aucun article n'a été trouvé";
        }
    }else{
        echo "L'identifiant n'a pas été récupéré";
    }

?>