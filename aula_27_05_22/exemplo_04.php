<?php
//Função com retorno e com parâmetro

function soma($a,$b){
    $soma = $a + $b;
    return $soma;
}
$res = soma(10,20);
echo "A soma é: $res"; 
?>