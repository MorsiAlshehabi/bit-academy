<?php

$arr = array();
echo "Hoeveel landen wil je toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($i = 0; $i < ($input); $i++) {
        echo "Hoe heet het land?" . PHP_EOL;
        $land = readline();
        echo "Wat is de hoofdstad van $land?" . PHP_EOL;
        $hoofdstad = readline();
        $arr[$land] = $hoofdstad;
    }
    echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
    foreach ($arr as $land => $hoofdstad) {
        echo "$land, $hoofdstad" . PHP_EOL;
    }
}



?>