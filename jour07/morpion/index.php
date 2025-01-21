<?php
session_start();

// Initialisation ou réinitialisation de la partie
if (!isset($_SESSION['grid']) || isset($_POST['reset'])) {
    $_SESSION['grid'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['turn'] = 'X'; // 'X' commence toujours
    $_SESSION['winner'] = null; // Pas de gagnant au début
}

// Fonction pour vérifier si un joueur a gagné
function checkWinner($grid) {
    // Vérification des lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] !== '-' && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
            return $grid[$i][0];
        }
        if ($grid[0][$i] !== '-' && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
            return $grid[0][$i];
        }
    }
    if ($grid[0][0] !== '-' && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
        return $grid[0][0];
    }
    if ($grid[0][2] !== '-' && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
        return $grid[0][2];
    }

    // Vérifier si la grille est pleine (match nul)
    foreach ($grid as $row) {
        if (in_array('-', $row)) {
            return null; // Partie non terminée
        }
    }
    return 'Draw'; // Match nul
}

// Gestion d'un clic sur une case
if (isset($_POST['row']) && isset($_POST['col']) && $_SESSION['winner'] === null) {
    $row = (int)$_POST['row'];
    $col = (int)$_POST['col'];

    // Si la case est vide, on la remplit avec le symbole du joueur actuel
    if ($_SESSION['grid'][$row][$col] === '-') {
        $_SESSION['grid'][$row][$col] = $_SESSION['turn'];
        $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X'; // Changement de joueur
    }

    // Vérification du gagnant après chaque coup
    $_SESSION['winner'] = checkWinner($_SESSION['grid']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 20px;
            background-color: #f0f0f0;
            border: none;
            cursor: pointer;
        }
        button:disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }
        .winner {
            font-size: 24px;
            color: green;
        }
        .draw {
            font-size: 24px;
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <?php if ($_SESSION['winner'] === 'Draw'): ?>
        <p class="draw">Match nul !</p>
    <?php elseif ($_SESSION['winner']): ?>
        <p class="winner"><?= $_SESSION['winner'] ?> a gagné !</p>
    <?php else: ?>
        <p>C'est au tour de : <?= $_SESSION['turn'] ?></p>
    <?php endif; ?>

    <table>
        <?php foreach ($_SESSION['grid'] as $rowIndex => $row): ?>
            <tr>
                <?php foreach ($row as $colIndex => $cell): ?>
                    <td>
                        <?php if ($cell === '-'): ?>
                            <form method="POST" style="margin: 0;">
                                <input type="hidden" name="row" value="<?= $rowIndex ?>">
                                <input type="hidden" name="col" value="<?= $colIndex ?>">
                                <button type="submit"><?= $cell ?></button>
                            </form>
                        <?php else: ?>
                            <?= $cell ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <form method="POST">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
