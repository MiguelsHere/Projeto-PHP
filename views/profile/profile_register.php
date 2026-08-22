<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Registar</title>
</head>

<body>
    <?php

    if (empty($_SESSION['id'])) {

        echo
        "<nav><a href=\"index.php?action=home\" title=\"Ir para pagina inicial\"><img src=\"images/logo.png\" alt=\"Workout Maker\"></a> <a href=\" \" title=\"Ir para pagina de Workouts\">Workouts</a> <a href=\" \" title=\"Ir para pagina de Ferramentas\">Ferramentas</a> <a href=\"index.php?action=login.php\" title=\"Ir para pagina de login\">Entrar</a>/<a href=\"index.php?action=register.php\" title=\"Ir para pagina de registo\">Registar</a></nav>";
    } else {

        echo
        "<nav><a href=\"index.php?action=home\" title=\"Ir para pagina inicial\"><img src=\"images/logo.png\" alt=\"Workout Maker\"></a> <a href=\" \" title=\"Ir para pagina de Workouts\">Workouts</a> <a href=\" \" title=\"Ir para pagina de Ferramentas\">Ferramentas</a> <a href=\" \" title=\"Ir para pagina de perfil\">Perfil</a>/<a href=\"\">Sair</a></nav>";
    }

    ?>
    <main>
        <?php

        if (!empty($_SESSION['error'])) {
            echo "<p>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }

        if (empty($_SESSION['success'])) {
            echo

            "<form action=\"index.php?action=register\" method=\"post\">

            <label>Nome do Perfil:</label><br>
            <input type=\"text\" name=\"user_name\" maxlength=\"50\"  autocomplete=\"username\" required><br>

            <label>Email:</label><br>
            <input type=\"email\" name=\"email\" maxlength=\"252\" autocomplete=\"email\" required><br>

            <label>Palavra-passe:</label><br>
            <input type=\"password\" name=\"password\" minlength=\"15\" maxlength=\"64\" autocomplete=\"new-password\" required><br>

            <button type=\"submit\">Criar Perfil</button>
            <a href=\"index.php\">Cancelar</a>

            </form>";
        } else {
            echo "<p>" . htmlspecialchars($_SESSION['success']) . "</p>";
            unset($_SESSION['success']);
        }
        ?>

    </main>

    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>