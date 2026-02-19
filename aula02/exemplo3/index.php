<?php

$nota = 7;

if ($nota >= 6) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}
;

echo "<br>";

for ($i = 0; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        echo "Aluno: " . $i . " => Aprovado!";
        echo "<br>";
    } else {
        echo "Aluno: " . $i . " => Reprovado!";
        echo "<br>";
    }
    ;
}

?>