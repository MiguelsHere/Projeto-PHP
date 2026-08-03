<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main_styles.css">
    <title>Workout Maker: Registar Perfil</title>
</head>

<body>
    <nav><a href=""><img src="images/logo.png"></a><a href="">Workouts</a></nav>
    <main>
        <form action="index.php?action=register" method="post">

            <label>Nome do Perfil:</label><br>
            <input type="text" name="user_name" required><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br>

            <label>Palavra-Passe:</label><br>
            <input type="password" name="password" required><br>

            <label>Confirmar Palavra-Passe:</label><br>

            <button type="submit">Criar Perfil</button>
            <a href="index.php">Cencelar</a>
        </form>
    </main>

    <footer>
        <p>criado por <a href=""><strong>Miguel Monteiro</strong></a></p>
    </footer>
</body>

</html>