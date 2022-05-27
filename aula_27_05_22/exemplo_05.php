<?php
$vetor = [1,4,7,2,9,9,5,3,2,31,23,2];

function soma($vet){
    $soma = 0;
    for($i=0;$i<count($vet);$i++){
        if($vet[$i] % 2 == 1){
            echo "$vet[$i]<br>";
        }
        $soma += $vet[$i];
    }
    echo "<br><hr>A soma é $soma";
}

soma($vetor);
?>