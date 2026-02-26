<?php

for ($i=0; $i <= 5 ; $i++) { 
    echo $i;
    echo "<br>";
};

echo "<br>";

$nomes = ['Felipe', 'Daniel', 'Adriano', 'Moretti'];

for ($i=0; $i <= 2; $i++) { 
    echo $nomes[$i] . "<br>";
};

echo "<br>";

$qntdnomes = count($nomes);

for ($i= 0; $i <= $qntdnomes - 1; $i++) { 
    echo $nomes[$i] . "<br>";
};

echo "<br>";

foreach ($nomes as $key => $value) {
    echo "$key =>";
    echo $value . "<br>";
}