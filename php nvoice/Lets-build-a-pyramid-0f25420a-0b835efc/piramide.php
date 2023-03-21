<?php

$x = readline("hoeveel blokken zijn er beschikbaar voor de piramide? ");

$rij = 0;
while ($rij < $x) {
    $rij++; 
    $x -= $rij ;
}

echo $rij;

?>