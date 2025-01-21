<?php
function transformText($str, $option) {
    if ($option == "gras") {
        return preg_replace('/\b[A-Z][a-z]*\b/', '<strong>$0</strong>', $str);
    } elseif ($option == "césar") {
        $offset = 2;
        $result = '';
        foreach (str_split($str) as $char) {
            if (ctype_alpha($char)) {
                $ascii = ord($char) + $offset;
                $result .= chr($ascii > ord('z') ? $ascii - 26 : $ascii);
            } else {
                $result .= $char;
            }
        }
        return $result;
    } elseif ($option == "plateforme") {
        return preg_replace('/\b\w*me\b/', '$0_', $str);
    }
    return $str;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'] ?? '';
    $option = $_POST['option'] ?? '';
    echo transformText($str, $option);
}
?>

<form method="POST">
    <input type="text" name="str" placeholder="Entrez une chaîne" required>
    <select name="option">
        <option value="gras">Gras</option>
        <option value="césar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>