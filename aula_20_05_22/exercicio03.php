<?php
$vetor = [];
$soma = 0;
for($i=0;$i<10;$i++){
    $vetor[$i] = rand(1,100);
    $i2 = $i+1;
    echo "Valor $i2 = $vetor[$i]<br>";
    $soma += $vetor[$i];
}
echo "<br>";
$media = $soma/10;
echo "A soma é: $soma<br>";
echo "A média é: $media"
?>