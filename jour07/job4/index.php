<?php
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', htmlspecialchars($_POST['prenom']), time() + 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04 - Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <p>Bonjour <?= htmlspecialchars($_COOKIE['prenom']) ?> !</p>
        <form method="POST">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="POST">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
