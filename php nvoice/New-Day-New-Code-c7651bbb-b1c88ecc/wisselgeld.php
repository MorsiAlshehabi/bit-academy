<?php

$waarde = $argv[1];
define("CONSTANT", array(
    $fifty = 50,
    $twenty = 20,
    $ten = 10,
    $five = 5,
    $two = 2,
    $one = 1
));

if ($argv[1] > 0) {
    foreach (CONSTANT as $value) {
        $keer = floor($waarde / $value);
        $waarde = $waarde - ($keer * $value);
        echo $keer . " x " . $value . " euro" . PHP_EOL;
    }   
} else {
    echo "geen wisselgeld" . PHP_EOL;
}

?>
