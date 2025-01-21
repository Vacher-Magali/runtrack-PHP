<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);
    // Parcours du tableau
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparaison en fonction de l'ordre choisi
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    // Échange des éléments si l'ordre est croissant
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    // Échange des éléments si l'ordre est décroissant
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    return $tab;
}

// Exemple d'utilisation :
$tab = ["abc", "ghi", "def"];

// Tri croissant
$sortedTab = bubblesort($tab, true);
echo "Tri croissant : " . implode(", ", $sortedTab) . "\n";

// Tri décroissant
$sortedTab = bubblesort($tab, false);
echo "Tri décroissant : " . implode(", ", $sortedTab) . "\n";
?>
