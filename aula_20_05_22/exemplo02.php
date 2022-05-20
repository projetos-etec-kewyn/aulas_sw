<?php
$teste = [1,5,8,10];
$n = count($teste);
$soma = 0;
for($i=0;$i<$n;$i++){
    $soma+=$teste[$i];
}
$media = $soma/$n;
echo "A soma é: $soma<br>A média é: $media";
?>