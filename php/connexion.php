<?php 
// Connexion à la base de données

include("bdd.php"); 

//  Récupération de l'utilisateur et de son pass hashé//htmlspecialchars eleiminer les attaques
$username = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);

$req = $bdd->prepare('SELECT id, password FROM administrateurs WHERE username = :username');
$req->execute(array(
    'username' => $username));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
//$isPasswordCorrect = password_verify($password, $resultat['password']);

//si le pseudo n'est pas bon
if (!$resultat)
{   
    // Redirection du visiteur vers la page index
    header('Location: login.php?erreur=1');
}
else
{
    //if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['username'] = $username;

        if (isset($_SESSION['id']) AND isset($_SESSION['username']))
        {
            header('Location: accueil.php');
        }
        
    //}
    else {

        // Redirection du visiteur vers la page index
        header('Location: login.php?erreur=1'); 
        
    }
}

/*

//mettre ceci sur toute les pages pour indiquer au membre qu'il est connecté
<?php 
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
*/
?>

