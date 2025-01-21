<?php
function leetSpeak($str) {
    $leet = ['A' => '4', 'E' => '3', 'I' => '1', 'O' => '0', 'U' => '_'];
    return strtr(strtoupper($str), $leet);
}

// Exemple d'appel :
echo leetSpeak("Bonjour"); // Affiche B0NJ0UR
?>