<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if($num1 < $num2 && $num1 < $num3){
    $menor = $num1;
    if($num2<$num3){
        $meio = $num2;
        $fim = $num3;
    }else{
        $meio = $num3;
        $fim = $num2;
    }
}elseif($num1<$num2 && $num1>$num3){
    $menor= $num3;
    $meio = $num1;
    $fim = $num2;
}elseif($num1>$num2 && $num1>$num3){
    $fim = $num1;
    if($num2 > $num3){
        $menor = $num3;
        $meio = $num2;
    }else{
        $menor = $num2;
        $meio = $num3;
    }
}elseif($num1>$num2 && $num1<$num3){
    $menor= $num2;
    $meio = $num1;
    $fim = $num3;
}
echo "Você digitou os números nesta ordem:<br> $num1 <br> $num2 <br> $num3 ";
echo "<br><br>Vamos colocá-los em ordem crescente!<br><b> $menor < $meio < $fim <b>";
?>