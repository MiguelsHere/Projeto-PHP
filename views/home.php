<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="images/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Pagina Principal</title>
</head>

<body>
    <?php

    if (empty($_SESSION['id'])) {

        echo
        "<nav><a href=\"index.php?action=home\"><img src=\"images/logo.png\" alt=\"Workout Maker\"></a> <a href=\" \" title=\"Ir para Workouts\">Workouts</a> <a href=\" \" title=\"Ir para Ferramentas\">Ferramentas</a> <a href=\"index.php?action=login.php\">Login</a>/<a href=\"index.php?action=register.php\">Register</a></nav>";
    } else {

        echo
        "<nav><a href=\"index.php?action=home\"><img src=\"images/logo.png\" alt=\"Workout Maker\"></a> <a href=\" \" title=\"Ir para Workouts\">Workouts</a> <a href=\" \" title=\"Ir para Ferramentas\">Ferramentas</a> <a href=\" \">Perfil</a></nav>";
    }

    ?>
    <main>
        <h1>Bem-Vindo ao<br>Workout Maker</h1>
        <h2>O que é o Workout maker?</h2>
        <p>
            O Workout maker é uma aplicação web que dá ao utilizador todos os essencias para criar, encontrar, publicar e avaliar workouts!<br>
            Encontre workouts efetivos de acordo com o seu nivel e equipamento disponivel tendo uma vasta base de dados de exercicsios para criar o seu proprio workout ou usar um workout feito pela comunidade!
        </p>
    </main>
    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>