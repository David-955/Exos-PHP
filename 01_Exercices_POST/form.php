<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire 2</title>
</head>

<body>
    <h1>Formulaire 2</h1>
    <div class="form-container">
        <form method="POST" action="traitement.php">
            <input type="hidden" name="id" value="123">
            <input type="hidden" name="mdpsecurise" value="mdp123"> <!-- Utilisation de champs cachés -->
            <input type="hidden" name="action" value="submit">

            <label for="nom">Nom</label><br>
            <input type="text" name="nom" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
            <br>

            <label for="prenom">Prénom</label><br>
            <input type="text" id="prenom" name="prenom" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?>">

            <br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

            <br>

            <label for="motdepasse">Mot de passe</label><br>
            <input type="text" id="motdepasse" name="motdepasse" value="<?php echo isset($_POST['motdepasse']) ? htmlspecialchars($_POST['motdepasse']) : ''; ?>">

            <br>

            <label for="ville">Ville</label><br>
            <input type="text" id="ville" name="ville" value="<?php echo isset($_POST['ville']) ? htmlspecialchars($_POST['ville']) : ''; ?>">

            <br>

            <label for="pays">Pays</label><br>
            <input type="text" id="pays" name="pays" value="<?php echo isset($_POST['pays']) ? htmlspecialchars($_POST['pays']) : ''; ?>">

            <br>

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>

</html>