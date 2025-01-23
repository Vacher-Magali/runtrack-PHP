<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher $_POST</title>
</head>
<body>
    <!-- Formulaire POST -->
    <form method="POST" action="">
        <input type="text" name="arg1" placeholder="Argument 1" required>
        <input type="text" name="arg2" placeholder="Argument 2" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php if (!empty($_POST)): ?>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <?php foreach ($_POST as $key => $value): ?>
                <tr>
                    <td><?= htmlspecialchars($key) ?></td>
                    <td><?= htmlspecialchars($value) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
