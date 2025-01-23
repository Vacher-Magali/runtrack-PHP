<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" min="1" required>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" min="1" required>
        <button type="submit">Dessiner la maison</button>
    </form>

    <?php
    if (!empty($_POST['largeur']) && !empty($_POST['hauteur'])) {
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);

        echo "<pre>";

        // Partie du toit
        for ($i = 0; $i < $hauteur; $i++) {
            echo str_repeat(" ", $hauteur - $i - 1); // Espaces pour centrer
            echo str_repeat("/", 1);                // Bord gauche
            echo str_repeat("_", $i * 2);           // Remplissage
            echo str_repeat("\\", 1);               // Bord droit
            echo "\n";
        }

        // Partie du bas de la maison
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|";                              // Bord gauche
            echo str_repeat(" ", $largeur);        // Remplissage
            echo "|\n";                            // Bord droit
        }

        echo "</pre>";
    }
    ?>
</body>
</html>
