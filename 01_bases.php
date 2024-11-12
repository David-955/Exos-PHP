<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 bases</title>
</head>
<body>
    <div>
        <a href="exo1bases.php">01.exo 1 bases</a>
        <a href="exo2bases.php">02. exo 2 bases</a>
    </div>
    <h1>mon h1</h1>
    <?php
        print "<p>Exercice 1 : Création script PHP basique</p>";
        echo "<p>Hello World, Bienvenue sur mon premier script PHP</p>";
    
        print "<p>Exercice 2 : Echo et Print</p>";
        echo "<p>Bonjour tout le monde !</p>" , "<br>";
        print "<p>Aujourd'hui, nous sommes le 14/10."; print "<br>";

        print "<p>Exercice 3 : HTML et PHP</p>";
        echo "<p>Ce texte est affiché depuis PHP</p>";

        print "<p>Exercice 4 : commentaires en PHP</p>";
        // l'exo 2 est sur echo et print

        /*
        echo est une instruction qui peut prendre plusieurs paramètres et qui permet d'afficher des éléments sur le navigateur

        print est une instruction (qui diffère un peu du echo) qui peut prendre un seul paramètre et qui permet d'afficher des éléments sur le navigateur. Il renvoie tjrs 1 donc vrai.
        */

        print "<p>Exercice 5 : var_dump()</p>";
        $nombre = 14;
        $str = "moi";

        var_dump($nombre);
        var_dump($str);

        print "<p>Exercice 6 : Texte avec HTML</p>";
        echo "Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>";
    
        print "<p>Exercice 7 : Commentaires et PHP</p>";
        echo("<div>
        <h1>Bienvenue</h1>
        <h2> sur mon application </h2>
        </div>"); // balise h1 suivi de la h2 à la ligne

        print "<p>Exercice 8 : Balises PHP dans HTML</p>";
        // Définir le fuseau horaire (facultatif)
        date_default_timezone_set('Europe/Paris');
        // Récupérer la date d'aujourd'hui
        $date_aujourdhui = date('d-m-Y');
        // Inclure la date dans un paragraphe HTML
        echo("<div>
        <h1>blabla</h1>
        <h2>blablabla</h2>
        <p>Aujourd'hui, nous sommes le $date_aujourdhui.</p>
        </div>");

        print "<p>Exercice 9 : Affichage dynamique</p>";
        $message = "ceci est un message bro";
        echo "<h1>$message</h1>";

    ?>
</body>
</html>