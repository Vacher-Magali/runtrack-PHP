<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


$vowels = "aeiouyAEIOUY";


for ($i = 0; isset($str[$i]); $i++) {
    
    for ($j = 0; isset($vowels[$j]); $j++) {
        if ($str[$i] === $vowels[$j]) {
            echo $str[$i];
            break;
        }
    }
}
?>
