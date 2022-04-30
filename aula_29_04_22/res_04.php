<?php
$num = $_POST['num'];
$cop = $num;
$fat = 1;
if($num == 0 || $num == 1){
    $fat = 1;
}elseif($num < 0){
    $fat = "INEXISTENTE";
}else{
    while($num>1){
        $fat *= $num;
        $num--;
    }
}
echo "O fatorial de $cop é $fat";
?>