<?php
$teste = [10,'oi',1.1,true];
//$teste = array(10,'oi',1.1,true);
$qtd = count($teste);
echo "Num de elementos do vetor: $qtd";
echo "<hr>";
for($i=0;$i<$qtd;$i++){
    echo "Valor do i = $i - Valor do array = $teste[$i]<br>";
}
echo "<hr>";
$num_al = rand(1,10)/10+rand(1,9);
echo $num_al;
?>