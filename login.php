<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>

    <div class="box">
        <h1>Login</h1>
        <div class="inputs">
            <form action="./process/testLogin.php" method="post">
                <input type="email" name="email" placeholder="Email"><br>
                <input type="password" name="senha" id="senha" placeholder="Senha"><br>
                <input id="Entrar" name="submit" type="submit" value="Entrar">
            </form>
        </div>

        <a href="./cadastro.php">Novo? Crie uma conta!!</a>
    </div>

</body>
</html>