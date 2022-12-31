<?php

echo "welke getal wil je uitvoeren ?" . PHP_EOL;
$x = readline();
if ($x % 2) {
    echo "$x is oneven getal";
} else {
    echo "$x is even getal";
}

?>