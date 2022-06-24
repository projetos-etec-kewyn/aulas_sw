<?php
//Incluir o arquivo arquivo de conexão sempre que precisar acessar o SGBD
include_once 'conecta.php';

//consulta o SQL que será executado na base de dados
$sql = "SELECT * FROM alunos";

//armazena o resultado da consulta
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado)>0){
    //saída de dados de cada linha da tabela
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "id: " . $linha["id"] . "<br>";
        echo "Nome: " . $linha["nome"] . "<br>";
        echo "Curso: " . $linha["curso"] . "<br>";
        echo "Idade: " . $linha["idade"] . "<br>";
    }
}
else{
    echo "0 resultados";
}
//fechar a conexão
mysqli_close($conexao);
?>