<?php

$str = "Dans l'espace, personne ne vous entend crier";


$charCount = 0;


for ($i = 0; isset($str[$i]); $i++) {
    $charCount++;
}


echo "Le nombre de caractères dans la chaîne est : " . $charCount;
?>
