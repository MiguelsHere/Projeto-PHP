<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Repor Palavra-passe</title>
</head>

<body>
    <nav><a href="index.php?action=home"><img src="images/logo.png" alt="Workout Maker"></a> <a href="">Workouts</a> <a href="">Ferramentas</a> <a href="">Perfil</a></nav>
    <main>
        <?php

        if (empty($_SESSION['success'])) {
            echo
            
            "<form action=\"index.php?action=password_reset\" method=\"post\">

            <label>Email:</label><br>
            <input type=\"email\" name=\"email\" maxlength=\"254\" autocomplete=\"email\" required><br>

            <button type=\"submit\">Enviar</button>
            <a href=\"index.php\">Cancelar</a>

            </form>";
            
        } else {
            echo "<p>" . $_SESSION['success'] . "</p>";
            unset($_SESSION['success']);
        }

        ?>
    </main>
    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>