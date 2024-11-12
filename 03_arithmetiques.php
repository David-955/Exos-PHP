<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo arith</title>
</head>
<body>
    <?php

    /** Exercice 1 : Opérateurs de base
     *  Objectif : calculer des variables avec les opérateurs de base
     * 
     * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
     * 
     * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
     */

    $a = 5;
    $b = 4;
    echo "résultat addition: " , $a + $b , "<br>";
    echo "résultat soustraction: " , $a - $b , "<br>";
    echo "résultat multiplication: " , $a * $b , "<br>";
    echo "résultat division: " , $a / $b , "<br>";
    echo "résultat modulo: " , $a % $b , "<br>";

    /** Exercice 2 : Opération combinées
     *  Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
     */
    echo "<br>";
    echo "résultat addition: " , $a += $b , "<br>";
    echo "résultat soustraction: " , $a -= $b , "<br>";
    echo "résultat multiplication: " , $a *= $b , "<br>";
    echo "résultat division: " , $a /= $b , "<br>";
    echo "résultat modulo: " , $a %= $b , "<br>"; 

    /** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)
     * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
     *
     * 1 . Déclarer une variable $counter initialisée à 10;
     * 
     * 2 . incrémenter cette valeur de 1;
     * 
     * 3 . Réinitialiser $counter à 10 et décrémenter de 1
     * 
     * Afficher tous les résultats
     */

    $counter = 10;
    ++$counter;
    echo "<br>";
    echo $counter;
    $counter = 10;
    --$counter;
    echo "<br>";
    echo $counter;


    /** Exercice 4 : Incrémentation et décrémentation 
     * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
     * 
     * 1 . Déclarer une variable $num initialisée à 10;
     * 
     * 2 . incrémenter cette valeur de 1;
     * 
     * 3 . réinitialiser $num à 10 et décrémenter de 1
     * 
     * Afficher tous les résultats
     */

    $num = 10;
    $num++;
    echo "<br>";
    echo $num;
    $num = 10;
    $num--;
    echo "<br>";
    echo $num;

    /** Exercice 5 : Calcul des Ages
     *  Objectif : Simuler un anniversaire
     * 
     * 1 . Déclarer une variable $age initialisée à votre age;
     * 
     * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; 
     * 
     * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
     */

    $age = 87;
    ++$age;
    $age--;
    echo "<br>";
    echo $age;


    /** Exercice 6 : Modulo
     *  Objectif : Calculer avec l'opérateur modulo
     * 
     * 1 . Déclarer une variable $total initialisée à 37;
     * 
     * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
     * 
     * 3 . Afficher un message qui dit si $total est pair ou impair
     * 
     */

    $total = 37;
    if ($total % 2 == 0) {
        echo "<p>je suis pair</p>";
    } else {
        echo "<p>je suis impair</p>";
    }

    /** Exercice 7 : Panier d'achats 
     *  Objectif : Gérer les quantités d'un panier d'articles
     * 
     *  1 . Déclarer une variabler $quantity initialisée à 5;
     * 
     *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
     * 
     *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
     * 
     * Afficher le résultat
     */

    $quantity = 5;
    $quantity += 3; 
    $quantity -= 2;
    echo "<br>";
    echo $quantity;


    /** Exercice 8 : Conversion d'unités
     *  Objectif : Convertir des KM en Miles
     * 
     *  1 . Déclarer une variable $kilometres initialisée à 100;
     * 
     *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
     * 
     */

    $kilometres = 100;
    $kilometres *= 0.621371;
    echo "<br>";
    echo $kilometres;

    /** Exercice 9 : Jeu
     *  Objectif : Calculer les points dans un jeu en incrémentant et décrémentant
     * 
     *  1 . Déclarer une variable $score initialisée à 50;
     * 
     *  2 . Ajouter 10 points à $score;
     * 
     *  3 . Retirer 5 points à score
     */

     $score = 50;
     $score += 10;
     $score -= 5;
     echo "<br>";
     echo $score;

    ?>
</body>
</html>

