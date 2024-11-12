<?php

/** Exercice 1 : Afficher la date actuelle
 * 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

echo '<h2> Exercice 1 : Afficher la date actuelle </h2>';

$date = date('d-m-Y h:i:s'); // minutes = i 

echo $date;

/** Exercice 2 : Formater une date
 * 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : strtotime() combiné à date()
 */

echo '<h2> Exercice 2 : Formater une date </h2>';

$dateString = "2024-08-08";

$timeStamped = strtotime($dateString);

$newDate = date("d/m/Y", $timeStamped);

echo $newDate;

/** Exercice 3 : Calculer l'âge d'une personne
 * 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 * 
 *  aide : combinaison date() , strtotime() et time()
 * 
 */

echo '<h2> Exercice 3 : Calculer l\'âge d\'une personne </h2>';

// On met la date de naissance de la personne
$naissance = '15-11-1990';

// On converti la date avec strtotime()
$timeStampNaissance = strtotime($naissance);

// On récupère le timestamp actuel : 
$now = time();

// On calcul la différence en années :

$age = date('Y', $now) - date('Y', $timeStampNaissance);

echo $age;

// // Petit bonus verification mois
// si le mois et le jour d'aujourd'hui sont inférieurs au mois et jours de la date de naissance, c'est que l'utilisateur n'a pas encore eu son anniversaire
if (date('md', $now) < date('md', $timeStampNaissance)) { //date('md') : extrait le mois et le jour sous format MMDD exemple : 1502 avec l'anniversaire 
    $age--;
}

echo "L'age de la personne est : $age";


/** Exercice 4 : Afficher le timestamp actuel
 * 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 * 
 *  aide : fonction time()
 * 
 */

echo '<h2> Exercice 4 : Afficher le timstamp actuel </h2>';

echo "timestamp actuel : " . time();
// Explication du timestamp
echo ' <br> Le timestamp actuel est le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00 UTC (système UNIX). Cette date est appelée "Epoch". Le timestamp est souvent utilisé en programmation pour représenter un instant précis dans le temps de manière numérique.';

/** Exercice 5 : Convertir timestamp en date
 * 
 *  Objectif : Convertir le timestamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */

echo '<h2> Exercice 5 : Convertir timestamp en date </h2>';

$timeStamp = time();

$now = date('d/m/Y', $timeStamp);

echo $now;


/** Exercice 6 : Date dans une semaine
 * 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */

echo '<h2> Exercice 6: One week later </h2>';


$now = time();

$oneWeek = strtotime('+1 week', $now);

$formattedDate = date('d-m-Y', $oneWeek);

echo "Dans une semaine, nous serons le : $formattedDate";



/** Exercice 7 : Nombre de jours entre deux dates (BONUS)
 * 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */

echo '<h2> Exercice 7 : Nombre de jours entre deux dates </h2>';

$janvier = '01-01-2024';

$formatedJanvier = strtotime($janvier);

$now = time();

$secondes = $formatedJanvier - $now;

$differencesJours = round($secondes / (60 * 60 * 24));

echo "Nombre de jours entre le 1er janvier 2024 et aujourd'hui est : $differencesJours";
