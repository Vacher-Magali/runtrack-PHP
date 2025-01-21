<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $b != 0 ? $a / $b : "Division par zéro impossible";
        case '%':
            return $b != 0 ? $a % $b : "Modulo par zéro impossible";
        default:
            return "Opération invalide";
    }
}

// Exemple d'appel :
echo calcule(10, '+', 5); // Affiche 15
?>