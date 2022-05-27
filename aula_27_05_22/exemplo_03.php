<?php
//Função sem retorno e com parâmetro


function teste($a){
    echo "$a";
}
teste("Oi, gente");

teste("<br>Aula de SW I");

echo "<hr>";

$n1 = 32;
$n2 = 4;
function soma($a,$b){
    $soma = $a + $b;
    echo "A soma de $a e $b é $soma";
}
soma($n1,$n2);
?>