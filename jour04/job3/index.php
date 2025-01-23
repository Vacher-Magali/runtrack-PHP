<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
</head>
<body>
    <!-- Formulaire de connexion -->
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Se connecter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === "John" && $password === "Rambo") {
            echo "<p>correct</p>";
        } else {
            echo "<p>nom d'utilisateur ou mot de passe incorrect</p>";
        }
    }
    ?>
</body>
</html>
