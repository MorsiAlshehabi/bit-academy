<?php

echo "hoe oud ben je ?" . PHP_EOL;
$leeftijd = readline();
if ($leeftijd >= 16.5) {
    echo "je mag beginnen met rijleesen";
} else {
    echo "Helaas, je mag niet beginnen met rijlessen";
}

?>