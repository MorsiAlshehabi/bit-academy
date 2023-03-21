<?php

function countDown($getal) 
{
    if ($getal <= 10) {
        echo "correct getal";
    } else {
        throw new Exception("er is iets fout gegaan");
    }
}

$aantal = readline("geef een getal");
try {
    $totaal = countDown($aantal);
    echo $aantal; 
} catch (Exception) {
        echo "er is iets fout gegaan";
}
?>
  
   