<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo conditions</title>
</head>
<body>
    <?php
    /** Exercice 1 : Vérifier la validité d'un âge
     * 
     *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
     *  
     *  Afficher un message indiquant si l'âge est valide ou non 
     * 
     * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
     */

    $age = 121;
    if ($age >= 0 && $age <= 120 ) {
        echo "c'est ok";
    } else {
        echo "not ok";
    }
    echo "<br>";


    /** Exercice 2 : Calculer la réduction
     * 
     *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
     *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
     */

    $total = 54; 
    if ($total > 100) {
        $total *= 0.9;
        echo "reduc 10%: $total";
    } else if ($total > 50 && $total < 100) {
        $total *= 0.95;
        echo "reduc 5%: $total";
    } else {
        echo "rien ne change $total";
    }

    echo "<br>";

    /** Exercice 3 : Afficher le jour de la semaine
     * 
     *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
     * 
     */

    $jour = 47;
    switch ($jour) {
        case 1 : echo "lundi";
        break;
        case 2 : echo "mardi";
        break;
        case 3 : echo "mercredi";
        break;
        case 4 : echo "jeudi";
        break;
        case 5 : echo "vendredi";
        break;
        case 6 : echo "samedi";
        break;
        case 7 : echo "dimanche";
        break;
        default : echo "erreur";
        break;
    }

    echo "<br>";

    /** Exercice 4 : Comparaison de chaines de caractères
     *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
     */

    $nb = 2;
    $nb2 = 2; 
    if ($nb === $nb2) {
        echo "idem";
    } else {
        echo "not pareil";
    }

    echo "<br>";

    /** Exercice 5 : Calcul de la moyenne
     *  
     *  Objectif : Ecrire un script qui vérifie si la moyenne de trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
     * 
     */

    $note1 = 10;
    $note2 = 9;
    $note3 = 9;

    if (($note1 + $note2 + $note3)/3 >= 10) {
        echo "tu as la moyenne tu passes";
    } else {
        echo "not enough";
    }

    echo "<br>";

    /** Exercice 6 : Tester une variable indéfinie
     * 
     *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
     * 
     * Tentez avec null, '', 0 
     */

    $var = null;

    if (isset($var)) {
        echo "var est définie: $var"; 
    } else {
        echo "var non définie";
    }

    echo "<br>";

    /** Exercice 7 : Valider un formulaire
     * 
     *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
     *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
     * 
     */

    $nom = NULL;
    if (empty($nom)) {
        echo "vide";
    } else {
        echo "pas vide";
    }

    /** Exercice 8 : Vérification d'un numéro pair ou impair
     * 
     *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
     * 
     */

     $total = 37;
     if ($total % 2 == 0) {
         echo "<p>je suis pair</p>";
     } else {
         echo "<p>je suis impair</p>";
     }

    /** Exercice 9 : Catégoriser une personne selon son âge
     * 
     *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
     */

     $age = 18;
     switch ($age) {
         case $age <= 10 : echo "enfant";
         break;
         case $age <= 17 : echo "ado wesh";
         break;
         case $age <= 55 : echo "adulte";
         break;
         case $age > 55 : echo "vieux lol";
         default : echo "erreur";
         break;
     }

     echo "<br>";

    /** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
     * 
     *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
     * 
     *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
     * 
     *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
     *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
     * 
     */

        // L'opérateur XOR écrit ^(Ou exclusif)
        $verif1 = "empreinte digitale";
        $verif2 = "mdp";
    
        // seulement une des deux conditions doit être vraie pour que tout soit retourné true
        if($verif1 == "empreinte digitale" XOR $verif2 == "mdp"){
            echo "<p>Vos réponses sont cohérentes</p>";
        } else  {
            echo "<p>Vos réponses ne sont pas cohérentes</p>";
        }
    ?>
</body>
</html>

