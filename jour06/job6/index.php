<?php
// Définir le style par défaut si aucun style n'est sélectionné
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>
    <!-- Inclusion du fichier CSS sélectionné -->
    <link rel="stylesheet" href="<?= $selectedStyle ?>.css">
    
</head>
<body>
    <h1>Choisissez un style pour le formulaire</h1>
    <form method="POST">
        <label for="style">Sélectionnez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $selectedStyle === 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $selectedStyle === 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $selectedStyle === 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>
