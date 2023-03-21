<?php

echo "hoeveel stapels wil je hebben? " . PHP_EOL;
$stapels = readline("");
$y = "*";

for ($x = 1; $x <= $stapels; $x++) {
    echo $y . PHP_EOL;
    $y .= "*";
}



?>