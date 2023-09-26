<?php

$tafel=readline("Welke tadel wil je zien? ");
$begin=1;
$eind=10;

echo "\n\nTafel van $tafel:\n";

for ($teller=$begin;$teller<=$eind;$teller++) {

    $product=$teller*$tafel;
    echo $teller." x ".$tafel." = ".$product."\n";
}

?>