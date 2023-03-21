<?php

if (count($argv) != 2) {
    exit("Geen wisselgeld" . PHP_EOL);
}
$geldBedrag = floatval($argv[1]);

$restBedrag = $geldBedrag;

define("CASH_UNITS", $euro = array(
    50,
    20,
    10,
    5,
    2,
    1
));

$centen = array(
    50,
    20, 
    10,
    5
);

function euroCalculator($euro, $restBedrag) 
{
    foreach ($euro as $euroEenheid) {
        if ($restBedrag >= $euroEenheid) {
            $aantalEuro = floor($restBedrag / $euroEenheid);
            $restBedrag = fmod($restBedrag, $euroEenheid);
            echo "$aantalEuro x $euroEenheid euro" . PHP_EOL;
        }
    }
    return $restBedrag;
}

function afronden($restBedrag) 
{
    $restBedrag = round(($restBedrag * 100) / 5) * 5 / 100;
    return $restBedrag;
}

function centCalculator($centen, $restBedrag) 
{
    $restBedrag = afronden($restBedrag);
    $restBedrag *= 100;
    foreach ($centen as $cent) {
        if ($restBedrag >= $cent) {
            $aantalCent = floor($restBedrag / $cent);
            $restBedrag = fmod($restBedrag, $cent);
            echo "$aantalCent x $cent cent" . PHP_EOL;
        }
    }
}

if (is_numeric($geldBedrag)) {
    $restBedrag = euroCalculator($euro, $restBedrag);
    $restbedrag = centCalculator($centen, $restBedrag);
} else {
    echo "Geen wisselgeld";
    exit;
}

?>