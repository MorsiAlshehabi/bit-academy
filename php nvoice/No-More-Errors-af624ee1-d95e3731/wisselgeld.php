<?php

if (isset($argv[1])) {
    $geldBedrag = $argv[1];
}
$geldBedrag = null;


$euro = array(
    50,
    20,
    10,
    5,
    2,
    1
);

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

try {
    if ($geldBedrag == 0) {
        throw new Exception("geen bedrag meegegeven");
    }
    if (!is_numeric($geldBedrag)) {
        throw new Exception("Geen wisselgeld");
    }

    if ($geldBedrag < 0) {
        throw new Exception("negatief bedrag meegegeven");
    }
    $geldBedrag = floatval($argv[1]);
    $restBedrag = $geldBedrag;
    $restBedrag = euroCalculator($euro, $restBedrag);
    $restbedrag = centCalculator($centen, $restBedrag);
} catch (Exception  $exeption) {
    echo "Foutmelding: " . $exeption -> getMessage();
}

?>