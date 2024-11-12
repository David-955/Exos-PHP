<?php
echo "<h2>ex1</h2>";

echo '<pre>';
    var_dump($_GET);
echo '</pre>';

echo "<h2>ex2</h2>";

if (isset($_GET['article'])) {
    echo '<p>Article : ' . htmlspecialchars($_GET['article']) . '</p>';
} else {
    echo '<p>L\'article n\'existe pas';
}

if (isset($_GET['couleur'])) {
    echo '<p>Couleur : ' . htmlspecialchars($_GET['couleur']) . '</p>';
} else {
    echo '<p>Couleur n\'existe pas !</p>';
}

if (isset($_GET['prix'])) {
    echo '<p>Prix : ' . htmlspecialchars($_GET['prix']) . '</p>';
} else {
    echo '<p>Prix n\'existe pas';
}

echo "<h2>ex3</h2>";

$conv = $_GET['prix'] * 0.92;
echo "<p>$conv</p>";

echo "<h2>ex4</h2>";

if ($_GET['couleur'] === "jaune") {
    echo "<p> Cette couleur me fait penser au soleil ! </p>";
} else {
    echo "<p> Cette couleur est triste ! </p>";
}

echo "<h2>ex5</h2>";

$price_min = 20;

if ($_GET['prix'] >= $price_min) {
    echo "<p>le prix est suffisant</p>";
} else {
    echo "<p>le prix est insuffisant</p>";
}


/** Exercice 1 : Affichage des paramètres
 * 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page de rendu HTML, utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans ce second fichier nommé : traitement.php, $_GET doit être récupéré, vérifié et ses paramètres affichés sur le navigateur 
 * 
 */

/** Exercice 2 : Validation des paramètres
 * 
 *  Objectif : Valider les paramètres reçus dans l'URL et afficher un message d'erreur si un paramètre est manquant
 * 
 *  1 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  2. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */



/** Exercice 3 : Conversion du prix
 * 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollar = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */

/** Exercice 4 : Affichage d'un message personnalisé
 * 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

/** Exercice 5 : Vérification du prix minimum
 * 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 */