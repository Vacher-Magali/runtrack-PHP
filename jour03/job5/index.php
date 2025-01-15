<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";


$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];


$vowels = "aeiouyAEIOUY";


for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i]; 

  
    if (
        ($char >= 'a' && $char <= 'z') || 
        ($char >= 'A' && $char <= 'Z')
    ) {
        
        $isVowel = false;
        for ($j = 0; isset($vowels[$j]); $j++) {
            if ($char === $vowels[$j]) {
                $isVowel = true;
                break;
            }
        }
        
        if ($isVowel) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Voyelles et Consonnes</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
