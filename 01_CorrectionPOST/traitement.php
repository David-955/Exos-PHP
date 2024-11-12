<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 *  $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
           
 */if(empty($_POST['firstname']) && empty($_POST['nom']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  $_POST['firstname'] . "<br>";
    echo  $_POST['name']. "<br>";
    echo  $_POST['email']. "<br>";
    echo  $_POST['mdp']. "<br>";
    echo  $_POST['city']. "<br>";
    echo  $_POST['country']. "<br>";
 }
 $prenom = isset($_POST['firstname']) ? $_POST['firstname'] : 'Prénom non fourni';
 $nom = isset($_POST['name']) ? $_POST['name'] : 'Nom non fourni';
 $email = isset($_POST['email']) ? $_POST['email'] : 'Email non fourni';
 $password = isset($_POST['mdp']) ? $_POST['mdp'] : 'mot de passe non fourni';
 $town = isset($_POST['city']) ? $_POST['city'] : 'Ville non fourni';
 $pays = isset($_POST['country']) ? $_POST['country'] : 'Pays non fourni';

/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */
echo "<br>";
if(empty($_POST['firstname']) && empty($_POST['name']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  htmlspecialchars($_POST['firstname']) . "<br>";
    echo  htmlspecialchars($_POST['name']). "<br>";
    echo  htmlspecialchars($_POST['email']). "<br>";
    echo  htmlspecialchars($_POST['mdp']). "<br>";
    echo  htmlspecialchars($_POST['city']). "<br>";
    echo  htmlspecialchars($_POST['country']). "<br>";
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
//if ($_SERVER(['REQUEST_METHOD'] === 'POST')) {
    if(!empty($_POST['name']) 
    && !empty($_POST['firstname'])
    && !empty($_POST['email'])
    && !empty($_POST['city'])
    && !empty($_POST['mdp'])
    && !empty($_POST['country'])
    ){
        echo "<p>Les informations sont :" . htmlspecialchars($_POST['name']) . "</p>";
    } else {
       echo "<p>Ne laissez pas de champs vides !</p>";
    }
//}

/** Exercice 4 : Limitation de longueur pour mot de passe 
 * 
 *  Objectif : Limiter la longueur de le mot de passe  saisie par l'utilisateur à 130 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ mot de passe 
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */

/*
Ici on va vérifier si le champs mdp n'est pas vide et si la longeur de la donnée est supérieure à 130. Si c'est le cas, on renvoie un message d'erreur à l'utilisateur sinon on lui dit que la longueur de son mot de passe est bonne
*/
//if ($_SERVER(['REQUEST_METHOD'] === 'POST')) {
    if (!empty($_POST['mdp']) && mb_strlen($_POST['mdp'] > 130 )) {
        echo "<p>La longueur de votre mot de passe ne doit pas dépasser 130 caractères !</p>";
    } else {
        echo "<p>Merci, c'est la bonne longueur!</p>";
    }
//}

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */

// Si le champs de texte pour la ville n'est pas vide, on la convertit en majuscule et on affiche un message de confirmation. 
if(!empty($_POST['city'])) {
   echo "<p> Votre ville est: " . strtoupper($_POST['city']) . "<br>" . "Merci pour votre réponse </p>";
} 

?>