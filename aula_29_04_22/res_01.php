<?php
$num = $_POST['num'];
echo "O intervalo entre $num e seu cubo é:<br><br>";
$cubo = $num**3;
while($num<=$cubo){
    echo "$num <br>";
    $num++;
}




?>