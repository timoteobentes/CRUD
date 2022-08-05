<?php

    if(isset($_POST['submit'])) {
        // print_r($_POST['nome']);
        // print_r('<br>');
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['telefone']);
        // print_r('<br>');
        // print_r($_POST['senha']);
        // print_r('<br>');
        // print_r($_POST['sexo']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, telefone, senha, sexo)
                                            VALUES ('$nome', '$email', '$telefone', '$senha', '$sexo')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./style/cadastro.css">
</head>
<body>

    <div class="box">
        <h1>Cadastro</h1>
        <div class="inputs">
            <form action="cadastro.php" method="post">
                <input type="text" id="nome" name="nome" placeholder="Nome"><br>
                <input type="text" id="email" name="email" placeholder="Email"><br>
                <input type="text" id="telefone" name="telefone" placeholder="Telefone"><br>
                <input type="password" name="senha" id="senha" placeholder="Senha"><br>
                <br>
                <select name="sexo" id="sexo">
                    <option value="">Sexo</option>
                    <option value="feminino">Feminino </option>
                    <option value="masculino">Masculino</option>
                </select><br>
                <input id="cadastrar" type="submit" name="submit" value="Cadastrar">
            </form>
        </div>

        <a href="./login.php">Tem conta? Faça login</a>
    </div>

</body>
</html>