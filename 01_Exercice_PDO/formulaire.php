<?php
    session_start();

    $message = '';

    if(isset($_SESSION['message'])) {
      $message = $_SESSION['message'];  
      unset($_SESSION['message']);
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="post" action="">
        <h1>Ajouter un employé</h1>

        <!-- Message d'erreur ou succès -->
        <?php if(!empty($_SESSION['message'])):?> 
            <div class="message <?php strpos($message, 'Erreur') ? 'success' : 'error'?>"><?php $message ?></div>
        <?php endif; ?>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="username">Pseudonyme</label>
        <input type="text" id="username" name="username">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="telephone">

        <label for="sexe">Sexe</label>
        <select name="sexe" id="sexe">
            <option value="m">Homme</option>
            <option value="f">Femme</option>
        </select>

        <label for="service">Service</label>
        <input type="text" id="service" name="service">

        <label for="date_embauche">Date d'embauche</label>
        <input type="text" id="date_embauche" name="date_embauche">

        <label for="salaire">Salaire</label>
        <input type="text" id="salaire" name="salaire">

        <input type="submit" value="Enregistrer" name="submit_form">
    </form>
</body>

</html>

<?php

$message = '';  // variable pour afficher les messages d'erreur
// inclusion
require 'db/connect.php';

// 3- Traitement de $_POST :
if (!empty($_POST)) {  
    if (isset($_POST['email'])) {
        // formater mail
        // $email = trim($_POST['email']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $message .= '<p class="error">Erreur: mail.</p>';
        }
    }

    if (!isset($_POST['telephone']) || strlen($_POST['telephone']) > 20 || strlen($_POST['telephone']) < 10) {
        $message .= '<p class="error">Erreur: Le tel doit comporter entre 10 et 20 caractères.</p>';
        // var_dump($_POST['telephone']);
    }

    if (!isset($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) {
        $message .= '<p class="error">Erreur: Doit être Homme ou Femme.</p>';
        // var_dump($_POST['sexe']);
    }

    if (!isset($_POST['date_embauche']) || !strtotime($_POST['date_embauche'])) {
        $message .= '<p class="error">Erreur: La date n\'est pas valide.</p>';
        // var_dump($_POST['date_embauche']);
    }

    if (!isset($_POST['salaire']) || (!preg_match('/^\d+.\d{2}$/', $_POST['salaire']))) {
        $message .= '<p class="error">Erreur: Le salaire n\'est pas valide.</p>';
        var_dump($_POST['salaire']);
    }

    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 15) {
        $message .= '<p class="error">Erreur: Le nom doit comporter entre 5 et 15 caractères.</p>';
    }

    // ALTER TABLE employes ADD username VARCHAR(255);
    if (!isset($_POST['username']) || strlen($_POST['username']) < 5 || strlen($_POST['username']) > 15) {
        $message .= '<p class="error">Erreur: Le username doit comporter entre 5 et 15 caractères.</p>';
    }

    if (!isset($_POST['prenom'])) {
        $message .= '<p class="error">Erreur car pas de prénom.</p>';
    }

    if (!isset($_POST['service'])) {
        $message .= '<p class="error">Erreur service.</p>';
    }

    // si pas de message d'erreur on execute
    if(empty($message)) {
        // var_dump($_POST['date_embauche']);
        $date = new DateTime($_POST['date_embauche']);
        $date_embauche = $date->format('Y-m-d');

        try {
            $request = $pdo->prepare("INSERT INTO employes (email, telephone, sexe, date_embauche, salaire, nom, username, prenom, service) VALUES (:email, :telephone, :sexe, :date_embauche, :salaire, :nom, :username, :prenom, :service)");
        
            $request->bindParam(':email', $_POST['email']);
            $request->bindParam(':telephone', $_POST['telephone']);
            $request->bindParam(':sexe', $_POST['sexe']);
            $request->bindParam(':date_embauche', $date_embauche);
            $request->bindParam(':salaire', $_POST['salaire']);
            $request->bindParam(':nom', $_POST['nom']);
            $request->bindParam(':username', $_POST['username']);
            $request->bindParam(':prenom', $_POST['prenom']);
            $request->bindParam(':service', $_POST['service']);
        
            $result = $request->execute();
            var_dump($result);
        
            if($result) {
                $message .= '<p class="success">L\'employé(e) a bien été ajouté(e).</p>';
            } else {
                $message .= '<p class="error">Erreur: Problème lors de l\'enregistrement de l\'employé(e).</p>';
            }
        } catch(PDOException $e) {
            echo '<p class="error">Erreur : Erreur serveur lors de l\'insertion' . $e->getMessage() . '</p>';
            die; // Arrête le script si la connexion échoue
        }
    }
}



?>

