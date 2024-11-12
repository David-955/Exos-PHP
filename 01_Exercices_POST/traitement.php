<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */

echo "<h2>ex1</h2>";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<p>Résultats du formulaire</p>';
    if (empty($_POST['nom'])) {
        echo "<p>nom vide</p>";
    }

    if (empty($_POST['prenom'])) {
        echo "<p>prénom vide</p>";
    }

    if (empty($_POST['email'])) {
        echo "<p>email vide</p>";
    }

    if (empty($_POST['motdepasse'])) {
        echo "<p>mdp vide</p>";
    }

    if (empty($_POST['ville'])) {
        echo "<p>ville vide</p>";
    }

    if (empty($_POST['pays'])) {
        echo "<p>pays vide</p>";
    }

    if ($_POST['nom'] && $_POST['prenom'] && $_POST['email'] && $_POST['motdepasse'] && $_POST['ville'] && $_POST['pays'] !== '') {
        echo '<p>Nom : ' . htmlspecialchars($_POST['nom']) . '</p>';
        echo '<p>Prénom : ' . htmlspecialchars($_POST['nom']) . '</p>';
        echo '<p>Nom : ' . htmlspecialchars($_POST['email']) . '</p>';
        echo '<p>mdp : ' . htmlspecialchars($_POST['motdepasse']) . '</p>';
        echo '<p>Ville : ' . htmlspecialchars($_POST['ville']) . '</p>';
        echo '<p>Pays : ' . htmlspecialchars($_POST['pays']) . '</p>';
    }
}


/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */

 echo "<h2>ex2</h2>";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accès sécurisé aux données POST
    $id = $_POST['id'];
    $action = $_POST['action'];

    echo '<p>Résultats du formulaire</p>';
    if ($_POST['nom'] === '') {
        echo "<p>nom vide</p>";
    }

    if ($_POST['prenom'] === '') {
        echo "<p>prénom vide</p>";
    }

    if ($_POST['email'] === '') {
        echo "<p>email vide</p>";
    }

    if ($_POST['motdepasse'] === '') {
        echo "<p>mdp vide</p>";
    }

    if ($_POST['ville'] === '') {
        echo "<p>ville vide</p>";
    }

    if ($_POST['pays'] === '') {
        echo "<p>pays vide</p>";
    }

    if ($_POST['nom'] && $_POST['prenom'] && $_POST['email'] && $_POST['motdepasse'] && $_POST['ville'] && $_POST['pays'] !== '') {
        echo '<p>Nom : ' . htmlspecialchars($_POST['nom']) . '</p>';
        echo '<p>Prénom : ' . htmlspecialchars($_POST['nom']) . '</p>';
        echo '<p>Nom : ' . htmlspecialchars($_POST['email']) . '</p>';
        echo '<p>mdp : ' . htmlspecialchars($_POST['motdepasse']) . '</p>';
        echo '<p>Ville : ' . htmlspecialchars($_POST['ville']) . '</p>';
        echo '<p>Pays : ' . htmlspecialchars($_POST['pays']) . '</p>';

        $mdpsecurise = $_POST['mdpsecurise'];
        echo "mdpsecurise: $mdpsecurise<br>";
    }
}

/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */

/** Exercice 4 : Limitation de longueur pour adresse 
 * 
 *  Objectif : Limiter la longueur de l'adresse saisie par l'utilisateur à 200 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ adresse
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */
echo "<h2>ex4</h2>";
 if (strlen($_POST['ville']) >= 200) {
    echo "<p>trop long</p>";
 } else {
    echo '<p>Ville ok : ' . htmlspecialchars($_POST['ville']) . '</p>';
 }


/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */

 echo "<h2>ex5</h2>";

 echo '<p>Ville ok en maj : ' . htmlspecialchars(strtoupper($_POST['ville'])) . '</p>';
 echo "<p>merci pour votre soumission</p>";