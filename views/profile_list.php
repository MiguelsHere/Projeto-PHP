<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <title>Workout Maker: Perfis</title>
    <link rel="stylesheet" href="css/main_styles.css">
</head>

<body>
    <nav></nav>
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
        <p>criado por <a href=""><strong>Miguel Monteiro</strong></a></p>
    </footer>
</body>

</html>