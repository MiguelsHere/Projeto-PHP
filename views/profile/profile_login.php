<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="images/x-icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Maker: Entrar</title>
</head>

<body>
    <nav><a href=""><img src="images/logo.png" alt="Workout Maker"></a> <a href="">Workouts</a> <a href="">Ferramentas</a> <a href="">Perfil</a></nav>
    <main>
        <form action="index.php?action=login" method="post">

            <label>Nome do Perfil ou Email:</label><br>
            <input type="text" name="user_name_or_email" maxlength="254" required><br>

            <label>Palavra-passe:</label><br>
            <input type="password" name="password" minlength="15" maxlength="64" required><br>

            <button type="submit">Entrar</button>
            <a href="index.php">Cencelar</a>

        </form>
    </main>

    <footer>
        <p>criado por <a href="https://github.com/MiguelsHere" target="_blank" rel="author">Miguel Monteiro</a></p>
    </footer>
</body>

</html>
