<?php

echo " welke operatie wil je uitvoeren (+, -, %)" . PHP_EOL;
$operatie = readline();
if ($operatie == "+" || $operatie == "-" || $operatie == "%") {
} else {
    echo "ongeldige operatie";
}

echo "eerste getal" . PHP_EOL;
$eerste = readline();
echo "tweede getal" . PHP_EOL;
$tweede = readline();
if (is_numeric($eerste) && is_numeric($tweede)) {
    if ($operatie == "+") {
        echo $eerste + $tweede;
    } elseif ($operatie == "-") {
        echo $eerste - $tweede;
    } elseif ($operatie == "%") {
        echo $eerste % $tweede;
    }    
} else {
    exit("ongeldige getal");
}
 





?>