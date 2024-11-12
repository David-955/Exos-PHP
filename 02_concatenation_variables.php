<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 bases</title>
</head>
<body>
    <div>
        <a href="exo1bases.php">01.exo 1 bases</a>
        <a href="exo2bases.php">02. exo 2 bases</a>
    </div>

    <?php
        print "<p>Exercice 1 : Concaténation simple</p>";
        $name = "Jackson";
        $firstname = "Michael";
        echo "$firstname " . "$name";

        print "<p>Exercice 2 : Concatenation avec des phrases</p>";
        $phrase1 = "Le ciel est ";
        $phrase2 = "blue today";
        echo $phrase1 . $phrase2;

        print "<p>Exercice 3 : Utilisation de virgules dans echo</p>";
        define("mot1", "J'aime ");
        define("mot2", "le ");
        define("mot3", "piment");
        echo mot1 , mot2 , mot3;

        print '<p>Exercice 4 : Concatenation avec l\'opérateur combiné ".="</p>';
        $word = "je vais ";
        echo $word .= "ici lol";

        print '<p>Exercice 5 : Echapper les guillemets</p>';
        $citation = "'Il a dit : \"Le PHP est fantastique\"'";
        echo $citation;

        print '<p>Exercice 6 : Quotes simples et doubles</p>';
        $mot = "PHP";
        echo "le mot est : $mot";
        echo "<br>";
        echo 'le mot est : $mot';

        print '<p>Exercice 7 : Utilisation de variables dans les chaines</p>';
        $nom = "wesh";
        echo "Bonjour, $nom, bienvenue sur notre site!";

        print '<p>Exercice 8 : Concaténation et guillemets</p>';
        $citation = 'la vie est belle';
        echo '"' . $citation .= ', surtout quand on code en PHP!' . '"';
    ?>
</body>
</html>