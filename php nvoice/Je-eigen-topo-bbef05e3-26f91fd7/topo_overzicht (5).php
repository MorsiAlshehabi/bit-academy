<?php

echo 'hoeveel landen wil je toevoegen?' . PHP_EOL;
$amount = readline();
for ($x = 1; $x <= $amount; $x++) {
    echo 'welk land wil je toevoegen?' . PHP_EOL;
    $country = readline();
    echo 'wat is de hoofdstad van ' . $country . '?' . PHP_EOL;
    $hs = readline();
    $info[$country] = $hs;
}
echo 'de volgende landen zitten in je database:' . PHP_EOL;
foreach ($info as $v => $v_value) {
    echo $v . ', ' . $v_value . PHP_EOL;
}

?>