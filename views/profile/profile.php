<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Perfil</title>
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

    </main>
    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>