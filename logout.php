<?php
    // Declare les sessions
    session_start();
    // Les stocker dans un tableau
    $_SESSION = [];
    // Detruire les sessions
    session_destroy();
    // Rediriger vers la page de connexion
    header("Location: connexion.php");

?>