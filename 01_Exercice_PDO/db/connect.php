<?php

//---------------------------
// Validation de formulaire
//---------------------------
// Créer un formulaire qui permet d'enregistrer un nouvel employé dans le BDD societe.

// 2- connexion :
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=societe3',
        'root',
        '',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
        )
    );
} catch (PDOException $e) {
    // En cas d'erreur de connexion, on capture l'exception
    echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
    exit; // Arrête le script si la connexion échoue
}

?>