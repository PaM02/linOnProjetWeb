<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LinkOn website</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
    <div class="contact-form">
        <img src="../image/avatar.png" class="avatar">
        <h2>Administrateur</h2>
        <form action="connexion.php" method="post" >
        	<label>
        		<p>Nom utilisateur</p>
            	<input type="text" name="username" placeholder="Entrer le nom d'utilisateur" required>	
        	</label>
        	<label>
        		<p>Mot de passe</p>
            	<input type="password" name="password" placeholder="Entrer le Mot de passe" required>
        	</label>
            <input type="submit" name="" value="Login">

            <p class="passForget"><a href="https://openclassrooms.com">Mot de passe oublié ?</a><br /></p>

            <?php
                if(isset($_GET['erreur'])){

                    $err = $_GET['erreur'];
                    if($err==1 || $err==2){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                }
            ?>
            
        </form>
    </div>
</body>
</html>