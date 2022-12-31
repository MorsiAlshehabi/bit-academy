<?php

$operatie = readline("welke operatie wil je uitvoeren (+, -, %)? ");
if ($operatie == "+" || $operatie == "-" || $operatie == "%") {
    $eerste = readline("eerste getal: ");
    if (is_numeric($eerste)) {
        echo "";
    } else {
        exit("$eerste is geen getal") ;
    }
    $tweede = readline("tweede getal: ");
    if (is_numeric($tweede)) {
        echo "";
    } else {
        exit("$tweede is geen getal") ;
    }

    if ($operatie == "+") {
        echo $eerste + $tweede;
    } elseif ($operatie == "-") {
        echo $eerste - $tweede;
    } elseif ($operatie == "%") {
        echo $eerste % $tweede;
    }
} else {
    exit("$operatie is geen operatie") ;
}

?>