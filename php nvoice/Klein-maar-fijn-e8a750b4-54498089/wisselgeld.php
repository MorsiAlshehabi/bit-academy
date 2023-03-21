<?php

if (!isset($argv[1]) || $argv[1] == 0) {
    exit("geen wisselgeld");
}

$waarde = $argv[1];
define("CONSTANT", array(
    50 ,20 ,10 ,5 ,2 ,1 ,0.50 ,0.20 ,0.10 ,0.05
));



foreach (CONSTANT as $value) {
    $waarde = round($waarde, 2);
    $keer = floor($waarde / $value);
    $waarde = $waarde - ($keer * $value);
    if ($keer > 0) {
        if ($value < 1) {
            $cent = $value * 100;
            echo $keer . " x " . $cent . " cent" . PHP_EOL;
        } else {
            echo $keer . " x " . $value . " euro" . PHP_EOL;
        }
    } 
} 

?>