<?php

define("CASH_UNITS", array(
    50 ,20 ,10 ,5 ,2 ,1 ,0.50 ,0.20 ,0.10 ,0.05
));


if (count($argv) != 2) {
    exit("Geen wisselgeld" . PHP_EOL);
} else {
    $cash = round(floatval($argv[1]) / 0.05) * 0.05;
}    

foreach (CASH_UNITS as $unit) {
    if ($cash >= $unit) {
        $numofunit = floor($cash / $unit);
        $cash = round(fmod($cash, $unit), 2);
        
        if ($unit >= 1) {
            echo $numofunit . " x " . $unit . " euro" . PHP_EOL;
        } else {
            echo $numofunit . " x " . $unit * 100 . " cent" . PHP_EOL;
        }    
    }
}

?>