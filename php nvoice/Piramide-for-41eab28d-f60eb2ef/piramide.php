<?php

echo "hoeveel stapels wil je hebben? " . PHP_EOL;
$x = readline("");

for ($i = 0; $i <= $x; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*" ;
    }
        echo "" . PHP_EOL;
}

?>