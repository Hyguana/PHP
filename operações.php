<?php

$multi = 3;

for($m = -10; $m<=10; $m++){
    $result = $multi * $m;
    echo "Multiplicador $m x $multi = $result ".PHP_EOL;
}

$idades = [12,23,45,67,89,12,34,34];
for($i = 0; $i<8; $i++){
    echo $idades[$i].PHP_EOL;
}