<?php

/*

1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/
echo "<h2>Exo 1</h2>";
function greet() {
    echo "<p>hello, world</p>";
}

greet();

/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/

echo "<h2>Exo 2</h2>";

function greetUser($name) {
    echo "<p>$name</p>";
}

greetUser("David");

/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/

echo "<h2>Exo 3</h2>";

function sum($a, $b) {
    $calc = $a + $b;
    echo"<p>$calc</p>";
}

sum(7,2);

/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/

echo "<h2>Exo 4</h2>";

function sumArray($numbers) {
    $sum = array_sum($numbers);

    echo $sum;
}

$numbers = [1,2,3];
sumArray($numbers);

/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!

Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/

echo "<h2>Exo 5</h2>";

function greetWithTime($name, $timeOfDay) {
    echo "<p>Good " . $timeOfDay . ", " . $name . "!</p>";
}

greetWithTime("David", "day");

/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/

echo "<h2>Exo 6</h2>";

function getFruits() {
    $fruits = ["pomme", "poire", "kiwi"];
    echo "<table border ='1'>";
    for ($i = 0; $i < sizeof($fruits); $i++) {
        echo "<tr>";
        echo "<td>$fruits[$i] </td>";
        echo "</tr>";
    }
    echo "</table>";
}

getFruits();

/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/

echo "<h2>Exo 7</h2>";

function reverseString($str) {
    echo strrev($str);
}

reverseString("je suis un lapin");

/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/
echo "<h2>Exo 8</h2>";

function divide($a, $b) {
    if ($b === 0) {
        echo "<p>division impossible";
    } else {
        $div = $a / $b;
        echo "<p> $div </p>";
    }
}

divide(2,0);

/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/
echo "<h2>Exo 9</h2>";
function generateMultiplicationTable($number) {
    echo "<table border ='1'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        $calc = $number * $i;
        echo "<td>$calc</td>";
        echo "</tr>";
    }
    echo "</table>";
}

generateMultiplicationTable(7);

/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".

*/
echo "<h2>Exo 10</h2>";
function checkEligibility($age, $hasLicense) {
    if ($age >= 18 && $hasLicense === TRUE) {
        echo "<p>Eligible yessss</p>";
    } else {
        echo "<p>Not Eligible</p>";
    }
}

checkEligibility(18, TRUE);