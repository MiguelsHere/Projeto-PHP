<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Entrar</title>
</head>

<body>
    <nav><a href="index.php?action=home"><img src="images/logo.png" alt="Workout Maker"></a> <a href="">Workouts</a> <a href="">Ferramentas</a> <a href="">Perfil</a></nav>
    <main>
        <?php

        if (!empty($_SESSION['error'])) {
            echo "<p>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }

        ?>
        <form action="index.php?action=login" method="post">

            <label>Nome do Perfil ou Email:</label><br>
            <input type="text" name="user_or_email" maxlength="254" required><br>

            <label>Palavra-passe:</label><br>
            <input type="password" name="password" minlength="15" maxlength="64" required><br>

            <button type="submit">Entrar</button>
            <a href="index.php">Cancelar</a>

        </form>
        <a href="index.php?action=password_reset">Esqueceu-se da Palavra-passe?</a>
    </main>

    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>