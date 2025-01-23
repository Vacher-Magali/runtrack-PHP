<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair ou Impair</title>
</head>
<body>
    <!-- Formulaire GET -->
    <form method="GET" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = intval($_GET['nombre']); // Conversion en entier

        if ($nombre % 2 === 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    }
    ?>
</body>
</html>
