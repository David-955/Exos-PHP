<?php session_start();

var_dump($_SESSION);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset ($_POST['submit_inscription'])) {
        if ((!empty($_POST['nom'])) && (mb_strlen($_POST['nom'] >= 2)) || (mb_strlen($_POST['nom'] <= 30 ))) {
            $_SESSION['nom'] = trim($_POST['nom']);
            echo "<p>Le nom est " . htmlspecialchars($_SESSION['nom']) ."</p>";
        } else {
            echo "<p>nom trop long</p>";
        }

        if (!empty($_POST['prenom']) && mb_strlen($_POST['prenom'] >= 2 ) ||  mb_strlen($_POST['prenom'] <= 30 )) {
            $_SESSION['prenom'] = $_POST['prenom'];
            echo "<p>Le prénom est " . htmlspecialchars($_SESSION['prenom']) ."</p>";
        } else {
            echo "<p>prénom trop long</p>";
        }


        $_SESSION['email'] = $_POST['email'];
        echo "<p>Le mail est " . htmlspecialchars($_SESSION['email']) ."</p>";

        if (!empty($_POST['mdp']) && mb_strlen($_POST['mdp'] >= 6 ) || mb_strlen($_POST['mdp'] <= 20 ) ) {
            $_SESSION['mdp'] = $_POST['mdp'];
            echo "<p>Le mdp est " . htmlspecialchars($_SESSION['mdp']) ."</p>";
        } else {
            echo "<p>mdp pas aux normes</p>";
        }
    }
}


print_r($_SESSION);

?>