<?php
$num = $_POST['num'];
echo "O intervalo entre $num e seu cubo somente com números ímpares é:<br><br>";
$cubo = $num**3;
while($num<=$cubo){
    if($num%2!=0){
        echo "$num <br>";
    }
        $num++;
}




?>