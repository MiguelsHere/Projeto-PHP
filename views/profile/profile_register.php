<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="icon" type="images/x-icon" href="/images/favicon.ico">
    <title>Workout Maker: Registar</title>
</head>

<body>
    <nav><a href="index.php"><img src="images/logo.png"></a><a href="">Workouts</a></nav>
    <main>
        <form action="index.php?action=register" method="post">

            <label>Nome do Perfil:</label><br>
            <input type="text" name="user_name" maxlength="100" required><br>

            <label>Email:</label><br>
            <input type="email" name="email" maxlength="320" required><br>

            <label>Palavra-passe:</label><br>
            <input type="password" name="password" minlength="15" maxlength="64" required><br>

            <label>Confirmar Palavra-Passe:</label><br>

            <button type="submit">Criar Perfil</button>
            <a href="index.php">Cencelar</a>
            
        </form>
    </main>

    <footer>
        <p>criado por <a href="">Miguel Monteiro</a></p>
    </footer>
</body>

</html>
