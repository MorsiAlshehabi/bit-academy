<?php

    for ($i = 1; $i <= 12; $i++) {
        for ($j = 1; $j <= 12; $j++) {
            $result = $j * $i;
            echo $i . " x " . $j . " = " . $result . PHP_EOL;
        }
        echo PHP_EOL;
    }
    
?>