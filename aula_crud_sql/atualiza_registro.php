
<?php
    // Incluir o arquivo de conexão sempre que precisar acessar o SGBD
    include 'conecta.php';

    // SQL para atualizar um registro
    $sql = "UPDATE alunos SET nome='KEWYNHO TORRES' WHERE id=1";

    if (mysqli_query($conexao, $sql)) {
        echo "Registro atualizado com successo";
    } 
    else {
        echo "Erro na atualização do registro: " . mysqli_error($conexao);
    }
    
    // Fechar a conexão
    mysqli_close($conexao);

?>