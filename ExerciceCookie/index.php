<?php


if (isset($_POST['color'])) {
    $color = $_POST['color'];
} else if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];// $_COOKIE est une superglobale : son indice correspond au nom du cookie reçu. Si $_COOKIE['langue'] existe, c'est qu'on a reçu un cookie de nom "langue". On affecte donc sa valeur à la variable $langue.
} else {
    $color = 'white'; // par défaut, si on n'a pas cliqué sur un lien et si le cookie "langue" n'existe pas, on choisit "fr"
}

$year = 365 * 24 * 60 * 60;  // exprime 1 an en secondes
setcookie("color", $color, time() + $year);

echo '<div class="result">';
echo '<h1>Le site est affiché en : '. $color . '</h1>';
echo '</div>';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="" method="POST">
        <input type="radio" id="red" name="color" value="red">
        <label for="red">Rouge</label><br>

        <input type="radio" id="green" name="color" value="green">
        <label for="green">Vert</label><br>

        <input type="radio" id="blue" name="color" value="blue">
        <label for="blue">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>
    
    <h2><a href="?reset=true">Réinitialiser la couleur</a></h2>



</body>

</html>
