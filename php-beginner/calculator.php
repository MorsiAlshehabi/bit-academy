<?php
echo "welke operatie wil je uitvoeren(+, -) " . PHP_EOL;
$operatie = readline();
echo "eerste getal:" . PHP_EOL;
$num1 = readline();
echo "tweede getal:" . PHP_EOL;
$num2 = readline();
$optellen = $num1 + $num2;
$aftrekken = $num1 - $num2;
if ($operatie == "+") {
    echo $optellen;
} else {
    echo $aftrekken;
}


?>