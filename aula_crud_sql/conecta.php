<?php
    //Dados do SGBD MySQL para a conexão
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'teste_mysqli';

    //Criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //Checando a conexão
    if($conexao -> connect_error){
        die("Conexão falhou: " . $conn->connect_error);
    }
    //echo "Conectado com sucesso";
    //echo '<br>';
?>