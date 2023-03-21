<?php

$arr = [];
echo "hoeveel activiteiten wil je toevoegen?" . PHP_EOL;
$x = readline();
if (is_numeric($x)) {
    for ($i = 1; $i <= $x; $i++) {
        echo "wat wil je toevoegen aan jouw bucket list" . PHP_EOL;
        $arr[]= readline();
       
    }
    foreach ($arr as $d) {
        echo $d . PHP_EOL;
    }
} else {
    exit($x . " is geen getal" ) ;
}

?>