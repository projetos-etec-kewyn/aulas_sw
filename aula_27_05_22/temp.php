<?php
$temp = $_POST['temp'];
$num = $_POST['num'];
function cel($c){
    $f = $c * 9/5+32;
    echo "O valor em Farenheit é $f";
}
function far($f){
    $c = ($f-32)*5/9;
    echo "O valor em Celsius é $c";
}
if($num == 1){
    cel($temp);
}elseif($num == 2){
    far($temp);
}else{
    echo "ERRO";
}
?>