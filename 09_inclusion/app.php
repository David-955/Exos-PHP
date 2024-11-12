<?php
    require 'config/config.php';
    include 'includes/header.php';

    include 'settings/settings.php';
    if ($debugMode) {
        echo "<p>Le mode debug est activé.</p>";
    }

    include 'includes/footer.php';
?>
