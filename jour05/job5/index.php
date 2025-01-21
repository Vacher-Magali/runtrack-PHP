<?php
function occurrences($str, $char) {
    return substr_count($str, $char);
}

// Exemple d'appel :
echo occurrences("Bonjour", "o"); // Affiche 2
?>