<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux</title>
</head>
<body>
    <?php
    echo "<h1>Exercices sur les tableaux</h1>";
    /**Exercice 1 : Créer un tableau simple
     *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
     *  Instructions :
     *  Déclarez le tableau avec les titres des films.
     *  Affichez chaque film sur une ligne séparée dans un var_dump().
     */

    echo "<h2>Ex 1</h2>"; 
    $films = ["Alien vs Superman", "King Kong est dans mon salon", "Adam et sa mercedes maudite", "Maman j'ai raté ma formation web", "Lost mais pas perdu"];
    echo var_dump($films); 

    /** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
     *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
     *   Instructions :
     *   Créez un tableau avec quelques fruits.
     *   Ajoutez un fruit à la fin du tableau.
     *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
     *   Affichez le tableau modifié.
     */


    echo "<h2>Ex 2</h2>"; 
    $fruits = ["pomme", "citron", "peche", "kiwi"];
    array_push($fruits, 'banane');
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . '<br>';
    }

    echo "<br>";
    array_shift($fruits);
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . '<br>';
    }

    /** Exercice 3 : Créer et afficher un tableau associatif
     *   Objectif : Travaillez avec un tableau associatif.
     *   Instructions :
     *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
     *   Affichez chaque information avec une phrase descriptive.
     */

    echo "<h2>Ex 3</h2>"; 
    $citoyen = [
        'prenom' => 'prenom ici',
        'nom' => 'nom ici',
        'age' => 'age ici'
    ];

    echo "<br>";

    echo $citoyen ['prenom'] . '<br>';
    echo $citoyen ['nom']. '<br>';
    echo $citoyen ['age']. '<br>';

    /**Exercice 4 : Compter les éléments d'un tableau
     *  Objectif : Utilisez les fonctions count() et sizeof().
     *  Instructions :
     *  Créez un tableau avec plusieurs villes.
     *  Affichez le nombre d'éléments dans le tableau.
     */

     echo "<h2>Ex 4</h2>"; 
     $city = ["Gotham City", "Vice City", "Liberty City"];
     echo count($city);
     echo "<br>";
     echo sizeof($city);

    /** Exercice 5 : Créer un tableau multidimensionnel
     *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
     *   Instructions :
     *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
     *   Affichez la note du premier étudiant.
     */

    echo "<h2>Ex 5</h2>"; 
    $etud = [
            "etudiant1" => [
                "prenom" => "David",
                "nom" => "Ngo",
                "note" => 20
            ],

            "etudiant2" => [
                "prenom" => "Franck",
                "nom" => "Beurk",
                "note" => 9
            ]
            ];

    echo $etud ['etudiant1']['note'];
 


    /** Exercice 6 : Modifier un tableau multidimensionnel
     *   Objectif : Modifiez un tableau multidimensionnel.
     *   Instructions :
     *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
     *   Changez la note du deuxième étudiant.
     *   Affichez toutes les informations du tableau modifié.
     */
    echo "<h2>Ex 6</h2>";
    $replace = [
                "etudiant2" => [
                    "note" => 19
                ]
                ];
    $replaceetud = array_replace($etud, $replace);
    var_dump($replaceetud);

    /** Exercice 7 : Boucle for pour parcourir un tableau
     *   Objectif : Utilisez une boucle for pour parcourir un tableau.
     *   Instructions :
     *   Créez un tableau avec les mois de l'année.
     *   Utilisez une boucle for pour afficher chaque mois.
     */

     echo "<h2>Ex 7</h2>";
    $mois = ["janvier", "fev", "mars", "avril", "mai", "juin", "juillet", "aout", "sept", "octobre", "nov", "dec"];
    for ($i = 0; $i < count($mois); $i++) {
        echo $mois[$i] . '<br>';
    }

    /** Exercice 8 bonus : Rechercher une valeur dans un tableau
     *   Objectif : Cherchez une valeur spécifique dans un tableau.
     *   Instructions :
     *   Créez un tableau avec des numéros aléatoires.
     *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
     *   Affichez un message en fonction du résultat de la recherche.
     */
    echo "<h2>Ex 8</h2>";
    $min = 5;
    $max = 15;
    $tabalea = [mt_rand($min,$max),  mt_rand($min,$max), mt_rand($min,$max), mt_rand($min,$max)];
    var_dump($tabalea);
    $search = 12;
    for ($i = 0; $i < count($tabalea); $i++) {
        if ($search === $tabalea[$i]) {
            echo "oui ici";
            break;
        } 
    }

    /** Exercice 9 : Fusionner deux tableaux (Bonus)
     *   Objectif : Fusionnez deux tableaux en un seul.
     *   Instructions :
     *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
     *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
     *   Affichez chaque nom complet sur une ligne.
     * 
     *  Aide: utiliser des boucles for
     */

     echo "<h2>Ex 9</h2>";

    ?>
</body>
</html>

