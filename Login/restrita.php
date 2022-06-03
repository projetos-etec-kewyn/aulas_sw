<?php
session_start();
if($_SESSION['logado'] != 1){
    header("Location: index.html");
}
$nome = $_SESSION['nome'];
echo "<p>Bem vindo $nome</p>";
echo "<br>";
echo "<a href= 'logout.php'>Deslogar<a>";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <p id='text'>Agora você pode ver essa foto secreta:</p>
        <p><img src="meci.jpg" alt="messi careca"></p>
    </body>
</html>