<?php

$games = [
	["Call of Duty", "Shooter", 59.95],
	["Rocket League", "Sport", 19.95],
	["Assassins Creed", "RP", 49.95]
];

function sumNumber(array $games1) : float
{
	$sum = 0;
	foreach ($games1 as $prijs) {
		$sum += ($prijs[2]);
	}
	
	$sum = $sum / count($games1);
	return round($sum, 2);
}
 echo sumNumber($games) . PHP_EOL;

function sumChar(array $games2) : float
{
	$char = 0;
	foreach ($games2 as $naam) {
		$char += strlen($naam[0]); 
	}
	$char = $char / count($games2);
	return round($char);

}
echo sumChar($games);

