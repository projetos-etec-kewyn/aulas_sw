<?php
$num = $_POST['num'];
echo "Tabuada do número $num:<br><br>";
for($i=1;$i<=10;$i++){
    $mul = $num * $i;
    echo "$num * $i = $mul <br>";
}
?>