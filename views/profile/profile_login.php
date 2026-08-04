<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_styles.css">
    <title>Workout Maker: Entrar</title>
</head>

<body>
    <nav><a href="index.php"><img src="images/logo.png"></a><a href="">Workouts</a></nav>
    <main>
        <form action="index.php?action=login" method="post">

            <label>Nome do Perfil ou Email:</label><br>
            <input type="text" name="user_name" maxlength="320" required><br>

            <label>Palavra-passe:</label><br>
            <input type="password" name="password" minlength="15" maxlength="64" required><br>

            <button type="submit">Entrar</button>
            <a href="index.php">Cencelar</a>

        </form>
    </main>

    <footer>
        <p>criado por <a href=""><strong>Miguel Monteiro</strong></a></p>
    </footer>
</body>

</html>