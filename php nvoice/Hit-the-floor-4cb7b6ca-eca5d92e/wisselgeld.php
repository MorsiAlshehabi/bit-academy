<?php

$stonks = intval($argv[1]);
$geld = array(10, 5, 2, 1);


 foreach ($geld as $bedrag) {
    if ($stonks >= $bedrag) {
        $floored = floor ($stonks / $bedrag);
        echo "$floored x $bedrag euro".PHP_EOL;
        $stonks = $stonks - ($floored *  $bedrag);
    }
 }


?>