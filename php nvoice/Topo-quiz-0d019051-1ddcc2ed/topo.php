<?php

$goed = array();
$plaatsen = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

foreach ($plaatsen as $quiz => $antwoord) {
        echo " welke hoofdstad heeft $quiz" . PHP_EOL;
        $input = readline(" ");
    if ($input == $antwoord) {
        echo "> $input is correct!" . PHP_EOL;
        $goed[] = $antwoord;
    } else {
        echo "$input helaas, $antwoord is niet de hoofdstad van $quiz " . PHP_EOL;
        echo "het correcte antwoord is: $antwoord" . PHP_EOL;
    }
}
echo "je hebt " . count($goed) . " van de 10 goed geraden" . PHP_EOL;


?>