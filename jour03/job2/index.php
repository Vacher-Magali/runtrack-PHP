<?php
// ma string: elle se comporte comme un tableau est donc str: $str [0]
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


for ($i = 0; isset($str[$i]); $i += 2) {
    echo $str[$i];
}
?>
