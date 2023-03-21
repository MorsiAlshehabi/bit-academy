<?php

$tijd = implode(" ", $argv);
$tijdarray = (explode(" ", $tijd));

foreach ($tijdarray as $tijd) {
    $letter = substr($tijd, -1);
    $aantal = substr($tijd, 0, -1);
    switch ($letter) {
        case "d":
            $tijddag = $aantal * 86400;
            break;
        case "u":
            $tijduur = $aantal * 3600;
            break;
        case "m":
            $tijdmin = $aantal * 60;
            break;
        case "s":
            $tijdsec = $aantal * 1;
            break;
    }
}
$totaal = $tijddag + $tijduur + $tijdmin + $tijdsec ;
echo $totaal . " seconden" . PHP_EOL;

?>
