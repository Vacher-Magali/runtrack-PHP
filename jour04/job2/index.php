<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher $_GET</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="arg1" placeholder="Argument 1">
        <input type="text" name="arg2" placeholder="Argument 2">
        <button type="submit">Envoyer</button>
    </form>

    <?php if (!empty($_GET)): ?>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <?php foreach ($_GET as $key => $value): ?>
                <tr>
                    <td><?= htmlspecialchars($key) ?></td>
                    <td><?= htmlspecialchars($value) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
