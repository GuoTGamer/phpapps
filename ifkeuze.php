<?php

$jaar=25;

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");

$jonger=$jaar-$leeftijd;
$ouder= $leeftijd-$jaar;

echo "Hallo $naam \n";

if ( $leeftijd < $jaar ) {
        echo "Jij bent ".$jonger." jaren jonger dan $jaar jaar.\n";
}
if ( $leeftijd > $jaar ) {
        echo "Jij bent ".$ouder." jaren ouder dan $jaar jaar.\n";
}
if ( $leeftijd == $jaar ) {
        echo "Jij bent precies dan $jaar jaar.\n";
}



?>