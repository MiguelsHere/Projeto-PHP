<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="images/x-icon" href="images/favicon.ico">
    <title>Workout Maker: Perfis</title>
</head>

<body>
    <nav><a href="index.php"><img src="images/logo.png"></a><a href="">Workouts</a></nav>
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
        <p>criado por <a href="" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>