<?php

$time = explode(" ", $argv[1]);
$totaalTime = 0;

foreach ($time as $item) {
        $timeFormat = substr($item, -1, 1);
        $number = (int)$item;

    switch ($timeFormat) {
        case "d":
            $totaalTime += $number * 86400;
            break;
        case "u":
            $totaalTime += $number * 3600;
            break;
        case "m":
            $totaalTime += $number * 60;
            break;
        case "s":
            $totaalTime += $number;
            break;           
    }
} echo "$totaalTime seconden";

?>