<?php

// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */
echo "<h2>Ex 1</h2>";
$nb = 0;
while ($nb <= 10) {
    echo $nb . " ";
    $nb+=2;
};

/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

 echo "<h2>Ex 2</h2>";
 $year = 2000;
 while ($year <= 2024) {
     echo "<ul>" . $year . "</ul> ";
     $year++;
 };


/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */
echo "<h2>Ex 3</h2>";
 $var = 3;
do {
    echo $var . "<br>";
    $var+=3; 
} while ($var <= 30);

/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */
echo "<h2>Ex 4</h2>";

$nb = 4;
$fois = 0;
for ($i = 0; $i < 10; $i++) {
    echo "$nb x $fois = " . $nb * ($fois+=1) . "<br>";
}


/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */

 echo "<h2>Ex 5</h2>";

 $a = 1;
 for ($i=1; $i < 6; $i++) {
    echo "<table>
        <tr>";
    for ($j=1; $j < 6; $j++) {
        echo "<td>" . $i . "," . $j . "</td>";
    }
    echo "<tr>
        </table>";
 }

/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */
echo "<h2>Ex 6</h2>";
 $guy = [
    "prenom" => 'Dada',
    "nom" => 'No',
    "Email" => '<a href="aoui@gmail.com">aoui@gmail.com</a>',
    "age" => "12"
];

foreach($guy as $index => $valeur) {
    echo "<p>" . $index . ' : ' . $valeur . "</p>";
}

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */

 echo "<h2>Ex 7</h2>";
 $web = [
    "accueil" => 'https://www.php.net/manual/fr/control-structures.foreach.php',
    "produits" => 'https://www.php.net/manual/fr/control-structures.foreach.php',
    "contact" => 'https://www.php.net/manual/fr/control-structures.foreach.php',
];

foreach($web as $index => $valeur) {
    echo "<p><a href=$valeur" . ">" . "$index" . "</a></p>";
}

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */
echo "<h2>Ex 8</h2>";
$min = 1;
$max = 100;
echo "<table border ='1'>";
    for ($i=0; $i<=9; $i++) { 
        echo "<tr>";
        for ($j=0; $j<=9; $j++) {
            echo "<td>" . mt_rand($min,$max) . "<td>";
        };
        echo "</tr>";
    }
echo "</table>";

/** Exercice 9 : Tableau de tableaux avec foreach
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */

 echo "<h2>Ex 9</h2>";
 $tab_multi = [
    'personne 1' => [
        'prenom'    => 'Julien',
        'nom'       => 'Dupon',
        'age' => 17
    ],
    'personne 2' => [
        'prenom'    => 'Nicolas',
        'nom'       => 'Duran',
        'age' => 22
    ],
    'personne 3' => [
        'prenom'    => 'Pierre',
        'nom'       => 'Dulac',
        'age' => 27
    ]
];

echo "<ol>";
foreach($tab_multi as $index => $valeur) {
echo "<li>$index</li>";
echo "<ul>";
echo "<li>" . "prénom: " . $tab_multi[$index]['prenom'] . "</li>";
echo "<li>" . "nom: " .  $tab_multi[$index]['nom'] . "</li>";
echo "<li>" . "age: " . $tab_multi[$index]['age'] . "</li>";
echo "</ul>";
}
