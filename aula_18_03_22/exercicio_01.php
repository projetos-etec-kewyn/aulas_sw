<?php
    $idade = 15;
    $hab = TRUE;

    echo "Sua idade é: $idade";
$teste = "";
 if($hab ==TRUE){
     $teste = "tem";
 }
 else{
     $teste = "não tem";
 }
 echo "<br>Você $teste habilitação <br>";
    echo"<br>";
    if($idade>=18 && $hab == TRUE){
        echo "Você pode dirigir!";
    }
    else{
        echo "Você não pode dirigir!";
    }


?>