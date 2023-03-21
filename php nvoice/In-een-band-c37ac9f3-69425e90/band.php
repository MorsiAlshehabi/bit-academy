<?php

$arr = array(
    "Citizen of Glass kost" => 4.50,
    "Night kost" => 9,
    "New Eyes kost" => 5,
    "Strange Trails kost" => 10,
);   
$bedrag = 0;
$gemiddelde = 0;
echo "het albumoverzicht:" . PHP_EOL;
foreach ($arr as $x => $value) {
    echo "$x is $value euro" . PHP_EOL;
    $bedrag = $bedrag + $value;
}
$gemiddelde = $bedrag / count($arr);
echo "De totaalbedrag van alle albums is $bedrag" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is $gemiddelde" . PHP_EOL;


?>