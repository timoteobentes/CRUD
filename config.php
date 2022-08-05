<?php

    $bdHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Timoteo@24';
    $dbName = 'crud-teste';

    $conexao = new mysqli($bdHost, $dbUsername, $dbPassword, $dbName);

    // if ($conexao -> connect_errno) {
    //     echo "Erro";
    // } else {
    //     echo "Conexão efetuada com sucesso!";
    // }

?>