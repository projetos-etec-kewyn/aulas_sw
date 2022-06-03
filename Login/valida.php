<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = 'kewyn';
$pass = 123;

if(($usuario == $user) && ($senha == $pass)){
    session_start();
    $_SESSION['nome'] = $usuario;
    $_SESSION['logado'] = 1;
    header("Location: restrita.php");
}else{
    echo "<style>body{background-color: rgb(105, 89, 68)}</style>";
    echo "<p style= 'color: red; font-size: 30px;' >Usuário e/ou senha incorreto(s).</p>";
    echo "<br><a style='color: red; font-size: 30px;' href= 'index.html'>Tente novamente<a>";
}


?>