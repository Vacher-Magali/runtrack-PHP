<?php
//mon tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

// je parcours mon tableau
for ($i = 0; isset($numbers[$i]); $i++) {
    
    if ($numbers[$i] % 2 === 0) {
        echo $numbers[$i] . " est paire<br />";
    } else {
        echo $numbers[$i] . " est impaire<br />";
    }
}
?>
