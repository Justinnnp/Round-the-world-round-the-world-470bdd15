<?php


$change = (float) round($argv[1], 2);

$change = (round($change / 0.05)) * 0.05;
define(
    "GELDEUROS",
    [
    "50" => " euro",
    "20" => " euro",
    "10" => " euro",
    "5" => " euro",
    "2" => " euro",
    "1" => " euro",
    "0.50" => " cent",
    "0.20" => " cent",
    "0.10" => " cent",
    "0.05" => " cent",
]);
foreach (GELDEUROS as $geldStuk => $value) {
    $geldStuk = (float) $geldStuk;
    $change = round($change, 2);
    if (floor($change / $geldStuk)) {
        $aantal = floor($change / $geldStuk);
        echo "$aantal x $geldStuk $value" .PHP_EOL;
        $change = $change - ($aantal * $geldStuk);
    }
}
