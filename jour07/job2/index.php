<?php
// Initialiser ou incrémenter le compteur
if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 1, time() + 3600);
    $nbvisites = 1;
} else {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbvisites, time() + 3600);
}

// Réinitialiser le compteur
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600);
    $nbvisites = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 02 - Compteur avec cookie</title>
</head>
<body>
    <p>Nombre de visites : <?= $nbvisites ?></p>
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
