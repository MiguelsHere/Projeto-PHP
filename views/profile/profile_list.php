<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O Workout Maker dá lhe todos os essencias para criar workouts efetivos!">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Perfis</title>
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
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Criação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profiles as $p): ?>
                <tr>
                    <td>
                        <strong><?= htmlspecialchars($p['user_name']) ?></strong>
                    </td>
                    <td>
                        <?= $p['created_in'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>