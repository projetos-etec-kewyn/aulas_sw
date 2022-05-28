<?php
$n = $_POST['num'];
function imprimir($num){
    for($i=1;$i<=$num;$i++){
        for($a=1;$a<=$i;$a++){
            echo "$a  ";
        }
        echo "<br>";
    }
}
imprimir($n);
?> 