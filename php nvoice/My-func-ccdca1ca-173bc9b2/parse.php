<?php

function parseToInteger($value = 10)
{
    if (is_numeric($value)) {
        echo ($value) . PHP_EOL;
    } else {
        echo "Input moet een valide getal zijn" . PHP_EOL;
    }
}

// Pas de code hieronder niet aan!

echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;
