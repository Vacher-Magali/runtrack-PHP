<?php
session_start();

// Initialiser ou incrémenter le compteur
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
$_SESSION['nbvisites']++;

// Réinitialiser le compteur
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 01 - Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?= $_SESSION['nbvisites'] ?></p>
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
