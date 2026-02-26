<?php

$o = 0;

for ($i= 1; $i < 51; $i++) {
    $soma =  $o + $i ;
    echo "Soma número $i ° => $o + $i = $soma<br>"; 
    $o += $i; 
};


echo "O total é: $soma";
