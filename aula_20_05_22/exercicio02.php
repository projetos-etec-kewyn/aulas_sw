<?php
$vetor = [];
for($i=0;$i<5;$i++){
    $vetor[$i] = rand(1,10);
    $i2 = $i+1;
    echo "Valor $i2 = $vetor[$i]<br>";
}
?>