<?php
session_start(); // On démarre la session AVANT toute chose
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
    </head>
    <body>
    <p>Re-bonjour !</p>
    <?php 
		if (isset($_SESSION['id']) AND isset($_SESSION['username']))
		{
		    
		    echo 'Bonjour ' . $_SESSION['username'];
            echo ' Vous êtes connecté !';
		}
		?>
    </body>
</html>