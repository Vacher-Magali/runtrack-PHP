<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemple d'appel :
bonjour(true);  // Affiche Bonjour
?>
