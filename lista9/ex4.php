<?php
$numeros = [ 1,2,3,4,5,6,7,8,9,10];
$maior= $numero[0];

foreach($numeros as $num){
    if($num>$maior){
        echo "$numeros <br>";
    }
}
echo "Maior número: $maior";