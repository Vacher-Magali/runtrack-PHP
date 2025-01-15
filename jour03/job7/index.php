<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$newStr = "";

$length = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $length++;
}

for ($i = 1; $i < $length; $i++) {
    $newStr .= $str[$i];
}

$newStr .= $str[0];

echo $newStr;
?>
