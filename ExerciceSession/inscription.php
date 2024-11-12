<?php session_start(); ?> 
<!--  session_start() pour commencer une session et la garder active sur toutes les pages du navigateur -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - SESSION</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Page d'inscription</h1>

    <form action="traitement.php" method="POST">
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Votre prenom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Votre email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="mdp">Votre mot de passe</label>
            <input type="password" id="mdp" name="mdp" required>
        </div>
        <input type="submit" id="submit_inscription" name="submit_inscription">
    </form>
</body>

</html>