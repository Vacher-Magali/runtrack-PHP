<?php

$str = "Les choses que l'on Possède finissent par nous posséder.";

$reversedStr = "";

$length = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $length++;
}


for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;

