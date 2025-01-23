<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre d'arguments GET</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="arg1" placeholder="Argument 1">
        <input type="text" name="arg2" placeholder="Argument 2">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (!empty($_GET)) {
        echo "<p>Nombre d'arguments : " . count($_GET) . "</p>";
    }
    ?>
</body>
</html>
